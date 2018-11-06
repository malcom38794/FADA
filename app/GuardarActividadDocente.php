<?php
include_once '../lib/ControlAcceso.Class.php';
include_once '../modelo/BDConexion.Class.php';
BDConexion::getInstancia()->autocommit(false);
BDConexion::getInstancia()->begin_transaction();

/*$usuario = $_SESSION['usuario'];
$mail = $usuario->email;
$sqldni="SELECT DNI FROM docente WHERE E-Mail = {$mail}";
$dni = BDConexion::getInstancia()->query($sqldni);
var_dump($sqldni);
var_dump($dni);
$sqlpada="SELECT Docente_DNI FROM pada WHERE Docente_DNI = {$dni}";
$existepada= BDConexion::getInstancia()->query($sqlpada);
echo $existepada;*/
$sql="INSERT INTO pada VALUES('','38794444','2019')";
$consulta = BDConexion::getInstancia()->query($sql);







/*$mail ;*/
$asignatura=$_POST['ActividadDocente_Asignatura'];
$calidad=$_POST['ActividadDocente_Dedicacion'];
$hs=$_POST['ActividadDocente_Semanal'];
$tipo=$_POST['ActividadDocente_Tipo'];
$otro=$_POST['ActividadDocente_Otro'];
$cont= count($asignatura);
for($i=0;$i<$cont;++$i){
$sql="INSERT INTO actividad_docentepada VALUES('','1','$asignatura[$i]','$calidad[$i]','$hs[$i]','$tipo[$i]','$otro')";
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

