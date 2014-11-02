<?php include ("seguridad.php");
include("funciones/setup.php");
conecta_base();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="shortcut icon" href="http:favicon.ico">
	<style type="text/css">
<!--
.Estilo1 {color: #000000}
.Estilo2 {font-weight: bold}
.Estilo3 {color: #000000; font-weight: bold; }
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
-->
    </style>
<head>
		<title>GESTEL</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Oswald:400,300" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>

	</head>
	<body>
		<div id="header-wrapper">
			<div class="container">
				<div id="header">				  
				   <?php include("menu.php"); ?>					
				</div> <!--Div header -->
				<div align="center">
				<?php include("login.php"); ?>	
					  
			</div> <!-- div container -->
		</div> <!-- div header-wrapper --> 
		<div id="wrapper">
		</br></br></br>
			<div id="page">
				<div class="container" align="center">
				<div align="left"> Ud. se encuentra en: <a href="index.php">Inicio </a>&gt; <a href="bien_clipro.php"> Acceso a M&oacute;dulos </a>&gt;<a href="#"> Mostrar</a></div><br />
						<form action="" method="post" id="form1">
							  <table border="1" cellpadding="2" cellspacing="3">
							   <tr>
								  <td>
								  <?php
										if($_POST['Buscar']=='Buscar'){
										$consulta ="SELECT * FROM  inmuebles WHERE rut_clipro  '";
										$resultado=mysql_query($consulta);
										$contador = mysql_num_rows($resultado);
										if($contador==0){
											print'No se encontró inmueble';
											
										}else{
											print'<center>';
											print'<br/>';
											print'¡¡¡Datos encontrados!!!<br />';
											print'</center>';
										print '<table width="100%" border="1" cellpadding="2" cellspacing="3" align="center">';
										
										while ($datos= mysql_fetch_assoc ($resultado)){
										print'<br/>';
										
										print '<tr>';
   											 print '<td bgcolor="#8AD3F1"><div align="center">Id Inmueble</div></td>';
											 print '<td bgcolor="#8AD3F1"><div align="center">RUT Propietario</div></td>';
											 print '<td bgcolor="#8AD3F1"><div align="center">Dirección</div></td>';
											 print '<td bgcolor="#8AD3F1"><div align="center">Apellidos</div></td>';
											 print '<td bgcolor="#8AD3F1"><div align="center">Usuario</div></td>';
											 print '<td bgcolor="#8AD3F1"><div align="center">Clave</div></td>';
											 print '<td bgcolor="#8AD3F1"><div align="center">Estado</div></td>';
											 print '<td bgcolor="#8AD3F1"><div align="center">Tipo Usaurio</div></td>';
											 print '<td bgcolor="#8AD3F1"><div align="center">Fecha Nac.</div></td>';
											 print '<td bgcolor="#8AD3F1"><div align="center">Teléfono</div></td>';
 										print ' </tr>';
										print '<tr>
										 <td>'.$datos['id_clipro'].'</td>
										 <td>'.$datos['rut_clipro'].'</td>
										 <td>'.$datos['nom_clipro'].'</td>
										 <td>'.$datos['ape_clipro'].'</td>
										 <td>'.$datos['usuario_clipro'].'</td>
										 <td>'.$datos['clave_clipro'].'</td>
										 <td>'.$datos['estado'].'</td>
										 <td>'.$datos['tipo_usuario'].'</td>
										 <td>'.$datos['fn_clipro'].'</td>
										 <td>'.$datos['telefono_clipro'].'</td>
										 <td>'.$datos['email_clipro'].'</td>
										 <td>'.$datos['direc_clipro'].'</td>
										 <td>'.$datos['ciudad_clipro'].'</td>
										 <td>'.$datos['fecha_clipro'].'</td>
										 <td>'.$datos['document_clipro'].'</td></tr>';
										}
										print '</table>';
										
										
										}
											 
											}
											
										?></td>
								</tr>
							  </table>
				  </form>
<br />

			</div>
		</div>
		<?php include("container.php"); ?>
		<?php include("footer.php"); ?>
	</body>
</html>