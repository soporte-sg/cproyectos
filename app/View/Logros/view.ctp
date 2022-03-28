<div class="logros view">
<h2><?php echo __('Logro'); ?></h2>
	<dl>
	<!--<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($logro['Logro']['id']); ?>
			&nbsp;
		</dd>-->
		<dt><?php echo __('Tarea'); ?></dt>
		<dd>
			<?php echo $this->Html->link($logro['Tarea']['descripcion'], array('controller' => 'tareas', 'action' => 'view', $logro['Tarea']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($logro['Logro']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inicio'); ?></dt>
		<dd>
			<?php echo h($logro['Logro']['inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fin'); ?></dt>
		<dd>
			<?php echo h($logro['Logro']['fin']); ?>
			&nbsp;
		</dd>
		
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Logro'), array('action' => 'edit', $logro['Logro']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Quitar Logro'), array('action' => 'delete', $logro['Logro']['id']), array(), __('Are you sure you want to delete # %s?', $logro['Logro']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Logros'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Logro'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Tareas'), array('controller' => 'tareas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Tarea'), array('controller' => 'tareas', 'action' => 'add')); ?> </li>
	</ul>
</div>
