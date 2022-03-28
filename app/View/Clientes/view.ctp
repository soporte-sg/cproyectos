<div class="clientes view">
<h2><?php echo __('Cliente'); ?></h2>
	<dl>
		<!--<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['id']); ?>
			&nbsp;
		</dd>-->
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nit'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['nit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ubicacion'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['ubicacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<?php

if($rol==1 or $rol==2):?>
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Cliente'), array('action' => 'edit', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Quitar Cliente'), array('action' => 'delete', $cliente['Cliente']['id']), array(), __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Cliente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
<?php endif;?>
</div>
<div class="related">
	<h3><?php echo __('Proyectos').' de '. $cliente['Cliente']['nombre'] ; ?></h3>
	<?php if (!empty($cliente['Proyecto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Detalles'); ?></th>
		<th><?php echo __('Objetivo'); ?></th>
		<th><?php echo __('Inicio'); ?></th>
		<th><?php echo __('Terminación'); ?></th>
		
		
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($cliente['Proyecto'] as $proyecto): ?>
		<tr>
			<td><?php echo $proyecto['id']; ?></td>
			<td><?php echo $proyecto['nombre']; ?></td>
			<td><?php echo $proyecto['objetivo']; ?></td>
			<td><?php echo $proyecto['detalles']; ?></td>
			<td><?php echo $proyecto['inicio']; ?></td>
			<td><?php echo $proyecto['terminacion']; ?></td>
			
			
			<td class="actions">
				<?php echo $this->Html->link(__('Gestionar'), array('controller' => 'proyectos', 'action' => 'view', $proyecto['id'])); ?>
				<?php 

				 if($rol==1 or $rol==2){ echo $this->Html->link(__('Editar'), array('controller' => 'proyectos', 'action' => 'edit', $proyecto['id']));} ?>
				<?php  if($rol==1 or $rol==2){ echo $this->Form->postLink(__('Quitar'), array('controller' => 'proyectos', 'action' => 'delete', $proyecto['id']), array(), __('Are you sure you want to delete # %s?', $proyecto['id']));} ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; 
 ?>
	<div class="actions">
		<ul>
<li><?php  if($rol==1 or $rol==2){ echo $this->Html->link(__('Agregar Proyecto'), array('controller' => 'proyectos', 'action' => 'add'));} ?> </li>
		</ul>
	</div>
</div>
