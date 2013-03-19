<?php
/* @var $this PedidoController */
/* @var $model Pedido */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pedido-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pedido_fecha'); ?>
		<?php echo $form->textField($model,'pedido_fecha'); ?>
		<?php echo $form->error($model,'pedido_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pedido_cliente_nombre'); ?>
		<?php echo $form->textField($model,'pedido_cliente_nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pedido_cliente_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pedido_cliente_direccion'); ?>
		<?php echo $form->textField($model,'pedido_cliente_direccion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pedido_cliente_direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pedido_cliente_comuna'); ?>
		<?php echo $form->textField($model,'pedido_cliente_comuna',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pedido_cliente_comuna'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pedido_cliente_provincia'); ?>
		<?php echo $form->textField($model,'pedido_cliente_provincia',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pedido_cliente_provincia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pedido_cliente_telefono'); ?>
		<?php echo $form->textField($model,'pedido_cliente_telefono',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pedido_cliente_telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pedido_cliente_telefono_movil'); ?>
		<?php echo $form->textField($model,'pedido_cliente_telefono_movil',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pedido_cliente_telefono_movil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cliente_id'); ?>
		<?php echo $form->textField($model,'cliente_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'cliente_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'forma_pago_id'); ?>
		<?php echo $form->textField($model,'forma_pago_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'forma_pago_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_documento_id'); ?>
		<?php echo $form->textField($model,'tipo_documento_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'tipo_documento_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pedido_total'); ?>
		<?php echo $form->textField($model,'pedido_total'); ?>
		<?php echo $form->error($model,'pedido_total'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->