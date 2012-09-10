<?php
/* @var $this UnidadVentaController */
/* @var $model UnidadVenta */

$this->breadcrumbs=array(
	'Unidades de Venta'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Unidad de Venta', 'url'=>array('index')),
	array('label'=>'Administrar Unidades de Venta', 'url'=>array('admin')),
);
?>

<h1>Crear Unidades de Venta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>