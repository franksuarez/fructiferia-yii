<?php //if(isset($_POST)) { echo "<pre>"; print_r($_POST); echo "</pre>"; } ?>
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
				<?php echo CHtml::image('/images/logo2.png', 'Fructiferia', array('style' => 'width: 307px; height: 120px;')) ?>
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
		
		<div style="height: 20px;"></div>
		
		<div style="margin: 0px 0px 0px 10px;">
			<table style="width: 946px;">
				<tr>
					<td style="width: 180px; vertical-align: top;">Categorías</td>
					<td style="width: 546px; vertical-align: top;">
						<div style="width: 100%; height: 100%; margin: 0px 0px 0px 5px;">
							<?php echo $content; ?>
						</div>
					</td>
					<td style="width: 220px;">
						<div style="width: 220px; height: 176px; background-image: url('/images/bg_caja_login.png'); position: relative;">
							<form method="post" action="" name="frm_club_fructiferia">
								<input style="position: absolute; top: 15px; left: 15px; width: 84px; border: 1px solid #cccccc;" maxlength="10" type="text" value="RUT" onfocus="if(this.value=='RUT')this.value='';" onblur="if(this.value=='')this.value='RUT';" name="Cliente[rut]" />
								<input style="position: absolute; top: 15px; left: 126px; width: 20px; border: 1px solid #cccccc;" maxlength="1" type="text" name="Cliente[dv]" />
								<input style="position: absolute; top: 60px; left: 15px; width: 131px; border: 1px solid #cccccc;" maxlength="50" type="password" value="password" onfocus="if(this.value=='password')this.value='';" onblur="if(this.value=='')this.value='password';" name="Cliente[password]" />
								
								<label style="position: absolute; top: 100px; left: 15px;">Persona</label>
								<label style="position: absolute; top: 100px; left: 105px;">Empresa</label>
								
								<input type="radio" name="Cliente[tipo]" value="P" style="position: absolute; top: 115px; left: 15px;" checked="checked" />
								<input type="radio" name="Cliente[tipo]" value="E" style="position: absolute; top: 115px; left: 105px;" />
								
								<input type="submit" value="Ingresar" style="position: absolute; top: 135px; left: 15px;" />
							</form>
						</div>
					</td>
				</tr>
			</table>
		</div>
		
		<div class="clear"></div>
		
		<!--<div id="contenido"></div>-->
		
		<div class="clear"></div>
		
		<div id="pie"></div>
	</div>
</body>
</html>