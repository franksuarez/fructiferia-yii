<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'usuario_rut'); ?>
		<?php echo $form->textField($model,'usuario_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario_dv'); ?>
		<?php echo $form->textField($model,'usuario_dv',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario_nombre'); ?>
		<?php echo $form->textField($model,'usuario_nombre',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario_ape_paterno'); ?>
		<?php echo $form->textField($model,'usuario_ape_paterno',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario_ape_materno'); ?>
		<?php echo $form->textField($model,'usuario_ape_materno',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario_mail'); ?>
		<?php echo $form->textField($model,'usuario_mail',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario_activo'); ?>
		<?php echo $form->textField($model,'usuario_activo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->