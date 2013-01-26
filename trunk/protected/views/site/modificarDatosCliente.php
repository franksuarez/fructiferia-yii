<?php if(isset($_SESSION['Cliente'])): ?>
<div class="grid_17">
	<div class="block-title">Panel de Control Clientes</div>
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
			</ul>
		</div>
		
		<?php echo CHtml::submitButton('Actualizar'); ?>
		<?php $this->endWidget(); ?>
	</div>
</div>

<div class="grid_7">
	<div class="block-title">Menú</div>
	<div class="block-content">
		<ul id="menu_panel_control">
			<?php foreach($menuPanel as $menu): ?>
			<li>
			<?php echo CHtml::link($menu->menu_panel_control_cliente_nombre, array($menu->menu_panel_control_cliente_url)); ?>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
<?php else: ?>
<div class="grid_24">
	<div class="block-title">Panel de Control Clientes</div>
	<div class="block-content">Debe iniciar sesión para ver su panel de control.</div>
</div>
<?php endif; ?>