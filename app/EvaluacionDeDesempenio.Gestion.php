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

        <?php include_once '../gui/navbarNoDocente.php'; ?>
        
        <div class="row">
            
            <!-- Lista Docentes -->
            
            <div class="col-md-9 col-md-push-3">
                <div class="container">
            <div class="card">
                <div class="card-header">
                    <h1>Lista de Docentes</h1>
                </div>
                <div class="card-body">
                                  
                        <div class="table-responsive">          
                        <table class="table">
                        <thead>
                             <tr>
                              <th>Nombre y Apellido</th>
                                <th>D.N.I.</th>
                                <th>Telefono</th>
                                <th>Estado I.D.D.</th>
                                <th>Escuela</th>
                                <th>Evaluacion de Desempeño</th>
                             </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Albert Anibal Osiris SOFIA</td>
                            <td>35.456.213</td>
                            <td>4565465</td>
                            <td>Entregado</td>
                            <td>Cs. Naturales y Exactas</td>
                            <td><a href="EvaluacionDeDesempenio.php">
                   <button type="button" class="btn btn-success">
                       <span class="oi oi-plus"></span> Cargar
                     </button>
                 </a></td>
                        </tr>
                        <tr>
                            <td>Albert Anibal Osiris SOFIA</td>
                            <td>35.456.213</td>
                            <td>4565465</td>
                            <td>Entregado</td>
                            <td>Cs. Naturales y Exactas</td>
                            <td><a href="EvaluacionDeDesempenio.php">
                   <button type="button" class="btn btn-success">
                       <span class="oi oi-plus"></span> Cargar
                     </button>
                 </a></td>
                        </tr>
                        </tbody>
                        </table>
                        </div>
                       
                </div>
            </div>
                </div>
            </div>
            
              <!-- Ordenar Lista -->
            
            <div class="col-md-3 col-md-pull-9">
            <div class="container">    
            <div class="card">
                <div class="card-header">
                    <h1>Ordenar Lista</h1>
                </div>
                <div class="card-body">

                       
        <!-- Botones Orden -->
                       
   
            <div>
                <a href="PADA.ActividadDocente.php">
                   <button type="button" class="btn btn-success">
                       <span class="oi oi-arrow-circle-top"></span> I.D.D. Cargado
                     </button>
                 </a>
                <br> <br>
                <a href="PantallaDocentes.php">
                <button type="button" class="btn btn-info">
                       <span class="oi oi-arrow-circle-top"></span> Cs. Naturales y Exactas
                    </button>
                </a>
                <br> <br>
                <a href="PantallaDocentes.php">
                <button type="button" class="btn btn-success">
                       <span class="oi oi-arrow-circle-top"></span> Cs Sociales
                    </button>
                </a>
                <br> <br>
                <a href="PantallaDocentes.php">
                <button type="button" class="btn btn-info">
                       <span class="oi oi-arrow-circle-top"></span> Evaluacion de Dsempeño Cargada
                    </button>
                </a>
                <br> <br>
                <a href="PantallaDocentes.php">
                <button type="button" class="btn btn-success">
                       <span class="oi oi-magnifying-glass"></span> Buscar por D.N.I.
                    </button>
                </a>
                <br> <br>
                <a href="PantallaDocentes.php">
                <button type="button" class="btn btn-info">
                       <span class="oi oi-magnifying-glass"></span> Buscar por Nombre y Apellido
                    </button>
                </a>
                <br> <br>
                <a href="PantallaDirectorDeDepartamentos.php">
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
