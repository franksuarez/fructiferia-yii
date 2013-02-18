<?php
/* @var $this PaginaController */
/* @var $model Pagina */

$this->breadcrumbs=array(
	'Paginas'=>array('index'),
	$model->pagina_id=>array('view','id'=>$model->pagina_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pagina', 'url'=>array('index')),
	array('label'=>'Create Pagina', 'url'=>array('create')),
	array('label'=>'View Pagina', 'url'=>array('view', 'id'=>$model->pagina_id)),
	array('label'=>'Manage Pagina', 'url'=>array('admin')),
);
?>

<h1>Update Pagina <?php echo $model->pagina_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>