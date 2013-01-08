<?php

class CarroController extends Controller {
	
	public function actionIndex() {
		$this -> render('index');
	}
	
	public function actionAgregarProductoCarro($id) {
		if(in_array($id, $_SESSION['carro'])) {
			
		} else {
			
		}
	}
}
