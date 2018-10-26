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
               
                 <div class="form-group">

                  <label>
                      <h1>Formulario P.A.D.A.E.</h1>
                    
                    
                  </label>
                  <table class='table table-bordered table-hover' id="tablaCargos">
                    <tr>
                      <th>Nombre y Apellido:</th>
                      <th>DNI:</th>
                    </tr>
                    <tr>
                      <td>
                      <input type="text" class="form-control" id="NombreYApellido" placeholder="Ingresar Nombre y Apellido">
                      </td>
                      <td>
                      <input type="text" class="form-control" id="DNI" placeholder="Ingresar DNI">
                      </td>
                    </tr>
                    
                  </table>
                     <button class='btn btn-success' id="btn_add_cargo"><span class="oi oi-magnifying-glass"></span> Buscar Docente</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="PantallaSecretariaAcademica.php">
                    <button class='btn btn-danger' id="btn_del_cargo" ><span class="oi oi-account-logout"></span> Salir</button>
                    </a>
                </div>
               </div>
        
        <!-- Barra Inferior dentro de la carpeta gui -->
        
        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>
