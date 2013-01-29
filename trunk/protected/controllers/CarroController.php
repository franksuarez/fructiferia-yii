<?php

class CarroController extends Controller {

    public function actionIndex() {
        $this->render('index');
    }

    public function actionListarProductosCarro() {
        $this->layout = 'sitio';

        $formasPago = FormaPago::model()->findAll();
        $direcciones = Direccion::model()->with('comuna')->findAll();
        $tiposDocumento = TipoDocumento::model()->findAll();
        $this->getTotalCarro();

        $this->render(
                'listarProductosCarro',
                array(
                    'formasPago' => $formasPago,
                    'direcciones' => $direcciones,
                    'tiposDocumento' => $tiposDocumento)
        );
    }

    public function actionAgregarProductoCarro($id) {
        $vProducto = Producto::model()->findByPk($id);
        
        if(isset($vProducto)){
            if (isset($id, $_SESSION['carro'][$id])) {
                $_SESSION['carro'][$id]['producto_cantidad'] = ($_SESSION['carro'][$id]['producto_cantidad'] + 1);
            } else {
                $producto = Producto::model()->with('categoria', 'unidadVenta', 'imagen')->findByPk($id);

                $_SESSION['carro'][$id]['producto_id'] = $producto->producto_id;
                $_SESSION['carro'][$id]['producto_codigo'] = $producto->producto_codigo;
                $_SESSION['carro'][$id]['producto_nombre'] = $producto->producto_nombre;
                $_SESSION['carro'][$id]['producto_descripcion'] = $producto->producto_descripcion;
                $_SESSION['carro'][$id]['producto_precio'] = $producto->producto_precio;
                $_SESSION['carro'][$id]['producto_cantidad'] = 1;
                $_SESSION['carro'][$id]['categoria_nombre'] = $producto->categoria->categoria_nombre;
                $_SESSION['carro'][$id]['unidad_venta_nombre'] = $producto->unidadVenta->unidad_venta_nombre;
                $_SESSION['carro'][$id]['imagen_nombre'] = $producto->imagen[0]->imagen_nombre;
            }
            
            Yii::app()->user->setFlash('productoAgregadoCarro', "El producto se ha agregado correctamente.");
        } else {
            Yii::app()->user->setFlash('productoCarroNoExiste', "El producto seleccionado no existe.");
        }

        $_SESSION['total_carro'] = $this->getTotalCarro();

        $this->redirect(array('listarProductosCarro'));
    }

    public function actionActualizarProductosCarro() {
        foreach ($_POST['Carro'] as $carro) {
            $_SESSION['carro'][$carro['idproducto']]['producto_cantidad'] = $carro['cantidad'];
        }

        $_SESSION['total_carro'] = $this->getTotalCarro();
        
        Yii::app()->user->setFlash('productosCarroActualizados', "Tu carro de compras se ha actualizado correctamente.");

        $this->redirect(array('listarProductosCarro'));
    }

    public function actionEliminarProductoCarro($id) {
        unset($_SESSION['carro'][$id]);

        $_SESSION['total_carro'] = $this->getTotalCarro();
        
        Yii::app()->user->setFlash('productoCarroEliminado', "El producto se ha quitado de tu carro correctamente.");

        $this->redirect(array('listarProductosCarro'));
    }

    public function actionVaciarCarro() {
        unset($_SESSION['carro']);

        $this->redirect(array('/'));
    }

    public function actionFinalizarPedido() {
        $this->layout = 'sitio';
        
        if(isset($_SESSION['Cliente'])) {
            if(count($_SESSION['carro']) > 0) {
                $pedido                                     = new Pedido;
                $direccion                                  = Direccion::model()->with('comuna')->findByPk($_POST['Pedido']['direcciones']);
                $formaPago                                  = FormaPago::model()->findByPk($_POST['Pedido']['formaPago']);
                $tipoDocumento                              = TipoDocumento::model()->findByPk($_POST['Pedido']['tiposDocumento']);

                $pedido->pedido_fecha                       = new CDbExpression('NOW()');
                $pedido->pedido_cliente_nombre              = $_SESSION['Cliente']['cliente_nombre'];
                $pedido->pedido_cliente_direccion           = $direccion->direccion_descripcion;
                $pedido->pedido_cliente_comuna              = $direccion->comuna->comuna_nombre;
                $pedido->pedido_cliente_telefono            = $_SESSION['Cliente']['cliente_telefono'];
                $pedido->pedido_cliente_telefono_movil      = $_SESSION['Cliente']['cliente_telefono_movil'];
                $pedido->pedido_total                       = $_SESSION['total_carro'];
                $pedido->cliente_id                         = $_SESSION['Cliente']['cliente_id'];
                $pedido->forma_pago_id                      = $formaPago->forma_pago_id;
                $pedido->tipo_documento_id                  = $tipoDocumento->tipo_documento_id;

                if($pedido->save()) {
                    Yii::app()->user->setFlash('pedidoRealizadoCorrecto', "¡Gracias por comprar!<br/>Tu pedido es: #" . str_pad($pedido->pedido_id, 10, "0", STR_PAD_LEFT) . "<br />Recibirás un e-mail con los detalles de tu pedido.");

                    foreach ($_SESSION['carro'] as $key => $producto) {
                        $pedidoDetalle = new PedidoDetalle;

                        $pedidoDetalle->producto_codigo = $producto['producto_codigo'];
                        $pedidoDetalle->pedido_detalle_descripcion = $producto['producto_nombre'];
                        $pedidoDetalle->pedido_detalle_precio = $producto['producto_precio'];
                        $pedidoDetalle->pedido_detalle_cantidad = $producto['producto_cantidad'];
                        $pedidoDetalle->pedido_detalle_total = ($producto['producto_precio'] * $producto['producto_cantidad']);
                        $pedidoDetalle->pedido_id = $pedido->pedido_id;
                        $pedidoDetalle->producto_id = $producto['producto_id'];

                        $pedidoDetalle->save();
                    }

                    unset($_SESSION['carro']);
                    $_SESSION['carro'] = array();
                } else {
                    //echo "<pre>"; print_r($pedido->getErrors()); echo "</pre>";
                    Yii::app()->user->setFlash('pedidoRealizadoError', "No es posible realizar tu pedido en este momento, favor intenta más tarde.");
                }
            } else {
                Yii::app()->user->setFlash('pedidoCarroVacio', "No es posible realizar tu pedido en este momento, agrega productos a tu carro.");
            }
        }

        $this->render(
                'finalizarPedido'
        );
    }

    public function getTotalCarro() {
        $total = 0;
        //echo "<pre>"; print_r($_SESSION['carro']); echo "</pre>"; exit();
        foreach ($_SESSION['carro'] as $carro) {
            //echo "<pre>"; print_r($carro); echo "</pre>"; exit();
            $total = $total + ($carro['producto_precio'] * $carro['producto_cantidad']);
        }

        return $total;
    }

}
