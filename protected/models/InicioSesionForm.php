<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class InicioSesionForm extends CFormModel {

    public $email;
    public $password;

    public function rules() {
        return array(
            // username and password are required
            array('email', 'required', 'message' => 'El email es obligatorio'),
            array('password', 'required', 'message' => 'El password es boligatorio'),
            array('email', 'email', 'message' => 'Ingrese un email valido'),
            // rememberMe needs to be a boolean
            //array('rememberMe', 'boolean'),
            // password needs to be authenticated
        );
    }

}