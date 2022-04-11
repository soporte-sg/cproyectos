<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php
	echo $this->Html->css('cliente');
	?>


</head>

<body>

	<div class="row d-flex card">

		<div class="row header">
			<div class="row d-flex justify-content-lg-center">
				<div class="col">
					<h1 class="text-center"><?php echo __('Clientes'); ?></h1>
				</div>




			</div>
		</div>

		<div class="body ">
			<div class="panel">
				<div class="panel-header">
					<button type="button" class="btn btn-dark">
						<div class="demo-google-material-icon"> <i class="material-icons">add_circle</i> <span class="icon-name">


								<?php

								if ($rol == 1) {
									echo $this->Html->link(__('Agregar nuevo cliente'), array('action' => 'add'));
								}
								?>
								

							</span>
						</div>
					</button>
				</div>
				<div class="panel-body">



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
								<?php foreach ($clientes as $cliente) : ?>



									<tr>
										<!--<td><?php echo h($cliente['Cliente']['id']); ?>&nbsp;</td>-->
										<td><?php echo h($cliente['Cliente']['nombre']); ?>&nbsp;</td>
										<td><?php echo h($cliente['Cliente']['nit']); ?>&nbsp;</td>
										<td><?php echo h($cliente['Cliente']['ubicacion']); ?>&nbsp;</td>

										<td class="actions">


											<a class=" bg-deep-white waves-effect" href="<?php echo APP_WWW . 'clientes/view/' . $cliente['Cliente']['id'] ?> "><i class="material-icons">settings</i></a>
											



											<?php if ($rol == 1) :?>
												<a class=" bg-deep-white waves-effect" href="<?php echo APP_WWW . 'clientes/edit/' . $cliente['Cliente']['id'] ?> "><i class="material-icons">create</i></a>
											<?php endif;?>
											<?php if ($rol == 1) {
												echo $this->Html->link(__('Informe'), array('action' => 'informe', $cliente['Cliente']['id']));
												// echo '<button type="button" class="btn bg-deep-white waves-effect">' . '<i class="material-icons">assignment</i>' . . '</button>';
											} ?>
											<?php if ($rol == 1) :?>
												<a class=" bg-deep-white waves-effect" onclick="javascript:return confirm('Estas seguro de desactivar el # %s?');"   href="<?php echo APP_WWW . 'clientes/delete/'. $cliente['Cliente']['id'] ?>"><i class="material-icons">delete</i></a>
										
											<?php endif; ?>
											
										</td>
									</tr>

								<?php
								endforeach;
								?>
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