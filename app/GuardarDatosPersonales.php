<?php
include_once '../lib/ControlAcceso.Class.php';
include_once '../modelo/BDConexion.Class.php';
BDConexion::getInstancia()->autocommit(false);
BDConexion::getInstancia()->begin_transaction();

/*$mail ;*/
$nombreyApellido=$_POST['NombreYApellido'];
$dni=$_POST['DNI'];

$categoria=$_POST['CategoriaDocente'];

$direccion=$_POST['Direccion'];
$telefono=$_POST['Telefono'];

$sql="INSERT INTO Docente VALUES('$dni','$nombreyApellido','','$categoria','$direccion','$telefono')";
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
<script type="text/javascript" src="../lib/JQuery/jquery-3.3.1.js"></script>
