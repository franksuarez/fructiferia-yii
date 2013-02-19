<?php
/* @var $this SliderController */
/* @var $model Slider */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'slider-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'slider_nombre_imagen'); ?>
		<?php echo $form->textField($model,'slider_nombre_imagen',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'slider_nombre_imagen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'slider_titulo'); ?>
		<?php echo $form->textField($model,'slider_titulo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'slider_titulo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->