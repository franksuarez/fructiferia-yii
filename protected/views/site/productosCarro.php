<div class="caja-carro">
    <?php if (count($_SESSION['carro']) > 0): ?>
    <div class="texto-cantidad-productos">Tienes <strong><?php echo (count($_SESSION['carro']) == 1) ? count($_SESSION['carro']) . ' producto' : count($_SESSION['carro']) . ' productos'; ?> </strong> en tu carro.</div>
    
    <div class="box-total-carro">TOTAL: <span class="total">$<?php echo number_format($_SESSION['total_carro'], 0, ',', '.'); ?></span>.-.</div>
    
    <?php foreach ($_SESSION['carro'] as $key => $producto): ?>
    <table class="box-carro">
        <tr>
            <td class="imagen-producto">
                <img class="imagen" src="<?php echo Yii::app()->baseUrl; ?>/images/productos/<?php echo $producto['imagen_nombre']; ?>"
            </td>
            <td class="nombre-producto">
                <div><strong><?php echo $producto['producto_nombre']; ?></strong></div>
                <div><?php echo $producto['producto_cantidad']; ?> <strong>x</strong> <span class="producto-precio">$<?php echo number_format(((int)$producto['producto_cantidad'] * (int)$producto['producto_precio']), '0', ',', '.'); ?></span></div>
            </td>
            <td class="botones-producto" style="text-align: right;">
                <?php echo CHtml::link(
                            CHtml::image(Yii::app()->baseUrl . '/images/btn_edit.gif', 'Eliminar ' . $producto['producto_nombre'], array('title' => 'Editar ' . $producto['producto_nombre'])),
                            array('carro/listarProductosCarro', 'id' => $producto['producto_id'])
                        ); ?>
                <?php echo CHtml::link(
                            CHtml::image(Yii::app()->baseUrl . '/images/btn_remove.gif', 'Eliminar ' . $producto['producto_nombre'], array('title' => 'Eliminar ' . $producto['producto_nombre'])),
                            array('carro/eliminarProductoCarro', 'id' => $producto['producto_id'])
                        ); ?>
            </td>
        </tr>
    </table>
    <?php endforeach; ?>
    
    <div class="texto-precio">
        <?php if($_SESSION['total_carro'] >= 20000): ?>
        <?php echo CHtml::link('Realizar Pedido', array('carro/listarProductosCarro'), array('class' => 'button')); ?>
        <?php else: ?>
        Para realizar tu pedido, el total de la compra debe ser mayor a $20.000.-.
        <?php endif; ?>
    </div>
    <?php else: ?>
        No tienes productos en tu carro.
    <?php endif; ?>
</div>
