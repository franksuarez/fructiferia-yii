<div class="grid_17">
    <div class="block-title">Historial de mis Pedidos</div>
    <div class="block-content">
        Historial de mis Pedidos
    </div>
</div>

<div class="grid_7">
    <div class="block-title">Menú</div>
    <div class="block-content">
        <ul id="menu_panel_control">
            <?php foreach ($menuPanel as $menu): ?>
                <li>
                    <?php echo CHtml::link($menu->menu_panel_control_cliente_nombre, array($menu->menu_panel_control_cliente_url)); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>