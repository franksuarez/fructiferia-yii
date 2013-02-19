<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class ContactForm extends CFormModel {

    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;

    /**
     * Declares the validation rules.
     */
    public function rules() {
        return array(
            // name, email, subject and body are required
            array('name, email, subject, body', 'required', 'message' => 'El {attribute} es obligatorio'),
            // email has to be a valid email address
            array('email', 'email', 'message' => 'El {attribute} ingresado, no es un {attribute} válido.'),
            // verifyCode needs to be entered correctly
            array('verifyCode', 'captcha', 'allowEmpty' => !CCaptcha::checkRequirements(), 'message' => 'El {attribute} ingresado es incorrecto.'),
        );
    }

    /**
     * Declares customized attribute labels.
     * If not declared here, an attribute would have a label that is
     * the same as its name with the first letter in upper case.
     */
    public function attributeLabels() {
        return array(
            'verifyCode' => 'Cógido de Verificación',
            'name' => 'Nombre y Apellido',
            'email' => 'E-Mail',
            'subject' => 'Asunto',
            'body' => 'Mensaje'
        );
    }

}