<div class="users index">
    <h2><?php echo __('Usuarios'); ?></h2>
    <table cellpadding="0" cellspacing="0">
    <thead>
    <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('nombres'); ?></th>
            <th><?php echo $this->Paginator->sort('apellidos'); ?></th>
            <th><?php echo $this->Paginator->sort('identificacion'); ?></th>
            <th><?php echo $this->Paginator->sort('correo'); ?></th>
            <th><?php echo $this->Paginator->sort('role_id'); ?></th>
            <th><?php echo $this->Paginator->sort('Usuario'); ?></th>
           
            <th><?php echo $this->Paginator->sort('estado'); ?></th>
            
            <th class="actions"><?php echo __('Acciones'); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php 
 
    foreach ($usuarios as $user): ?>
    <tr>
        <td><?php echo h($user['Usuario']['id']); ?>&nbsp;</td>
        <td><?php echo h($user['Usuario']['nombres']); ?>&nbsp;</td>
        <td><?php echo h($user['Usuario']['apellidos']); ?>&nbsp;</td>
        <td><?php echo h($user['Usuario']['identificacion']); ?>&nbsp;</td>
        <td><?php echo h($user['Usuario']['correo']); ?>&nbsp;</td>
        <td>
            <?php echo $this->Html->link($user['Role']['rol'], array('controller' => 'roles', 'action' => 'view', $user['Role']['id'])); ?>
        </td>
        <td><?php echo h($user['Usuario']['username']); ?>&nbsp;</td>
       
        <td><?php echo h($user['Usuario']['estado']); ?>&nbsp;</td>
       
        <td class="actions">
            <?php echo $this->Html->link(__('Ver'), array('action' => 'view', $user['Usuario']['id'])); ?>
            <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['Usuario']['id'])); ?>
            <?php echo $this->Form->postLink(__('Quitar'), array('action' => 'delete', $user['Usuario']['id']), array(), __('Are you sure you want to delete # %s?', $user['Usuario']['id'])); ?>
        </td>
    </tr>
<?php endforeach; ?>
    </tbody>
    </table>
    <p>
    <?php
    echo $this->Paginator->counter(array(
    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
    ));
    ?>  </p>
    <div class="paging">
    <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
    ?>
    </div>
</div>
<div class="actions">
       <h3><?php echo __('Acciones'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Listar Proyectos'), array('controller' => 'clientes','action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('Listar Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Nuevo Rol'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
    </ul>
</div>