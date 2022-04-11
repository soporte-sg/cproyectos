<nav aria-label="breadcrumb">
	
	<ol class="breadcrumb ">
		<li><a href="<?php echo APP_WWW . 'home' ?>"><i class="material-icons">home</i> Home</a></li>
		<li><a href="<?php echo APP_WWW . 'clientes' ?>"><i class="material-icons">account_box</i> Clientes</a></li>
		<li class="active"><i class="material-icons">library_books</i> Proyectos</li>
	</ol>
</nav>


<div class="clientes view">
	<div class="row d-flex card ">
		<div class="row header">
			<div class="row d-flex justify-content-between">
				<div class="col-lg-10">
					<h4 class="text-center"><?php echo h($cliente['Cliente']['nombre']); ?></h4>
				</div>
				<div class="col-lg-2 ">
					<button type="button" class="btn btn-dark m-l--30 ">
						<div class="demo-google-material-icon"> <i class="material-icons">add_circle</i> <span class="icon-name">

							<?php
							if ($rol == 1) {
								echo $this->Html->link(__('Agregar nuevo proyecto'), array('controller'=>'proyectos', 'action' => 'add/'.$cliente['Cliente']['id']));
							}
							?>

						</span>
						</div>
					</button>
				</div>
				

			</div>
		</div>


		<div class="panel">
			
			<div class="panel-body">
				<div class="table-responsive">
					<h3><?php //echo __('Proyectos') . ' de ' . $cliente['Cliente']['nombre']; 
						?>Proyectos:</h3>
					<?php if (!empty($cliente['Proyecto'])) : ?>
						<table class="table table-hover table-bordered" id="tablas">
							<thead class="">
								<tr>
									<!--<th><?php echo $this->Paginator->sort('id'); ?></th>-->
									<th class="text-center">ID</th>
									<th class="text-center">NOMBRE</th>
									<th class="text-center">DETALLES</th>
									<th class="text-center">OBJETIVO GENERAL</th>
									<th class="text-center">INICIO</th>
									<th class="text-center">TERMINACION</th>
									<th class="text-center">ACCIONES</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($cliente['Proyecto'] as $proyecto) : ?>
									<tr>
										<!--<td><?php echo h($cliente['Cliente']['id']); ?>&nbsp;</td>-->

										<td><?php echo $proyecto['id']; ?></td>
										<td><?php echo $proyecto['nombre']; ?></td>
										<td><?php echo $proyecto['objetivo']; ?></td>
										<td><?php echo $proyecto['detalles']; ?></td>
										<td><?php echo $proyecto['inicio']; ?></td>
										<td><?php echo $proyecto['terminacion']; ?></td>



										<td class="actions">

											<a class=" bg-deep-white waves-effect" href="<?php echo APP_WWW . 'proyectos/view/' . $proyecto['id'] ?> "><i class="material-icons">settings</i></a>


											<?php if ($rol == 1) : ?>

												<a class=" bg-deep-white waves-effect" href="<?php echo APP_WWW . 'proyectos/edit/' . $proyecto['id'] ?> "><i class="material-icons">create</i></a>


											<?php endif; ?>

											<?php if ($rol == 1) : ?>
												<a class=" bg-deep-white waves-effect" onclick="javascript:return confirm('Estas seguro de desactivar el # %s?', $proyecto['id']);" href="<?php echo APP_WWW . 'proyectos/delete/' . $proyecto['id'] ?>"><i class="material-icons">delete</i></a>

											<?php endif; ?>

											<?php  if($rol==1 or $rol==2){ echo $this->Form->postLink(__('Quitar'), array('controller' => 'proyectos', 'action' => 'delete', $proyecto['id']), array(), __('Are you sure you want to delete # %s?', $proyecto['id']));} ?>
										</td>
									</tr>

								<?php endforeach; ?>
							</tbody>
							<tfoot class="">
								<tr>

									<th class="text-center">ID</th>
									<th class="text-center">NOMBRE</th>
									<th class="text-center">DETALLES</th>
									<th class="text-center">OBJETIVO GENERAL</th>
									<th class="text-center">INICIO</th>
									<th class="text-center">TERMINACION</th>
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