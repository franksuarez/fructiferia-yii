<?php
/* @var $this ProductoOfertaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Producto Ofertas',
);

$this->menu=array(
	array('label'=>'Create ProductoOferta', 'url'=>array('create')),
	array('label'=>'Manage ProductoOferta', 'url'=>array('admin')),
);
?>

<h1>Producto Ofertas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
