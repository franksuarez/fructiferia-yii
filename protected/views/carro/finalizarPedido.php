<div class="grid_24">
    <div class="block-container">
        <div class="block-title">Finalizar Pedido</div>
        <div class="block-content">
            <?php if(isset($_SESSION['Cliente'])): ?>
                <?php if(Yii::app()->user->hasFlash('pedidoRealizadoCorrecto')):?>
                <ul class="messages">
                    <li class="success-msg">
                        <ul>
                            <li><span><?php echo Yii::app()->user->getFlash('pedidoRealizadoCorrecto'); ?></span></li>
                        </ul>
                    </li>
                </ul>
                <?php endif; ?>
                <?php if(Yii::app()->user->hasFlash('pedidoRealizadoError')):?>
                <ul class="messages">
                    <li class="error-msg">
                        <ul>
                            <li><span><?php echo Yii::app()->user->getFlash('pedidoRealizadoError'); ?></span></li>
                        </ul>
                    </li>
                </ul>
                <?php endif; ?>
                <?php if(Yii::app()->user->hasFlash('pedidoCarroVacio')):?>
                <ul class="messages">
                    <li class="error-msg">
                        <ul>
                            <li><span><?php echo Yii::app()->user->getFlash('pedidoCarroVacio'); ?></span></li>
                        </ul>
                    </li>
                </ul>
                <?php endif; ?>
            <?php else: ?>
            Debe iniciar sesión para realizar su pedido.
            <?php endif; ?>
        </div>
    </div>
</div>