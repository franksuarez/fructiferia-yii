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
                <img src="<?php echo Yii::app()->baseUrl; ?>/images/nivo/toystory.jpg" data-thumb="<?php echo Yii::app()->baseUrl; ?>/images/nivo/toystory.jpg" data-transition="slideInLeft" alt="" />
                <img src="<?php echo Yii::app()->baseUrl; ?>/images/nivo/up.jpg" data-thumb="<?php echo Yii::app()->baseUrl; ?>/images/nivo/up.jpg" alt="" data-transition="slideInLeft" title="This is an example of a caption" />
                <img src="<?php echo Yii::app()->baseUrl; ?>/images/nivo/walle.jpg" data-thumb="<?php echo Yii::app()->baseUrl; ?>/images/nivo/walle.jpg" alt="" data-transition="slideInLeft" />
                <img src="<?php echo Yii::app()->baseUrl; ?>/images/nivo/nemo.jpg" data-thumb="<?php echo Yii::app()->baseUrl; ?>/images/nivo/nemo.jpg" data-transition="slideInLeft" alt="" title="#htmlcaption" />
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>Este</strong> es un ejemplo de un <em>HTML</em> caption con <a href="#">un link</a>. 
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