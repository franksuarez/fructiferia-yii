<div class="grid_24">
    <div class="block-title">Productos en el Carro</div>
    <div class="block-content">
        <div style="width: 100%;">
            <?php if (count($_SESSION['carro']) > 0): ?>
                <form id="form_actualizar_carro" method="post" action="<?php echo Yii::app()->baseUrl ?>/carro/actualizarProductosCarro">
                    <table id="grid_productos_carro">
                        <tr>
                            <th class="imagen">&nbsp;</th>
                            <th class="nombre">Nombre Producto</th>
                            <th class="precio_unitario">Precio Unitario</th>
                            <th class="precio_unitario">Cantidad</th>
                            <th class="subtotal">Sub Total</th>
                            <th class="eliminar">&nbsp;</th>
                        </tr>
                        <?php foreach ($_SESSION['carro'] as $key => $producto): ?>
                            <tr>
                                <td class="imagen_p">
                                    <?php echo CHtml::image(Yii::app()->baseUrl . '/images/productos/' . $producto['imagen_nombre']); ?>
                                </td>
                                <td style="text-align: left;"><?php echo $producto['producto_nombre']; ?></td>
                                <td>
                                    $<?php echo number_format($producto['producto_precio'], 0, ',', '.'); ?>
                                </td>
                                <td>
                                    <input type="hidden" name="Carro[<?php echo $producto['producto_id']; ?>][idproducto]" value="<?php echo $producto['producto_id']; ?>" />
                                    <input type="text" name="Carro[<?php echo $producto['producto_id']; ?>][cantidad]" value="<?php echo $producto['producto_cantidad']; ?>" />
                                </td>
                                <td>
                                    $<?php echo number_format(($producto['producto_precio'] * $producto['producto_cantidad']), 0, ',', '.'); ?>
                                </td>
                                <td>
                                    <?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl . '/images/trash_16x16_2.gif', 'Eliminar Producto'), array('eliminarProductoCarro', 'id' => $producto['producto_id'])) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="6" style="background-color: #F1F1F1;">
                                <div style="float: left; width: 50%; text-align: left;">
                                    <?php echo CHtml::link('Continuar Comprando', array('/'), array('class' => 'button')); ?>
                                </div>

                                <div style="float: left; width: 50%; text-align: right;">
                                    <a href="javascript:actualizarProductosCarro();" class="button">Actualizar Carro</a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>

                <ul id="total_compra">
                    <li class="relacionados">&nbsp;</li>
                    <li class="cupondireccion">&nbsp;</li>
                    <li class="total_compra">
                        <div class="precio_total_compra">
                            <table style="width: 100%;">
                                <tr>
                                    <td style="vertical-align: middle;">TOTAL COMPRA</td>
                                    <td style="text-align: right;">
                                        <span class="txt_precio_total">$<?php echo number_format($_SESSION['total_carro'], 0, ',', '.'); ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align: right;">
                                        <a href="" class="button">Finalizar Pedido</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </li>
                </ul>
            <?php else: ?>
                No tienes productos en tu carro.
            <?php endif; ?>
        </div>

        <div class="clear"></div>
    </div>
</div>