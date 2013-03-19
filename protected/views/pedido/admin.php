<?php
/* @var $this PedidoController */
/* @var $model Pedido */

$this->breadcrumbs = array(
    'Pedidos' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Pedido', 'url' => array('index')),
    array('label' => 'Create Pedido', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('pedido-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Pedidos</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'pedido-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'pedido_id',
        'pedido_fecha',
        'pedido_cliente_nombre',
        'pedido_cliente_direccion',
        'pedido_cliente_comuna',
        'pedido_cliente_provincia',
        array(
            'name' => 'cliente.cliente_nombre',
            'value' => '$data->cliente->getNombreCompleto()'
        ),
        array(
            'name' => 'pedido_total',
            'value' => '"$" . number_format($data->pedido_total, 0, ",", ".")'
        ),
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>