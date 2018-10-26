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
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Usuarios</title>
        <script>
        var cont=0;
        var cont2=0;
        $(document).ready(function(){
            $('#btn_add_titulo').click(function(){
                agregarTitulo();
            });
            $('#btn_del_titulo').click(function(){
                eliminarTitulo();
            });
            $('#btn_add_cargo').click(function(){
                agregarCargo();
            });
            $('#btn_del_cargo').click(function(){
                eliminarCargo();
            });
        });
        function agregarTitulo(){
            cont++;
            var fila= '<tr id="fila'+cont+'"><td><input type="text" class="form-control" id="Titulos" placeholder="Ingresar titulo">\n\
    </td><td><input type="text" class="form-control" id="Otorga" placeholder="Entidad que lo otorga"></td></tr>';
            $('#tablaTitulos').append(fila);
        }
        function eliminarTitulo(){
            $('#fila'+cont).remove();
            cont--;
        }
        function agregarCargo(){
            cont2++;
            var filacar= '<tr id="filacar'+cont2+'"><td><select class="form-control" id="CargoDocente"><option>Profesor Titular</option><option>Profesor Asociado</option>\n\
                <option>Profesor Adjunto</option><option>Asistente de Docencia</option><option>Ayudante de Docencia</option></select>\n\
    </td><td><select class="form-control" id="Dedicacion"><option>Simple</option><option>Parcial</option><option>Completa</option>\n\
            </select></td><td><select class="form-control" id="Departamento"><option>Cs. Naturales y Exactas</option><option>Cs. Sociales</option>\n\
            </select></td></tr>';
            $('#tablaCargos').append(filacar);
        }
        function eliminarCargo(){
            $('#filacar'+cont2).remove();
            cont2--;
        }
        </script>
           
    </head>
    <body>
        <!-- Barra Superior dentro de la carpeta gui -->
        <?php include_once '../gui/navbar.php'; ?>

        
  <h1>Datos Personales</h1>

  
  
  
  <!-- Titulos -->
  
   <div class="form-group">

                  <label>
                    T&iacute;tulo/s:
                    <button class='btn btn-success' id="btn_add_titulo">Nuevo</button>
                    <button class='btn btn-danger' id="btn_del_titulo">Eliminar</button>
                  </label>
                  <table class='table table-bordered table-hover' id="tablaTitulos">
                    <tr>
                      <th>Título:</th>
                      <th>Otorgado por:</th>
                     </tr>
                    <tr>
                        <td>
                            <input type="text" class="form-control" id="Titulos" placeholder="Ingresar titulo">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="Otorga" placeholder="Entidad que lo otorga">
                        </td>
                    </tr>
                    
                  </table>                 

                </div>
  
  <br>
  
  <div class="form-group">

                  <label>
                    Cargos Docentes:
                    <button class='btn btn-success' id="btn_add_cargo">Nuevo</button>
                    <button class='btn btn-danger' id="btn_del_cargo">Eliminar</button>
                  </label>
                  <table class='table table-bordered table-hover' id="tablaCargos">
                    <tr>
                      <th>Cargo/s Docente/s:</th>
                      <th>Dedicacion:</th>
                      <th>Departamento:</th>
                    </tr>
                    <tr>
                      <td><select class="form-control" id="CargoDocente">
                <option>Profesor Titular</option>
                <option>Profesor Asociado</option>
                <option>Profesor Adjunto</option>
                <option>Asistente de Docencia</option>
                <option>Ayudante de Docencia</option>
            </select></td>
                      <td><select class="form-control" id="Dedicacion">
                <option>Simple</option>
                <option>Parcial</option>
                <option>Completa</option>
            </select></td>
            <td><select class="form-control" id="Departamento">
                <option>Cs. Naturales y Exactas</option>
                <option>Cs. Sociales</option>
            </select></td>
                    </tr>
                    
                  </table>                 

                </div>
  
 
    
        
        <!-- barra inferior dentro de la carpeta gui -->
        
        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>


