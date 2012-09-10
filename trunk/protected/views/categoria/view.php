<?php
/* @var $this CategoriaController */
/* @var $model Categoria */

$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	$model->categoria_id,
);

$this->menu=array(
	array('label'=>'Listar Categorías', 'url'=>array('index')),
	array('label'=>'Crear Categoría', 'url'=>array('create')),
	array('label'=>'Editar Categoría', 'url'=>array('update', 'id'=>$model->categoria_id)),
	array('label'=>'Eliminar Categoría', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->categoria_id),'confirm'=>Yii::app()->params['mensajeEliminarItem'])),
	array('label'=>'Administrar Categorías', 'url'=>array('admin')),
);
?>

<h1>Ver Categoría #<?php echo $model->categoria_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'categoria_id',
		'categoria_nombre',
		'categoria_padre',
	),
)); ?>
