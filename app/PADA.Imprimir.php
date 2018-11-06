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

$curso=$_POST['Formacion_Curso'];
$institucion=$_POST['Formacion_Institucion'];
$area=$_POST['Formacion_Area'];
$observaciones=$_POST['Formacion_Observaciones'];
$observacionesdocente=$_POST['Formacion_ObservacionesDocente'];
$cont= count($curso);
for($i=0;$i<$cont;++$i){
$sql="INSERT INTO actividad_formacionpada VALUES('','1','$curso[$i]','$institucion[$i]','$area[$i]','$observaciones','$observacionesdocente')";
$consulta = BDConexion::getInstancia()->query($sql);
}


if (!$consulta) {
    BDConexion::getInstancia()->rollback();
    die(BDConexion::getInstancia()->errno);
}


BDConexion::getInstancia()->commit();
BDConexion::getInstancia()->autocommit(true);

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
        <?php include_once '../gui/navbar.php'; ?>

        <div class="container" id="todo">
         <form action="PDFPADA.php"method="post">
            <h1>Formulario P.A.D.A. Guardado con Exito</h1>
            <br> 
            	
			 <br>
                	<input type="submit" name="create_pdf"class="btn btn-dark" value="Imprimir"> 		
			 

            <br> <br>
            <a href="PantallaDocentes.php">
           <button type="button" class="btn btn-danger">
               <span class="oi oi-account-logout"></span> Salir
             </button>
         </a>
         </form>  
    </div>

        
    
        
        <!-- barra inferior dentro de la carpeta gui -->
        
        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>