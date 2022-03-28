<div class="tareas view">
<h2><?php echo __('Tarea'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tarea['Tarea']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Objetivo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tarea['Objetivo']['descripcion'], array('controller' => 'objetivos', 'action' => 'view', $tarea['Objetivo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tarea['Usuario']['username'], array('controller' => 'usuarios', 'action' => 'view', $tarea['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($tarea['Tarea']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tarea['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $tarea['Estado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inicio'); ?></dt>
		<dd>
			<?php echo h($tarea['Tarea']['inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fin'); ?></dt>
		<dd>
			<?php echo h($tarea['Tarea']['fin']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<?php if($rol==1 or $rol==2): ?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tarea'), array('action' => 'edit', $tarea['Tarea']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tarea'), array('action' => 'delete', $tarea['Tarea']['id']), array(), __('Are you sure you want to delete # %s?', $tarea['Tarea']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Tareas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Tarea'), array('action' => 'add')); ?> </li>
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
<?php  endif; ?>
<div class="related">
	<h3><?php echo __('Logros de ').' ' .$tarea['Tarea']['descripcion']; ?></h3>
	<?php if (!empty($tarea['Logro'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tarea Id'); ?></th>
		<th><?php echo __('Descripción'); ?></th>
		<th><?php echo __('Inicio'); ?></th>
		<th><?php echo __('Fin'); ?></th>
		
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tarea['Logro'] as $logro): ?>
		<tr>
			<td><?php echo $logro['id']; ?></td>
			<td><?php echo $logro['tarea_id']; ?></td>
			<td><?php echo $logro['descripcion']; ?></td>
			<td><?php echo $logro['inicio']; ?></td>
			<td><?php echo $logro['fin']; ?></td>
			
			<td class="actions">
				<?php echo $this->Html->link(__('Gestionar'), array('controller' => 'logros', 'action' => 'view', $logro['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'logros', 'action' => 'edit', $logro['id'])); ?>
				<?php 
				if($rol==1 or $rol==2){
				echo $this->Form->postLink(__('Quitar'), array('controller' => 'logros', 'action' => 'delete', $logro['id']), array(), __('Are you sure you want to delete # %s?', $logro['id']));} ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Logro'), array('controller' => 'logros', 'action' => 'add'.'/'.$tarea['Tarea']['id'])); ?> </li>
		</ul>
	</div>
</div>
