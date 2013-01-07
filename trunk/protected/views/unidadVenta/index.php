<?php
/* @var $this UnidadVentaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Unidad Ventas',
);

$this->menu=array(
	array('label'=>'Create UnidadVenta', 'url'=>array('create')),
	array('label'=>'Manage UnidadVenta', 'url'=>array('admin')),
);
?>

<h1>Unidad Ventas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
