<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cliente_nombre'); ?>
		<?php echo $form->textField($model,'cliente_nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cliente_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cliente_ape_paterno'); ?>
		<?php echo $form->textField($model,'cliente_ape_paterno',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cliente_ape_paterno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cliente_ape_materno'); ?>
		<?php echo $form->textField($model,'cliente_ape_materno',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cliente_ape_materno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cliente_email'); ?>
		<?php echo $form->textField($model,'cliente_email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cliente_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cliente_telefono'); ?>
		<?php echo $form->textField($model,'cliente_telefono',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cliente_telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cliente_telefono_movil'); ?>
		<?php echo $form->textField($model,'cliente_telefono_movil',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cliente_telefono_movil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cliente_password'); ?>
		<?php echo $form->textField($model,'cliente_password',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cliente_password'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'password_repeat'); ?>
		<?php echo $form->textField($model,'password_repeat',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'password_repeat'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->