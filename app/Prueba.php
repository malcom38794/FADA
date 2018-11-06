<?php
function fetch_data(){ //metodo
  include_once'../modelo/BDConexion.Class.php';  //conexion con la base de datos
  $usuario = $_SESSION['usuario'];
  $mail = $usuario->email;
  $usuario = 'SELECT DNI FROM docente WHERE Mail = {$mail}'; //consulta de lo que quiero obtener.
  $usuarios=BDConexion::getInstancia()->query($usuario);
  //$usuarios=$mysqli->query($usuario); //msqli =conexion, haciendo consulta a la base de datos . y lo guardo en usuarios.
  $output ='';
  while ($datos = mysqli_fetch_array($usuarios)) {
// a medida que obtenmos los datos lo vamos generando en tabla.	   
   $output.= '
                  <tr>'.$datos[ 'DNI'].'</tr>';
  }
  return $output;
  
}

include_once '../lib/ControlAcceso.Class.php';
include_once '../modelo/BDConexion.Class.php';
BDConexion::getInstancia()->autocommit(false);
BDConexion::getInstancia()->begin_transaction();



$usuario = $_SESSION['usuario'];
$mail = $usuario->email;
$sqldni = 'SELECT DNI FROM docente WHERE Mail = {$mail}';
$usu = BDConexion::getInstancia()->query($sqldni);
var_dump(fetch_data());

var_dump($asd);
$segm = $rows['DNI'];
var_dump($segm);



  
BDConexion::getInstancia()->commit();
BDConexion::getInstancia()->autocommit(true);

?>