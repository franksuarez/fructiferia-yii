<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'agregar-direccion-cliente-form',
	'enableAjaxValidation'=>false,
)); ?>
    <p class="note">Campos con <span class="required">*</span> son obligatorios.</p>
    <div class="form">
        <ul>		
            <li>
                <?php echo $form->labelEx($direccion,'direccion_descripcion'); ?>
		<?php echo $form->textField($direccion,'direccion_descripcion', array('size'=>60,'maxlength'=>255)); ?></li>
            <li>
                <?php echo $form->labelEx($direccion,'comuna_id'); ?>
		<?php echo $form->dropDownList($direccion,'comuna_id', CHtml::listData(Comuna::model()->findAll(), 'comuna_id', 'comuna_nombre')); ?></li>
            <li>
                <?php echo CHtml::submitButton('Agregar Dirección'); ?></li>
        </ul>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->