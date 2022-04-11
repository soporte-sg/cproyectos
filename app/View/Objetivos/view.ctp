<nav aria-label="breadcrumb">

	<ol class="breadcrumb ">
		<li><a href="<?php echo APP_WWW . 'home' ?>"><i class="material-icons">home</i> Home</a></li>
		<li><a href="<?php echo APP_WWW . 'clientes' ?>"><i class="material-icons">account_box</i> Clientes</a></li>
		<li><a href="<?php echo APP_WWW . 'clientes/view/' . $proyecto['Cliente']['id'] ?>"><i class="material-icons">library_books</i> Proyectos</a></li>
		<li><a href="<?php echo APP_WWW . 'proyectos/view/' . $objetivo['Proyecto']['id'] ?>"><i class="material-icons">library_books</i> Objetivos</a></li>
		<li class="active"><i class="material-icons">library_books</i> Tarea</li>
	</ol>
</nav>



<div class="proyectos view">
	<div class="row d-flex card ">
		<div class="row header">
			<div class="row d-flex justify-content-between">
				<div class="col-lg-8">
					<h4 class="text-center"><?php echo h($objetivo['Objetivo']['descripcion']); ?></h4>
				</div>
				<div class="col-lg-4 ">
					<?php if ($rol == 1) : ?>
						<button type="button" class="btn btn-dark m-l--30 ">
							<div class="demo-google-material-icon"> <i class="material-icons">add_circle</i> <span class="icon-name">

									<?php

									echo $this->Html->link(__('Agregar nueva Tarea'), array('controller' => 'tareas', 'action' => 'add/' . $objetivo['Objetivo']['id']));

									?>

								</span>
							</div>
						</button>
						<button type="button" class="btn btn-dark  ">
							<div class="demo-google-material-icon"> <i class="material-icons">add_circle</i> <span class="icon-name">

									<?php

									echo $this->Html->link(__('Agregar nuevo Compromiso'), array('controller' => 'tareas', 'action' => 'add/' . $objetivo['Objetivo']['id']));

									?>

								</span>
							</div>
						</button>
					<?php endif; ?>
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
						?>ACTIVIDADES:</h3>
					<?php if (!empty($objetivo['Tarea'])) : ?>
						<table class="table table-hover table-bordered" id="tablas">
							<thead class="">
								<tr>


									<th class="text-center">DESCRIPCION</th>
									<th class="text-center">ESTADO</th>
									<th class="text-center">SOPORTE</th>
									<!-- <th class="text-center">INICIO</th> -->
									<th class="text-center">ENTREGA</th>
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
										<!-- <td><?php //echo $tarea['inicio']; ?></td> -->
										<td><?php echo $tarea['fin']; ?></td>




										<td class="actions">

											<a class=" bg-deep-white waves-effect" data-toggle="tooltip" data-original-title="Gestionar" href="<?php echo APP_WWW . 'tareas/view/' . $tarea['id'] ?> "><i class="material-icons">settings</i></a>


											<?php if ($rol == 1) : ?>

												<a class=" bg-deep-white waves-effect" data-toggle="tooltip" data-original-title="Editar" href="<?php echo APP_WWW . 'tareas/edit/' . $tarea['id'] ?> "><i class="material-icons">create</i></a>


											<?php endif; ?>

											<?php if ($rol == 1) : ?>
												<a class=" bg-deep-white waves-effect" data-toggle="tooltip" data-original-title="Eliminar" onclick="javascript:return confirm('Estas seguro de desactivar el objetivo');" href="<?php echo APP_WWW . 'tareas/delete/' . $tarea['id'] ?>"><i class="material-icons">delete</i></a>

											<?php endif; ?>

											<a class=" bg-deep-white waves-effect" data-toggle="tooltip" data-original-title="Compromisos" href="#"><i class="material-icons">event</i></a>

										</td>
									</tr>

								<?php endforeach; ?>
							</tbody>
							<tfoot class="">
								<tr>


									<th class="text-center">DESCRIPCION</th>
									<th class="text-center">ESTADO</th>
									<th class="text-center">SOPORTE</th>
									<!-- <th class="text-center">INICIO</th> -->
									<th class="text-center">ENTREGA</th>
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