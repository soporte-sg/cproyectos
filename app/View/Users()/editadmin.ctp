<div class="container">    
    <div id="atras">
        <p class="text-left">
            <a href="<?php echo APP_WWW . "users/indexadmin/"; ?>" class="btn btn-success btn-xs">
                <i class="glyphicon glyphicon-arrow-left"></i> Atras
            </a> 
    </div>
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="glyphicon glyphicon-info-sign" ></i>&nbsp;ACTUALIZAR INFORMACIÓN DEL USUARIO </h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <?php
                echo $this->Form->create('User', array("autocomplete" => "false"));
                echo $this->Form->input('id');
                ?>
                <div class="col-md-12">
                    <div class="col-md-6">
                    	<div class="form-group">
                            <div class="form-line">
                                <label>Rol</label>
                                <select name="data[User][role_id]" class="form-control" onChange="showDiv(this)">
                                    <?php
                                    foreach ($roles as $rol):
                                        if ($this->request->data['User']['role_id'] == $rol['Role']['id']):
                                            ?>
                                            <option value="<?php echo $rol['Role']['id'] ?>" selected="true"><?php echo $rol['Role']['rol'] ?> </option>
                                        <?php else: ?>
                                            <option value="<?php echo $rol['Role']['id'] ?>"><?php echo $rol['Role']['rol'] ?> </option>
                                        <?php
                                        endif;
                                    endforeach
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" id="colegiosunoauno">
                            <div class="form-line">
                                <?php echo $this->Form->input('colegio_id', array('options' => array() + $colegios, 'empty' => '--(Escoge Uno)--', 'label' => 'Colegio', 'class' => 'form-control', 'select' => '', "value" => $this->request->data['User']['colegio_id'])); ?>
                            </div>
                        </div>
                        <div class="form-group" style="display:none;" id="colegiosmultiple">
                            <div class="form-line">
                                <?php echo $this->Form->input('colegios', array('name' => 'data[User][colegios][]','options' => array() + $colegios, 'empty' => '--(Escoge Uno)--', 'label' => 'Colegio', 'class' => 'form-control', 'select' => '', 'multiple')); ?>
                            </div>
                        </div>      
                        <div class="form-group">
                            <div class="form-line">
                                <?php echo $this->Form->input('nombres', array("class" => "form-control", "value" => $this->request->data['User']['nombres'])); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <?php echo $this->Form->input('apellidos', array("class" => "form-control", "value" => $this->request->data['User']['apellidos'])); ?>
                            </div>
                        </div>
                        
                    </div>                                
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-line">
                                <?php echo $this->Form->input('identificacion', array("class" => "form-control", "value" => $this->request->data['User']['identificacion'])); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <label>Nombre de Usuario</label>
                                <input type="text" name="data[User][username]" class="form-control" autocomplete="off" value="<?php echo $this->request->data['User']['username']; ?>">
                            </div>
                        </div>                        
                        <div class="form-group">
                            <div class="form-line">
                                <?php echo $this->Form->input('squema_id', array("class" => "form-control", "label" => 'Schema de Base de Datos', 'empty' => 'Seleccione...', 'required' => true, "value" => @$this->request->data['User']['squema_id'], 'id' => 'squemas_sel')); ?>  
                            </div>
                        </div>
                    </div>                                
                </div>               
            </div>
        </div>
        <?php
        $options = array(
            'label' => 'Actualizar',
            'class' => 'btn btn-primary'
        );
        echo $this->Form->end($options);
        ?>
        <br>
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