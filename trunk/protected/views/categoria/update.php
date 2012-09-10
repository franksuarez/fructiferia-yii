<?php
/* @var $this CategoriaController */
/* @var $model Categoria */

$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	$model->categoria_id=>array('view','id'=>$model->categoria_id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Categorías', 'url'=>array('index')),
	array('label'=>'Crear Categoría', 'url'=>array('create')),
	array('label'=>'Ver Categoría', 'url'=>array('view', 'id'=>$model->categoria_id)),
	array('label'=>'Administrar Categorías', 'url'=>array('admin')),
);
?>

<h1>Editar Categoría <?php echo $model->categoria_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>