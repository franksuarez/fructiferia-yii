<?php
/* @var $this PedidoController */
/* @var $data Pedido */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pedido_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pedido_id), array('view', 'id'=>$data->pedido_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pedido_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->pedido_fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pedido_cliente_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->pedido_cliente_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pedido_cliente_direccion')); ?>:</b>
	<?php echo CHtml::encode($data->pedido_cliente_direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pedido_cliente_comuna')); ?>:</b>
	<?php echo CHtml::encode($data->pedido_cliente_comuna); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pedido_cliente_provincia')); ?>:</b>
	<?php echo CHtml::encode($data->pedido_cliente_provincia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pedido_cliente_telefono')); ?>:</b>
	<?php echo CHtml::encode($data->pedido_cliente_telefono); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pedido_cliente_telefono_movil')); ?>:</b>
	<?php echo CHtml::encode($data->pedido_cliente_telefono_movil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_id')); ?>:</b>
	<?php echo CHtml::encode($data->cliente_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('forma_pago_id')); ?>:</b>
	<?php echo CHtml::encode($data->forma_pago_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_documento_id')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_documento_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pedido_total')); ?>:</b>
	<?php echo CHtml::encode($data->pedido_total); ?>
	<br />

	*/ ?>

</div>
