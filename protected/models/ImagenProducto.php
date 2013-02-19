<?php
class ImagenProducto extends CFormModel {

    public $archivo;

    public function rules() {
        return array(
                // name, email, subject and body are required
                //array('archivo', 'required'), );
        );
    }

    public function attributeLabels() {
        return array('archivo' => 'Imagen',);
    }

}