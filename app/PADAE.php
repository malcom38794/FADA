<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../lib/ControlAcceso.class.php';
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

        <?php include_once '../gui/navbar.php'; ?>

        <div class="container">

            <div class="card">
                <div class="card-header">
                    <h1>Formularios P.A.D.A.E.</h1>
                </div>
                <div class="card-body">
                        <tr>
                            <FONT FACE="impact" SIZE=6>Año:</FONT>
                        </tr>
                       <br>
                       
        <!-- Años -->
                       
        <div class="form-inline">
            <div>
                <a href="PADAE.ActividadDocente.php">
                   <button type="button" class="btn btn-success">
                       <span class="oi oi-plus"></span> 2018
                     </button>
                 </a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="PantallaDocentes.php">
                <button type="button" class="btn btn-success">
                       <span class="oi oi-print"></span> Imprimir
                    </button>
                </a>
            </div>
        </div>
                </div>
            </div>
        </div>
        
        <!-- Barra Inferior dentro de la carpeta gui -->
        
        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>

