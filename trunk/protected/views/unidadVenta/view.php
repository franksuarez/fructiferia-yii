<?php
/* @var $this UnidadVentaController */
/* @var $model UnidadVenta */

$this->breadcrumbs=array(
	'Unidad Ventas'=>array('index'),
	$model->unidad_venta_id,
);

$this->menu=array(
	array('label'=>'List UnidadVenta', 'url'=>array('index')),
	array('label'=>'Create UnidadVenta', 'url'=>array('create')),
	array('label'=>'Update UnidadVenta', 'url'=>array('update', 'id'=>$model->unidad_venta_id)),
	array('label'=>'Delete UnidadVenta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->unidad_venta_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UnidadVenta', 'url'=>array('admin')),
);
?>

<h1>View UnidadVenta #<?php echo $model->unidad_venta_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'unidad_venta_id',
		'unidad_venta_nombre',
		'unidad_venta_descripcion',
	),
)); ?>
