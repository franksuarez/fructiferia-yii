<?php
/* @var $this PaginaController */
/* @var $data Pagina */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pagina_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pagina_id), array('view', 'id'=>$data->pagina_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pagina_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->pagina_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pagina_titulo')); ?>:</b>
	<?php echo CHtml::encode($data->pagina_titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pagina_texto')); ?>:</b>
	<?php echo CHtml::encode($data->pagina_texto); ?>
	<br />


</div>