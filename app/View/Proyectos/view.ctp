<div class="proyectos view">
<h2><?php echo __('Proyecto'); ?></h2>
	<dl>
	<!--<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['id']); ?>
			&nbsp;
		</dd>-->
		<dt><?php echo __('Nombre  del Proyecto'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proyecto['Cliente']['nombre'], array('controller' => 'clientes', 'action' => 'view', $proyecto['Cliente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Objetivo General'); ?></dt>
		<dd>
			<?php echo strtoupper($proyecto['Proyecto']['objetivo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detalles'); ?></dt>
		<dd>
			<?php echo strtolower($proyecto['Proyecto']['detalles']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inicio'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Terminaci&oacute;n'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['terminacion']); ?>
			&nbsp;
		</dd>
		
		
		
	</dl>
</div>
<?php if($rol==1 or $rol==2): ?>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Proyecto'), array('action' => 'edit', $proyecto['Proyecto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Quitar Proyecto'), array('action' => 'delete', $proyecto['Proyecto']['id']), array(), __('Are you sure you want to delete # %s?', $proyecto['Proyecto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Proyectos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Proyecto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Listar Objetivos'), array('controller' => 'objetivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Objetivo'), array('controller' => 'objetivos', 'action' => 'add')); ?> </li>-->
	</ul>
</div>
<?php endif; ?>
<div class="actions">
		<ul>
			<li><?php 
if($rol==1 or $rol==2){
			echo $this->Html->link(__('Agregar Objetivo'), array('controller' => 'objetivos', 'action' => 'add/',$id));  
}
           
?>
		</li>
		<li> <?php echo $this->Html->link(__('Informe Del Proyecto'), array( 'action' => 'informe/',$id)); ?></li>
		</ul>
	</div>
<div class="related">
	<h3><?php echo __('Objetivos del Proyecto'); ?></h3>
	<?php if (!empty($proyecto['Objetivo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!--<th><?php echo __('Id'); ?></th>-->
		
		<th><?php echo __('Descripción'); ?></th>
		<th><?php echo __('Inicio'); ?></th>
		<th><?php echo __('Fin'); ?></th>
		
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($proyecto['Objetivo'] as $objetivo):?>
		<tr>
			<!--<td><?php echo $objetivo['id']; ?></td>-->
			<td><?php echo $objetivo['descripcion']; ?></td>
			
			
			<td><?php echo $objetivo['inicio']; ?></td>
			<td><?php echo $objetivo['fin']; ?></td>
			 
			<td class="actions">
				<?php echo $this->Html->link(__('Gestionar'), array('controller' => 'objetivos', 'action' => 'view', $objetivo['id'])); ?>

				<?php if($rol==1 or $rol==2){ echo $this->Html->link(__('Editar'), array('controller' => 'objetivos', 'action' => 'edit', $objetivo['id']));} ?>
				<?php  if($rol==1 or $rol==2){ echo $this->Form->postLink(__('Quitar'), array('controller' => 'objetivos', 'action' => 'delete', $objetivo['id']), array(), __('Are you sure you want to delete # %s?', $objetivo['id'])); }?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>
