<div class="tipoUsuarios view">
<h2><?php echo __('Tipo Usuario'); ?></h2>
	<dl>
		
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($roles['Role']['rol']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Tipo de Usuario'), array('action' => 'edit', $roles['Role']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Tipo de Usuario'), array('action' => 'delete', $roles['Role']['id']), array(), __('Are you sure you want to delete # %s?', $roles['Role']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Tipo de Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Tipo de Usuario'), array('action' => 'add')); ?> </li>
	</ul>
</div>
