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
        <script>
        var cont3=0;
        $(document).ready(function(){
            $('#btn_add_gestion').click(function(){
                agregarGestion();
            });
            $('#btn_del_gestion').click(function(){
                eliminarGestion();
            });
        });
        function agregarGestion(){
            cont3++;
            var filagestion= '<tr id="filagestion'+cont3+'"><td><input type="text" class="form-control" id="CargoGestion" placeholder="Ingresar Cargo de Gestion">\n\
    </td></tr>';
            $('#tablagestion').append(filagestion);
        }
        function eliminarGestion(){
           $('#filagestion'+cont3).remove();
            cont3--;
        }
        </script>
           
    </head>
    <body role="document">
        <!-- Barra Superior dentro de la carpeta gui -->
        <?php include_once '../gui/navbar.php'; ?>

        <div class="container" id="todo">
  <h1>Datos Personales</h1>
  <!-- Nombre y Apellido -->
  
    <div class="form-group" id="NombreYApellido">
      <label class="control-label col-sm-0" for="email">Nombres y Apellidos:</label>
      <div class="col-sm-20">
        <input type="text" class="form-control" id="NombreYApellido" placeholder="Ingresar nombre completo y apellidos" name="NombreYApellido" required>
      </div>
    </div>
  
  <!-- DNI -->
  
    <div class="form-group">
      <label class="control-label col-sm-0" for="email">DNI:</label>
      <div class="col-sm-20">
        <input type="number" class="form-control" id="DNI" placeholder="Ingresar numero de DNI" name="DNI" required>
      </div>
    </div>
  
  <!-- Titulos -->
  
   <div class="form-group">

                  <label>
                    T&iacute;tulo/s:
                    &nbsp;&nbsp;
                    <button class='btn btn-success' id="btn_add_titulo">Nuevo Título</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <button class='btn btn-danger' id="btn_del_titulo">Eliminar Titulo</button>
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
  
  <!-- Cargos -->
  
  <div class="form-group">

                  <label>
                    Cargos Docentes:
                    &nbsp;&nbsp;
                    <button class='btn btn-success' id="btn_add_cargo">Nuevo Cargo</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <button class='btn btn-danger' id="btn_del_cargo">Eliminar Cargo</button>
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
  
  
  <br>
 
  <!-- Categoria -->
  
    <div class="form-group">
      <label class="control-label col-sm-0" for="pwd">Categor&iacute;a Docente/Investigador:</label>
      <div class="col-sm-20">          
        <input type="text" class="form-control" id="CategoriaDocente" placeholder="Ingresar su categoria">
      </div>
    </div>
  
  <!-- Cargos de Gestion -->
  
<div class="form-group">

                  <label>
                    Cargos de Gestión:
                    &nbsp;&nbsp;
                    <button class='btn btn-success' id="btn_add_gestion">Nuevo Cargo</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <button class='btn btn-danger' id="btn_del_gestion">Eliminar Cargo</button>
                  </label>
                  <table class='table table-bordered table-hover' id="tablagestion">
                    <tr>
                      <th>Cargo de Gestión:</th>
                     </tr>
                    <tr>
                        <td>
                            <input type="text" class="form-control" id="Titulos" placeholder="Ingresar Cargo de Gestion">
                        </td>
                    </tr>
                  </table>   
                </div>
  
   <!-- Direccion -->
  
    <div class="form-group">
      <label class="control-label col-sm-0" for="pwd">Direcci&oacute;n:</label>
      <div class="col-sm-20">          
        <input type="text" class="form-control" id="Direccion" placeholder="Ingresar su dirección">
      </div>
    </div>
   
   <!-- Telefono -->
  
    <div class="form-group">
      <label class="control-label col-sm-0" for="pwd">Telefono:</label>
      <div class="col-sm-20">          
        <input type="text" class="form-control" id="Telefono" placeholder="Ingresar un telefono de contacto">
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
       <a href="PantallaDocentes.php">
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


