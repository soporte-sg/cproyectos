<div class="tareas form">
<?php echo $this->Form->create('Tarea', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Editar Tarea'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('objetivo_id');
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('estado_id');
		echo $this->Form->input('inicio');
		echo $this->Form->input('fin');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $this->Form->value('Tarea.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Tarea.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Tareas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Objetivos'), array('controller' => 'objetivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Objetivo'), array('controller' => 'objetivos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Logros'), array('controller' => 'logros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Logro'), array('controller' => 'logros', 'action' => 'add')); ?> </li>
	</ul>
</div>
