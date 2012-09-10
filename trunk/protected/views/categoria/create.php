<?php
/* @var $this CategoriaController */
/* @var $model Categoria */

$this->breadcrumbs=array(
	'Categorías'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Categorías', 'url'=>array('index')),
	array('label'=>'Administrar Categorías', 'url'=>array('admin')),
);
?>

<h1>Crear Categoría</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>