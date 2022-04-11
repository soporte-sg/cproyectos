<div class="tipoUsuarios index">
	<h2><?php echo __('Tipo Usuarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('rol'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($roles as $role): ?>
	<tr>
		<td><?php echo h($role['Role']['id']); ?>&nbsp;</td>
		<td><?php echo h($role['Role']['rol']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $role['Role']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $role['Role']['id'])); ?>
			<!-- <?php echo $this->Form->postLink(__('Quitar'), array('action' => 'delete', $role['Role']['id']), array(), __('Estas seguro de eliminar # %s?', $role['Role']['id'])); ?> -->
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
		<li><?php echo $this->Html->link(__('Nuevo Tipo Usuario'), array('action' => 'add')); ?></li>
	</ul>
</div>
