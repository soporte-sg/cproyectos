<div class="usuarios view">
<h2><?php echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Identificacion'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['identificacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['correo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipousuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usuario['Tipousuario']['id'], array('controller' => 'tipousuarios', 'action' => 'view', $usuario['Tipousuario']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usuario'), array('action' => 'edit', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Usuario'), array('action' => 'delete', $usuario['Usuario']['id']), array(), __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipousuarios'), array('controller' => 'tipousuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipousuario'), array('controller' => 'tipousuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tareas'), array('controller' => 'tareas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tarea'), array('controller' => 'tareas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tareas'); ?></h3>
	<?php if (!empty($usuario['Tarea'])): ?>
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
	<?php foreach ($usuario['Tarea'] as $tarea): ?>
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
