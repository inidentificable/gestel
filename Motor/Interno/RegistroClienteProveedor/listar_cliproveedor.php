<?php include ("seguridad.php");

include("funciones/setup.php");
conecta_base();
		  	
if($id_clipro!="")
{
     $sql="select * from cliente where id_clipro=".$id_clipro;
	 $resultado=mysql_query($sql);
	 $registros=mysql_fetch_array($resultado);
	 $fecha=fecha_es($registros['fecha']);
	 $hora=hora($registros['hora']);
}
else
{
    $fecha=fecha_hoy();
	$hora=hora();
}
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
.Estilo4 {color: #FFFFFF}
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
				<div align="left"> Ud. se encuentra en: <a href="index.php">Inicio </a>&gt; <a href="bien_admin.php"> Acceso a M&oacute;dulos </a>&gt; <a href="ver_cliproveedor.php"> Módulo Cliente Proveedor</a> &gt;<a href="#"> Listado </a></div><br />
				  <h2>Listado de Cliente Proveedor</h2>
				  </br></br>
				  	  <?php
			$_pagi_sql= "SELECT * FROM cliente ";
					
			$_pagi_cuantos = 5;
			include("funciones/paginator.inc.php");
	?>
	</p>
	<table width="89%" border="2" align="center" cellpadding="2" cellspacing="5" bordercolor="#0C849C">
	  <tr bgcolor="#0e99b5">
		<td><div align="center" class="Estilo3"><span class="Estilo4">Id Cliente Proveedor</span></div></td>
		<td><div align="center" class="Estilo3 Estilo4">Rut Cliente</div></td>
		<td><div align="center" class="Estilo3 Estilo4">Nombres</div></td>
		<td><div align="center" class="Estilo3 Estilo4">Apellidos</div></td>
		<td><div align="center" class="Estilo3 Estilo4">Usuario</div></td>
		<td><div align="center" class="Estilo3 Estilo4">Contrase&ntilde;a</div></td>
		<td><div align="center" class="Estilo3 Estilo4">Tipo Usuario</div></td>
		<td><div align="center" class="Estilo3 Estilo4">Fecha Nac.</div></td>
		<td><div align="center" class="Estilo3 Estilo4">Tel&eacute;fono</div></td>
		<td><div align="center" class="Estilo3 Estilo4">Mail</div></td>
		<td><div align="center" class="Estilo3 Estilo4">Direcci&oacute;n</div></td>
		<td><div align="center" class="Estilo3 Estilo4">Ciudad</div></td>
		<td><div align="center" class="Estilo3 Estilo4">Fecha</div></td>	
	  </tr>
	  <?php
	  while($row_todas=mysql_fetch_array($_pagi_result))
	  {  
		  if($sw==1)
		  {
			  $color="#08c2bc";
			  $sw=0;
		  }
		  else
		  {
			  $color="#0de3dc";
			  $sw=1;
		  }
	  ?>
	  <tr bgcolor="<?php echo $color;?>">
		<td><div align="center" class="Estilo1"><?php echo $row_todas['id_clipro'];?></div></td>
		<td><div align="center" class="Estilo1"><?php echo $row_todas['rut_clipro'];?></div></td>
		<td><div align="center" class="Estilo1"><?php echo $row_todas['nom_clipro'];?></div></td>
		<td><div align="center" class="Estilo1"><?php echo $row_todas['ape_clipro'];?></span></td>		
		<td><div align="center" class="Estilo1"><?php echo $row_todas['usuario_clipro'];?></div></td>
		<td><div align="center" class="Estilo1"><?php echo $row_todas['contras_clipro'];?></div></td>
		<td><div align="center" class="Estilo1"><?php echo $row_todas['tipo_usuario'];?></div></td>
		<td><div align="center" class="Estilo1"><?php echo $row_todas['fn_clipro'];?></div></td>
		<td><div align="center" class="Estilo1"><?php echo $row_todas['telefono_clipro'];?></div></td>
		<td><div align="center" class="Estilo1"><?php echo $row_todas['mail_clipro'];?></div></td>
		<td><div align="center" class="Estilo1"><?php echo $row_todas['direc_clipro'];?></div></td>
		<td><div align="center" class="Estilo1"><?php echo $row_todas['ciudad_clipro'];?></div></td>		
		<td><div align="center" class="Estilo1"><?php echo $row_todas['fecha_clipro'];?></div></td>
	  </tr>
	  
	  <?php }?>
	  <tr bgcolor="#0c849c">
		<td height="20" colspan="13"><div align="center"><span class="Estilo3"><?php echo $_pagi_navegacion;?></span></div></td>
	  </tr>
	</table><br />
	<p><a href="exportar_xls.php" class="Estilo1">Exportar a Excel <img src="images/icono_excel.gif" width="16" height="16" /></a></p>
	            </div>
			</div>
		</div>
		<?php include("container.php"); ?>
		<?php include("footer.php"); ?>
</body>
</html>