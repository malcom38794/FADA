<?php

include_once '../lib/ControlAcceso.Class.php';
include_once '../modelo/BDConexion.Class.php';
BDConexion::getInstancia()->autocommit(false);
BDConexion::getInstancia()->begin_transaction();



$usuario = $_SESSION['usuario'];
$mail = $usuario->email;
$sqldni="SELECT DNI FROM docente WHERE Mail = '{$mail}'";
$dni = BDConexion::getInstancia()->query($sqldni);
$ret = mysql_fetch_array($dni);
var_dump($ret);
$segm = $ret['DNI'];
var_dump($segm);



  
BDConexion::getInstancia()->commit();
BDConexion::getInstancia()->autocommit(true);

?>