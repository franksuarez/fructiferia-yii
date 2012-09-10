<?php
/* @var $this RegionController */
/* @var $data Region */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('region_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->region_id), array('view', 'id'=>$data->region_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('region_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->region_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('region_numero')); ?>:</b>
	<?php echo CHtml::encode($data->region_numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('region_numero_romano')); ?>:</b>
	<?php echo CHtml::encode($data->region_numero_romano); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('region_descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->region_descripcion); ?>
	<br />


</div>