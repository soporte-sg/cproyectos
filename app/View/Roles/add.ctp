<div class="tipoUsuarios form">
<?php echo $this->Form->create('Role'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Tipo de Usuario'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listado de Tipo de Usuarios'), array('action' => 'index')); ?></li>
	</ul>
</div>
