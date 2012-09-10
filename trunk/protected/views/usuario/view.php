<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->usuario_rut,
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Editar Usuario', 'url'=>array('update', 'id'=>$model->usuario_rut)),
	array('label'=>'Eliminar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->usuario_rut),'confirm'=>Yii::app()->params['mensajeEliminarItem'])),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Ver Usuario <?php echo number_format($model->usuario_rut, '0', ',', '.'); ?>-<?php echo $model->usuario_dv; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'usuario_rut',
		'usuario_dv',
		'usuario_nombre',
		'usuario_ape_paterno',
		'usuario_ape_materno',
		'usuario_mail',
		'usuario_activo',
		//'usuario_password',
	),
)); ?>
