<?php $paginasMenu = Pagina::model()->findAll(); ?>
<?php //echo "<pre>"; print_r($_SESSION['carro']); echo "</pre>";   ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <link href="<?php echo Yii::app()->baseUrl; ?>/css/reset.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->baseUrl; ?>/css/960_24_col.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->baseUrl; ?>/css/text.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->baseUrl; ?>/css/sitio.principal.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->baseUrl; ?>/js/jquery.fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->baseUrl; ?>/js/nivo/nivo-slider.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->baseUrl; ?>/js/nivo/themes/default/default.css" rel="stylesheet" type="text/css" />

        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/js/jquery-1.8.3.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/js/jquery.fancybox/jquery.fancybox.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/js/funciones.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/js/nivo/jquery.nivo.slider.js"></script>

        <title>FRUCTIFERIA</title>
    </head>
    <body>
        <div class="container_24">
            <div class="grid_24" style="margin: 20px 0px 20px 0px;">
                <div style="width: 50%; float: left;">
                    <?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl . '/images/logo.png', 'Fructiferia'), array('site/index')); ?>
                </div>
                <div style="width: 50%; float: left;"></div>
            </div>

            <div class="grid_24 nav_container">
                <ul id="nav">
                    <li><?php echo CHtml::link('Inicio', array('site/index'), array()); ?></li>
                    <?php foreach ($paginasMenu as $pagina): ?>
                        <li><?php echo CHtml::link($pagina->pagina_nombre, array('site/pagina', 'id' => $pagina->pagina_id)); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="grid_24 header-block-2">
                <ul class="links">
                    <li>
                        <?php echo CHtml::link('Mi Carro (' . count($_SESSION['carro']) . ')', array('carro/listarProductosCarro'), array('title' => 'Mi Carro')); ?>
                    </li>
                    <?php if (isset($_SESSION['Cliente'])): ?>
                        <li>
                            <?php echo CHtml::link('Mi Panel de Control', array('site/panelControlCliente')); ?>
                        </li>
                        <li><a href="" title="Mis Favoritos">Mis Favoritos</a></li>
                        <li>
                            <?php echo CHtml::link('Cerrar Sesión (' . $_SESSION['Cliente']['cliente_nombre'] . ')', array('site/cerrarSesion')); ?>
                        </li>
                    <?php else: ?>
                        <li>
                            <?php echo CHtml::link('Crear Cuenta', array('site/crearCuentaCliente'), array('title' => 'Crear Cuenta')); ?>
                        </li>
                        <li>
                            <?php echo CHtml::link('Log In', array('site/iniciarSesion')); ?>
                        </li>
                    <?php endif; ?>
                </ul>
                <p class="welcome-msg">Bienvenido a nuestra tienda on-line</p>            
                <br class="clear">
            </div>

            <div class="grid_24" style="height: 10px;"></div>

            <?php echo $content; ?>

            <div class="grid_24" style="height: 10px;"></div>

            <div class="grid_24" style="">
                <div class="block-content">Link</div>

                <div class="footer-block-2">
                    <div class="right">

                        <!--{%FOOTER_LINK}-->	    </div>
                    <address style="color: #ffffff;">© <script type="text/javascript">var mdate = new Date();
                    document.write(mdate.getFullYear());</script> Fructiferia, tienda online. Todos los derechos reservados.</address>
                    <div class="clear"></div>
                </div>
            </div>
            
            <div class="grid_24" style="height: 50px;"></div>
        </div>
    </body>
</html>
