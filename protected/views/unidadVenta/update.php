<?php
/* @var $this UnidadVentaController */
/* @var $model UnidadVenta */

$this->breadcrumbs=array(
	'Unidad Ventas'=>array('index'),
	$model->unidad_venta_id=>array('view','id'=>$model->unidad_venta_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UnidadVenta', 'url'=>array('index')),
	array('label'=>'Create UnidadVenta', 'url'=>array('create')),
	array('label'=>'View UnidadVenta', 'url'=>array('view', 'id'=>$model->unidad_venta_id)),
	array('label'=>'Manage UnidadVenta', 'url'=>array('admin')),
);
?>

<h1>Update UnidadVenta <?php echo $model->unidad_venta_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>