<?php
/* @var $this ConfiguracionController */
/* @var $model Configuracion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'configuracion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'configuracion_nombre'); ?>
		<?php echo $form->textField($model,'configuracion_nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'configuracion_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'configuracion_descripcion'); ?>
		<?php echo $form->textField($model,'configuracion_descripcion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'configuracion_descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'configuracion_valor'); ?>
		<?php echo $form->textField($model,'configuracion_valor',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'configuracion_valor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->