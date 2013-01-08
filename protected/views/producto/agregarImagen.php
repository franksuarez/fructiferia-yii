<?php
/* @var $this ImagenProductoController */
/* @var $model ImagenProducto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'imagen-producto-agregarImagen-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array(
	'enctype' => 'multipart/form-data',
	'action' => 'agregarImagen', )
)); ?>
	<input type="hidden" value="<?php echo $id; ?>" name="ImagenProducto[producto_id]" />
	<div class="row">
		<?php echo $form->labelEx($model,'archivo'); ?>
		<?php echo $form->fileField($model,'archivo'); ?>
		<?php echo $form->error($model,'archivo'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Agregar Imagen'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->