<?php
/* @var $this ProductoOfertaController */
/* @var $model ProductoOferta */

$this->breadcrumbs=array(
	'Producto Ofertas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductoOferta', 'url'=>array('index')),
	array('label'=>'Manage ProductoOferta', 'url'=>array('admin')),
);
?>

<h1>Create ProductoOferta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>