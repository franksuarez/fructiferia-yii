<div class="grid_24">
	<div class="block-title">Productos en el Carro</div>
	<div class="block-content">
		<div style="width: 100%;">
			<table id="grid_productos_carro">
				<tr>
					<th class="imagen">&nbsp;</th>
					<th class="nombre">Nombre Producto</th>
					<th class="precio_unitario">Precio Unitario</th>
					<th class="precio_unitario">Cantidad</th>
					<th class="subtotal">Sub Total</th>
					<th class="eliminar">&nbsp;</th>
				</tr>
				<?php foreach($_SESSION['carro'] as $key => $producto): ?>
				<tr>
					<td class="imagen_p">
						<?php echo CHtml::image(Yii::app()->baseUrl . '/images/productos/' . $producto['imagen_nombre']); ?>
					</td>
					<td style="text-align: left;"><?php echo $producto['producto_nombre']; ?></td>
					<td>
						$<?php echo number_format($producto['producto_precio'], 0, ',', '.'); ?>
					</td>
					<td>
						<input type="text" name="Carro[cantidad]" value="1"
					</td>
					<td>
						$<?php echo number_format(($producto['producto_precio'] * $producto['producto_cantidad']), 0, ',', '.'); ?>
					</td>
					<td>
						<?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl . '/images/trash_16x16_2.gif', 'Eliminar Producto'), array()) ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>