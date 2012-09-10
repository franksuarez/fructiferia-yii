<?php
/* @var $this UnidadVentaController */
/* @var $data UnidadVenta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('unidad_venta_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->unidad_venta_id), array('view', 'id'=>$data->unidad_venta_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unidad_venta_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->unidad_venta_nombre); ?>
	<br />


</div>