<div class="logros form">
<?php echo $this->Form->create('Logro', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Logro'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tarea_id');
        echo $this->Form->input('filename', array("class"=>"form-control", "type"=>"file","label"=>"Imagen del producto"));
        echo $this->Form->input('dir', array("type"=>"hidden"));
         
		echo $this->Form->input('descripcion');
		echo $this->Form->input('inicio');
		echo $this->Form->input('fin');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Logro.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Logro.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Logros'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tareas'), array('controller' => 'tareas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tarea'), array('controller' => 'tareas', 'action' => 'add')); ?> </li>
	</ul>
</div>
