<nav aria-label="breadcrumb">

	<ol class="breadcrumb ">
		<li><a href="<?php echo APP_WWW . 'home' ?>"><i class="material-icons">home</i> Home</a></li>
		<li><a href="<?php echo APP_WWW . 'clientes' ?>"><i class="material-icons">account_box</i> Clientes</a></li>
		<li><a href="<?php echo APP_WWW . 'proyectos/' . $proyecto['Proyecto']['id'] ?>"><i class="material-icons">library_books</i> Proyectos</a></li>
		<li class="active"><i class="material-icons">library_books</i> Objetivos</li>
	</ol>
</nav>



<div class="proyectos view">
	<div class="row d-flex card ">
		<div class="row header">
			<div class="row d-flex justify-content-between">
				<div class="col-lg-10">
					<h4 class="text-center"><?php echo h($objetivo['Objetivo']['descripcion']); ?></h4>
				</div>
				<div class="col-lg-2 ">
					<button type="button" class="btn btn-dark m-l--30 ">
						<div class="demo-google-material-icon"> <i class="material-icons">add_circle</i> <span class="icon-name">

								<?php
								if ($rol == 1) {
									echo $this->Html->link(__('Agregar nueva Tarea'), array('controller' => 'tareas', 'action' => 'add/' . $objetivo['Objetivo']['id']));
								}
								?>

							</span>
						</div>
					</button>
				</div>
			</div>

			<div class="row d-flex justify-content-between">
				<div class="col-lg-6">
					<dt><?php echo __('Proyecto'); ?></dt>
					<dd>
						<?php echo $this->Html->link($objetivo['Proyecto']['nombre'], array('controller' => 'proyectos', 'action' => 'view', $objetivo['Proyecto']['id'])); ?>
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
				</div>
			</div>
		</div>
		<div class="panel">

			<div class="panel-body">
				<div class="table-responsive">
					<h3><?php //echo __('Proyectos') . ' de ' . $cliente['Cliente']['nombre']; 
						?>Tareas:</h3>
					<?php if (!empty($objetivo['Tarea'])) : ?>
						<table class="table table-hover table-bordered" id="tablas">
							<thead class="">
								<tr>


									<th class="text-center">DESCRIPCION</th>
									<th class="text-center">ESTADO</th>
									<th class="text-center">SOPORTE</th>
									<th class="text-center">INICIO</th>
									<th class="text-center">FIN</th>
									<th class="text-center">ACCIONES</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($objetivo['Tarea'] as $tarea) : ?>
									<tr>
										<!--<td><?php echo h($cliente['Cliente']['id']); ?>&nbsp;</td>-->


										<td><?php echo $tarea['descripcion']; ?></td>
										<td><?php
											if ($tarea['estado_id'] == 1) {
												echo "Abierto";
											} else {
												echo "Cerrado";
											}
											?></td>
										<td><?php
											foreach ($logros as $logro) {
												if ($tarea['id'] == $logro['Logro']['tarea_id']) {
													$nombre = $logro['Logro']['filename'];
													echo $this->Html->link($nombre, '../img/uploads/logro/filename/' . $nombre, array('class' => 'button', 'target' => '_blank'));
												}
											}
											?></td>
										<td><?php echo $tarea['inicio']; ?></td>
										<td><?php echo $tarea['fin']; ?></td>




										<td class="actions">

											<a class=" bg-deep-white waves-effect" href="<?php echo APP_WWW . 'tareas/view/' . $tarea['id'] ?> "><i class="material-icons">settings</i></a>


											<?php if ($rol == 1) : ?>

												<a class=" bg-deep-white waves-effect" href="<?php echo APP_WWW . 'tareas/edit/' . $tarea['id'] ?> "><i class="material-icons">create</i></a>


											<?php endif; ?>

											<?php if ($rol == 1) : ?>
												<a class=" bg-deep-white waves-effect" onclick="javascript:return confirm('Estas seguro de desactivar el # %s?');" href="<?php echo APP_WWW . 'tareas/delete/' . $tarea['id'] ?>"><i class="material-icons">delete</i></a>

											<?php endif; ?>
										</td>
									</tr>

								<?php endforeach; ?>
							</tbody>
							<tfoot class="">
								<tr>


									<th class="text-center">DESCRIPCION</th>
									<th class="text-center">ESTADO</th>
									<th class="text-center">SOPORTE</th>
									<th class="text-center">INICIO</th>
									<th class="text-center">FIN</th>
									<th class="text-center">ACCIONES</th>
								</tr>
							</tfoot>
						</table>




					<?php endif;
					?>

				</div>
			</div>
		</div>



	</div>


</div>







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
<?php if ($rol == 1 or $rol == 2) : ?>
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
	<?php if (!empty($objetivo['Tarea'])) :
		//debug($objetivo['Tarea']);
	?>
		<table cellpadding="0" cellspacing="0">
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
			<?php foreach ($objetivo['Tarea'] as $tarea) : ?>
				<tr>
					<!--<td><?php echo $tarea['id']; ?></td>
			<td><?php echo $tarea['usuario_id']; ?></td>-->
					<td><?php echo ucfirst(strtolower($tarea['descripcion'])); ?></td>
					<td><?php
						if ($tarea['estado_id'] == 1) {
							echo "Abierto";
						} else {
							echo "Cerrado";
						}
						?></td>
					<td><?php
						foreach ($logros as $logro) {
							if ($tarea['id'] == $logro['Logro']['tarea_id']) {
								$nombre = $logro['Logro']['filename'];
								echo $this->Html->link($nombre, '../img/uploads/logro/filename/' . $nombre, array('class' => 'button', 'target' => '_blank'));
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
			<li><?php echo $this->Html->link(__('Nueva Tarea'), array('controller' => 'tareas', 'action' => 'add' . '/' . $objetivo['Objetivo']['id'])); ?> </li>
		</ul>
	</div>
</div>