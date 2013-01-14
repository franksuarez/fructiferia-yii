<div class="grid_5">
    <div class="block-container">
        <div class="block-title">Categorías</div>
        <div class="block-content">
        	<ul id="categorias">
        	<?php foreach($categorias as $categoria): ?>
        		<li><?php echo CHtml::link($categoria->categoria_nombre, array('listarProductosPorCategoria', 'id' => $categoria->categoria_id)); ?></li>
        	<?php endforeach; ?>
        	</ul>
        </div>
    </div>
</div>

<div class="grid_14">
    <div class="block-container">
        <div class="block-title"><?php echo $nombreCategoria; ?></div>
        <div class="block-content">
        	<?php if(count($productos) > 0): ?>
	            <?php foreach($productos as $producto): ?>
	            	<div class="producto">
	            		<?php echo CHtml::image(Yii::app()->baseUrl . '/images/productos/' . $producto->imagen[0]->imagen_nombre, $producto->producto_nombre, array('class' => 'imglista')) ?>
	            		<div class="nombre"><?php echo $producto->producto_nombre; ?></div>
	            		<div class="precio">$<?php echo $producto->producto_precio; ?> / <?php echo $producto->unidadVenta->unidad_venta_nombre; ?></div>
	            		<div style="text-align: left; margin: 0px 0px 0px 6px;">
	            			<?php echo CHtml::link('Agregar al Carro', array('carro/agregarProductoCarro', 'id' => $producto->producto_id), array('class' => 'button')); ?>
	            		</div>
	            	</div>
	            <?php endforeach; ?>
	        <?php else: ?>
	        	No existen productos para la categoría seleccionada.
            <?php endif; ?>
            <div class="clear"></div>
        </div>
    </div>
</div>

<div class="grid_5">
    <div class="block-container">
        <div class="block-title">Carro</div>
        <div class="block-content">Contenido</div>
    </div>
</div>