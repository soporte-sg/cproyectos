<div class="tareas form">
<?php echo $this->Form->create('Tarea', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Agregar Tarea'); ?></legend>
		<?php
		echo $this->Form->input('objetivo_id');
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('descripcion',array('type'=>'textarea'));
		echo $this->Form->input('estado_id');
		echo $this->Form->input('inicio');
		echo $this->Form->input('fin');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Agregar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tareas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Objetivos'), array('controller' => 'objetivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Objetivo'), array('controller' => 'objetivos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Logros'), array('controller' => 'logros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Logro'), array('controller' => 'logros', 'action' => 'add')); ?> </li>
	</ul>
</div>
