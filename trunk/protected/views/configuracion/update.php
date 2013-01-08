<?php
/* @var $this ConfiguracionController */
/* @var $model Configuracion */

$this->breadcrumbs=array(
	'Configuracions'=>array('index'),
	$model->configuracion_id=>array('view','id'=>$model->configuracion_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Configuracion', 'url'=>array('index')),
	array('label'=>'Create Configuracion', 'url'=>array('create')),
	array('label'=>'View Configuracion', 'url'=>array('view', 'id'=>$model->configuracion_id)),
	array('label'=>'Manage Configuracion', 'url'=>array('admin')),
);
?>

<h1>Update Configuracion <?php echo $model->configuracion_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>