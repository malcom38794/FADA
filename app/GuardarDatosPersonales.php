<?php
include_once '../lib/ControlAcceso.Class.php';
include_once '../modelo/BDConexion.Class.php';

BDConexion::getInstancia()->autocommit(false);
BDConexion::getInstancia()->begin_transaction();

$usuario = $_SESSION['usuario'];

$mail = $usuario->email;
$nombreyApellido=$_POST['NombreYApellido'];
$dni=$_POST['DNI'];
$categoria=$_POST['CategoriaDocente'];
$direccion=$_POST['Direccion'];
$telefono=$_POST['Telefono'];

$sql="INSERT INTO Docente VALUES('$dni','$nombreyApellido','$mail','$categoria','$direccion','$telefono')";
$consulta = BDConexion::getInstancia()->query($sql);

/*Carga Titulos*/

$titulos = $_POST['Titulos'];
$otorga = $_POST['Otorga'];
$cont= count($otorga);
for($i=0;$i<$cont;++$i){
$sql="INSERT INTO Titulos VALUES('','$titulos[$i]','$otorga[$i]','$dni')";
$consulta = BDConexion::getInstancia()->query($sql);
}

/*Carga Cargos Docentes*/

$cargoDocente=$_POST['CargoDocente'];
$dedicacion=$_POST['Dedicacion'];
$departamento=$_POST['Departamento'];
$cont3 = count($cargoDocente);
for($ie=0;$ie<$cont3;++$ie){
$sql="INSERT INTO cargosDocentes VALUES('','$cargoDocente[$ie]','$dedicacion[$ie]','$departamento[$ie]','$dni')";
$consulta = BDConexion::getInstancia()->query($sql);
}


/*Carga Cargos De Gestion*/

$cargoGestion = $_POST['CargoGestion'];
$cont2 = count($cargoGestion);
for($io=0;$io<$cont2;++$io){
$sql="INSERT INTO cargosGestion VALUES('','$cargoGestion[$io]','$dni')";
$consulta = BDConexion::getInstancia()->query($sql);
}

if (!$consulta) {
    BDConexion::getInstancia()->rollback();
    //arrojar una excepcion
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
         
            <h1>Guardado con Exito</h1>
            <br> 
            <a href="PADA.ActividadDocente.php">
           <button type="button" class="btn btn-success">
               <span class="oi oi-check"></span> Completar P.A.D.A.
             </button>
         </a>
            <br> <br> 
            <a href="PADAE.ActividadDocente.php">
           <button type="button" class="btn btn-info">
               <span class="oi oi-check"></span> Completar P.A.D.A.E.
             </button>
         </a>
            <br> <br>
            <a href="PantallaDocentes.php">
           <button type="button" class="btn btn-danger">
               <span class="oi oi-account-logout"></span> Salir
             </button>
         </a>
            
    </div>

        
    
        
        <!-- barra inferior dentro de la carpeta gui -->
        
        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>


