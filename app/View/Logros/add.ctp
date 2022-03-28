<div class="logros form">
<?php echo $this->Form->create('Logro', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Agregar Logro'); ?></legend>
	<?php
		echo $this->Form->input('tarea_id');
		echo $this->Form->input('descripcion', array( 'type' => 'textarea'));
		echo $this->Form->input('filename', array("class"=>"form-control", "type"=>"file","label"=>"Imagen del producto"));
		echo $this->Form->input('dir', array("type"=>"hidden"));
		echo $this->Form->input('inicio');
		echo $this->Form->input('fin');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Agregar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Logros'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Tareas'), array('controller' => 'tareas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Tarea'), array('controller' => 'tareas', 'action' => 'add')); ?> </li>
	</ul>
</div>
