<div class="tareas index">
	<h2><?php echo __('Tareas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('objetivo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_id'); ?></th>
			<th><?php echo $this->Paginator->sort('inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('fin'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tareas as $tarea): ?>
	<tr>
		<td><?php echo h($tarea['Tarea']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tarea['Objetivo']['id'], array('controller' => 'objetivos', 'action' => 'view', $tarea['Objetivo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($tarea['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $tarea['Usuario']['id'])); ?>
		</td>
		<td><?php echo h($tarea['Tarea']['descripcion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tarea['Estado']['id'], array('controller' => 'estados', 'action' => 'view', $tarea['Estado']['id'])); ?>
		</td>
		<td><?php echo h($tarea['Tarea']['inicio']); ?>&nbsp;</td>
		<td><?php echo h($tarea['Tarea']['fin']); ?>&nbsp;</td>
		<td><?php echo h($tarea['Tarea']['created']); ?>&nbsp;</td>
		<td><?php echo h($tarea['Tarea']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $tarea['Tarea']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $tarea['Tarea']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $tarea['Tarea']['id']), array(), __('Are you sure you want to delete # %s?', $tarea['Tarea']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registros de {:count} en total, empezando en el registro {:start}, terminando en {:end}')
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
		<li><?php echo $this->Html->link(__('Nueva Tarea'), array('action' => 'add')); ?></li>
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
