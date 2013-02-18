<?php
/* @var $this PaginaController */
/* @var $model Pagina */

$this->breadcrumbs=array(
	'Paginas'=>array('index'),
	$model->pagina_id,
);

$this->menu=array(
	array('label'=>'List Pagina', 'url'=>array('index')),
	array('label'=>'Create Pagina', 'url'=>array('create')),
	array('label'=>'Update Pagina', 'url'=>array('update', 'id'=>$model->pagina_id)),
	array('label'=>'Delete Pagina', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pagina_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pagina', 'url'=>array('admin')),
);
?>

<h1>View Pagina #<?php echo $model->pagina_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pagina_id',
		'pagina_nombre',
		'pagina_titulo',
		'pagina_texto',
	),
)); ?>
