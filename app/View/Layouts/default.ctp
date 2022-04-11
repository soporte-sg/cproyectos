<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    echo $this->Html->meta('favicon.ico', '/favicon.ico', array('type' => 'icon'));
    ?>
    <title>Bienvenido a PROYECTOS</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <?php $path = APP_WWW . "plugins/"; ?>
    <?php $path2 = APP_WWW . "css/"; ?>

    <?php echo $this->Html->css('styles'); ?>
    <?php
    echo $this->Html->css('cliente');
    ?>

    <!-- Bootstrap Core Css -->
    <link href=<?php echo $path . "bootstrap/css/bootstrap.css"; ?> rel="stylesheet">
    <!-- datepicker -->
    
    <!-- Waves Effect Css -->
    <link href=<?php echo $path . "node-waves/waves.css"; ?> rel="stylesheet">
    <!-- Animation Css -->
    <link href=<?php echo $path . "animate-css/animate.css"; ?> rel="stylesheet">
    <!-- Morris Chart Css-->
    <link href=<?php echo $path . "morrisjs/morris.css"; ?> rel="stylesheet">
    <!-- Custom Css -->
    <link href=<?php echo $path2 . "styles.css"; ?> rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href=<?php echo $path2 . "themes/all-themes.css"; ?> rel="stylesheet">
    <!-- Bootstrap Tagsinput Css -->
    <link href=<?php echo $path . "bootstrap-tagsinput/bootstrap-tagsinput.css"; ?> rel="stylesheet">
    <!-- Bootstrap Select Css -->
    <link href=<?php echo $path . "bootstrap-select/css/bootstrap-select.css"; ?> rel="stylesheet">
    <!-- Multi Select Css -->
    <link href=<?php echo $path . "multi-select/css/multi-select.css"; ?> rel="stylesheet">
    <link href=<?php echo $path . "jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css"; ?> rel="stylesheet">
    <!-- Sweet Alert Css -->
    <link href=<?php echo $path2 . "filter.css"; ?> rel="stylesheet">
    <link href=<?php echo $path . "sweetalert/sweetalert.css"; ?> rel="stylesheet">
    <?php echo $this->Html->script(array('https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js',)); ?>
    <?php echo $this->Html->script(array('https://www.gstatic.com/charts/loader.js', 'ajaxboostrap3.js')); ?>


</head>
<?php
$user = $this->Session->read('Usuario');
$nombres = $user['Usuario']['nombres'] . ' ' . $user['Usuario']['apellidos'];

?>


<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a href="<?php echo APP_WWW . 'home' ?>"><?php echo $this->Html->image('logocalidad4.png', array( 'width' => '60px', 'height' => 'auto')) ?></a>

            
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Notifications -->

                <li class="dropdown lista-menu">

                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                    <span >CLIENTES <i class="material-icons icono">keyboard_arrow_down</i> </span>  
                    
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">Clientes</li>
                        <li><a class="dropdown-item" href="<?php echo APP_WWW . 'clientes' ?>">Listar clientes ACTIVOS</a></li>
                        <li><a class="dropdown-item" href="<?php echo APP_WWW . 'clientes/index2' ?>">Listar todos los clientes</a></li>
                        <li><a class="dropdown-item" href="<?php echo APP_WWW . 'clientes/add' ?>">Crear un nuevo cliente</a></li>
                    </ul>
                </li>
                
                <li class="dropdown lista-menu">

                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <span>PARAMETRIZAR</span><i class="material-icons">keyboard_arrow_down</i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">PARAMETRIZAR</li>
                        <li><a class="dropdown-item" href="<?php echo APP_WWW . 'clientes' ?>">PLANTILLAS</a></li>
                        <li><a class="dropdown-item" href="<?php echo APP_WWW . 'clientes/add' ?>">Crear un nuevo cliente</a></li>
                    </ul>
                </li>

                
                <li class="dropdown lista-menu">

                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                    <div class="demo-google-material-icon"> <i class="material-icons icono">account_circle</i> <?php echo ucwords($nombres) ?> </div> 

                    </a>
                    <ul class="dropdown-menu">
                        
                        <li class="header"></li>
                        <li><?php echo $this->Html->link(__('Cerrar Sesion'), array('controller' => 'usuarios', 'action' => 'salir')); ?></li>
                    </ul>
                </li>


                <!-- #END# Notifications -->
                <!-- Tasks -->
                
            </ul>
        </div>
    </div>
</nav>



<body class="theme-grey">

    <section>
        <div class='dashboard-content'>
            <div class='container '>
                <?php echo $this->Session->flash(); ?>

                <?php echo $this->fetch('content'); ?>


            </div>
        </div>
    </section>




    <script>
        $(document).ready(function() {
            $('#tablas').DataTable({
                "language": {
                    "info": "Mostando pagina _START_ de _END_ paginas con un total de _TOTAL_ registros"
                },
                responsive: true
            });
        });
    </script>
</body>

</html>


<?php
//phpinfo();

