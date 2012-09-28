<?php
/**
 * 
 */
class ClienteIdentity extends CBaseUserIdentity {
	
	public function authenticate() {
		$usuario = new Usuario;
		
		$usuarios = $usuario->findAll();
	}
	
}
