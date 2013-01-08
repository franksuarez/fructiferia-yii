<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	$model->producto_id,
);

$this->menu=array(
	array('label'=>'Listar Productos', 'url'=>array('index')),
	array('label'=>'Crear Producto', 'url'=>array('create')),
	array('label'=>'Editar Producto', 'url'=>array('update', 'id'=>$model->producto_id)),
	array('label'=>'Eliminar Producto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->producto_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Productos', 'url'=>array('admin')),
        array('label'=>'Agregar Imagen', 'url'=>array('agregarImagen', 'id' => $model->producto_id), 'linkOptions'=>array('id' => 'agregarImagen')),
);
?>

<h1>Ver Producto #<?php echo $model->producto_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'producto_id',
		'producto_codigo',
		'producto_nombre',
		'producto_descripcion',
		'producto_precio',
		'producto_fecha_ingreso',
		'producto_fecha_modificacion',
		'categoria_id',
		'unidad_venta_id',
	),
)); ?>

<div style="height: 20px;"></div>

<h1>Imágenes del Producto</h1>

<div style="height: 20px;"></div>

<ul id="imagenes_producto">
<?php foreach($imagenes as $imagen): ?>
	<li>
		<?php echo CHtml::image(Yii::app()->baseUrl . '/images/productos/' . $imagen->imagen_nombre, '', array('class' => 'img_producto')); ?>
		<?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl . '/images/trash_16x16.gif', 'Eliminar', array('class' => 'icon')),
					array('producto/eliminarImagen', 'id' => $model->producto_id, 'imgid' => $imagen->imagen_id),
					array('confirm' => '¿Desea eliminar la imagen?')
					);?>
	</li>
<?php endforeach; ?>
</ul>