<div class="objetivos form">
<?php echo $this->Form->create('Objetivo'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Objetivo'); ?></legend>
	<?php
		echo $this->Form->input('proyecto_id',array('value'=>$id));
		echo $this->Form->input('descripcion');
		echo $this->Form->input('inicio');
		echo $this->Form->input('fin');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Accion'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Objetivos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tareas'), array('controller' => 'tareas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tarea'), array('controller' => 'tareas', 'action' => 'add')); ?> </li>
	</ul>
</div>
