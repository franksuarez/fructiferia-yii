<style type="text/css">
    .images-nivo-grid {}
    
    .images-nivo-grid th,td {
        padding: 10px;
    }
    .images-nivo-grid .images-nivo {
        width: 500px;
        height: 219px;
    }
</style>
<h1>Agregar Imagen Slider</h1>

<p class="note">Para una correcta visualización, la resolución de la imagen debe ser de 500px x 219px.</p>

<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'slider-agregarImagen-form',
        'enableAjaxValidation' => false,
        'action' => 'agregarImagenSliderBd',
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data',
         )
    ));
    ?>
    <div class="row">
        <?php echo $form->labelEx($model, 'archivo'); ?>
        <?php echo $form->fileField($model, 'archivo'); ?>
        <?php echo $form->error($model, 'archivo'); ?>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($model, 'titulo'); ?>
        <?php echo $form->textField($model, 'titulo'); ?>
        <?php echo $form->error($model, 'titulo'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Agregar Imagen Slider'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<div style="height: 20px;"></div>

<table class="images-nivo-grid">
    <?php foreach($sliders as $slider): ?>
    <tr>
        <td>
            <?php echo CHtml::image(Yii::app()->baseUrl . '/images/nivo-slider/' . $slider->slider_nombre_imagen, $slider->slider_nombre_imagen, array('class' => 'images-nivo')) ?>
        </td>
        <td>
            <?php echo CHtml::link('Eliminar Imagen del Slider', array('eliminarImagenSliderBd', 'id' => $slider->slider_id), array('confirm' => '¿Desea eliminar la imagen?')); ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>