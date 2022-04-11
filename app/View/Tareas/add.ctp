


<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    CREAR TAREA
                </h2>
            </div>
            <div class="body">
                <div class="tarea form">
                    <?php echo $this->Form->create('Tarea', array('type'=>'file')); ?>
                    <fieldset>

						<div class="form-group">
                            <div class="form-line">
                                <?php echo $this->Form->input('objetivo_id', array('class' => 'form-control', 'label' => 'objetivo_id')); ?>
                            </div>
                        </div>
						<div class="form-group">
                            <div class="form-line">
                                <?php echo $this->Form->input('usuario_id', array('class' => 'form-control', 'label' => 'usuario_id')); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-line">
                                <?php echo $this->Form->input('descripcion', array('class' => 'form-control', 'label' => 'Descripcion', 'required', 'type'=>'textarea' )); ?>
                            </div>
                        </div>
						<div class="form-group">
                            <div class="form-line">
                                <?php echo $this->Form->input('estado_id', array('class' => 'form-control', 'label' => 'estado_id')); ?>
                            </div>
                        </div>

                        <div class="form-line">
							
							<label for="">fecha de inicio</label>
							<input type="date" name="data[Tarea][inicio]" required class="form-control">

						</div>
						<div class="form-line">
							<label for="">fecha de terminacion</label>
							<input type="date" name="data[Tarea][fin]" required class="form-control">
						</div>
						<br>


                    </fieldset>
                    <?php echo $this->Form->end(array('label' => 'Agregar', 'class' => 'btn btn-primary m-t-15 waves-effect')); ?>

                </div>


            </div>
        </div>
    </div>
</div>







