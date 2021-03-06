<div class="logros index">
	<h2><?php echo __('Logros'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tarea_id'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('fin'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($logros as $logro): ?>
	<tr>
		<td><?php echo h($logro['Logro']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($logro['Tarea']['id'], array('controller' => 'tareas', 'action' => 'view', $logro['Tarea']['id'])); ?>
		</td>
		<td><?php echo h($logro['Logro']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($logro['Logro']['inicio']); ?>&nbsp;</td>
		<td><?php echo h($logro['Logro']['fin']); ?>&nbsp;</td>
		<td><?php echo h($logro['Logro']['created']); ?>&nbsp;</td>
		<td><?php echo h($logro['Logro']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $logro['Logro']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $logro['Logro']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $logro['Logro']['id']), array(), __('Are you sure you want to delete # %s?', $logro['Logro']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registros de {:count} en total, empezando en el registro {:start}, y terminando en {:end}')
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
		<li><?php echo $this->Html->link(__('Nuevo Logro'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Tareas'), array('controller' => 'tareas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Tarea'), array('controller' => 'tareas', 'action' => 'add')); ?> </li>
	</ul>
</div>
