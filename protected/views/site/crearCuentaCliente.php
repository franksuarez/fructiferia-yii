<div class="grid_24">
    <div class="block-title">Crear Cuenta Cliente</div>
    <div class="block-content">
        <h1>Crear una Cuenta</h1>
        
        <p>
            Para realizar pedidos, debes crear una cuenta.
        </p>
        
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'cliente-form',
            'enableAjaxValidation' => false,
                ));
        ?>
        <div style="height: 10px;"></div>
        
        <p class="note-msg">Campos con <span class="required">*</span> son obligatorios.</p>
        <div style="height: 10px;"></div>

        <div class="form">
<?php //echo $form->errorSummary($cliente);  ?>
            
            <div class="row">
                <?php echo $form->labelEx($cliente, 'cliente_nombre'); ?>
                    <?php echo $form->textField($cliente, 'cliente_nombre', array('maxlength' => 255)); ?>
                    <?php echo $form->error($cliente, 'cliente_nombre'); ?>
            </div>
            
            <div class="row">
                <?php echo $form->labelEx($cliente, 'cliente_ape_paterno'); ?>
                    <?php echo $form->textField($cliente, 'cliente_ape_paterno', array('maxlength' => 255)); ?>
                    <?php echo $form->error($cliente, 'cliente_ape_paterno'); ?>
            </div>
            
            <div class="row">
                <?php echo $form->labelEx($cliente, 'cliente_ape_materno'); ?>
                    <?php echo $form->textField($cliente, 'cliente_ape_materno', array('maxlength' => 255)); ?>
                    <?php echo $form->error($cliente, 'cliente_ape_materno'); ?>
            </div>
            
            <div class="row">
                <?php echo $form->labelEx($cliente, 'cliente_email'); ?>
                    <?php echo $form->textField($cliente, 'cliente_email', array('maxlength' => 255)); ?>
                    <?php echo $form->error($cliente, 'cliente_email'); ?>
            </div>
            
            <div class="row">
                <?php echo $form->labelEx($cliente, 'cliente_telefono'); ?>
                    <?php echo $form->textField($cliente, 'cliente_telefono', array('maxlength' => 255)); ?>
                    <?php echo $form->error($cliente, 'cliente_telefono'); ?>
            </div>
            
            <div class="row">
                <?php echo $form->labelEx($cliente, 'cliente_telefono_movil'); ?>
                    <?php echo $form->textField($cliente, 'cliente_telefono_movil', array('maxlength' => 255)); ?>
                    <?php echo $form->error($cliente, 'cliente_telefono_movil'); ?>
            </div>
            
            <div class="row">
                <?php echo $form->labelEx($cliente, 'cliente_password'); ?>
                    <?php echo $form->passwordField($cliente, 'cliente_password', array('maxlength' => 255)); ?>
                    <?php echo $form->error($cliente, 'cliente_password'); ?>
            </div>
            
            <div class="row">
                <?php echo $form->labelEx($cliente, 'password_repeat'); ?>
                    <?php echo $form->passwordField($cliente, 'password_repeat', array('maxlength' => 255)); ?>
                    <?php echo $form->error($cliente, 'password_repeat'); ?>
            </div>
            
            <div class="row">
                <?php echo $form->labelEx($cliente, 'password_repeat'); ?>
                    <?php echo $form->passwordField($cliente, 'password_repeat', array('maxlength' => 255)); ?>
                    <?php echo $form->error($cliente, 'password_repeat'); ?>
            </div>
            
            <div class="row buttons">
                <?php echo CHtml::submitButton($cliente->isNewRecord ? 'Registrarse' : 'Actualizar'); ?>
            </div>
        </div>
<?php $this->endWidget(); ?>

        <div class="clear"></div>
    </div>
</div>