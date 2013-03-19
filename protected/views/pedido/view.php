<?php
/* @var $this PedidoController */
/* @var $model Pedido */

$this->breadcrumbs=array(
	'Pedidos'=>array('index'),
	$model->pedido_id,
);

$this->menu=array(
	array('label'=>'List Pedido', 'url'=>array('index')),
	array('label'=>'Create Pedido', 'url'=>array('create')),
	array('label'=>'Update Pedido', 'url'=>array('update', 'id'=>$model->pedido_id)),
	array('label'=>'Delete Pedido', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pedido_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pedido', 'url'=>array('admin')),
);
?>

<h1>View Pedido #<?php echo $model->pedido_id; ?></h1>

<?php $pedido_fecha = new DateTime($model->pedido_fecha); ?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pedido_id',
                array(
                    'label' => $model->getAttributeLabel('pedido_fecha'),
                    'type' => 'raw',
                    'value' => $pedido_fecha->format('d/m/Y')
                ),
		'pedido_cliente_nombre',
		'pedido_cliente_direccion',
		'pedido_cliente_comuna',
		'pedido_cliente_provincia',
		'pedido_cliente_telefono',
		'pedido_cliente_telefono_movil',
		'cliente_id',
		'forma_pago_id',
		'tipo_documento_id',
                array(
                    'label' => $model->getAttributeLabel('pedido_total'),
                    'type' => 'raw',
                    'value' => '$' . number_format($model->pedido_total, 0 , ',', '.')
                ),
	),
)); ?>

<div style="height: 20px;"></div>
<style type="text/css">
    .grid-detalle-pedido {
        border: 1px solid #dddddd;
        border-collapse: collapse;
    }
    .grid-detalle-pedido tr:nth-child(odd) td { background-color:#f0f0f0 } /*odd*/
    .grid-detalle-pedido tr:nth-child(even) td { background-color:#f8f8f8 } /* even*/
    .grid-detalle-pedido tr:hover td { background-color:#fffbae; }
    .grid-detalle-pedido th {
        background-color: #E5F1F4;
    }
    .grid-detalle-pedido td {
        background-color: #f8f8f8;
    }
    .grid-detalle-pedido td, th {
        border: 1px solid #dddddd;
    }
</style>
<table class="grid-detalle-pedido">
    <tr>
        <th>Codigo Producto</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Total</th>
    </tr>
    <?php foreach($pedidoDetalle as $detalle): ?>
    <tr>
        <td><?php echo $detalle->producto_codigo; ?></td>
        <td><?php echo $detalle->pedido_detalle_descripcion; ?></td>
        <td>$<?php echo number_format($detalle->pedido_detalle_precio, 0, ',', '.'); ?></td>
        <td><?php echo $detalle->pedido_detalle_cantidad; ?></td>
        <td>$<?php echo number_format($detalle->pedido_detalle_total, 0, ',', '.'); ?></td>
    </tr>
    <?php endforeach; ?>
</table>