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
        <div class="block-title">Ofertas</div>
        <div class="block-content">
            <?php echo str_pad(9999, 5, "0", STR_PAD_LEFT); ?>
        </div>
    </div>
</div>

<div class="grid_5">
    <div class="block-container">
        <div class="block-title">Carro</div>
        <div class="block-content">
        	<ul>
        	<?php foreach($_SESSION['carro'] as $key => $producto): ?>
        		<li><?php echo $producto['producto_nombre']; ?></li>
        	<?php endforeach; ?>
        	</ul>
        </div>
    </div>
</div>