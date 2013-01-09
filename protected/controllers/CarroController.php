<?php

class CarroController extends Controller {
	
	public function actionIndex() {
		$this -> render('index');
	}
	
	public function actionListarProductosCarro() {
		$this->layout = 'sitio';
		
		$this->render('listarProductosCarro');
	}
	
	public function actionAgregarProductoCarro($id) {
		if(in_array($id, $_SESSION['carro'])) {
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
		
		$this -> redirect(array('/'));
	}
	
	public function actionEliminarProductoCarro($id) {
		unset($_SESSION['carro'][$id]);
	}
}
