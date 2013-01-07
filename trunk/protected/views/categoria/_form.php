<?php
/* @var $this CategoriaController */
/* @var $model Categoria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'categoria-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'categoria_nombre'); ?>
		<?php echo $form->textField($model,'categoria_nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'categoria_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'categoria_descripcion'); ?>
		<?php echo $form->textField($model,'categoria_descripcion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'categoria_descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'categoria_padre'); ?>
		<?php echo $form->textField($model,'categoria_padre',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'categoria_padre'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->