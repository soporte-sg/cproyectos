
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					EDITAR TAREA
				</h2>
			</div>
			<div class="body">
				<div class="tarea form">
					<?php echo $this->Form->create('Tarea', array('type'=>'file') ); ?>
					<fieldset>
						<div class="form-group">
							<div class="form-line">
								<?php echo $this->Form->input('id', array('class' => 'form-control', 'label' => 'Id')); ?>
							</div>
						</div>

						<div class="form-group">
							<div class="form-line">
								<?php echo $this->Form->input('objetivo_id', array('class' => 'form-control', 'label' => 'Objetivo Id')); ?>
							</div>
						</div>
						<div class="form-group">
							<div class="form-line">
								<?php echo $this->Form->input('usuario_id', array('class' => 'form-control', 'label' => 'Usuario Id')); ?>
							</div>
						</div>


						<div class="form-group">
							<div class="form-line">
								<?php echo $this->Form->input('descripcion', array('class' => 'form-control', 'label' => 'Descripcion', 'required', 'type'=>'textarea')); ?>
							</div>
						</div>
						<div class="form-group">
							<div class="form-line">
								<?php echo $this->Form->input('estado_id', array('class' => 'form-control', 'label' => 'estado')); ?>
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








