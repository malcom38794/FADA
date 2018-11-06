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
        <?php include_once '../gui/navbar.php'; ?>
        <div class="container">
            
        <!-- Mensaje de alerta para datos personales -->    
            
        <div class="alert alert alert-danger" role="alert">
            <h2><strong>ATENCI&Oacute;N!!</strong><h2/>
            Mantenga actualizados sus <a href="DatosPersonales.php">datos personales</a> ya que serán utilizados en sus formularios. 
                    </div>
            </div>
           <div class="container" >
               
               <!-- Formulario PADA -->
               
                <div class="card">
                    <div class="card-header">
                        <h1 >Formulario P.A.D.A.</h1>
                        <h4 style="color:red;">Plazo de entrega:</h4>
                        <h3 style="color:red;">01/03/2019 a 15/03/2019</h3>
                        <p>
                            En esta secci&oacute;n podr&aacute; realizar actividades como la carga,<br> modificaci&oacute;n e 
                            impresi&oacute;n del formulario P.A.D.A. (Plan Anual De Actividades)<br>
                            el mismo debe ser entregado en <strong>Lisandro de la torre 860</strong>.
                        </p>
                           <p>
                               <a href="PADA.ActividadDocente.php">
                        <button type="button" class="btn btn-success">
                            <span class="oi oi-plus"></span> Cargar año en curso
                        </button>
                    </a>
                               &nbsp;&nbsp;&nbsp;&nbsp;
                               <a href="PADA.Gestion.php">
                        <button type="button" class="btn btn-success">
                            <span class="oi oi-plus"></span> Visualizar formularios anteriores
                        </button>
                    </a>
                    </p>
                    </div>
                </div>
               </div>
        <div class="container">
            
            <!-- Formulario PADAE -->
            
                <div class="card">
                    <div class="card-header">
                        <h1>Formulario P.A.D.A.E.</h1>
                        <h4 style="color:red;">Plazo de entrega:</h4>
                        <h3 style="color:red;">01/12/2019 a 15/12/2019</h3>
                        <p>
                            En esta secci&oacute;n podr&aacute; realizar actividades como la carga,<br> modificaci&oacute;n e 
                            impresi&oacute;n del formulario P.A.D.A.E. (Plan Anual De Actividades Ejecutado) .<br>
                            A partir de los datos cargados en su correspondiente P.A.D.A. para ser entregrado 
                            en <strong>Piloto Lero Rivera y Avenida Gregores</strong>.
                        </p>
                           <p>
                               <a href="PADAE.ActividadDocente.php">
                        <button type="button" class="btn btn-success">
                            <span class="oi oi-plus"></span> Cargar año en curso
                        </button>
                    </a>
                               &nbsp;&nbsp;&nbsp;&nbsp;
                               <a href="PADAE.php">
                        <button type="button" class="btn btn-success">
                            <span class="oi oi-plus"></span> Visualizar formularios anteriores
                        </button>
                    </a>
                    </p>
                    </div>
                </div>
        </div>
        
        <!-- Barra Inferior dentro de la carpeta gui -->
        
        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>

