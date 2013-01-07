<?php
/* @var $this ProductoController */
/* @var $data Producto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('producto_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->producto_id), array('view', 'id'=>$data->producto_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('producto_codigo')); ?>:</b>
	<?php echo CHtml::encode($data->producto_codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('producto_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->producto_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('producto_descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->producto_descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('producto_precio')); ?>:</b>
	<?php echo CHtml::encode($data->producto_precio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('producto_fecha_ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->producto_fecha_ingreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('producto_fecha_modificacion')); ?>:</b>
	<?php echo CHtml::encode($data->producto_fecha_modificacion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('categoria_id')); ?>:</b>
	<?php echo CHtml::encode($data->categoria_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unidad_venta_id')); ?>:</b>
	<?php echo CHtml::encode($data->unidad_venta_id); ?>
	<br />
        
         */ ?>

	

</div>