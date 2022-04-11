




<div class="logros view">
<h2><?php echo __('Logro'); ?></h2>
	<dl>
	<!--<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($logro['Logro']['id']); ?>
			&nbsp;
		</dd>-->
		<dt><?php echo __('Tarea'); ?></dt>
		<dd>
			<?php echo $this->Html->link($logro['Tarea']['descripcion'], array('controller' => 'tareas', 'action' => 'view', $logro['Tarea']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($logro['Logro']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inicio'); ?></dt>
		<dd>
			<?php echo h($logro['Logro']['inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fin'); ?></dt>
		<dd>
			<?php echo h($logro['Logro']['fin']); ?>
			&nbsp;
		</dd>
		
	</dl>
</div>

