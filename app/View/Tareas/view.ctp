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
				<div class="col-lg-10">
					<h4 class="text-center"><?php echo h($tarea['Tarea']['descripcion']); ?></h4>
				</div>
				<div class="col-lg-2 ">
					<?php if ($rol == 1 ): ?>
						<button type="button" class="btn btn-dark m-l--30 ">
							<div class="demo-google-material-icon"> <i class="material-icons">add_circle</i> <span class="icon-name">

								<?php
								if ($rol == 1) {
									echo $this->Html->link(__('Agregar nuevo logro'), array('controller' => 'logros', 'action' => 'add/' . $tarea['Objetivo']['id']));
								}
								?>

							</span>
							</div>
						</button>
					<?php endif; ?>
				</div>
			</div>

			<div class="row d-flex justify-content-between">
				<div class="col-lg-6">


				</div>
			</div>
		</div>
		<div class="panel">

			<div class="panel-body">
				<div class="table-responsive">
					<h3><?php //echo __('Proyectos') . ' de ' . $cliente['Cliente']['nombre']; 
						?>logros</h3>
					<?php if (!empty($tarea['Logro'])) : ?>
						<table class="table table-hover table-bordered" id="tablas">
							<thead class="">
								<tr>


									<th class="text-center">ID</th>
									<th class="text-center">Tarea Id</th>
									<th class="text-center">Descripcion</th>
									<th class="text-center">INICIO</th>
									<th class="text-center">FIN</th>
									<th class="text-center">ACCIONES</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($tarea['Logro'] as $logro) : ?>
									<tr>
										<!--<td><?php echo h($cliente['Cliente']['id']); ?>&nbsp;</td>-->


										<td><?php echo $logro['id']; ?></td>
										<td><?php echo $logro['tarea_id']; ?></td>
										<td><?php echo $logro['descripcion']; ?></td>

										<td><?php echo $logro['inicio']; ?></td>
										<td><?php echo $logro['fin']; ?></td>




										<td class="actions">

											<a class=" bg-deep-white waves-effect" data-toggle="tooltip" data-original-title="Gestionar" href="<?php echo APP_WWW . 'logros/view/' . $logro['id'] ?> "><i class="material-icons">settings</i></a>


											<?php if ($rol == 1) : ?>

												<a class=" bg-deep-white waves-effect" data-toggle="tooltip" data-original-title="Editar" href="<?php echo APP_WWW . 'logros/edit/' . $logro['id'] ?> "><i class="material-icons">create</i></a>


											<?php endif; ?>

											<?php if ($rol == 1) : ?>
												<a class=" bg-deep-white waves-effect" data-toggle="tooltip" data-original-title="Eliminar" onclick="javascript:return confirm('Estas seguro de desactivar el #  %s?');" href="<?php echo APP_WWW . 'logros/delete/' . $logro['id'] ?>"><i class="material-icons">delete</i></a>

											<?php endif; ?>
										</td>
									</tr>

								<?php endforeach; ?>
							</tbody>
							<tfoot class="">
								<tr>


									<th class="text-center">ID</th>
									<th class="text-center">Tarea Id</th>
									<th class="text-center">Descripcion</th>
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






