<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="row d-flex card">

        <div class="row header">
            <div class="row d-flex justify-content-lg-center">
                <div class="col">
                    <h2 class="text-center"><?php echo __('Usuarios'); ?></h2>
                </div>


            </div>
        </div>

        <div class="body">
            <div class="panel">
                <div class="panel-header">

                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table cellpadding="0" cellspacing="0" id="tablas" class="table-bordered">
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

                                foreach ($usuarios as $user) : ?>
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
                                            
                                        <a class=" bg-deep-white waves-effect" href="<?php echo APP_WWW . 'usuarios/view/' . $user['Usuario']['id'] ?> "><i class="material-icons">settings</i></a>
                                        <a class=" bg-deep-white waves-effect" href="<?php echo APP_WWW . 'usuarios/edit/' . $user['Usuario']['id'] ?> "><i class="material-icons">create</i></a>
                                           
                                            <?php echo $this->Form->postLink(__('Quitar'), array('action' => 'delete', $user['Usuario']['id']), array(), __('Are you sure you want to delete # %s?', $user['Usuario']['id'])); ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>







    </div>
</body>

</html>