<?php
/* @var $this ProductoOfertaController */
/* @var $model ProductoOferta */

$this->breadcrumbs=array(
	'Producto Ofertas'=>array('index'),
	$model->producto_oferta_id=>array('view','id'=>$model->producto_oferta_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductoOferta', 'url'=>array('index')),
	array('label'=>'Create ProductoOferta', 'url'=>array('create')),
	array('label'=>'View ProductoOferta', 'url'=>array('view', 'id'=>$model->producto_oferta_id)),
	array('label'=>'Manage ProductoOferta', 'url'=>array('admin')),
);
?>

<h1>Update ProductoOferta <?php echo $model->producto_oferta_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>