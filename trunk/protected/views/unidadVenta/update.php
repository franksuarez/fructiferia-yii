<?php
/* @var $this UnidadVentaController */
/* @var $model UnidadVenta */

$this->breadcrumbs=array(
	'Unidades de Ventas'=>array('index'),
	$model->unidad_venta_id=>array('view','id'=>$model->unidad_venta_id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Unidades de Venta', 'url'=>array('index')),
	array('label'=>'Crear Unidad de Venta', 'url'=>array('create')),
	array('label'=>'Ver Unidad de Venta', 'url'=>array('view', 'id'=>$model->unidad_venta_id)),
	array('label'=>'Administrar Unidades de Venta', 'url'=>array('admin')),
);
?>

<h1>Editar Unidad de Venta <?php echo $model->unidad_venta_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>