<?php
/* @var $this RegionController */
/* @var $model Region */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'region-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'region_nombre'); ?>
		<?php echo $form->textField($model,'region_nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'region_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'region_numero'); ?>
		<?php echo $form->textField($model,'region_numero'); ?>
		<?php echo $form->error($model,'region_numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'region_numero_romano'); ?>
		<?php echo $form->textField($model,'region_numero_romano',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'region_numero_romano'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'region_descripcion'); ?>
		<?php echo $form->textField($model,'region_descripcion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'region_descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->