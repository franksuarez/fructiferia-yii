<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->usuario_rut=>array('view','id'=>$model->usuario_rut),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Ver Usuario', 'url'=>array('view', 'id'=>$model->usuario_rut)),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Editar Usuario <?php echo number_format($model->usuario_rut, '0', ',', '.'); ?>-<?php echo $model->usuario_dv; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>