<div class="grid_24">
    <div class="block-title">Contacto</div>
    <div class="block-content">
        <?php
        /* @var $this SiteController */
        /* @var $model ContactForm */
        /* @var $form CActiveForm */

        $this->pageTitle = Yii::app()->name . ' - Contact Us';
        $this->breadcrumbs = array(
            'Contact',
        );
        ?>

        <h1>Contactenos</h1>

            <?php if (Yii::app()->user->hasFlash('contact')): ?>

            <div class="flash-success">
                <?php echo Yii::app()->user->getFlash('contact'); ?>
            </div>

            <?php else: ?>

            <p>
                Si tienes alguna inquietud o pregunta sobre nuestro negocio, por favor llena el siguiente formulario para contactarnos. Gracias.
            </p>
            
            <div style="height: 10px;"></div>

            <div class="form">

                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'contact-form',
                    'enableClientValidation' => true,
                    'clientOptions' => array(
                        'validateOnSubmit' => true,
                    ),
                ));
                ?>

                <p class="note-msg">Campos con <span class="required">*</span> son obligatorios.</p>
                
                <div style="height: 10px;"></div>

                    <?php //echo $form->errorSummary($model); ?>

                <div class="row">
                    <?php echo $form->labelEx($model, 'name'); ?>
                    <?php echo $form->textField($model, 'name'); ?>
                    <?php echo $form->error($model, 'name'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model, 'email'); ?>
                    <?php echo $form->textField($model, 'email'); ?>
                    <?php echo $form->error($model, 'email'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model, 'subject'); ?>
                    <?php echo $form->textField($model, 'subject', array('size' => 60, 'maxlength' => 128)); ?>
                    <?php echo $form->error($model, 'subject'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model, 'body'); ?>
                    <?php echo $form->textArea($model, 'body', array('rows' => 6, 'cols' => 50)); ?>
                    <?php echo $form->error($model, 'body'); ?>
                </div>

                    <?php if (CCaptcha::checkRequirements()): ?>
                    <div class="row">
                            <?php echo $form->labelEx($model, 'verifyCode'); ?>
                        <div>
                        <?php $this->widget('CCaptcha', array(
                            'buttonLabel' => 'Nuevo código'
                        )); ?>
                        <?php echo $form->textField($model, 'verifyCode'); ?>
                        </div>
                        <div class="hint">Por favor escribe las letras de la imagen en el campo de texto.
                            <br/>Letras no son case-sensitive.</div>
                    <?php echo $form->error($model, 'verifyCode'); ?>
                    </div>
                    <?php endif; ?>

                <div class="row buttons">
                <?php echo CHtml::submitButton('Enviar'); ?>
                </div>

            <?php $this->endWidget(); ?>

            </div><!-- form -->

    <?php endif; ?>
    </div>
</div>