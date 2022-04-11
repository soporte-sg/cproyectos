


<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    CREAR OBJETIVO
                </h2>
            </div>
            <div class="body">
                <div class="objetivos form">
                    <?php echo $this->Form->create('Objetivo'); ?>
                    <fieldset>

						<div class="form-group">
                            <div class="form-line">
                                <?php echo $this->Form->input('proyecto_id', array('class' => 'form-control', 'label' => 'proyecto_id', 'value'=>$id )); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-line">
                                <?php echo $this->Form->input('descripcion', array('class' => 'form-control', 'label' => 'Descripcion', 'required', 'placeholder' => 'Ingresa la descripcion' )); ?>
                            </div>
                        </div>

                        <div class="form-line">
							
							<label for="">fecha de inicio</label>
							<input type="date" name="data[Objetivo][inicio]" required class="form-control">

						</div>
						<div class="form-line">
							<label for="">fecha de terminacion</label>
							<input type="date" name="data[Objetivo][fin]" required class="form-control">
						</div>
						<br>


                    </fieldset>
                    <?php echo $this->Form->end(array('label' => 'Guardar', 'class' => 'btn btn-primary m-t-15 waves-effect')); ?>

                </div>


            </div>
        </div>
    </div>
</div>



