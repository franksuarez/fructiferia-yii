<?php
/* @var $this CategoriaController */
/* @var $data Categoria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoria_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->categoria_id), array('view', 'id'=>$data->categoria_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoria_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->categoria_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoria_padre')); ?>:</b>
	<?php echo CHtml::encode($data->categoria_padre); ?>
	<br />


</div>