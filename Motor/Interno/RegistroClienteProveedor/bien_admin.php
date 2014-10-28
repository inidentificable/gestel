<?php include ("seguridad.php");?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<link rel="shortcut icon" href="http:favicon.ico">
	<style type="text/css">
<!--
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
    </style><head>
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
			<h2 align="center"><strong>Módulos GESTEL</strong></h2>
			<div id="page">
				<div class="container" align="center">
					<div class="row divider">
					<div align="center">
					<div align="left"> Ud. se encuentra en: <a href="index.php">Inicio </a>&gt; <a href="#"> Acceso a M&oacute;dulos </a></div>
					<br>
					<table width="44%" border="1" align="center" cellspacing="10">
					  <tr>
						<td width="23%"><a href="ver_cliproveedor.php"><img src="images/ico09.png" alt="" width="173" height="213"></a></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td><div align="center"><a href="#"><img src="images/ico10.png" width="173" height="213"></a></div></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="24%"><a href="ver_inmuebles.php"><img src="images/ico08.png" alt="" width="173" height="213"></a></td>
					  </tr>
					  <tr>
					  	<td colspan="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>						
					  </tr>
					  <tr>
						<td width="53%"><a href="#"><img src="images/ico11.png" width="173" height="213"></a></td>
						<td></td>
						<td><div align="center"><a href="#"><img src="images/ico12.png" width="173" height="213"></a></div></td>
						<td><div align="center"></div></td>
					  </tr>
					</table><br></div>
					
				</div><!-- div row divider -->
				</div>
			</div>
	</div>
		<?php include("container.php"); ?>
		<?php include("footer.php"); ?>
	</body>
</html>