<div class="grid_24">
	<div class="block-title">Iniciar Sesión</div>
	<div class="block-content">
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'cliente-form',
			'enableAjaxValidation'=>false,
		)); ?>
		
		<div class="form-login-cliente">
			<ul>		
				<li>
					<label for="Cliente_cliente_email" class="required">E-Mail <span class="required">*</span></label>
					<input size="60" maxlength="255" name="Cliente[cliente_email]" id="Cliente_cliente_email" type="text">
				</li>
				<li>
					<label for="Cliente_cliente_password" class="required">Password <span class="required">*</span></label>
					<input size="60" maxlength="255" name="Cliente[cliente_password]" id="Cliente_cliente_password" type="password">
				</li>
			</ul>
		</div>
		
		<?php echo CHtml::submitButton('Iniciar Sesión'); ?>
		<?php $this->endWidget(); ?>
	</div>
</div>