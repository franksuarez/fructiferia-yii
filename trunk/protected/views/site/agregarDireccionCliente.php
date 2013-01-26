<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'agregar-direccion-cliente-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php //echo $form->errorSummary($model); ?>
        
	<div class="row">
		<?php echo $form->labelEx($direccion,'direccion_descripcion'); ?>
		<?php echo $form->textField($direccion,'direccion_descripcion', array('size'=>60,'maxlength'=>255)); ?>
		<?php //echo $form->error($direccion,'producto_nombre'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($direccion,'comuna_id'); ?>
		<?php echo $form->dropDownList($direccion,'comuna_id', CHtml::listData(Comuna::model()->findAll(), 'comuna_id', 'comuna_nombre')); ?>
		<?php //echo $form->error($direccion,'producto_nombre'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Agregar Dirección'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->