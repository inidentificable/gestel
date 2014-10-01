<?php include("seguridad.php");?>
<!DOCTYPE HTML>

<html>
<link rel="shortcut icon" href="http:favicon.ico">
	<style type="text/css">
<!--
.Estilo2 {color: #FFFFFF}
-->
    </style>
	<head>
		<title>GESTEL</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Oswald:400,300" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]>
        <script src="Interno/RegistroClienteProveedor/js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="Interno/RegistroClienteProveedor/js/skel.min.js"></script>
		<script src="Interno/RegistroClienteProveedor/js/skel-panels.min.js"></script>
		<script src="Interno/RegistroClienteProveedor/js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="Interno/RegistroClienteProveedor/css/skel-noscript.css" />
			<link rel="stylesheet" href="Interno/RegistroClienteProveedor/css/style.css" />
			<link rel="stylesheet" href="Interno/RegistroClienteProveedor/css/style-desktop.css" />
		</noscript>
	</head>
	
	<body class="homepage">
		<div id="header-wrapper">
			<div class="container">
				<div id="header">				  
				   <?php include("menu.php"); ?>					
				</div> <!--Div header -->
				<div align="center">
					<?php include("login.php"); ?>				  
			</div> <!-- div container -->
		</div> <!-- div header-wrapper --> 
		<div class="container">
			<div class="row">
				<div id="banner" class="12u">
					<div class="container"><a href="#"><img src="Interno/RegistroClienteProveedor/images/pics01.jpg" alt="GESTEL" alt="270" height="325"> </a></div>
				</div>
			</div>
		</div><!--container -->
		<div id="wrapper">
		<div class="container" id="marketing">
				<div class="row divider">
					<div class="3u">
						<section>
							<p><a href="#"><img src="Interno/RegistroClienteProveedor/images/ico04.png" alt=""></a></p>
						</section>
					</div>
					<div class="3u">
						<section>
							<p><a href="#"><img src="Interno/RegistroClienteProveedor/images/ico05.png" alt=""></a></p>
						</section>
					</div>
					<div class="3u">
						<section>
							<p><a href="#"><img src="Interno/RegistroClienteProveedor/images/ico06.png" alt=""></a></p>
						</section>
					</div>
					<div class="3u">
						<section>
							<p><a href="#"><img src="Interno/RegistroClienteProveedor/images/ico07.png" alt=""></a></p>
						</section>
					</div>
				</div><!-- div row divider -->
			</div><!-- div marketing -->
		</div><!-- div wrapper -->
		<?php include("container.php"); ?>
		</div>
		<?php include("footer.php"); ?>
</body>
</html>