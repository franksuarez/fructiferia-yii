<?php
/* @var $this UnidadVentaController */
/* @var $model UnidadVenta */

$this->breadcrumbs=array(
	'Unidad Ventas'=>array('index'),
	$model->unidad_venta_id,
);

$this->menu=array(
	array('label'=>'Listar Unidades de Venta', 'url'=>array('index')),
	array('label'=>'Crear Unidad de Venta', 'url'=>array('create')),
	array('label'=>'Editar Unidad de Venta', 'url'=>array('update', 'id'=>$model->unidad_venta_id)),
	array('label'=>'Eliminar Unidad de Venta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->unidad_venta_id),'confirm'=>Yii::app()->params['mensajeEliminarItem'])),
	array('label'=>'Administrar Unidades de Venta', 'url'=>array('admin')),
);
?>

<h1>Ver Unidad de Venta #<?php echo $model->unidad_venta_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'unidad_venta_id',
		'unidad_venta_nombre',
	),
)); ?>
