<div class="proyectos index">
	<h2><?php echo __('Proyectos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('detalles'); ?></th>
			<th><?php echo $this->Paginator->sort('Objetivo General'); ?></th>
			<th><?php echo $this->Paginator->sort('inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('terminación'); ?></th>
			
			<!--<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>-->
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($proyectos as $proyecto): ?>
	<tr>
		
		<td>
			<?php echo $this->Html->link($proyecto['Cliente']['nombre'], array('controller' => 'clientes', 'action' => 'view', $proyecto['Cliente']['id'])); ?>
		</td>
		<td><?php echo  ucfirst(strtolower($proyecto['Proyecto']['nombre'])); ?>&nbsp;</td>
		<td><?php echo ucfirst(strtolower($proyecto['Proyecto']['objetivo'])); ?>&nbsp;</td>
		<td><?php echo ucfirst(strtolower($proyecto['Proyecto']['detalles'])); ?>&nbsp;</td>
	
		<td><?php echo h($proyecto['Proyecto']['inicio']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['terminacion']); ?>&nbsp;</td>
		
		<!--<td><?php echo h($proyecto['Proyecto']['created']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['modified']); ?>&nbsp;</td>-->
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $proyecto['Proyecto']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $proyecto['Proyecto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $proyecto['Proyecto']['id']), array(), __('Are you sure you want to delete # %s?', $proyecto['Proyecto']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pag {:page} of {:pages}, Mostrando {:current} registros del {:count} total, Empezando en  {:start}, terminando en {:end}')
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
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
	    <li><?php echo $this->Html->link(__('Nuevo Proyecto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Objetivos'), array('controller' => 'objetivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Objetivo'), array('controller' => 'objetivos', 'action' => 'add')); ?> </li>
	</ul>
</div>
