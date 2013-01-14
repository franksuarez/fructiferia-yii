<div class="grid_24">
	<div class="block-title">Crear Cuenta Cliente</div>
	<div class="block-content">
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'cliente-form',
			'enableAjaxValidation'=>false,
		)); ?>
		
		<div class="form-cuenta-cliente">
			<?php //echo $form->errorSummary($cliente); ?>
			
			<ul>		
				<li>
					<?php echo $form->labelEx($cliente,'cliente_nombre'); ?>
					<?php echo $form->textField($cliente, 'cliente_nombre', array('size'=>60,'maxlength'=>255)); ?>
					<?php echo $form->error($cliente, 'cliente_nombre'); ?></li>
				<li>
					<?php echo $form->labelEx($cliente,'cliente_ape_paterno'); ?>
					<?php echo $form->textField($cliente, 'cliente_ape_paterno', array('size'=>60,'maxlength'=>255)); ?>
					<?php echo $form->error($cliente, 'cliente_ape_paterno'); ?></li>
				<li>
					<?php echo $form->labelEx($cliente,'cliente_ape_materno'); ?>
					<?php echo $form->textField($cliente, 'cliente_ape_materno', array('size'=>60,'maxlength'=>255)); ?>
					<?php echo $form->error($cliente, 'cliente_ape_materno'); ?></li>
				<li>
					<?php echo $form->labelEx($cliente,'cliente_email'); ?>
					<?php echo $form->textField($cliente, 'cliente_email', array('size'=>60,'maxlength'=>255)); ?>
					<?php echo $form->error($cliente, 'cliente_email'); ?></li>
				<li>
					<?php echo $form->labelEx($cliente,'cliente_telefono'); ?>
					<?php echo $form->textField($cliente, 'cliente_telefono', array('size'=>60,'maxlength'=>255)); ?> (Ej. 2222222)
					<?php echo $form->error($cliente, 'cliente_telefono'); ?></li>
				<li>
					<?php echo $form->labelEx($cliente,'cliente_telefono_movil'); ?>
					<?php echo $form->textField($cliente, 'cliente_telefono_movil', array('size'=>60,'maxlength'=>255)); ?> (Ej. 82222222)
					<?php echo $form->error($cliente, 'cliente_telefono_movil'); ?></li>
				<li>
					<?php echo $form->labelEx($cliente,'cliente_password'); ?>
					<?php echo $form->textField($cliente, 'cliente_password', array('size'=>60,'maxlength'=>255)); ?>
					<?php echo $form->error($cliente, 'cliente_password'); ?></li>
				<li>
					<?php echo $form->labelEx($cliente,'password_repeat'); ?>
					<?php echo $form->textField($cliente, 'password_repeat', array('size'=>60,'maxlength'=>255)); ?>
					<?php echo $form->error($cliente, 'password_repeat'); ?></li>
			</ul>
		</div>
		
		<?php echo CHtml::submitButton($cliente->isNewRecord ? 'Registrarse' : 'Actualizar'); ?>
		<?php $this->endWidget(); ?>
	</div>
</div>