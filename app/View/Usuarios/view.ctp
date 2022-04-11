




<div class="usuarios view">
<h2><?php echo __('Usuario'); ?></h2>
	<dl>
		
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['nombres']); ?>
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
		<dt><?php echo __('Tipo Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usuario['Role']['rol'], array('controller' => 'roles', 'action' => 'view', $usuario['Role']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Usuario'), array('action' => 'edit', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Quitar Usuario'), array('action' => 'delete', $usuario['Usuario']['id']), array(), __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Tareas'), array('controller' => 'tareas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Tarea'), array('controller' => 'tareas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Tareas'); ?></h3>
	<?php if (!empty($usuario['Tarea'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		
		<th><?php echo __('Descripción'); ?></th>
		<th><?php echo __('Estado de la(s) Tarea(s)'); ?></th>
		<th><?php echo __('Inicio'); ?></th>
		<th><?php echo __('Soportes'); ?></th>
		<th><?php echo __('Fin'); ?></th>
		
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($estados as $tarea): ?>
		<tr>
			<td><?php echo $tarea['Tarea']['id']; ?></td>
			<td><?php echo $tarea['Tarea']['descripcion']; ?></td>
			<td><?php  $s=0;
			if(empty($tarea['Logro'])):
			    echo "En Proceso";
			    else:
			            foreach($tarea['Logro'] as $soporte):

			                if(!empty($soporte['filename'])):
			                	echo "<i style='color:green'>Cerrado</i>/";
			                 
			                else:
			                    echo "<i style='color:red'>Abierto</i>/";	
			                 endif;	
						 
						 $s++;	
			            endforeach;
             endif;	
                ?>
			</td>
			<td><?php echo $tarea['Tarea']['inicio']; ?></td>
			<td>
				<?php
			
              foreach($tarea['Logro'] as $soporte):
		             if (!empty($soporte['filename'])):
		             	echo $this->Html->link('Ver ','../img/uploads/logro/filename/'.$soporte['filename'],array('class' => 'button', 'target' => '_blank'));
		            endif;
              endforeach; 
                ?>
             	
             </td>
			<td><?php echo $tarea['Tarea']['fin']; ?></td>
			
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'tareas', 'action' => 'view', $tarea['Tarea']['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'tareas', 'action' => 'edit', $tarea['Tarea']['id'])); ?>
				<?php echo $this->Form->postLink(__('Quitar'), array('controller' => 'tareas', 'action' => 'delete', $tarea['Tarea']['id']), array(), __('Are you sure you want to delete # %s?', $tarea['Tarea']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nueva Tarea'), array('controller' => 'tareas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
