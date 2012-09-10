<?php
/* @var $this UnidadVentaController */
/* @var $model UnidadVenta */

$this->breadcrumbs=array(
	'Unidades de Venta'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Unidades de Venta', 'url'=>array('index')),
	array('label'=>'Crear Unidad de Venta', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('unidad-venta-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Unidades de Ventas</h1>

<p>
<?php echo Yii::app()->params['mensajeCamposBusqueda']; ?>
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'unidad-venta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'unidad_venta_id',
		'unidad_venta_nombre',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
