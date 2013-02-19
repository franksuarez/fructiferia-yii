<?php
/* @var $this ProductoOfertaController */
/* @var $model ProductoOferta */

$this->breadcrumbs=array(
	'Producto Ofertas'=>array('index'),
	$model->producto_oferta_id,
);

$this->menu=array(
	array('label'=>'List ProductoOferta', 'url'=>array('index')),
	array('label'=>'Create ProductoOferta', 'url'=>array('create')),
	array('label'=>'Update ProductoOferta', 'url'=>array('update', 'id'=>$model->producto_oferta_id)),
	array('label'=>'Delete ProductoOferta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->producto_oferta_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductoOferta', 'url'=>array('admin')),
);
?>

<h1>View ProductoOferta #<?php echo $model->producto_oferta_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'producto_oferta_id',
		'producto_precio_anterior',
		'producto_id',
	),
)); ?>
