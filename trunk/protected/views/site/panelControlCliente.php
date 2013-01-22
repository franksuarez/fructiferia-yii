<?php if(isset($_SESSION['Cliente'])): ?>
<div class="grid_18">
	<div class="block-title">Panel de Control Clientes</div>
	<div class="block-content">
		<?php echo $_SESSION['Cliente']['cliente_nombre']; ?>
	</div>
</div>

<div class="grid_6">
	<div class="block-title">Panel de Control Clientes</div>
	<div class="block-content">
		<?php echo $_SESSION['Cliente']['cliente_nombre']; ?>
	</div>
</div>
<?php else: ?>
<div class="grid_24">
	<div class="block-title">Panel de Control Clientes</div>
	<div class="block-content">Debe iniciar sesión para ver su panel de control.</div>
</div>
<?php endif; ?>