<?php

/**
 * Description of ImagenSlider
 *
 * @author Oscar Cárdenas Albornoz
 */
class ImagenSlider extends CFormModel {

    public $archivo;
    public $titulo;

    public function rules() {
        return array(
            // name, email, subject and body are required
            array('archivo', 'required'),
        );
    }

    public function attributeLabels() {
        return array(
            'archivo' => 'Imagen',
            'titulo' => 'Título',);
    }

}

?>
