<?php
include_once '../lib/ControlAcceso.Class.php';
ControlAcceso::requierePermiso(PermisosSistema::PERMISO_USUARIOS);
include_once '../modelo/ColeccionUsuarios.php';
$ColeccionUsuarios = new ColeccionUsuarios();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../lib/bootstrap-4.1.1-dist/css/bootstrap.css" />
        <link rel="stylesheet" href="../lib/open-iconic-master/font/css/open-iconic-bootstrap.css" />
        <script type="text/javascript" src="../lib/JQuery/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="../lib/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>        
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Usuarios</title>
    </head>
    <body>
        <!-- Barra Superior dentro de la carpeta gui -->
        <?php include_once '../gui/navbarNoDocente.php'; ?>
        
           <div class="container" >
               
               <!-- Formulario PADA -->
               
                <div class="card">
                    <div class="card-header">
                        <h1 >Formulario P.A.D.A.E.V.O.</h1>
                        <p>
                            En esta secci&oacute;n podr&aacute; realizar actividades como la carga,<br> modificaci&oacute;n e 
                            impresi&oacute;n del formulario P.A.D.A.E.V.O. (Plan Anual De Actividades Ejecutado Verificado y Observado).<br>
                            Tenga en cuenta que solo podr&aacute; modificar la secci&oacute;n de investigación y postgrado.
                        </p>
                           <p>
                        <a href="PADAEVO.GestionInvestigacion.php">
                        <button type="button" class="btn btn-success">
                            <span class="oi oi-plus"></span> Gestionar Formulario
                        </button>
                    </a>
                    </p>
                    </div>
                </div>
               </div>
        
        <!-- Barra Inferior dentro de la carpeta gui -->
        
        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>

