<?php
/* @var $this ProductoOfertaController */
/* @var $data ProductoOferta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('producto_oferta_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->producto_oferta_id), array('view', 'id'=>$data->producto_oferta_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('producto_precio_anterior')); ?>:</b>
	<?php echo CHtml::encode($data->producto_precio_anterior); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('producto_id')); ?>:</b>
	<?php echo CHtml::encode($data->producto_id); ?>
	<br />


</div>