<?php include ("seguridad.php");?> 
<!DOCTYPE HTML>
<html>

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
			<div id="page">
				<div class="container" align="center">
				<div align="left"> Ud. se encuentra en: <a href="index.php">Inicio </a>&gt; <a href="#"> Inmuebles </a></div><br>
					<table width="29%" border="1" align="center">
                                        <tr>
                                          <td width="47%"><p><a href="ver_cliproveedor.php"><img src="images/ico15.png" width="173" height="213"></a></p></td>
                                          <td width="53%"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
										  <td><a href="cargar_propiedad.php"><img src="images/ico22.png" width="173" height="213"></a></td>
                                        </tr>
                  </table>
				</div>
			</div>
		</div>
		<?php include("container.php"); ?>
		<?php include("footer.php"); ?>
	</body>
</html>