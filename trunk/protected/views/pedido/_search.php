<?php
/* @var $this PedidoController */
/* @var $model Pedido */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pedido_id'); ?>
		<?php echo $form->textField($model,'pedido_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pedido_fecha'); ?>
		<?php echo $form->textField($model,'pedido_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pedido_cliente_nombre'); ?>
		<?php echo $form->textField($model,'pedido_cliente_nombre',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pedido_cliente_direccion'); ?>
		<?php echo $form->textField($model,'pedido_cliente_direccion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pedido_cliente_comuna'); ?>
		<?php echo $form->textField($model,'pedido_cliente_comuna',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pedido_cliente_provincia'); ?>
		<?php echo $form->textField($model,'pedido_cliente_provincia',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pedido_cliente_telefono'); ?>
		<?php echo $form->textField($model,'pedido_cliente_telefono',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pedido_cliente_telefono_movil'); ?>
		<?php echo $form->textField($model,'pedido_cliente_telefono_movil',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cliente_id'); ?>
		<?php echo $form->textField($model,'cliente_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'forma_pago_id'); ?>
		<?php echo $form->textField($model,'forma_pago_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_documento_id'); ?>
		<?php echo $form->textField($model,'tipo_documento_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pedido_total'); ?>
		<?php echo $form->textField($model,'pedido_total'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->