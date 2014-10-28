<?php include ("seguridad.php");?> 
<!DOCTYPE HTML>

<link rel="shortcut icon" href="http:favicon.ico">
<html><style type="text/css">
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
					<div align="left"> Ud. se encuentra en: <a href="index.php">Inicio </a>&gt; <a href="bien_admin.php"> Acceso a M&oacute;dulos </a>&gt; <a href="#"> Módulo Cliente Proveedor</a> </div>
			        <div class="articles">
                      <h1 class="titulo">&nbsp;</h1>
				      <h2 class="titulo"><strong>Módulo de Cliente Proveedor </strong></h2>
				      <p align="center">&nbsp;</p>
				      <p>&nbsp;</p>
				      <table width="405" border="0" align="center">
                        <tr>
                          <th width="207" align="center" scope="col"><p><strong>Listar Clientes </strong></p>
                              <p><a href="listar_cliproveedor.php"> <img src="images/ico20.png" alt="" width="174" height="225"   /></a></p></th>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						  <th width="188" align="center" scope="row"><p><strong>Ingresar Cliente </strong></p>
                              <p><a href="cliproveedor.php"><img src="images/ico17.png" alt="" /></a></p></th>
                        </tr>
					
							
				
                        <tr>
                          <th align="center" scope="row"><p><strong>Buscar Cliente </strong></p>
                              <p><a href="busqueda_clipro.php"><img src="images/ico19.png" alt="" width="174" height="225"   /></a></p></th>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						  <td align="center"><p><strong>Generar Contrato </strong></p>
                              <p><a href="contrato_clipro.php"><img src="images/ico18.png" alt="" width="174" height="225" /></a></p></td>
                        </tr>
                      </table>
		        </div>
			  </div>
			</div>
		</div>
		<?php include("container.php"); ?>
		<?php include("footer.php"); ?>
	</body>
</html>