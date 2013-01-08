<?php
/* @var $this ConfiguracionController */
/* @var $model Configuracion */

$this->breadcrumbs=array(
	'Configuracions'=>array('index'),
	$model->configuracion_id,
);

$this->menu=array(
	array('label'=>'List Configuracion', 'url'=>array('index')),
	array('label'=>'Create Configuracion', 'url'=>array('create')),
	array('label'=>'Update Configuracion', 'url'=>array('update', 'id'=>$model->configuracion_id)),
	array('label'=>'Delete Configuracion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->configuracion_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Configuracion', 'url'=>array('admin')),
);
?>

<h1>View Configuracion #<?php echo $model->configuracion_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'configuracion_id',
		'configuracion_nombre',
		'configuracion_descripcion',
		'configuracion_valor',
	),
)); ?>
