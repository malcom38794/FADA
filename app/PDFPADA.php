<?php
function fetch_data(){ //metodo
  include_once'../modelo/BDConexion.Class.php';  //conexion con la base de datos
  
  $usuario = 'SELECT * FROM docente'; //consulta de lo que quiero obtener.
  $usuarios=BDConexion::getInstancia()->query($usuario);
  //$usuarios=$mysqli->query($usuario); //msqli =conexion, haciendo consulta a la base de datos . y lo guardo en usuarios.
  $output ='';
  while ($datos = mysqli_fetch_array($usuarios)) {
// a medida que obtenmos los datos lo vamos generando en tabla.	   
   $output.= '
                  <tr>'.$datos[ 'NombreyApellido'].'</tr>';
  }
  return $output;
  
}

//<td>'.$datos[ 'nombres'].'</td>
//<td>'.$datos[ 'correo'].'</td>
//consulta a la base de datows 
if(isset($_POST['create_pdf'])){

  require_once('tcpdf/tcpdf.php');
   

  class MiPDF extends TCPDF{

		public function header()
  	{
		$pageNumbers = $this->getAliasNumPage().'-'.$this->getAliasNbPages();
		$this->sety(10);
  		$html='';
		$html.='
	
		<table align= "center" border="1" width="100%"	cellspacing="0" cellpadding="0">
			<tr>
				<td colspan="5" align="right"> 
					<font face="Arial" >
					PLAN ANUAL DE ACTIVIDADES (PADA) '. $pageNumbers.'
					</font>
				</td>
			
			</tr>
			<tr>
				<td   colspan="1" align="left"> 
					<font face="Arial" size="9" >
						Nombre y Apellidos
					</font>
				</td>
			 <td colspan="4" >
			</td>
            </tr>
		</table>';
		
		 //$this->Cell(0, 10, $pageNumbers, 0, false, 'C', 0, '', 0, false, 'T', 'M');
       // $this->Cell(0, 10, $pageNumbers, 0, false, 'R', 0, '', 0, false, '', '');
		$this-> writeHTML($html, true, false, true,false,'');
		 //$this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');

	}

  
  }

$mipdf = new MiPDF();
$mipdf->setPrintHeader(true); //no imprime la cabecera ni la linea 
$mipdf ->addPage('P','A4'); //AGREGAR NUEVA PAGINA
$mipdf -> Ln(12); //DISTANCIA CON MARGENES
$mipdf->SetMargins(10,30,20,20);
$mipdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$mipdf->SetFont('Helvetica', '', 9); //fuente y tamaño de la tabla en pdf
$mipdf->SetTextColor(0,0,0);



$content='';
$content.=' 
<html>
<head><meta charset="utf-8">
</head>
<body><table align= "center" border="1" width="105%" cellspacing="0" cellpadding="0">
		<tbody>
			<tr>
				<td colspan="1"> <font face="Arial">Titulo/s</font></td>
                
                <td colspan="4"></td>
            </tr>
			<tr>
				<td >
					<font face="Arial">
						Cargo/s Docente/s
					</font>
				</td>
                
                <td colspan="4">
				
				</td>
            </tr>
			
			<tr>
				<td> 
					<font face="Arial">
						Categoria Docente/ Investigador
					</font>
				</td>
                <td>
				
				</td>
                <td>
					<b>Otorgado por</b>
				</td>
                <td colspan="2">
				
				</td>
            </tr>
			<tr>
				<td >
					<font face="Arial">
						Cargo/s Gestión
					</font>
				</td>
                
                <td colspan="4">
				
				</td>
            </tr>
			<tr>
				<td colspan="5">
					<font face="Arial" align ="left" size="10">
						<b>1.-Actividad docente </b>
					</font>
				
				</td>
            </tr>
			<tr>
				<td colspan="2"> 
					<font face="Arial">
						Asignatura
					</font>
				</td>
                <td>
				Responsable/integrante
				/colaborador
				</td>
					<td>
						Hs. Frente a
						Alumnos
					</td>
                <td>
					Hs. Equivalente Anual
				</td>
			</tr>	
            <tr>
				<td colspan="5">
					<font face="Arial" align ="left" size="9">
						<b>Otros</b>
					</font>
				
				</td>
            </tr>
			<tr>
				<td colspan="5">
			
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<font face="Arial" align ="justify" size="9">
						Para ser utilizado en la evaluación de desempeño
					</font>
				</td>
				<td colspan="3">
					<font face="Arial" align ="justify" size="9">
						Peso de la actividad sobre el total de la carga horaria

					</font>
				</td>
			</tr>
			<tr>
					<td colspan="2">
					</td>
					<td colspan="3">
					</td>
			</tr>
			<tr>
				<td colspan="5">
					<font face="Arial" align ="left" size="10">
						<b>2.-Actividad de Extensión </b>
					</font>
				
				</td>
			</tr>
			<tr>
				<td colspan="2"> 
					<font face="Arial">
						Proyecto/Programa
					</font>
				</td>
                <td>
					Responsable/integrante
					/colaborador
				</td>
				<td>
						Hs. Asignadas
				</td>
                <td>
					Hs. Equivalente Anual
				</td>
			</tr>
			<tr>
				<td colspan="2">
				
				</td>
				<td>
				</td>
				<td>
				</td>
				<td>
				</td>
				
			</tr>
            <tr>
				<td colspan="4">
					<font face="Arial" align ="left" size="9">
						<b>Otros</b>
					</font>
				
				</td>
				<td>
					<font face="Arial" align ="left" size="9">
						<b>Hs. Equivalente anual</b>
					</font>
				</td>
            </tr>
			<tr>
				<td colspan="2">
					<font face="Arial" align ="justify" size="9">
						Para ser utilizado en la evaluación de desempeño
					</font>
				</td>
				<td colspan="3">
					<font face="Arial" align ="justify" size="9">
						Peso de la actividad sobre el total de la carga horaria
					</font>
				</td>
			</tr>	
            	
			<tr>
					<td colspan="2">
					</td>
					<td colspan="3">
					</td>
			</tr> 
			<tr>
				<td colspan="5">
					<font face="Arial" align ="left" size="10">
						<b>3.-Actividad de Investigación </b>
					</font>
				
				</td>
			</tr>
			<tr>
				<td colspan="2"> 
					<font face="Arial">
						Proyecto
					</font>
				</td>
                <td>
					Director / Codirector / integrante /colaborador
				</td>
				<td>
						Hs. Asignadas
				</td>
                <td>
					Hs. Equivalente Anual
				</td>
			</tr>	
            <tr>
				<td colspan="4">
					<font face="Arial" align ="left" size="9">
						<b>Otros</b>
					</font>
				</td>
				<td colspan="1">
					<font face="Arial" align ="left" size="9">
						<b>Hs. Equivalente anual</b>
					</font>
				
				</td>
            </tr>
			<tr>
				<td colspan="4">
				</td>
				
				<td colspan="1">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<font face="Arial" align ="justify" size="9">
						Para ser utilizado en la evaluación de desempeño
					</font>
				</td>
				<td colspan="3">
					<font face="Arial" align ="justify" size="9">
						Peso de la actividad sobre el total de la carga horaria

					</font>
				</td>
			</tr>
			<tr>
				<td colspan="5">
				</td>
			</tr>
			<tr>
				<td colspan="5">
					<font face="Arial" align ="left" size="10">
						<b>4.-Actividad de Gestión</b>
					</font>
				
				</td>
			</tr>
			<tr>
				<td colspan="2"> 
					<font face="Arial">
						Proyecto/Programa/Área
					</font>
				</td>
                <td>
					Cargo/Responsable/Colaborador
				</td>
				<td>
						Hs. Asignadas
				</td>
                <td>
					Hs. Equivalente Anual
				</td>
			</tr>	
            <tr>
				<td colspan="4">
					<font face="Arial" align ="left" size="9">
						<b>Otros</b>
					</font>
				
				</td>
				<td>
					<font face="Arial" align ="left" size="9">
						<b>Hs. Equivalente anual</b>
					</font>
				</td>
            </tr>
			<tr>
				<td colspan="2">
					<font face="Arial" align ="justify" size="9">
						Para ser utilizado en la evaluación de desempeño
					</font>
				</td>
				<td colspan="3">
					<font face="Arial" align ="justify" size="9">
						Peso de la actividad sobre el total de la carga horaria

					</font>
				</td>
			</tr>
			<tr>
				<td colspan="5">
					<font face="Arial" align ="left" size="10">
						<b>5.-Formación y Perfeccionamiento</b>
					</font>
				
				</td>
			</tr>
			<tr>
				<td colspan="3"> 
					<font face="Arial">
						Carrera/Programa/Curso/Actividad
					</font>
				</td>
                <td>
					Institución
				</td>
				<td>
						Área
				</td>
                
			</tr>
			<tr>
				<td colspan="3">
				
				</td>
				
				<td>
				</td>
			</tr>
			<tr>
				<td colspan="5">
					<font face="Arial" align ="left" size="9">
						<b>Observaciones </b>
					</font>
				
				</td>
            </tr>
			
			<tr>
				<td colspan="5">
					<font face="Times New Roman" align ="left" size="14">
						<b><i>Observaciones del docente</i></b>
					</font>
				</td>
			</tr>
			<tr>
				<td colspan="5">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<font face="Arial" align ="left" size="9">
						<b>Lugar:</b>
					</font>
				</td>
				<td colspan="3">
					<font face="Arial" align ="left" size="9">
						<b>Fecha:</b>
					</font>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<font face="Arial" valign="top" align ="center" size="9">
						<b>Firma Docente</b>
					</font>
				</td>
				<td colspan="3">
					<font face="Arial" valign="top" align ="center" size="9">
						<b>Firma Departamento</b>
					</font>
				</td>
			</tr>
			<tr>
				<td colspan="2" height="60">
				</td>
				<td colspan="3" height="60">
				</td>
			</tr>
			
			</table>
			
          </tbody>   	
</body>';
//$content .= fetch_data();
$mipdf-> writeHTML($content, true,false,true,false,'');//MUESTRA POR PANTALLA LA TABLA
$mipdf -> Output('PADA.pdf','I');
}
?>