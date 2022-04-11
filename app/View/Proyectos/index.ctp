<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	


</head>

<body>

	<div class="row d-flex card">

		<div class="row header">
			<div class="row d-flex justify-content-lg-center">
				<div class="col">
					<h1 class="text-center"><?php echo __('Proyectos'); ?></h1>
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
									echo $this->Html->link(__('Agregar nuevo proyecto'), array('action' => 'add'));
								}
								?>
								
							</span>
						</div>
					</button>
					<button type="button" class="btn btn-dark">
						<div class="demo-google-material-icon"> <i class="material-icons">add_circle</i> <span class="icon-name">


								<?php

								if ($rol == 1) {
									echo $this->Html->link(__('Agregar proyecto a partir de una plantilla'), array('action' => 'add'));
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
									<th class="text-center">CLIENTE</th>
									<th class="text-center">NOMBRE</th>
									<th class="text-center">DETALLES</th>
									<th class="text-center">OBJETIVO GENERAL</th>
									<th class="text-center">INICIO</th>
									<th class="text-center">TERMINACION</th>
									<th class="text-center">ACCIONES</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($proyectos as $proyecto) : ?>
									<tr>
										<!--<td><?php echo h($cliente['Cliente']['id']); ?>&nbsp;</td>-->
										<td>
											<?php echo $this->Html->link($proyecto['Cliente']['nombre'], array('controller' => 'clientes', 'action' => 'view', $proyecto['Cliente']['id'])); ?>
										</td>
										<td><?php echo h($proyecto['Proyecto']['nombre']); ?>&nbsp;</td>
										<td><?php echo h($proyecto['Proyecto']['objetivo']); ?>&nbsp;</td>
										<td><?php echo h($proyecto['Proyecto']['detalles']); ?>&nbsp;</td>
										<td><?php echo h($proyecto['Proyecto']['inicio']); ?>&nbsp;</td>
										<td><?php echo h($proyecto['Proyecto']['terminacion']); ?>&nbsp;</td>



										<td class="actions">
											
												<a class=" bg-deep-white waves-effect" href="<?php echo APP_WWW . 'proyectos/view/'. $proyecto['Proyecto']['id'] ?> "><i class="material-icons">settings</i></a>
												
							
											<?php if ($rol == 1) :?>

												<a class=" bg-deep-white waves-effect" href="<?php echo APP_WWW . 'proyectos/edit/'. $proyecto['Proyecto']['id'] ?> "><i class="material-icons">create</i></a>

												
											<?php endif;?>

											<?php if ($rol == 1) :?>
												<a class=" bg-deep-white waves-effect" onclick="javascript:return confirm('Estas seguro de desactivar el # %s?');"   href="<?php echo APP_WWW . 'proyectos/delete/'. $proyecto['Proyecto']['id'] ?>"><i class="material-icons">delete</i></a>
										
											<?php endif; ?>
										</td>
									</tr>

								<?php endforeach; ?>
							</tbody>
							<tfoot class="">
								<tr>

									<th class="text-center">CLIENTE</th>
									<th class="text-center">NOMBRE</th>
									<th class="text-center">DETALLES</th>
									<th class="text-center">OBJETIVO GENERAL</th>
									<th class="text-center">INICIO</th>
									<th class="text-center">TERMINACION</th>
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