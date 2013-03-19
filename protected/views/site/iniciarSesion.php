<div class="grid_24">

    <div class="block-title">Iniciar Sesión</div>
    <div class="block-content">
        <div style="float: left; width: 50%;">
            <h2>Nuevos Clientes</h2>
            
            <p>
                Para poder realizar pedidos en nuestra tienda virtual, debes crear una cuenta.<br />
            </p>
            
            <div style="text-align: right; margin: 102px 20px 0px 0px;">
                <?php echo CHtml::link('Crear una Cuenta', array('site/crearCuentaCliente'), array('class' => 'button')); ?>
            </div>
        </div>

        <div style="float: left; width: 50%;">
            <h2>Usuarios Registrados</h2>
            
            <p>Si ya tiene una cuenta con nosotros, inicia sesión.</p>
            <div style="height: 10px;"></div>
            
            <?php if(Yii::app()->user->hasFlash('error')): ?>
            <div class="error-msg">
                <?php echo Yii::app()->user->getFlash('error'); ?>
            </div>
            
            <div style="height: 10px;"></div>
            <?php endif; ?>
            
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'cliente-form',
                'enableAjaxValidation' => false,
                    ));
            ?>
            <div class="form">
                <?php //echo $form->errorSummary($cliente); ?>

                <ul>		
                    <li>
                        <?php echo $form->labelEx($inicioSesionForm, 'email'); ?>
                        <?php echo $form->textField($inicioSesionForm, 'email', array('size' => 35, 'maxlength' => 255)); ?>
                        <?php echo $form->error($inicioSesionForm, 'email'); ?><li>
                    <li>
                        <?php echo $form->labelEx($inicioSesionForm, 'password'); ?>
                        <?php echo $form->passwordField($inicioSesionForm, 'password', array('size' => 35, 'maxlength' => 255)); ?>
                        <?php echo $form->error($inicioSesionForm, 'password'); ?></li>
                    <li>
                        <?php echo CHtml::submitButton('Iniciar Sesión'); ?></li>
                </ul>
                <?php $this->endWidget(); ?>
            </div>
        </div>

        <div class="clear"></div>
    </div>
</div>