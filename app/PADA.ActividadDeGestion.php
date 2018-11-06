<?php

/* 
 * Menu de Formulario PADA
 */
include_once '../lib/ControlAcceso.Class.php';
ControlAcceso::requierePermiso(PermisosSistema::PERMISO_USUARIOS);
include_once '../modelo/ColeccionUsuarios.php';
include_once '../modelo/BDConexion.Class.php';

BDConexion::getInstancia()->autocommit(false);
BDConexion::getInstancia()->begin_transaction();

$asignatura=$_POST['Investigacion_Proyecto'];
$calidad=$_POST['Investigacion_Calidad'];
$hs=$_POST['Investigacion_Horas'];
$tipo=$_POST['Investigacion_Tipo'];
$otro=$_POST['Investigacion_Otro'];
$cont= count($asignatura);
for($i=0;$i<$cont;++$i){
$sql="INSERT INTO actividad_investigacionpada VALUES('','1','$asignatura[$i]','$calidad[$i]','$hs[$i]','$tipo[$i]','$otro')";
$consulta = BDConexion::getInstancia()->query($sql);
}


if (!$consulta) {
    BDConexion::getInstancia()->rollback();
    die(BDConexion::getInstancia()->errno);
}


BDConexion::getInstancia()->commit();
BDConexion::getInstancia()->autocommit(true);

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
            var fila= '<tr id="fila'+cont+'"><td><input type="text" class="form-control" placeholder="Proyecto/Programa" />\n\
            </td><td><select class="form-control" id="Dedicacion"><option>Director</option><option>Codirector</option>\n\
            <option>Colaborador</option><option>Integrante</option></select></td><td><input type="number" class="form-control" placeholder="Cantidad semanal" /> \n\
            </td><td><select class="form-control" id="Dedicacion"><option>Anual</option><option>Cuatrimestral</option></select></td></tr>';
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
  <h1>P.A.D.A.</h1>
  <div class="w3-bar w3-margin-bottom">
      <a class="w3-bar-item w3-btn" href="PADA.ActividadDocente.php">1 - Actividad Docente »</a>
    &nbsp;&nbsp;&nbsp;
    <a class="w3-bar-item w3-btn" href="PADA.ActividadDeExtension.php">2 - Actividad de Extensión »</a>
    &nbsp;&nbsp;&nbsp;
    <a class="w3-bar-item w3-btn" href="PADA.ActividadDeInvestigacion.php">3 - Actividad de Investigación »</a>
    &nbsp;&nbsp;&nbsp;
    <a class="w3-bar-item w3-btn" href="PADA.ActividadDeGestion.php" style="color:red;">4 - Actividad de Gestión »</a>
    &nbsp;&nbsp;&nbsp;
    <a class="w3-bar-item w3-btn" href="PADA.FormacionyPerfeccionamiento.php">5 - Formación y Perfeccionamiento »</a>
  </div>
</div>
        
        <!-- Formulario PADA -->
        
         <div class="container" >
             <form action="PADA.FormacionyPerfeccionamiento.php"method="post">
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
                      <th>Proyecto/Programa:</th>
                      <th>Calidad:</th>
                      <th>Hs Asignadas:</th>
                      <th>Tipo:</th>
                      </tr>
                    <tr>
                      <td>
                          <div class="col-sm-20"> 
                          <input type="text" placeholder="Proyecto/Programa" class="form-control" id="Gestion_Proyecto[]" name="Gestion_Proyecto[]"/>
                          </div>
                      </td>
                      <td>
                          <div class="col-sm-20"> 
                        <select class="form-control" id="Gestion_Calidad[]" name="Gestion_Calidad[]">
                        <option>Director</option>
                        <option>Codirector</option>
                        <option>Colaborador</option>
                        <option>Integrante</option>
                        </select>
                          </div>
                      </td>
                    <td>
                        <div class="col-sm-20"> 
                        <input type="number" placeholder="Cantidad semanal" class="form-control" id="Gestion_Horas[]" name="Gestion_Horas[]"/>
                        </div>
                    </td>
                    <td><div class="col-sm-20"> 
                        <select class="form-control" id="Gestion_Tipo[]" name="Gestion_Tipo[]">
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
                                 <input type="text" placeholder="Para ser utilizado en la evaluacion de desempeño" class="form-control" id="Gestion_Otro" name="Gestion_Otro"/>
                             </td>
                             <td>
                                 <input type="text" placeholder="Cantidad de horas" class="form-control" id="Gestion_HsAnual" name="Gestion_HsAnual"/>
                             </td>
                         </tr>
                     </table>
               </div>
             

        
        
        
        
               
              
        
        
        <!-- Botones -->
        
        <div class="container" >
        <div class="card">
                    <div class="card-header">
                        <div class="form-inline">
            <button type="submit" class="btn btn-success" name="guardar" onclick="alert('GUARDADO CORRECTAMENTE')">
               <span class="oi oi-check"></span> Guardar
             </button>
         
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="PADA.ActividadDeInvestigacion.php">
           <button type="button" class="btn btn-info">
               <span class="oi oi-arrow-left"></span> Anterior
             </button>
         </a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="PADA.FormacionyPerfeccionamiento.php">
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
