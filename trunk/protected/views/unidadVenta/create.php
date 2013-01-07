<?php
/* @var $this UnidadVentaController */
/* @var $model UnidadVenta */

$this->breadcrumbs=array(
	'Unidad Ventas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UnidadVenta', 'url'=>array('index')),
	array('label'=>'Manage UnidadVenta', 'url'=>array('admin')),
);
?>

<h1>Create UnidadVenta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>