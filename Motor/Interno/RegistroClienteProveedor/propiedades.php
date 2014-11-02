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
	<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<div id="header-wrapper">
			<div class="container">
				<div id="header">
					<?php include("menu.php"); ?> 			
				</div> <!--Div header -->
				<div align="center">
				<?php include("login.php"); ?>	
				</div>
			</div>
		</div>
		<div id="wrapper">
			<div id="page">
				<div class="container">
					<div class="row">
						<div class="6u">
							<div class="mobileUI-main-content" id="content">
								<section>
									<div class="post">
										<h2 align="center">Av. El Santo </h2>
										<p><a href="#"><img src="images/01.jpg" alt=""></a><br></p>
										<table width="88%" border="1" cellspacing="2">
                                          <tr>
                                            <td colspan="2"><div align="center">
                                              <h2>Ficha de la Propiedad</h2>
                                            </div></td>
											<td width="1%"></td>
                                          </tr>
                                          <tr>
                                            <td width="39%"><p>» PROPIEDAD</p>
                                            <p>&nbsp;</p></td>
                                            <td width="60%">» DESCRIPCION </td>
                                          </tr>
                                          <tr>
                                            <td>Ciudad: La Serena (IV Región)</td>
                                            <td rowspan="4"> Se Vende lindo departamento con muy linda vista hacia el mar,living y comedor con terraza,3 dormitorios con amplios closet,2 baños,cocina y logia;estacionamiento techado,juegos infantiles,amplios jardines,conserje</td>
										  
                                          </tr>
                                          <tr>
                                            <td>Dirección: Av El Santo</td>
                                          </tr>
                                          <tr>
                                            <td>Metros Totales: 0 m2.</td>
                                          </tr>
                                          <tr>
                                            <td>Metros Construidos: 0 m2.</td>
                                          </tr>
                                          <tr>
                                            <td>Habitaciones: 3</td>
											<td></td>
                                          </tr>
                                          <tr>
                                            <td>Baños: 2</td>
											<td></td>
                                          </tr>
                                          <tr>
                                            <td>Tipo Contrato: Venta</td>
											<td></td>
                                          </tr>
                                          <tr>
                                            <td>» VALOR</td>
                                            <td><strong>UF 3.400</strong></td>
                                          </tr>
                                          
                                      </table>
										<div class="fb-facepile" data-href="https://www.facebook.com/FacebookDevelopers" data-max-rows="1" data-colorscheme="light" data-size="medium" data-show-count="true"></div>
										<p class="button-style2"><a href="#">Read Full Article</a></p>
									</div>
								</section>
							</div>
						</div>
						<div class="6u" id="sidebar1">
							<section>
								<h2>Otros Inmuebles </h2>
								<ul>
									<li>
										<p><a href="#"><img src="images/ico05.png" alt="" width="119" height="136"> </a><a href="#"><img src="images/ico06.png" alt="" width="119" height="136"> </a></p>
									</li>
									<li>
										
									</li>
									<li>
										<p><a href="#"><img src="images/ico07.png" alt="" width="119" height="136"> </a></p>
									</li>
									
								</ul>
							</section>
						</div>
				  </div>
				</div>
			</div>
		</div>
		<?php include("container.php"); ?>
		<?php include("footer.php"); ?>
	</body>
</html>