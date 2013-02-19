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
            <?php echo str_pad(9999, 5, "0", STR_PAD_LEFT); ?>
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