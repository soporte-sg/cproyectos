
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					EDITAR PROYECTO
				</h2>
			</div>
			<div class="body">
				<div class="clientes form">
					<?php echo $this->Form->create('Proyecto'); ?>
					<fieldset>
						<div class="form-group">
							<div class="form-line">
								<?php echo $this->Form->input('id', array('class' => 'form-control', 'label' => 'Id')); ?>
							</div>
						</div>

						<div class="form-group">
							<div class="form-line">
								<?php echo $this->Form->input('cliente_id', array('class' => 'form-control', 'label' => 'Cliente Id')); ?>
							</div>
						</div>

						<div class="form-group">
							<div class="form-line">
								<?php echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'Nombre', 'required', 'placeholder' => 'Ingresa el nit del cliente')); ?>
							</div>
						</div>
						<div class="form-group">
							<div class="form-line">
								<?php echo $this->Form->input('objetivo', array('class' => 'form-control', 'label' => 'Objetivo General', 'required', 'type' => 'textarea')); ?>
							</div>
						</div>
						<div class="form-group">
							<div class="form-line">
								<?php echo $this->Form->input('detalles', array('class' => 'form-control',  'required', 'type' => 'textarea')); ?>
							</div>
						</div>
						

						<div class="form-line">
							<?php //echo $this->Form->input('inicio', array('class' => 'form-control', 'label' => 'fecha de inicio', 'required', 'type' => 'date', 'wtx-context' => '33CC7803-7D11-4C76-BB02-8B6F0083EE4F')); 
							?>
							<?php echo $this->Form->input('inicio'); ?>

							<!-- <label for="">fecha de inicio</label>
							<input type="date" name="data[Proyecto][inicio]" class="form-control"> -->

						</div>
						<div class="form-line">
							
							<?php echo $this->Form->input('terminacion');?>
							
						</div>
						<br>

					</fieldset>
					<?php echo $this->Form->end(array('label' => 'Guardar', 'class' => 'btn btn-primary m-t-15 waves-effect')); ?>

				</div>


			</div>
		</div>
	</div>
</div>