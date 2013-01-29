<div class="grid_24">
    <div class="block-title">Productos en el Carro</div>
    <div class="block-content">
        <div style="width: 100%;">
            <?php if (count($_SESSION['carro']) > 0): ?>
                <?php if(Yii::app()->user->hasFlash('productoAgregadoCarro')):?>
                <ul class="messages">
                    <li class="success-msg">
                        <ul>
                            <li><span><?php echo Yii::app()->user->getFlash('productoAgregadoCarro'); ?></span></li>
                        </ul>
                    </li>
                </ul>
                <?php endif; ?>
                <?php if(Yii::app()->user->hasFlash('productosCarroActualizados')):?>
                <ul class="messages">
                    <li class="success-msg">
                        <ul>
                            <li><span><?php echo Yii::app()->user->getFlash('productosCarroActualizados'); ?></span></li>
                        </ul>
                    </li>
                </ul>
                <?php endif; ?>
                <?php if(Yii::app()->user->hasFlash('productoCarroEliminado')):?>
                <ul class="messages">
                    <li class="success-msg">
                        <ul>
                            <li><span><?php echo Yii::app()->user->getFlash('productoCarroEliminado'); ?></span></li>
                        </ul>
                    </li>
                </ul>
                <?php endif; ?>
                <?php if(Yii::app()->user->hasFlash('productoCarroNoExiste')):?>
                <ul class="messages">
                    <li class="error-msg">
                        <ul>
                            <li><span><?php echo Yii::app()->user->getFlash('productoCarroNoExiste'); ?></span></li>
                        </ul>
                    </li>
                </ul>
                <?php endif; ?>
                
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
                                    <?php echo CHtml::link('Vaciar Carro', array('carro/vaciarCarro'), array('class' => 'button', 'confirm' => '¿Estás seguro que quieres eliminar los producto de tu carro?.')); ?>
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
                            </table>
                        </div>
                    </li>
                </ul>

                <div class="clear"></div>
                
                <div style="height: 20px;"></div>
                <?php if(isset($_SESSION['Cliente'])): ?>
                    <?php if($_SESSION['total_carro'] >= 20000): ?>
                    <div style="width: 870px; margin: 0 auto;">
                        <form name="frm-pedido" id="frm-pedido" action="<?php echo Yii::app()->baseUrl ?>/carro/finalizarPedido" method="post">
                        <table style="width: 100%; margin: 0 auto;">
                            <tr>
                                <td>Dirección de Envío</td>
                                <td>
                                    <select name="Pedido[direcciones]">
                                        <?php foreach ($direcciones as $direccion): ?>
                                            <option value="<?php echo $direccion->direccion_id; ?>"><?php echo $direccion->direccion_descripcion; ?>, <?php echo $direccion->comuna->comuna_nombre; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Tipo Documento</td>
                                <td>
                                    <select name="Pedido[tiposDocumento]">
                                        <?php foreach ($tiposDocumento as $tipoDocumento): ?>
                                            <option value="<?php echo $tipoDocumento->tipo_documento_id; ?>"><?php echo $tipoDocumento->tipo_documento_nombre; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Forma de Pago</td>
                                <td>
                                    <select name="Pedido[formaPago]">
                                        <?php foreach ($formasPago as $formaPago): ?>
                                            <option value="<?php echo $formaPago->forma_pago_id; ?>"><?php echo $formaPago->forma_pago_nombre; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <?php echo CHtml::link('Finalizar Pedido', 'javascript:finalizarPedido();', array('class' => 'button', 'confirm' => '¿Estás seguro que quieres realizar el pedido?')); ?>
                                </td>
                            </tr>
                        </table>
                        </form>
                    </div>
                    <?php else: ?>
                    <ul class="messages">
                        <li class="error-msg">
                            <ul>
                                <li><span>Para realizar un pedido, el total de tu carro debe ser mayor o igual a $20.000.-</span></li>
                            </ul>
                        </li>
                    </ul>
                    <?php endif; ?>
                <?php else: ?>
                <ul class="messages">
                    <li class="error-msg">
                        <ul>
                            <li><span>Debes iniciar sesión para realizar un pedido.</span></li>
                        </ul>
                    </li>
                </ul>
                <?php endif; ?>
            <?php else: ?>
                <ul class="messages">
                    <li class="notice-msg">
                        <ul>
                            <li><span>No tienes productos en tu carro.</span></li>
                        </ul>
                    </li>
                </ul>
            <?php endif; ?>
        </div>

        <div class="clear"></div>
    </div>
</div>