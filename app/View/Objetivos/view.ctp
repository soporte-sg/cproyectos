<div class="objetivos view">
<h2><?php echo __('Objetivo'); ?></h2>
	<dl>
		<!--<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($objetivo['Objetivo']['id']); ?>
			&nbsp;
		</dd>-->
		<dt><?php echo __('Proyecto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($objetivo['Proyecto']['nombre'], array('controller' => 'proyectos', 'action' => 'view', $objetivo['Proyecto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($objetivo['Objetivo']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inicio'); ?></dt>
		<dd>
			<?php echo h($objetivo['Objetivo']['inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fin'); ?></dt>
		<dd>
			<?php echo h($objetivo['Objetivo']['fin']); ?>
			&nbsp;
		</dd>
	<!--	<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($objetivo['Objetivo']['created']); ?>
			&nbsp;
		</dd>-->
	</dl>
</div>
<?php if($rol==1 or $rol==2): ?>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Objetivo'), array('action' => 'edit', $objetivo['Objetivo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Quitar Objetivo'), array('action' => 'delete', $objetivo['Objetivo']['id']), array(), __('Are you sure you want to delete # %s?', $objetivo['Objetivo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Objetivos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Objetivo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Tareas'), array('controller' => 'tareas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Tarea'), array('controller' => 'tareas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<?php endif; ?>
<div class="related">
	<h3><?php echo __('Tareas para Cumplir el Objetivo'); ?></h3>
	<?php if (!empty($objetivo['Tarea'])): 
//debug($objetivo['Tarea']);?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!--<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>-->
		<th><?php echo __('Descripción'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Soporte'); ?></th>
		<th><?php echo __('Inicio'); ?></th>
		<th><?php echo __('Fin'); ?></th>
		
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($objetivo['Tarea'] as $tarea): ?>
		<tr>
			<!--<td><?php echo $tarea['id']; ?></td>
			<td><?php echo $tarea['usuario_id']; ?></td>-->
			<td><?php echo ucfirst(strtolower($tarea['descripcion'])); ?></td>
			<td><?php 
			       if($tarea['estado_id']==1){ echo "Abierto" ;}else{ echo "Cerrado";}
			?></td>
			<td><?php 
			        foreach($logros as $logro){
			            if($tarea['id']==$logro['Logro']['tarea_id']){
			                 $nombre= $logro['Logro']['filename'];
			                echo $this->Html->link($nombre,'../img/uploads/logro/filename/'.$nombre,array('class' => 'button', 'target' => '_blank'));
			            }
			        }
			?></td>
			<td><?php echo $tarea['inicio']; ?></td>
			<td><?php echo $tarea['fin']; ?></td>
			
			<td class="actions">
				<?php echo $this->Html->link(__('Gestionar'), array('controller' => 'tareas', 'action' => 'view', $tarea['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'tareas', 'action' => 'edit', $tarea['id'])); ?>
				<?php echo $this->Form->postLink(__('Quitar'), array('controller' => 'tareas', 'action' => 'delete', $tarea['id']), array(), __('Are you sure you want to delete # %s?', $tarea['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nueva Tarea'), array('controller' => 'tareas', 'action' => 'add'.'/'.$objetivo['Objetivo']['id'])); ?> </li>
		</ul>
	</div>
</div>
