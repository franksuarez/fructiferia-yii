<?php
/* @var $this ClienteController */
/* @var $data Cliente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cliente_id), array('view', 'id'=>$data->cliente_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->cliente_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_ape_paterno')); ?>:</b>
	<?php echo CHtml::encode($data->cliente_ape_paterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_ape_materno')); ?>:</b>
	<?php echo CHtml::encode($data->cliente_ape_materno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_email')); ?>:</b>
	<?php echo CHtml::encode($data->cliente_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_telefono')); ?>:</b>
	<?php echo CHtml::encode($data->cliente_telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_telefono_movil')); ?>:</b>
	<?php echo CHtml::encode($data->cliente_telefono_movil); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_password')); ?>:</b>
	<?php echo CHtml::encode($data->cliente_password); ?>
	<br />

	*/ ?>

</div>