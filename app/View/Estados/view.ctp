<div class="estados view">
<h2><?php echo __('Estado'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($estado['Estado']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($estado['Estado']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estado'), array('action' => 'edit', $estado['Estado']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estado'), array('action' => 'delete', $estado['Estado']['id']), array(), __('Are you sure you want to delete # %s?', $estado['Estado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tareas'), array('controller' => 'tareas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tarea'), array('controller' => 'tareas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tareas'); ?></h3>
	<?php if (!empty($estado['Tarea'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Objetivo Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Inicio'); ?></th>
		<th><?php echo __('Fin'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estado['Tarea'] as $tarea): ?>
		<tr>
			<td><?php echo $tarea['id']; ?></td>
			<td><?php echo $tarea['objetivo_id']; ?></td>
			<td><?php echo $tarea['usuario_id']; ?></td>
			<td><?php echo $tarea['descripcion']; ?></td>
			<td><?php echo $tarea['estado_id']; ?></td>
			<td><?php echo $tarea['inicio']; ?></td>
			<td><?php echo $tarea['fin']; ?></td>
			<td><?php echo $tarea['created']; ?></td>
			<td><?php echo $tarea['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tareas', 'action' => 'view', $tarea['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tareas', 'action' => 'edit', $tarea['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tareas', 'action' => 'delete', $tarea['id']), array(), __('Are you sure you want to delete # %s?', $tarea['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tarea'), array('controller' => 'tareas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
