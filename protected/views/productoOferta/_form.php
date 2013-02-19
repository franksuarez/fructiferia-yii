<?php
/* @var $this ProductoOfertaController */
/* @var $model ProductoOferta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'producto-oferta-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'producto_precio_anterior'); ?>
		<?php echo $form->textField($model,'producto_precio_anterior'); ?>
		<?php echo $form->error($model,'producto_precio_anterior'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'producto_id'); ?>
                <?php echo $form->dropDownList($model, 'producto_id', CHtml::listData(Producto::model()->findAll(), 'producto_id', 'producto_nombre')); ?>
		<?php echo $form->error($model,'producto_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->