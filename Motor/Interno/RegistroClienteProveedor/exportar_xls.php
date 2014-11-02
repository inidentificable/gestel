<?php include ("seguridad.php");

include("funciones/setup.php");
conecta_base();
			
header("Content-type: application/vnd.ms-excel");
header("Content-disposition: attachment; filename=listado_usuario.xls");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="shortcut icon" href="http:favicon.ico">
	<style type="text/css">
<!--
.Estilo1 {color: #000000}
.Estilo3 {color: #000000; font-weight: bold; }
-->
    </style>
<head>
		<title>GESTEL</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
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
				</div> <!--Div header -->
				<div align="center">					  
			</div> <!-- div container -->
		</div> <!-- div header-wrapper --> 
		<div id="wrapper">
		</br></br></br>
			<div id="page">
				<div class="container" align="center">
				  <h2><strong>Listado de Cliente Proveedor</strong></h2>
				  </br></br>		</p>
				    <?php   
					   $sql="select * from cliente";
					   $resultado=mysql_query($sql);
					   while($registros=mysql_fetch_array($resultado))
					   {
					 ?>
	<table width="89%" border="1" align="center" cellpadding="0" cellspacing="5" bordercolor="#0E99B5">
	  <tr bgcolor="#0e99b5">
		<td><div align="center" class="Estilo3">Id Cliente Proveedor</div></td>
		<td><div align="center" class="Estilo3">Rut Cliente</div></td>
		<td><div align="center" class="Estilo3">Nombres</div></td>
		<td><div align="center" class="Estilo3">Apellidos</div></td>
		<td><div align="center" class="Estilo3">Usuario</div></td>
		<td><div align="center" class="Estilo3">Contrase&ntilde;a</div></td>
		<td><div align="center" class="Estilo3">Tipo Usuario</div></td>
		<td><div align="center" class="Estilo3">Fecha Nac.</div></td>
		<td><div align="center" class="Estilo3">Tel&eacute;fono</div></td>
		<td><div align="center" class="Estilo3">Mail</div></td>
		<td><div align="center" class="Estilo3">Direcci&oacute;n</div></td>
		<td><div align="center" class="Estilo3">Ciudad</div></td>
		<td><div align="center" class="Estilo3">Fecha</div></td>
	  </tr>
	  <tr>
	  	<td><div align="center" class="Estilo1"><?php echo $registros['id_clipro'];?></div></td>
		<td><div align="center" class="Estilo1"><?php echo $registros['rut_clipro'];?></div></td>
		<td><div align="center" class="Estilo1"><?php echo $registros['nom_clipro'];?></div></td>
		<td><div align="center" class="Estilo1"><?php echo $registros['ape_clipro'];?></span></td>		
		<td><div align="center" class="Estilo1"><?php echo $registros['usuario_clipro'];?></div></td>
		<td><div align="center" class="Estilo1"><?php echo $registros['contras_clipro'];?></div></td>
		<td><div align="center" class="Estilo1"><?php echo $registros['tipo_usuario'];?></div></td>
		<td><div align="center" class="Estilo1"><?php echo $registros['fn_clipro'];?></div></td>
		<td><div align="center" class="Estilo1"><?php echo $registros['telefono_clipro'];?></div></td>
		<td><div align="center" class="Estilo1"><?php echo $registros['mail_clipro'];?></div></td>
		<td><div align="center" class="Estilo1"><?php echo $registros['direc_clipro'];?></div></td>
		<td><div align="center" class="Estilo1"><?php echo $registros['ciudad_clipro'];?></div></td>		
		<td><div align="center" class="Estilo1"><?php echo $registros['fecha_clipro'];?></div></td>
	  </tr>
	  <?
	    }
	  ?>
	</table>
	<p>&nbsp;</p>
	            </div>
			</div>
		</div>
		<?php include("footer.php"); ?>
</body>
</html>