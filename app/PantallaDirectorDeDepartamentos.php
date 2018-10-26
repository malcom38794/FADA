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
        <?php include_once '../gui/navbarNoDocente.php'; ?>
        
        <div class="container" >
               
               <!-- Formulario PADA -->
               
                <div class="card">
                    <div class="card-header">
                        <h1 >Formulario P.A.D.A.</h1>
                        <p>
                            En esta secci&oacute;n podr&aacute; cambiar el estado de los 
                            formularios P.A.D.A. (Plan Anual De Actividades).<br>
                            Entregados por los docentes con su correspondiente firma.
                        </p>
                           <p>
                        <a href="PADA.Entrega.php">
                        <button type="button" class="btn btn-success">
                            <span class="oi oi-plus"></span> Cambiar Estado
                        </button>
                    </a>
                    </p>
                    </div>
                </div>
               </div>
        <div class="container">
            
        <!-- Formulario PADAEVO -->    
            
        <div class="card">
                    <div class="card-header">
                        <h1 >Formulario P.A.D.A.E.V.O.</h1>
                        <p>
                            En esta secci&oacute;n podr&aacute; realizar actividades como la carga,<br> modificaci&oacute;n e 
                            impresi&oacute;n del formulario P.A.D.A.E.V.O. (Plan Anual De Actividades Ejecutado Verificado y Observado).<br>
                            Tenga en cuenta que solo podr&aacute; modificar la secci&oacute;n de Formacion y Perfeccionamiento.
                        </p>
                           <p>
                               <a href="PADAEVO.GestionDirectorDeDepartamentos.php">
                        <button type="button" class="btn btn-success">
                            <span class="oi oi-plus"></span> Gestionar Formulario
                        </button>
                    </a>
                    </p>
                    </div>
                </div>
        </div>
        <div class="container">
            
            <!-- Formulario IDD -->
            
                <div class="card">
                    <div class="card-header">
                        <h1>Formulario I.D.D.</h1>
                        <p>
                            En esta secci&oacute;n podr&aacute; realizar actividades como la carga,<br> modificaci&oacute;n e 
                            impresi&oacute;n del formulario I.D.D. (Informe de Desempeño Docente) .<br>
                            El informe debe contener una visión integradora de las actividades desarrolladas por el docente
                            en el año académico en evaluación.
                        </p>
                           <p>
                               <a href="IDD.Gestion.php">
                        <button type="button" class="btn btn-success">
                            <span class="oi oi-plus"></span> Gestionar Formulario
                        </button>
                    </a>
                    </p>
                    </div>
                </div>
        </div>
        <div class="container">
            
            <!-- Formulario Evaluacion de Desempeño -->
            
                <div class="card">
                    <div class="card-header">
                        <h1>Formulario Evaluacion de Desempeño</h1>
                        <p>
                            En esta secci&oacute;n podr&aacute; realizar la carga del formulario Evaluacion de Desempeño.<br>
                            Tenga en cuenta que para completar este formulario deben estar presentes: <br>
                            Director de Departamentos, un consejero superior y un académico del departamento.
                        </p>
                           <p>
                        <a href="EvaluacionDeDesempenio.Gestion.php">
                        <button type="button" class="btn btn-success">
                            <span class="oi oi-plus"></span> Gestionar Formulario
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

