<?php
/* @var $this CategoriaController */
/* @var $model Categoria */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'categoria_id'); ?>
		<?php echo $form->textField($model,'categoria_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'categoria_nombre'); ?>
		<?php echo $form->textField($model,'categoria_nombre',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'categoria_padre'); ?>
		<?php echo $form->textField($model,'categoria_padre'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->