echo $this->Html->script("jquery.min");
//echo $this->Html->script("jquery"); 
//echo $this->Html->script("default"); 

?>
<!-- Bootstrap Core Js -->
<script src=<?php echo $path . "bootstrap/js/bootstrap.js"; ?>></script>

<!-- Bootstrap Material Datetime Picker Plugin Js -->
<!--{!!Html::script('plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')!!}-->

<!-- Select Plugin Js -->
<script src=<?php echo $path . "bootstrap-select/js/bootstrap-select.js"; ?>></script>
<!-- Slimscroll Plugin Js -->
<script src=<?php echo $path . "jquery-slimscroll/jquery.slimscroll.js"; ?>></script>
<!-- Waves Effect Plugin Js -->
<script src=<?php echo $path . "node-waves/waves.js"; ?>></script>
<!-- Jquery DataTable Plugin Js -->
<script src="<?php echo $path . "jquery-datatable/jquery.dataTables.js"; ?>"></script>
<script src="<?php echo $path . "jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"; ?>"></script>
<!-- Jquery Validation Plugin Css -->
<script src=<?php echo $path . "jquery-validation/jquery.validate.js"; ?>></script>
<!-- JQuery Steps Plugin Js -->
<script src=<?php echo $path . "jquery-steps/jquery.steps.js"; ?>></script>

<!-- Bootstrap Tags Input Plugin Js -->
<script src=<?php echo $path . "bootstrap-tagsinput/bootstrap-tagsinput.js"; ?>></script>



<?php
echo $this->Html->script("pages/forms/form-wizard");
?>
<!-- Morris Plugin Js -->
<script src=<?php echo $path . "raphael/raphael.min.js"; ?>></script>
<script src=<?php echo $path . "morrisjs/morris.js"; ?>></script>

<!-- Sparkline Chart Plugin Js -->
<script src=<?php echo $path . "jquery-sparkline/jquery.sparkline.js"; ?>></script>

<?php
//  Custom Js 
echo $this->Html->script('filter.js');
echo $this->Html->script('admin.js');
echo $this->Html->script('pages/tables/jquery-datatable.js');
echo $this->Html->script('pages/index.js');
echo $this->Html->script('pages/forms/form-validation.js');
echo $this->Html->script('pages/forms/advanced-form-elements.js');
echo $this->Html->script('pages/ui/modals.js');

// Demo Js 
echo $this->Html->script('demo.js');
echo $this->Html->css('animate.css');

?>



<!-- Jquery DataTable Plugin Js -->
<script src=<?php echo $path . "jquery-datatable/jquery.dataTables.js"; ?>></script>
<script src=<?php echo $path . "jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"; ?>></script>
<script src=<?php echo $path . "jquery-datatable/extensions/export/dataTables.buttons.min.js"; ?>></script>
<script src=<?php echo $path . "jquery-datatable/extensions/export/buttons.flash.min.js"; ?>></script>
<script src=<?php echo $path . "jquery-datatable/extensions/export/jszip.min.js"; ?>></script>
<script src=<?php echo $path . "jquery-datatable/extensions/export/pdfmake.min.js"; ?>></script>
<script src=<?php echo $path . "jquery-datatable/extensions/export/vfs_fonts.js"; ?>></script>
<script src=<?php echo $path . "jquery-datatable/extensions/export/buttons.html5.min.js"; ?>></script>
<script src=<?php echo $path . "jquery-datatable/extensions/export/buttons.print.min.js"; ?>></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/mathjs/3.6.0/math.min.js"></script>

<style type="text/css">
    body {
        margin: 0px;
    }

    body::-webkit-scrollbar-track {
        box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
        background-color: #ffffff;
    }

    body::-webkit-scrollbar {
        width: 12px;
        background-color: #232424;
    }

    body::-webkit-scrollbar-thumb {
        border-radius: 10px;
        box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        background-color: #6a8a99;
    }

    /** Paging **/
    .paging {
        background: #fff;
        color: #ccc;
        margin-top: 1em;
        clear: both;
    }

    .paging .current,
    .paging .disabled,
    .paging a {
        text-decoration: none;
        padding: 5px 8px;
        display: inline-block
    }

    .paging>span {
        display: inline-block;
        border: 1px solid #ccc;
        border-left: 0;
    }

    .paging>span:hover {
        background: #efefef;
    }

    .paging .prev {
        border-left: 1px solid #ccc;
        -moz-border-radius: 4px 0 0 4px;
        -webkit-border-radius: 4px 0 0 4px;
        border-radius: 4px 0 0 4px;
    }

    .paging .next {
        -moz-border-radius: 0 4px 4px 0;
        -webkit-border-radius: 0 4px 4px 0;
        border-radius: 0 4px 4px 0;
    }

    .paging .disabled {
        color: #ddd;
    }

    .paging .disabled:hover {
        background: transparent;
    }

    .paging .current {
        background: #efefef;
        color: #c73e14;
    }
</style>