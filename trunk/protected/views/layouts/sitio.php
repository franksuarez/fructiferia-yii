<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/default.sitio.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
	<div style="height: 10px;"></div>
	<div id="contenedor">
		<div id="cabecera_top"></div>
		
		<div id="cabecera">
			<div style="float: left; width: 50%;">
				<?php echo CHtml::image('/images/logo.jpg', 'Fructiferia', array('style' => 'width: 307px; height: 120px;')) ?>
			</div>
			<div style="float: left; width: 50%;">
				<div class="contenedor_input_buscar">
					<input type="text" name="buscar" class="input_buscar" />
					<?php echo CHtml::image('/images/btn_buscar.png', 'Buscar', array('style' => 'position: absolute; left: 200px;')) ?>
				</div> 
			</div>
			<div class="clear"></div>
		</div>
		
		<div id="contenedor_menu">
			<div class="menu_left">
				<?php echo CHtml::image('/images/borde_menu_left.png'); ?>
			</div>
			<div class="menu_centro">
				<ul id="menu">
					<li>
						<?php echo CHtml::link('Inicio',array('site/')); ?></li>
					<li>
						<?php echo CHtml::link('Área de Reparto',array('site/page', 'view' => 'area_reparto')); ?></li>
					<li>
						<?php echo CHtml::link('Club Fructiferia',array('site/page', 'view' => 'club_fructiferia')); ?></li>
					<li>
						<?php echo CHtml::link('Cómo Comprar',array('site/page', 'view' => 'como_comprar')); ?></li>
					<li>
						<?php echo CHtml::link('Contacto',array('site/contacto')); ?></li>
				</ul>
			</div>
			<div class="menu_right">
				<?php echo CHtml::image('/images/borde_menu_right.png'); ?>
			</div>
		</div>
		
		<div style="width: 220px; float: left; margin-left: 10px;">
			<div class="titulos">
				Club Fructiferia
			</div>
			
			<div>
				<div style="float: left; width: 220px; height: 176px; background-image: url('/images/bg_caja_login.png'); position: relative;">
					<label style="position: absolute; top: 30px; left: 5px;">RUT</label>
					<input style="position: absolute; top: 24px; left: 77px; width: 84px; border: 1px solid #cccccc;" maxlength="10" type="text" name="Cliente[rut]" />
					<input style="position: absolute; top: 24px; left: 181px; width: 20px; border: 1px solid #cccccc;" maxlength="1" type="text" name="Cliente[dv]" />
					<label style="position: absolute; top: 75px; left: 5px;">Password</label>
					<input style="position: absolute; top: 69px; left: 76px; width: 125px; border: 1px solid #cccccc;" maxlength="50" type="password" name="Cliente[password]" />
				</div>
				<div style="float: left; width: 726px; margin-right: 10px;"></div>
			</div>
		</div>
		<div style="width: 726px; float: left;"></div>
		
		<div class="clear"></div>
		
		<div id="contenido"><?php echo $content; ?></div>
		
		<div class="clear"></div>
		
		<div id="pie"></div>
	</div>
</body>
</html>