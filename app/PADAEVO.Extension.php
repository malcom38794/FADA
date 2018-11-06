<?php

/* 
 * Menu de Formulario PADA
 */
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
        
        <!-- Lista de Secciones -->
        
        <div class="container">
  <h1>P.A.D.A.E.V.O.</h1>
  <div class="w3-bar w3-margin-bottom">
      <h3>Nombre y Apellido del docente</h3>
  </div>
</div>
        
        <!-- Formulario PADA -->
        
        <div class="container" >  
             <h4>Actividades De Extensión:</h4>
                <div class="card">
                   
                   <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
       
        </div>
        
        
        
         <div class="container" >  
             <h4>Observaciones:</h4>
                <div class="card">
                   
                   <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
       
        </div>

        
        
        
        
               
              
        
        
        <!-- Botones -->
        
        <div class="container" >
        <div class="card">
                    <div class="card-header">
                        <div class="form-inline">
                             <a href="PADA.php">
           <button type="button" class="btn btn-info">
               <span class="oi oi-check"></span> Guardar
             </button>
         </a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="PADAE.ActividadDocente.php">
           <button type="button" class="btn btn-success">
               <span class="oi oi-eye"></span> Ver PADAE completo
             </button>
         </a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="PADAE.ActividadDocente.php">
           <button type="button" class="btn btn-warning">
               <span class="oi oi-vertical-align-bottom"></span> Estadísticas
             </button>
         </a>
       &nbsp;&nbsp;&nbsp;&nbsp;        
       <a href="PADAEVO.GestionExtension.php">
           <button type="button" class="btn btn-danger">
               <span class="oi oi-account-logout"></span> Salir
             </button>
         </a>
                    </div>
                    </div>
                </div>
        </div>
        <!-- Barra Inferior dentro de la carpeta gui -->
        
        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>
