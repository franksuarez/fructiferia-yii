<?php
/* @var $this ConfiguracionController */
/* @var $data Configuracion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('configuracion_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->configuracion_id), array('view', 'id'=>$data->configuracion_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('configuracion_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->configuracion_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('configuracion_descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->configuracion_descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('configuracion_valor')); ?>:</b>
	<?php echo CHtml::encode($data->configuracion_valor); ?>
	<br />


</div>