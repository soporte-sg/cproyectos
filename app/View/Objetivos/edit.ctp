
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					EDITAR OBJETIVO
				</h2>
			</div>
			<div class="body">
				<div class="objetivo form">
					<?php echo $this->Form->create('Objetivo'); ?>
					<fieldset>
						<div class="form-group">
							<div class="form-line">
								<?php echo $this->Form->input('id', array('class' => 'form-control', 'label' => 'Id')); ?>
							</div>
						</div>

						<div class="form-group">
							<div class="form-line">
								<?php echo $this->Form->input('proyecto_id', array('class' => 'form-control', 'label' => 'Proyecto Id')); ?>
							</div>
						</div>

						<div class="form-group">
							<div class="form-line">
								<?php echo $this->Form->input('descripcion', array('class' => 'form-control', 'label' => 'Descripcion', 'required', 'placeholder' => 'Ingresa la descripcion del objetivo')); ?>
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
							
							<?php echo $this->Form->input('fin');?>
							
						</div>
						<br>

					</fieldset>
					<?php echo $this->Form->end(array('label' => 'Guardar', 'class' => 'btn btn-primary m-t-15 waves-effect')); ?>

				</div>


			</div>
		</div>
	</div>
</div>




