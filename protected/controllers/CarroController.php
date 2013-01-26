<?php

class CarroController extends Controller {
	
	public function actionIndex() {
		$this -> render('index');
	}
	
	public function actionListarProductosCarro() {
		$this->layout = 'sitio';
		
		$formasPago = FormaPago::model()->findAll();
		$this->getTotalCarro();
		
		$this->render('listarProductosCarro',
						array('formasPago' => $formasPago)
		);
	}
	
	public function actionAgregarProductoCarro($id) {
		if(isset($id, $_SESSION['carro'][$id])) {
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
		
		$_SESSION['total_carro'] = $this->getTotalCarro();
		
		$this -> redirect(array('listarProductosCarro'));
	}

	public function actionActualizarProductosCarro() {
		foreach($_POST['Carro'] as $carro){
			$_SESSION['carro'][$carro['idproducto']]['producto_cantidad'] = $carro['cantidad'];
		}
		
		$_SESSION['total_carro'] = $this->getTotalCarro();

		$this->redirect(array('listarProductosCarro'));
	}
	
	public function actionEliminarProductoCarro($id) {
		unset($_SESSION['carro'][$id]);
		
		$_SESSION['total_carro'] = $this->getTotalCarro();
		
		$this -> redirect(array('listarProductosCarro'));
	}
	
	public function actionVaciarCarro() {
		unset($_SESSION['carro']);
		
		$this -> redirect(array('/'));
	}

	public function actionFinalizarPedido() {
		$this->layout = 'sitio';
		
		$formasPago = FormaPago::model()->findAll();
		
		$this->render('finalizarPedido',
						array('formasPago' => $formasPago)
		);
	}

	public function getTotalCarro() {
		$total = 0;
		//echo "<pre>"; print_r($_SESSION['carro']); echo "</pre>"; exit();
		foreach($_SESSION['carro'] as $carro) {
			//echo "<pre>"; print_r($carro); echo "</pre>"; exit();
			$total = $total + ($carro['producto_precio'] * $carro['producto_cantidad']);
		}

		return $total;
	}
}
