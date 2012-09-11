<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note"><?php echo Yii::app()->params['mensajeCamposObligatorios']; ?></p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_rut'); ?>
		<?php echo $form->textField($model,'usuario_rut', array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'usuario_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_dv'); ?>
		<?php echo $form->textField($model,'usuario_dv',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'usuario_dv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_nombre'); ?>
		<?php echo $form->textField($model,'usuario_nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'usuario_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_ape_paterno'); ?>
		<?php echo $form->textField($model,'usuario_ape_paterno',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'usuario_ape_paterno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_ape_materno'); ?>
		<?php echo $form->textField($model,'usuario_ape_materno',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'usuario_ape_materno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_mail'); ?>
		<?php echo $form->textField($model,'usuario_mail',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'usuario_mail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_activo'); ?>
		<?php echo $form->dropDownList($model,'usuario_activo', array('0' => 'Inactivo', '1' => 'Activo')); ?>
		<?php echo $form->error($model,'usuario_activo'); ?>
	</div>

	<?php if($model->isNewRecord): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'usuario_password'); ?>
		<?php echo $form->passwordField($model,'usuario_password',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'usuario_password'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'usuario_password_repeat'); ?>
		<?php echo $form->passwordField($model,'usuario_password_repeat',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'usuario_password_repeat'); ?>
	</div>
	<?php endif; ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::app()->params['valorBotonCrear'] : Yii::app()->params['valorBotonActualizar']); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->