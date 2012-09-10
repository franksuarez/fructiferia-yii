<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->usuario_rut), array('view', 'id'=>$data->usuario_rut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_dv')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_dv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_ape_paterno')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_ape_paterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_ape_materno')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_ape_materno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_mail')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_mail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_activo')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_activo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_password')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_password); ?>
	<br />

	*/ ?>

</div>