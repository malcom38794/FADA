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
        
        
        
        
        <div class="row">
            
            <!-- Formulario PADAEVO -->
            
            <div class="col-lg-4">
         <div class="container" >
             <div class="card-header">
                <h1>P.A.D.A.E.V.O.</h1>
             </div>
             <br>
                 
                 <div class="card">
                    <div class="card-header">
                        <h3>Actividad Docente:</h3>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                 </div>
                     
             <br
                 
                <div class="card">
                    <div class="card-header">
                        <h3>Extensión:</h3>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>                  
                     
             <br
                 
                <div class="card">
                    <div class="card-header">
                        <h3>Investigación:</h3>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                 
            <br>
            
                 <div class="card">
                    <div class="card-header">
                        <h3>Tareas de Gestión:</h3>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                 </div>
            
            <br>
            
                 <div class="card">
                    <div class="card-header">
                        <h3>Formación y Perfeccionamiento:</h3>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
             </div>
                 </div>

             </div>
            
         <!-- Formulario IDD -->
            
         <div class="col-lg-6">
         <div class="container" >
             <div class="card-header">
                <h1>I.D.D.</h1>
             </div>
             <br>
                <div class="card">
                    <div class="card-header">
                        <h3>Desempeño y encuadre pedagógico:</h3>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                        <h5>Peso de la actividad sobre el total de la carga horaria:</h5>       
                        <input type="number" placeholder="Peso %" class="textbox" />
                    </div>
                </div>
             
             <br
               
                <div class="card">
                    <div class="card-header">
                        <h3>Desempeño en Extensión:</h3>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                        <h5>Peso de la actividad sobre el total de la carga horaria:</h5>       
                        <input type="number" placeholder="Peso %" class="textbox" />
                    </div>
                
                 
             <br
                 
                 <div class="card">
                    <div class="card-header">
                        <h3>Desempeño en Investigación:</h3>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                        <h5>Peso de la actividad sobre el total de la carga horaria:</h5>       
                        <input type="number" placeholder="Peso %" class="textbox" />
                    </div>
                     
             <br
                 
                <div class="card">
                    <div class="card-header">
                        <h3>Formación de Recursos Humanos:</h3>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>                  
                     
             <br
                 
                <div class="card">
                    <div class="card-header">
                        <h3>Utilización del tiempo de la dedicación:</h3>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                 
            <br>
            
                 <div class="card">
                    <div class="card-header">
                        <h3>Actualización y consistencia de los conocimientos:</h3>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                 </div>
            
            <br>
            
                 <div class="card">
                    <div class="card-header">
                        <h3>Reseultados sobresalientes y contexto para el logro:</h3>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
             </div>
                 </div>

             </div>
        
        <!-- Botones Orden -->
                 
                 <div class="col-lg-2">
            <div class="container">    
            <div class="card">
                <div class="card-header">
                    <h1>Funciones IDD</h1>
                </div>
                <div class="card-body">

            <div>
                <a href="PADA.php">
           <button type="button" class="btn btn-info">
               <span class="oi oi-check"></span> Guardar
             </button>
         </a>
        <br> <br>
        <a href="PADAE.ActividadDocente.php">
           <button type="button" class="btn btn-success">
               <span class="oi oi-eye"></span> Ver PADAE
             </button>
         </a>
        <br> <br>
        <a href="PADAE.ActividadDocente.php">
           <button type="button" class="btn btn-warning">
               <span class="oi oi-vertical-align-bottom"></span> Estadísticas
             </button>
         </a>
        <br> <br>        
        <a href="IDD.Gestion.php">
           <button type="button" class="btn btn-danger">
               <span class="oi oi-account-logout"></span> Salir
             </button>
         </a>  
            </div>
        
                </div>
            </div>
        </div>
            </div>
        
        
         </div>      
              
        
    
        
        <!-- Barra Inferior dentro de la carpeta gui -->
        
        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>
