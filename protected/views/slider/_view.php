<?php
/* @var $this SliderController */
/* @var $data Slider */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('slider_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->slider_id), array('view', 'id'=>$data->slider_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('slider_nombre_imagen')); ?>:</b>
	<?php echo CHtml::encode($data->slider_nombre_imagen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('slider_titulo')); ?>:</b>
	<?php echo CHtml::encode($data->slider_titulo); ?>
	<br />


</div>