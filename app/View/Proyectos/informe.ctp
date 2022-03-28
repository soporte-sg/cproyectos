<?php

//debug($objetivo);

?><p>
 <h2>PROYECTO:</h2>
   <h1>  <?php echo $objetivo[0]['Proyecto']['nombre']?></h1>
   <i><?php echo $objetivo[0]['Proyecto']['inicio'].' - '.$objetivo[0]['Proyecto']['terminacion']?></i><br>
   <?php echo $objetivo[0]['Proyecto']['objetivo']?>
 <h2>OBJETIVOS:</h2>
 <!--actividad=objetivo>tarea>logro-->
  Total Objetivos: <?php echo $total_obj ?><br>
  Total Tareas: <?php echo $totalTareas ?> <br>
  Tareas con logros Registrados: <?php echo $logrosTotal ?> <br>
  Tareas sin logros Registrados: <?php echo $totalTareas -$logrosTotal ?> <br>
  Logros Alcanzados: <?php echo $logrosTotal - $logrosSin ?> <br>
  Logros Pendientes: <?php echo $logrosSin ?> <br>
  Total de Logros: <?php echo $logrosTotal ?> <br>
  

 </p>
    <?php
    $i=1;
    foreach($objetivo as $value):?>
          <div id="accordion">
  <div class="card">
    <div class="card-header" id="heading<?php echo $i;?>">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $i;?>" aria-expanded="true" aria-controls="collapseOne">
          <?php echo $i.'.'. $value['Objetivo']['descripcion'] ?>
        </button>
      </h5>
    </div>

    <div id="collapse<?php echo $i;?>" class="collapse show" aria-labelledby="heading<?php echo $i;?>" data-parent="#accordion">
      <div class="card-body">
          
          <?php $t=1;
           foreach($tareas as $tarea){
               if($value['Objetivo']['id']==$tarea['Tarea']['objetivo_id']  ){?>
               <ul>
                   <li>
                       <?php  echo '<h6>ACTIVIDAD<h6>'.  $tarea['Tarea']['descripcion'].' <trong>'.$tarea['Tarea']['fin'].'</strong>'?>
                       <table class='table table-bordered'>
                           <tr>
                               <th>Logro</th>
                               <th>F.Ejecución</th>
                               <th>Estado</th>
                               <th>Soporte</th>
                           </tr>
                          <?php foreach($logros as $logro):
                          if($logro['Logro']['tarea_id']==$tarea['Tarea']['id']):
                          ?>
                          
                          <tr>
                              <td><?php echo $logro['Logro']['descripcion'] ?></td>
                              <td><?php echo $logro['Logro']['fin'] ?></td>
                              <td><?php 
                              if(!empty($logro['Logro']['dir'])):
                              echo '<i>Cerrado</i>';
                              else:
                                  echo '<i>Abierto</i>';
                              endif;
                              ?></td>
                              <td>
                               <?php  if (!empty($logro['Logro']['filename'])):
		             	        echo $this->Html->link('Ver ','../img/uploads/logro/filename/'.$logro['Logro']['filename'],array('class' => 'button', 'target' => '_blank'));
		                             endif;?></td>
                               </tr>
                              
                          
                          <?php
                          endif;
                          endforeach;?>
                        </table>    
                   </li>
               </ul>
              <?php   
                   
               }
               
        $t++ ;  }
          
          ?>
       </div>
    </div>
  </div>
  
  </div>    

     <?php 
     $i++;
     endforeach;?>
</table>

</div>