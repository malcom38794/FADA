<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../lib/ControlAcceso.Class.php';
ControlAcceso::requierePermiso(PermisosSistema::PERMISO_USUARIOS);
include_once '../modelo/ColeccionUsuarios.php';
$ColeccionUsuarios = new ColeccionUsuarios();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../lib/bootstrap-4.1.1-dist/css/bootstrap.css" />
        <link rel="stylesheet" href="../lib/open-iconic-master/font/css/open-iconic-bootstrap.css" />
        <script type="text/javascript" src="../lib/JQuery/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="../lib/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>   
        <script type="text/javascript" src="../lib/bootstrap-4.1.1-dist/js/DatosPersonales.js"></script>
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Usuarios</title>
        
           
    </head>
    <body role="document">
        <!-- Barra Superior dentro de la carpeta gui -->
        <?php include_once '../gui/navbarNoDocente.php'; ?>

        <div class="container" id="todo">
  <h1>Evaluacion de desempeño</h1>
  
  <!-- Cuadro -->
  
   <div class="form-group">

                  <table class='table table-bordered table-hover' id="tablaTitulos">
                    <tr>
                      <th>Actividad:</th>
                      <th>Resultado:</th>
                      <th>% de carga horaria:</th>
                      <th>Dedicación a la actividad:</th>
                     </tr>
                    <tr>
                        <td>
                            <label class="form-control"><strong>DOCENCIA</strong></label>
                        </td>
                        <td>
                            <input type="text" class="form-control" id="Otorga">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="Otorga">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="Otorga">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="form-control"><strong>INVESTIGACIÓN</strong></label>
                        </td>
                        <td>
                            <input type="text" class="form-control" id="Otorga">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="Otorga">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="Otorga">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="form-control"><strong>EXTENSIÓN</strong></label>
                        </td>
                        <td>
                            <input type="text" class="form-control" id="Otorga">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="Otorga">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="Otorga">
                        </td>
                    </tr>
                  </table>                 

                </div>
  
  <br>
 
  <!-- Resultado -->
  
    <div class="form-group">
      <label class="control-label col-sm-0" for="pwd">Resultado de la Evaluación:</label>
      <div class="col-sm-20">          
        <input type="text" class="form-control" id="CategoriaDocente">
      </div>
    </div>
  
  <!-- Recomendaciones -->
  
    <div class="form-group">
      <label class="control-label col-sm-0" for="pwd">Recomendaciones:</label>
      <div class="col-sm-20">          
        <input type="text" class="form-control" id="CategoriaDocente">
      </div>
    </div>
  
  <!-- Botones -->
  
  <div class="form-inline">
    <div>
    <a href="PADA.php">
           <button type="button" class="btn btn-success">
               <span class="oi oi-check"></span> Guardar
             </button>
         </a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="EvaluacionDeDesempenio.Gestion.php">
           <button type="button" class="btn btn-danger">
               <span class="oi oi-account-logout"></span> Salir
             </button>
         </a>
    </div>
   </div>
  </div>
        
    
        
        <!-- barra inferior dentro de la carpeta gui -->
        
        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>


