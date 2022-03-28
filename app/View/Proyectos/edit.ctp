<div class="proyectos form">
<?php echo $this->Form->create('Proyecto'); ?>
	<fieldset>
		<legend><?php echo __('Editar Información de Proyecto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('cliente_id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('objetivo', array('type' => 'textarea'));
		echo $this->Form->input('detalles', array('type' => 'textarea'));
		echo $this->Form->input('inicio');
		echo $this->Form->input('terminacion');
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Quitar'), array('action' => 'delete', $this->Form->value('Proyecto.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Proyecto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Proyectos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Objetivos'), array('controller' => 'objetivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Objetivo'), array('controller' => 'objetivos', 'action' => 'add')); ?> </li>
	</ul>
</div>
