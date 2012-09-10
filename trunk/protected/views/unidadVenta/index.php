<?php
/* @var $this UnidadVentaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Unidades de Venta',
);

$this->menu=array(
	array('label'=>'Crear Unidad de Venta', 'url'=>array('create')),
	array('label'=>'Administrar Unidades de Venta', 'url'=>array('admin')),
);
?>

<h1>Unidades de Venta</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
