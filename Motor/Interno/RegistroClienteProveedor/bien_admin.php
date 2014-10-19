<?php include ("seguridad.php");?> 
<!DOCTYPE HTML>
<html>

<link rel="shortcut icon" href="http:favicon.ico">
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
					<table width="29%" border="1" align="center">
                                        <tr>
                                          <td width="47%"><p><a href="ver_inmuebles.php"><img src="images/ico08.png" alt="" width="173" height="213"></a></p></td>
                                          <td width="53%"><p><a href="ver_cliproveedor.php"><img src="images/ico09.png" alt="" width="173" height="213" border="0"></a></p></td>
										  <td><a href="#"><img src="images/ico11.png" width="173" height="213"></a></td>
                                        </tr>
                                        <tr>
                                          <td><p><a href="#"><img src="images/ico12.png" width="173" height="213"></a></p></td>
										  <td><p><a href="#"><img src="images/ico10.png" width="173" height="213"></a></p></td>
										  <td>&nbsp;</td>
                                        </tr>
                  </table>
				</div>
			</div>
		</div>
		<?php include("container.php"); ?>
		<?php include("footer.php"); ?>
	</body>
</html>