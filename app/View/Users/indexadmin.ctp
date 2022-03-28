<div class="container">
    <div id="atras">
        <p class="text-left">
            <a href="<?php echo APP_WWW . "colegios/index"; ?>" class="btn btn-success btn-xs">
                <i class="glyphicon glyphicon-arrow-left"></i> Atras 
            </a>
            <a href="<?php echo APP_WWW . "users/addadmin"; ?>" class="btn btn-success btn-xs">
                <i class="glyphicon glyphicon-user"></i> Registrar Usuarios 
            </a> 
    </div>
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="glyphicon glyphicon-info-sign" data-container="body" data-toggle="popover" data-placement="bottom" data-content="El siguiente cuadro muestra información del usuarios." data-original-title="Información" title="" onmouseover="showPopover(this)" onmouseout="hidePopover(this)"></i>&nbsp;ADMINISTRACION DE USUARIOS</h3>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-responsive">
                    <tr class="active">
                        <th><?php echo $this->Paginator->sort('identificacion'); ?></th>
                        <th><?php echo $this->Paginator->sort('nombres'); ?></th>
                        <th><?php echo $this->Paginator->sort('apellidos'); ?></th>
                        <th><?php echo $this->Paginator->sort('rol'); ?></th>
                        <th><?php echo $this->Paginator->sort('colegio'); ?></th>
                        <th><?php echo $this->Paginator->sort('Schema'); ?></th> 
                        <th class="actions"><?php echo __('Acciones'); ?></th>
                    </tr>
                    <?php foreach ($usuarios as $usuario): ?>
                        <tr>
                            <td><?php echo h($usuario['User']['identificacion']); ?>&nbsp;</td>
                            <td><?php echo h($usuario['User']['nombres']); ?>&nbsp;</td>
                            <td><?php echo h($usuario['User']['apellidos']); ?>&nbsp;</td>
                            <td><?php echo h($usuario['Role']['rol']); ?>&nbsp;</td>
                            <td><?php echo h($usuario['Colegio']['nombre']); ?>&nbsp;</td>
                            <td><?php echo h($usuario['Squema']['nombre_bd']); ?>&nbsp;</td>
                            <td class="actions ">
                                
                                <a href="<?php echo APP_WWW . 'users/editadmin/' . $usuario['User']['id'] ?>" class="btnNew btn-blue btn-circle" data-toggle="popover" title="Información" data-trigger="hover" data-content="Dar clic para editar la información registrada" data-placement="top"><i class="glyphicon glyphicon-edit"></i></a> 
                                <!--<a href="<?php echo APP_WWW . 'users/activar/' . $usuario['User']['id'] ?>" class="btnNew btn-blue btn-circle" data-toggle="popover" title="Descripción" data-placement="top" data-trigger="hover" data-content="Dar clic para activar o desactivar el rol del usuario"><i class="glyphicon glyphicon-wrench"></i></a>                                
                                <a href="#" class="btnNew btn-blue btn-circle" onclick="myFunction('<?php echo $usuario['User']['id']; ?>')" data-toggle="popover" title="Información"  data-placement="top"data-trigger="hover" data-content="Dar clic para eliminar la información registrada"><i class="glyphicon glyphicon-trash"></i></a>-->
                            </td>
                        <?php endforeach; ?>
                </table>
                <?php
                echo $this->Paginator->counter(array(
                    'format' => __('Pag {:page} de {:pages}, mostrando {:current} registros con {:count}  en total, empezando en {:start}, terminado en {:end}')
                ));
                ?>	</p>
                <ul class="pagination">
                    <li> <?php echo $this->Paginator->prev('< ' . __('anterior'), array('tag' => FALSE), null, array('class' => 'prev disabled')); ?></li>
                    <li> <?php echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active')); ?></li>
                    <li> <?php echo $this->Paginator->next(__('siguiente') . ' >', array('tag' => FALSE), null, array('class' => 'next disabled')); ?></li>
                </ul>

                <br/><br/>
            </div>
        </div>
    </div>
</div> 
</div>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
<script>
   function myFunction(id_usuario,id_empresa){
            alert"Esta seguro que desea eliminar este registro");
            return false;
   }
</script>