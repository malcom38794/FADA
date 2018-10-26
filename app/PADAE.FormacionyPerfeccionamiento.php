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
        <script>
        var cont=0;
        $(document).ready(function(){
            $('#btn_add_Actividad').click(function(){
                agregarActividad();
            });
            $('#btn_del_Actividad').click(function(){
                eliminarActividad();
            });
        });
        function agregarActividad(){
            cont++;
            var fila= '<tr id="fila'+cont+'"><td><input type="text" class="form-control" placeholder="Curso/Actividad" />\n\
            </td><td><input type="text" placeholder="Institución" class="form-control" /></td> \n\
            <td><input type="text" placeholder="Area" class="form-control" /></td></tr>';
            $('#tablaActividadPADA').append(fila);
        }
        function eliminarActividad(){
            $('#fila'+cont).remove();
            cont--;
        }
        </script>
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Usuarios</title>
    </head>
    <body>
        
        <!-- Barra Superior dentro de la carpeta gui -->

        <?php include_once '../gui/navbar.php'; ?>
        
        <!-- Lista de Secciones -->
        
        <div class="container">
  <h1>P.A.D.A.E.</h1>
  <div class="w3-bar w3-margin-bottom">
      <a class="w3-bar-item w3-btn" href="PADAE.ActividadDocente.php">1 - Actividad Docente »</a>
    &nbsp;&nbsp;&nbsp;
    <a class="w3-bar-item w3-btn" href="PADAE.ActividadDeExtension.php">2 - Actividad de Extensión »</a>
    &nbsp;&nbsp;&nbsp;
    <a class="w3-bar-item w3-btn" href="PADAE.ActividadDeInvestigacion.php">3 - Actividad de Investigación »</a>
    &nbsp;&nbsp;&nbsp;
    <a class="w3-bar-item w3-btn" href="PADAE.ActividadDeGestion.php">4 - Actividad de Gestión »</a>
    &nbsp;&nbsp;&nbsp;
    <a class="w3-bar-item w3-btn" href="PADAE.FormacionyPerfeccionamiento.php" style="color:red;">5 - Formación y Perfeccionamiento »</a>
  </div>
</div>
        
        <!-- Formulario PADAE -->
        
         <div class="container" >
             
             <label class="form-inline">
             <h4>Formacion y Perfeccionamiento:</h4>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <button class='btn btn-primary' id="btn_add_Actividad">Nuevo Curso</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <button class='btn btn-danger' id="btn_del_Actividad">Eliminar Curso</button>
                  </label>
             <div class="card">
             <table class='table table-bordered table-hover' id="tablaActividadPADA">
                    <tr>
                      <th>Curso/Actividad:</th>
                      <th>Institución:</th>
                      <th>Area:</th>
                      </tr>
                    <tr>
                      <td>
                          <div class="col-sm-20"> 
                          <input type="text" placeholder="Curso/Actividad" class="form-control" />
                          </div>
                      </td>
                      <td>
                          <div class="col-sm-20">          
                            <input type="text" placeholder="Institución" class="form-control" />
                          </div>
                      </td>
                    <td>
                        <div class="col-sm-20"> 
                        <input type="text" placeholder="Area" class="form-control" />
                        </div>
                    </td>
                  
                    </tr>
                    
                  </table>
             </div>
                     <br>
                 <div class="card">
                   <label class="control-label col-sm-0" for="pwd">Otros:</label>
                   <input type="text" placeholder="Para ser utilizado en la evaluacion de desempeño" class="textbox" />
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
        <a href="PADAE.FormacionyPerfeccionamiento.php">
           <button type="button" class="btn btn-dark">
               <span class="oi oi-print"></span> Imprimir
             </button>
         </a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="PADAE.ActividadDeExtension.php">
           <button type="button" class="btn btn-warning">
               <span class="oi oi-trash"></span> Borrar Campos
             </button>
         </a>
       &nbsp;&nbsp;&nbsp;&nbsp;        
        <a href="PantallaDocentes.php">
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
