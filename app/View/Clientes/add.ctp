

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    CREAR CLIENTE
                </h2>
            </div>
            <div class="body">
                <div class="clientes form">
                    <?php echo $this->Form->create('Cliente'); ?>
                    <fieldset>

                        <div class="form-group">
                            <div class="form-line">
                                <?php echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'Nombre', 'required', 'placeholder' => 'Ingresa el nit del cliente' )); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-line">
                                <?php echo $this->Form->input('nit', array('class' => 'form-control', 'label' => 'Nit', 'required', 'placeholder' => 'Ingresa el nit del cliente')); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <?php echo $this->Form->input('ubicacion', array('class' => 'form-control', 'label' => 'Ubicacion', 'required', 'placeholder' => 'Ingresa la ubicacion del cliente')); ?>
                            </div>
                        </div>


                    </fieldset>
                    <?php echo $this->Form->end(array('label' => 'Agregar', 'class' => 'btn btn-primary m-t-15 waves-effect')); ?>

                </div>


            </div>
        </div>
    </div>
</div>