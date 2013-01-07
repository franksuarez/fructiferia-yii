<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'producto-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'producto_codigo'); ?>
		<?php echo $form->textField($model,'producto_codigo',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'producto_codigo'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'producto_nombre'); ?>
		<?php echo $form->textField($model,'producto_nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'producto_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'producto_descripcion'); ?>
		<?php echo $form->textField($model,'producto_descripcion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'producto_descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'producto_precio'); ?>
		<?php echo $form->textField($model,'producto_precio'); ?>
		<?php echo $form->error($model,'producto_precio'); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'producto_fecha_ingreso'); ?>
		<?php echo $form->textField($model,'producto_fecha_ingreso'); ?>
		<?php echo $form->error($model,'producto_fecha_ingreso'); ?>
	</div>-->

	<!--<div class="row">
		<?php echo $form->labelEx($model,'producto_fecha_modificacion'); ?>
		<?php echo $form->textField($model,'producto_fecha_modificacion'); ?>
		<?php echo $form->error($model,'producto_fecha_modificacion'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'categoria_id'); ?>
		<?php echo $form->textField($model,'categoria_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'categoria_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unidad_venta_id'); ?>
		<?php echo $form->textField($model,'unidad_venta_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'unidad_venta_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->