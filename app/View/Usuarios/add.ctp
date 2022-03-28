<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
    <fieldset>
        <legend><?php echo __('Add Usuario'); ?></legend>
    <?php
        echo $this->Form->input('nombres');
        echo $this->Form->input('apellidos');
        echo $this->Form->input('identificacion');
        echo $this->Form->input('estado',array('value'=>'Activo', 'type'=>'hidden'));
        echo $this->Form->input('correo');
        echo $this->Form->input('role_id');
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('Lista de Usuarios'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('Lista de Tipo de usuarios'), array('controller' => 'tipousuarios', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Nuevo Tipousuario'), array('controller' => 'tipousuarios', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('Lista de Tareas'), array('controller' => 'tareas', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Nueva Tarea'), array('controller' => 'tareas', 'action' => 'add')); ?> </li>
    </ul>
</div>