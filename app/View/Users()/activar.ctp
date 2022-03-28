<div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title"> <i class="glyphicon glyphicon-info-sign" data-container="body" data-toggle="popover" data-placement="bottom" data-content="
                                        *ADMINISTRADOR:
                                        Este tipo de usuario tiene total control de la aplicativo sin restrinciones cuando la información sea delegada.

                                        *SUPER USUARIO:
                                        Este tipo de usuario tiene control total del aplicativo cuando la administracon de la información  no es delgada.

                                        *USUARIO:
                                        Este tipo de usuario tiene control  de las acciones y modulos que SUPERUSUARIO Y/O ADMINISTRADOR LE ASIGNEN cuando la administración de la información.   

                                        *INVITADO:
                                        Este tipo de usuario tiene acceso a la modulo de Reportes" data-original-title="Descripción" title="" onmouseover="showPopover(this)" onmouseout="hidePopover(this)"></i>&nbsp;ACTIVAR O DESACTIVAR ROL AL USUARIO </h3>
        </div>
        <div class="panel-body">
            <div class="col-md-8 col-md-offset-2">
                <table  class="table table-bordered table-responsive" >
                    <tr class="active">
                        <td>Rol</td>
                        <td>Estado</td>
                    </tr>
                    <?php foreach ($roles as $rol) {
                        ?>
                        <tr>
                            <td> <?php echo $rol['Role']['nombre']; ?> </td>
                            <td>
                                <?php
                                $valido = false;
                                for ($i = 0; $i < count($rolesAsignados); $i++) {
                                    if ($rol['Role']['nombre'] == $rolesAsignados[$i]['Role']['nombre'] & $rolesAsignados[$i]['Usuariorole']['activo'] == 1) {
                                        $valido = true;
                                        ?>   
                                        <button class="btn btn-default" data-type="2" data-rel="<?php echo $usuario['Usuario']['id']; ?>" value="<?php echo $rol['Role']['id']; ?>" onclick="changeStateRol(this)"> Desactivar </button>
                                        <?php
                                    }
                                }
                                if (!$valido) {
                                    ?>
                                    <button class="btn btn-default" data-type="1" data-rel="<?php echo $usuario['Usuario']['id']; ?>" value="<?php echo $rol['Role']['id']; ?>" onclick="changeStateRol(this)"> Activar </button>
                                <?php }
                                ?>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
            <div class="col-md-12">
            <?php
            $adm = 'AdministradorFullControl';
            $super = 'Superusuario';
            if ($roles_user[0]['Role']['nombre'] == $adm):
            ?>
            <a href="<?php echo APP_WWW . "Usuarios/indexadmin"; ?>" class="btn btn-primary">Salir</a>
            <?php else: ?>
            <a href="<?php echo APP_WWW . "Usuarios/index"; ?>" class="btn btn-primary">Salir</a>
            <?php endif; ?> 
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    //esta funcion permite activar o descativar un rol via ajax
    function changeStateRol(object) {
        var url = app_www + "roles/setRol/";
        var formData = {id: object.value, rel: $(object).attr("data-rel"), type: $(object).attr("data-type")};
        $(object).text("Procesando...");
        $.ajax({
            url: url,
            type: "POST",
            data: formData,
            dataType: 'json',
            success: function (response) {
                if (response['state'] == 0) {
                    alert("Error: " + response.error);
                } else {
                    if (response['state'] == 1 & $(object).attr("data-type") == 1) {
                        $(object).attr("data-type", "2");
                        $(object).text("Desactivar");
                    } else {
                        if (response['state'] == 1 & $(object).attr("data-type") == 2) {
                            $(object).attr("data-type", "1");
                            $(object).text("Activar");
                        }
                    }
                }
            },
            error: function (xhr, status, error) {
                alert("Error ajax: No fue posible completar la solicitud ");
            }
        });
    }
</script>