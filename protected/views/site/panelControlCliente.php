<?php if(isset($_SESSION['Cliente'])): ?>
<div class="grid_17">
	<div class="block-title">Panel de Control Clientes</div>
	<div class="block-content">
		Bienvenido a tu panel de control, en el menú a la derecha verás las distintas acciones que puedes realizar.
	</div>
</div>

<div class="grid_7">
	<div class="block-title">Menú</div>
	<div class="block-content">
		<ul id="menu_panel_control">
			<?php foreach($menuPanel as $menu): ?>
			<li>
			<?php echo CHtml::link($menu->menu_panel_control_cliente_nombre, array($menu->menu_panel_control_cliente_url)); ?>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
<?php else: ?>
<div class="grid_24">
	<div class="block-title">Panel de Control Clientes</div>
	<div class="block-content">Debe iniciar sesión para ver su panel de control.</div>
</div>
<?php endif; ?>