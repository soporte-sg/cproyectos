<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	


</head>

<body>

	<div class="row d-flex card ">

		<div class="row header">
			<div class="row d-flex justify-content-lg-center">
				<div class="col">
					<h1 class="text-center"><?php echo __('Clientes Activos'); ?></h1>
				</div>


			</div>
		</div>

		<div class="body  ">
			<div class="panel ">
				<div class="panel-header">
					<button type="button" class="btn">
						<i class="material-icons">add_circle</i> <span class="icon-name">


							<?php

							if ($rol == 1) {
								echo $this->Html->link(__('Agregar nuevo cliente'), array('action' => 'add'));
							}
							?>
						</span>
					</button>
					<button type="button" class="btn">
						<i class="material-icons">visibility</i> <span class="icon-name">
							<?php

							if ($rol == 1) {
								echo $this->Html->link(__('Ver todos los clientes'), array('action' => 'index2'));
							}
							?>
						</span>

					</button>
				</div>
				<div class="panel-body">

					<?php foreach ($clientes as $cliente) : ?>
						<?php if ($cliente['Cliente']['estado'] == 1) : ?>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">



								<div class="card ">
									<div class="header ">
										<h4>
											<?php echo h($cliente['Cliente']['nombre']); ?><BR>
										</h4>
										<small class="nit"> NIT: <?php echo h($cliente['Cliente']['nit']); ?></small>
										<ul class="header-dropdown m-r--5">
											<li class="dropdown">
												<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
													<i class="material-icons">more_vert</i>
												</a>
												<ul class="dropdown-menu pull-right">
													<li> <a class=" bg-deep-white waves-effect" href="<?php echo APP_WWW . 'clientes/edit/' . $cliente['Cliente']['id'] ?> "><i class="material-icons">settings</i>Editar</a>
													</li>
													<li><?php if ($rol == 1) : ?>
															<a class=" bg-deep-white waves-effect" onclick="javascript:return confirm('Estas seguro de desactivar el # %s?');" href="<?php echo APP_WWW . 'clientes/delete/' . $cliente['Cliente']['id'] ?>"><i class="material-icons">delete</i>Eliminar</a>

														<?php endif; ?>
													</li>

												</ul>
											</li>
										</ul>
									</div>
									<div class="body">

										<ul>

											<ol>
												<span>Numero de proyectos: </span>
												<span></span>
											</ol>

										</ul>

										<button class="btn btn-block"><a class=" bg-deep-white waves-effect" href="<?php echo APP_WWW . 'clientes/view/' . $cliente['Cliente']['id'] ?> "><i class="material-icons">contacts</i>Proyectos</a>
											
										</button>

									</div>
								</div>
							</div>
					<?php endif;
					endforeach;
					?>
					<div class="table-responsive">
						<table class="table table-hover table-bordered" id="tablas">
							<thead class="">
								<tr>
									<!--<th><?php echo $this->Paginator->sort('id'); ?></th>-->
									<th class="text-center">NOMBRE</th>
									<th class="text-center">NIT</th>
									<th class="text-center">UBICACION</th>
									<th class="text-center">ACCIONES</th>
								</tr>
							</thead>
							<tbody>



								<tr>
									<!--<td><?php echo h($cliente['Cliente']['id']); ?>&nbsp;</td>-->
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td><?php echo h($cliente['Cliente']['ubicacion']); ?>&nbsp;</td>

									<td class="actions">


										<a class=" bg-deep-white waves-effect" href="<?php echo APP_WWW . 'clientes/view/' . $cliente['Cliente']['id'] ?> "><i class="material-icons">settings</i></a>
										<a class=" bg-deep-white waves-effect" href="<?php echo APP_WWW . 'clientes/edit/' . $cliente['Cliente']['id'] ?> "><i class="material-icons">settings</i></a>



										<?php if ($rol == 1) {
											echo $this->Html->link(__('Editar'), array('action' => 'edit', $cliente['Cliente']['id']));
											// echo '<button type="button" class="btn bg-deep-white waves-effect">' . '<i class="material-icons">create</i>' . $this->Html->link(__('Editar'), array('action' => 'edit', $cliente['Cliente']['id'])) . '</button>';
										} ?>
										<?php if ($rol == 1) {
											echo $this->Html->link(__('Informe'), array('action' => 'informe', $cliente['Cliente']['id']));
											// echo '<button type="button" class="btn bg-deep-white waves-effect">' . '<i class="material-icons">assignment</i>' . . '</button>';
										} ?>
										<?php

										if ($rol == 1) {
											echo $this->Form->postLink(__('Quitar'), array('action' => 'delete', $cliente['Cliente']['id']), array(), __('Estas seguro de desactivar el # %s?', $cliente['Cliente']['id']));
											// echo '<button type="button" class="btn bg-deep-white waves-effect">' . '<i class="material-icons">clear</i>' . . '</button>';

										} ?>
									</td>
								</tr>


							</tbody>
							<tfoot class="">
								<tr>

									<th class="text-center">NOMBRE</th>
									<th class="text-center">NIT</th>
									<th class="text-center">UBICACION</th>
									<th class="text-center">ACCIONES</th>
								</tr>
							</tfoot>
						</table>
					</div>



				</div>
			</div>


		</div>











	</div>








</body>

</html>