<div class="tipoUsuarios form">
<?php echo $this->Form->create('Role'); ?>
	<fieldset>
		<legend><?php echo __('Editar Tipo de Usuario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('TipoUsuario.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('TipoUsuario.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Lista Tipo de Usuarios'), array('action' => 'index')); ?></li>
	</ul>
</div>
