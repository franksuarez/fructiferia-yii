<div class="grid_5">
    <div class="block-container">
        <div class="block-title">Categorías</div>
        <div class="block-content">
            <ul id="categorias">
                <?php foreach ($categorias as $categoria): ?>
                    <li><?php echo CHtml::link($categoria->categoria_nombre, array('listarProductosPorCategoria', 'id' => $categoria->categoria_id)); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<div class="grid_14">
    <div id="wrapper">
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <?php foreach($sliders as $slider): ?>
                <?php echo CHtml::link(
                            CHtml::image(Yii::app()->baseUrl . '/images/nivo-slider/' . $slider->slider_nombre_imagen, '', array('data-transition' => 'slideInLeft', 'title' => $slider->slider_titulo)),
                            'javascript:;'
                        ); ?>
                <?php endforeach; ?>
            </div>
        </div>

    </div>

    <div class="block-container">
        <div class="block-title">Ofertas</div>
        <div class="block-content">
            <?php if (count($ofertas) > 0): ?>
                <?php foreach ($ofertas as $producto): ?>
                    <div class="producto">
                        <?php echo CHtml::image(Yii::app()->baseUrl . '/images/productos/' . $producto->producto->imagen[0]->imagen_nombre, $producto->producto->producto_nombre, array('class' => 'imglista')) ?>
                        <div class="nombre"><?php echo $producto->producto->producto_nombre; ?></div>
                        <div class="precio-antes-texto">Antes</div>
                        <div class="precio-anterior">$<?php echo $producto->producto_precio_anterior; ?> / <?php echo $producto->producto->unidadVenta->unidad_venta_nombre; ?></div>
                        <div class="precio-ahora-texto">Ahora</div>
                        <div class="precio">$<?php echo $producto->producto->producto_precio; ?> / <?php echo $producto->producto->unidadVenta->unidad_venta_nombre; ?></div>
                        <div style="text-align: left; margin: 0px 0px 0px 6px;">
                            <?php echo CHtml::link('Agregar al Carro', array('carro/agregarProductoCarro', 'id' => $producto->producto_id), array('class' => 'button')); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <ul class="messages">
                    <li class="notice-msg">
                        <ul>
                            <li><span>No existen productos para la categoría seleccionada.</span></li>
                        </ul>
                    </li>
                </ul>
            <?php endif; ?>
            <div class="clear"></div>
        </div>
    </div>
</div>

<div class="grid_5">
    <div class="block-container">
        <div class="block-title">Carro</div>
        <div class="block-content">
            <?php echo $this->renderPartial('//site/productosCarro'); ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({pauseTime:6000});
    });
</script>