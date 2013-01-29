<?php if (isset($_SESSION['Cliente'])): ?>
    <div class="grid_17">
        <div class="block-title">Panel de Control Clientes</div>
        <div class="block-content">
            <div style="text-align: right; margin: 10px 5px 10px 10px;">
                <?php echo CHtml::link('Agregar una Dirección', array('site/agregarDireccionCliente'), array('id' => 'agregarDireccionCliente', 'class' => 'button')); ?></div>
            
            <?php if(Yii::app()->user->hasFlash('direccionClienteEliminada')):?>
            <ul class="messages">
                <li class="success-msg">
                    <ul>
                        <li><span><?php echo Yii::app()->user->getFlash('direccionClienteEliminada'); ?></span></li>
                    </ul>
                </li>
            </ul>
            <?php endif; ?>
            <?php if(Yii::app()->user->hasFlash('direccionClienteNoEliminada')):?>
            <ul class="messages">
                <li class="success-msg">
                    <ul>
                        <li><span><?php echo Yii::app()->user->getFlash('direccionClienteNoEliminada'); ?></span></li>
                    </ul>
                </li>
            </ul>
            <?php endif; ?>
            
            <?php if(Yii::app()->user->hasFlash('direccionClienteAgregada')):?>
            <ul class="messages">
                <li class="success-msg">
                    <ul>
                        <li><span><?php echo Yii::app()->user->getFlash('direccionClienteAgregada'); ?></span></li>
                    </ul>
                </li>
            </ul>
            <?php endif; ?>
            <?php if(Yii::app()->user->hasFlash('direccionClienteNoAgregada')):?>
            <ul class="messages">
                <li class="success-msg">
                    <ul>
                        <li><span><?php echo Yii::app()->user->getFlash('direccionClienteNoAgregada'); ?></span></li>
                    </ul>
                </li>
            </ul>
            <?php endif; ?>
            
            <table class="grid-direcciones">
                <tr>
                    <th>Dirección</th>
                    <th>Comuna</th>
                    <th>&nbsp;</th>
                </tr>
                <?php foreach($direcciones as $direccion): ?>
                <tr>
                    <td><?php echo $direccion->direccion_descripcion; ?></td>
                    <td><?php echo $direccion->comuna->comuna_nombre; ?></td>
                    <td style="text-align: center;">
                        <?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl . '/images/trash_16x16_2.gif', 'Eliminar Dirección'), array('eliminarDireccionCliente', 'id' => $direccion->direccion_id), array('id' => 'eliminarDireccionCliente')); ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
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
<?php else: ?>
    <div class="grid_24">
        <div class="block-title">Panel de Control Clientes</div>
        <div class="block-content">Debe iniciar sesión para ver su panel de control.</div>
    </div>
<?php endif; ?>