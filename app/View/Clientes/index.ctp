<div class="clientes index">
	<h2><?php echo __('Clientes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<!--<th><?php echo $this->Paginator->sort('id'); ?></th>-->
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('nit'); ?></th>
			<th><?php echo $this->Paginator->sort('ubicacion'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clientes as $cliente): ?>
	<tr>
		<!--<td><?php echo h($cliente['Cliente']['id']); ?>&nbsp;</td>-->
		<td><?php echo h($cliente['Cliente']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['nit']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['ubicacion']); ?>&nbsp;</td>

		<td class="actions">
			<?php echo $this->Html->link(__('Gestionar'), array('action' => 'view', $cliente['Cliente']['id'])); ?>
			<?php if($rol==1){ echo $this->Html->link(__('Editar'), array('action' => 'edit', $cliente['Cliente']['id']));} ?>
			<?php if($rol==1){ echo $this->Html->link(__('Informe'), array('action' => 'informe', $cliente['Cliente']['id']));} ?>
			<?php

			if($rol==1){ echo $this->Form->postLink(__('Quitar'), array('action' => 'delete', $cliente['Cliente']['id']), array(), __('Are you sure you want to delete # %s?', $cliente['Cliente']['id']));} ?>
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
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>


		<li><?php 

		if($rol==1){
			echo $this->Html->link(__('Nuevo Cliente'), array('action' => 'add'));}
			 ?>
			 	
			 </li>
		<li><?php echo $this->Html->link(__('Listar Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php
if($rol==1){
		 echo $this->Html->link(__('Nuevo Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); 


}
		 ?> </li>
		 <li>
		 <?php
if($rol==1){
		echo $this->Html->link(__('Listar Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); 

		 
}
		 ?> </li>
	</ul>
</div>
