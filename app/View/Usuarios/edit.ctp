<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
  <fieldset>
    <legend><?php echo __('Editar Usuario'); ?></legend>
  <?php
    echo $this->Form->input('id');
    echo $this->Form->input('nombres');
    echo $this->Form->input('apellidos');
    echo $this->Form->input('identificacion');
    echo $this->Form->input('correo');
     echo $this->Form->input('password');
    echo $this->Form->input('role_id');
  ?>
  </fieldset>
<?php echo $this->Form->end(__('Actualizar')); ?>
</div>
<div class="actions">
  <h3><?php echo __('Acciones'); ?></h3>
  <ul>

    <li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Usuario.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Usuario.id'))); ?></li>
    <li><?php echo $this->Html->link(__('Lista de Usuarios'), array('action' => 'index')); ?></li>
    <li><?php echo $this->Html->link(__('Lista de Tipo de usuarios'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('Nuevo Tipo de usuario'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
    <li><?php echo $this->Html->link(__('Lista de Tareas'), array('controller' => 'tareas', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('Nueva Tarea'), array('controller' => 'tareas', 'action' => 'add')); ?> </li>
  </ul>
</div>