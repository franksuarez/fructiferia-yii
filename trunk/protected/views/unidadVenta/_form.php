<?php
/* @var $this UnidadVentaController */
/* @var $model UnidadVenta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'unidad-venta-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php echo Yii::app()->params['mensajeCamposObligatorios']; ?></p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'unidad_venta_nombre'); ?>
		<?php echo $form->textField($model,'unidad_venta_nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'unidad_venta_nombre'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::app()->params['valorBotonCrear'] : Yii::app()->params['valorBotonActualizar']); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->