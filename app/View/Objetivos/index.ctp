<div class="objetivos index">
	<h2><?php echo __('Objetivos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('proyecto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('fin'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($objetivos as $objetivo): ?>
	<tr>
		<td><?php echo h($objetivo['Objetivo']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($objetivo['Proyecto']['id'], array('controller' => 'proyectos', 'action' => 'view', $objetivo['Proyecto']['id'])); ?>
		</td>
		<td><?php echo h($objetivo['Objetivo']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($objetivo['Objetivo']['inicio']); ?>&nbsp;</td>
		<td><?php echo h($objetivo['Objetivo']['fin']); ?>&nbsp;</td>
		<td><?php echo h($objetivo['Objetivo']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $objetivo['Objetivo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $objetivo['Objetivo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $objetivo['Objetivo']['id']), array(), __('Are you sure you want to delete # %s?', $objetivo['Objetivo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Objetivo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado de Tareas'), array('controller' => 'tareas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Tarea'), array('controller' => 'tareas', 'action' => 'add')); ?> </li>
	</ul>
</div>
