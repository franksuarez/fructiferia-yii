<?php
/* @var $this UnidadVentaController */
/* @var $model UnidadVenta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'unidad-venta-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'unidad_venta_nombre'); ?>
		<?php echo $form->textField($model,'unidad_venta_nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'unidad_venta_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unidad_venta_descripcion'); ?>
		<?php echo $form->textField($model,'unidad_venta_descripcion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'unidad_venta_descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->