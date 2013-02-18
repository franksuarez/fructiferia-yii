<?php if (count($_SESSION['carro']) > 0): ?>
    <?php foreach ($_SESSION['carro'] as $key => $producto): ?>
    <table class="box-carro">
        <tr>
            <td colspan="3" class="cantidad-productos">
                Tienes <strong><?php echo count($_SESSION['carro']); ?> productos</strong> en tu carro.
            </td>
        </tr>
        <tr>
            <td class="imagen-producto">
                <img class="imagen" src="<?php echo Yii::app()->baseUrl; ?>/images/productos/<?php echo $producto['imagen_nombre']; ?>"
            </td>
            <td class="nombre-producto">
                <?php echo $producto['producto_nombre']; ?>
            </td>
            <td class="botones-producto">
                &nbsp;
            </td>
        </tr>
    </table>
    <?php endforeach; ?>
<?php else: ?>
    No tienes productos en tu carro.
<?php endif; ?>
