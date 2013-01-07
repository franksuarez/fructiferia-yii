<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'producto_id'); ?>
		<?php echo $form->textField($model,'producto_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'producto_codigo'); ?>
		<?php echo $form->textField($model,'producto_codigo',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'producto_nombre'); ?>
		<?php echo $form->textField($model,'producto_nombre',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'producto_descripcion'); ?>
		<?php echo $form->textField($model,'producto_descripcion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'producto_precio'); ?>
		<?php echo $form->textField($model,'producto_precio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'producto_fecha_ingreso'); ?>
		<?php echo $form->textField($model,'producto_fecha_ingreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'producto_fecha_modificacion'); ?>
		<?php echo $form->textField($model,'producto_fecha_modificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'categoria_id'); ?>
		<?php echo $form->textField($model,'categoria_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unidad_venta_id'); ?>
		<?php echo $form->textField($model,'unidad_venta_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->