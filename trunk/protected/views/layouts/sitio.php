<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <link href="<?php echo Yii::app()->baseUrl; ?>/css/reset.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->baseUrl; ?>/css/960_24_col.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->baseUrl; ?>/css/text.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->baseUrl; ?>/css/sitio.principal.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->baseUrl; ?>/js/jquery.fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" />
        
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/js/jquery-1.8.3.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/js/jquery.fancybox/jquery.fancybox.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/js/funciones.js"></script>

        <title>FRUCTIFERIA</title>
    </head>
    <body>
        <div class="container_24">
            <div class="grid_24" style="margin: 20px 0px 20px 0px;">
                <div style="width: 50%; float: left;">
                    <?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl . '/images/logo.png', 'Fructiferia'), array('/')); ?>
                </div>
                <div style="width: 50%; float: left;"></div>
            </div>
            
            <div class="grid_24 nav_container">
                <ul id="nav">
                    <li>Inicio</li>
                </ul>
            </div>

            <div class="grid_24 header-block-2">
                <ul class="links">
                    <li><a href="" title="Mi Cuenta">Mi Cuenta</a></li>
                    <li>
                    	<?php echo CHtml::link('Crear Cuenta', array('site/crearCuentaCliente'), array('title' => 'Crear Cuenta')); ?>
                    </li>
                    <li><a href="" title="Mis Favoritos">Mis Favoritos</a></li>
                    <li>
						<?php echo CHtml::link('Mi Carro (' . count($_SESSION['carro']) .')', array('carro/listarProductosCarro'), array('title' => 'Mi Carro')); ?>
					</li>
                    <li><a href="" title="Terminar Pedido">Terminar Pedido</a></li>
                    <li><a href="" title="Log In">Log In</a></li>
                </ul>
                <p class="welcome-msg">Bienvenido a nuestra tienda on-line</p>            
                <br class="clear">
            </div>

            <div class="grid_24" style="height: 10px;"></div>

            <?php echo $content; ?>
        </div>
    </body>
</html>
