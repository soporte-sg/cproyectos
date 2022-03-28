<div class="container"> 
    <div id="atras">
        <p class="text-left">
            <a href="<?php echo APP_WWW . "users/indexadmin/"; ?>" class="btn btn-success btn-xs">
                <i class="glyphicon glyphicon-arrow-left"></i> Atras 
            </a>
    </div>   
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">&nbsp;REGISTRAR INFORMACION DEL USUARIO </h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <?php echo $this->Form->create('User'); ?>
                <div class="col-md-12">
                    <div class="col-md-6">
                    	<div class="form-group">
                            <div class="form-line">
                                <label>Rol</label>
                                <select name="data[User][role_id]" class="form-control" onChange="showDiv(this)">
                                    <?php foreach ($roles as $rol): ?>
                                        <option value="<?php echo $rol['Role']['id'] ?>"><?php echo $rol['Role']['rol'] ?> </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" id="colegiosunoauno">
                            <div class="form-line">
                                <?php echo $this->Form->input('colegio_id', array('options' => array() + $colegios, 'empty' => '--(Escoge Uno)--', 'label' => 'Colegio', 'class' => 'form-control', 'select' => '')); ?>
                            </div>
                        </div>
                        <div class="form-group" style="display:none;" id="colegiosmultiple">
                            <div class="form-line">
                                <?php echo $this->Form->input('colegios', array('name' => 'data[User][colegios][]','options' => array() + $colegios, 'empty' => '--(Escoge Uno)--', 'label' => 'Colegio', 'class' => 'form-control', 'select' => '', 'multiple')); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <?php echo $this->Form->input('nombres', array("class" => "form-control")); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <label>Apellidos</label>
                                <input type="text" name="data[User][apellidos]" class="form-control" autocomplete="off">

                            </div>
                        </div>                        
                    </div>                                
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-line">
                                <?php echo $this->Form->input('identificacion', array("class" => "form-control")); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <?php echo $this->Form->input('username', array("class" => "form-control", "label" => "Usuario (Digitar documento de identidad)")); ?>
                            </div>
                        </div>                        
                        <div class="form-group">
                            <div class="form-line">
                                <?php echo $this->Form->input('password', array("class" => "form-control", "label" => "Clave")); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <?php echo $this->Form->input('squema_id', array("class" => "form-control", "label" => 'Schema de Base de Datos', 'empty' => 'Seleccione...', 'required' => true, 'id' => 'squemas_sel')); ?>  
                            </div>
                        </div>
                    </div>                                
                </div>        

            </div>
            <?php
            echo "<br/>";
            $options = array(
                'label' => 'Guardar',
                'class' => 'btn btn-primary'
            );
            echo $this->Form->end($options);
            ?>
        </div>
    </div>
</div>
<script type="text/javascript">
   function showDiv(select){
      if(select.value==5){
        document.getElementById('colegiosmultiple').style.display = "block";
        document.getElementById('colegiosunoauno').style.display = "none";
        document.getElementById("squemas_sel").required = false;
        //$('#squemas_sel').removeAttr("required");
      }else{
        document.getElementById('colegiosunoauno').style.display = "block";
        document.getElementById('colegiosmultiple').style.display = "none";
      }
  } 	
</script>