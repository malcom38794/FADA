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
        var cont2=0;
        $(document).ready(function(){
            $('#btn_add_Actividad').click(function(){
                agregarActividad();
            });
            $('#btn_del_Actividad').click(function(){
                eliminarActividad();
            });
            $('#btn_add_ActividadPADAE').click(function(){
                agregarActividadPADAE();
            });
            $('#btn_del_ActividadPADAE').click(function(){
                eliminarActividadPADAE();
            });
        });
        function agregarActividad(){
            cont++;
            var fila= '<tr id="fila'+cont+'"><td><input type="text" class="form-control" placeholder="Proyecto/Programa/Area" />\n\
            </td><td><select class="form-control" id="Dedicacion"><option>Cargo</option><option>Responsable</option>\n\
            <option>Colaborador</option></select></td><td><input type="number" class="form-control" placeholder="Cantidad semanal" /> \n\
            </td><td><select class="form-control" id="Dedicacion"><option>Anual</option><option>Cuatrimestral</option></select></td></tr>';
            $('#tablaActividadPADA').append(fila);
        }
        function eliminarActividad(){
            $('#fila'+cont).remove();
            cont--;
        }
        function agregarActividadPADAE(){
            cont2++;
            var fila= '<tr id="filaPADAE'+cont2+'"><td><input type="text" class="form-control" placeholder="Proyecto/Programa/Area" />\n\
            </td><td><select class="form-control" id="Dedicacion"><option>Cargo</option><option>Responsable</option>\n\
            <option>Colaborador</option></select></td><td><input type="number" class="form-control" placeholder="Cantidad semanal" /> \n\
            </td><td><select class="form-control" id="Dedicacion"><option>Anual</option><option>Cuatrimestral</option></select></td></tr>';
            $('#tablaActividadPADAE').append(fila);
        }
        function eliminarActividadPADAE(){
            $('#filaPADAE'+cont2).remove();
            cont2--;
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
    <a class="w3-bar-item w3-btn" href="PADAE.ActividadDeGestion.php" style="color:red;">4 - Actividad de Gestión »</a>
    &nbsp;&nbsp;&nbsp;
    <a class="w3-bar-item w3-btn" href="PADAE.FormacionyPerfeccionamiento.php">5 - Formación y Perfeccionamiento »</a>
  </div>
</div>
        
        <!-- Formulario PADAE -->
        
         <div class="container" >
             <form action="#"method="post"> 
             <label class="form-inline">
             <h4>Actividad de Gestion:</h4>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" class='btn btn-primary' id="btn_add_Actividad">Nueva Actividad</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" class='btn btn-danger' id="btn_del_Actividad">Eliminar Actividad</button>
                  </label>
             <div class="card">
             <table class='table table-bordered table-hover' id="tablaActividadPADA">
                    <tr>
                      <th>Proyecto/Programa/Area:</th>
                      <th>Calidad:</th>
                      <th>Hs Asignadas:</th>
                      <th>Tipo:</th>
                      </tr>
                    <tr>
                      <td>
                          <div class="col-sm-20"> 
                          <input type="text" placeholder="Proyecto/Programa/Area" class="form-control" />
                          </div>
                      </td>
                      <td>
                          <div class="col-sm-20"> 
                        <select class="form-control" id="Dedicacion">
                        <option>Cargo</option>
                        <option>Responsable</option>
                        <option>Colaborador</option>
                        </select>
                          </div>
                      </td>
                    <td>
                        <div class="col-sm-20"> 
                        <input type="number" placeholder="Cantidad semanal" class="form-control" />
                        </div>
                    </td>
                    <td><div class="col-sm-20"> 
                        <select class="form-control" id="Dedicacion">
                        <option>Anual</option>
                        <option>Cuatrimestral</option>
                        </select>
                        </div>
                    </td>
                  
                    </tr>
                    
                  </table>
             </div>
                     <br>
            
            <div class="card">
                     <table class='table table-bordered table-hover'>
                         <tr>
                             <th>Otros</th>
                             <th>Hs. Equivalente Anual</th>
                         </tr>
                         <tr>
                             <td>
                                 <input type="text" placeholder="Para ser utilizado en la evaluacion de desempeño" class="form-control" id="ActividadDeInvestigacion_Otro" name="ActividadDeInvestigacion_Otro"/>
                             </td>
                             <td>
                                 <input type="text" placeholder="Cantidad de horas" class="form-control" id="HsAnual" name="HsAnual"/>
                             </td>
                         </tr>
                     </table>
               </div>
                     
                     <br>
                     
            <label class="form-inline">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" class='btn btn-primary' id="btn_add_ActividadPADAE">Nueva Actividad</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" class='btn btn-danger' id="btn_del_ActividadPADAE">Eliminar Actividad</button>
                  </label>
             <div class="card">
             <table class='table table-bordered table-hover' id="tablaActividadPADAE">
                    <tr>
                      <th>Proyecto/Programa/Area:</th>
                      <th>Calidad:</th>
                      <th>Hs Asignadas:</th>
                      <th>Tipo:</th>
                      </tr>
                    <tr>
                      <td>
                          <div class="col-sm-20"> 
                          <input type="text" placeholder="Proyecto/Programa/Area" class="form-control" />
                          </div>
                      </td>
                      <td>
                          <div class="col-sm-20"> 
                        <select class="form-control" id="Dedicacion">
                        <option>Cargo</option>
                        <option>Responsable</option>
                        <option>Colaborador</option>
                        </select>
                          </div>
                      </td>
                    <td>
                        <div class="col-sm-20"> 
                        <input type="number" placeholder="Cantidad semanal" class="form-control" />
                        </div>
                    </td>
                    <td><div class="col-sm-20"> 
                        <select class="form-control" id="Dedicacion">
                        <option>Anual</option>
                        <option>Cuatrimestral</option>
                        </select>
                        </div>
                    </td>
                  
                    </tr>
                    
                  </table>
             </div>
             
            <br>
        
                     <div class="card">
                         <h5> Oservaciones del docente</h5>
                         <input type="text" placeholder="Oservaciones" class="form-control" id="Observaciones" name="Observaciones"/>
                     </div>
        
        
        
        
               
              
        
        
        <!-- Botones -->
        
        <div class="container" >
        <div class="card">
                    <div class="card-header">
                        <div class="form-inline">
                             
                <button type="submit" class="btn btn-success">
               <span class="oi oi-check"></span> Guardar
             </button>
         
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="PADAE.ActividadDeInvestigacion.php">
           <button type="button" class="btn btn-info">
               <span class="oi oi-arrow-left"></span> Anterior
             </button>
         </a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="PADAE.FormacionyPerfeccionamiento.php">
           <button type="button" class="btn btn-info">
               <span class="oi oi-arrow-right"></span> Siguiente
             </button>
         </a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        
           <button type="reset" class="btn btn-warning">
               <span class="oi oi-trash"></span> Borrar Campos
             </button>
         
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
             </form>
        </div>
        <!-- Barra Inferior dentro de la carpeta gui -->
        
        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>
