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
		<!-- Validar form1 -->
<script src="scripts/jquery.validate.min.js" type="text/javascript"></script>

<script language="javascript">
function validar()
{
   if(document.form1.nombre.value=="")
   {
      alert("Debe Ingresar Nombre");
	  document.form1.nombre.focus();
	  return;
   }
   if(document.form1.email.value=="")
   {
      alert("Debe Ingresar Email");
	  document.form1.email.focus();
	  return;
   }
   
   if(document.form1.motivo.value=="")
   {
      alert("Debe Ingresar Motivo");
	  document.form1.motivo.focus();
	  return;
   }
   
   if(document.form1.coment.value=="")
   {
      alert("Debe Ingresar Comentario");
	  document.form1.coment.focus();
	  return;
   }
   
	document.form1.submit();
}
function valida_mail()
{
         
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.form1.email.value))
		{
		   return;
        }
		else
		{
		   alert("La dirección de email no es Valida.");
		   document.form1.email.value="";
		   document.form1.email.focus();
		   return;
  		}	
}
</script>
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
				</div>
			</div>
		</div>
		<div id="wrapper">
			<div id="page">
				<div class="container">
					<div class="row">
					  <div class="9u skel-cell-important" id="content">
							<section>
								<div class="post">
									<h2 align="center"><strong>Contáctenos</strong></h2>
									  <?php
        if (!$_POST){
      ?>
            <form name="form1" id="form1" action="contacto.php" method="post">
              <table width="76%" height="98%" align="center" cellspacing="5">
                <tr>
                  <td><strong>Nombre:</strong></td>
                  <td><input type="text" name="nombre" id="nombre" /></td>
                </tr>
                <tr>
                  <td><strong>Email:</strong></td>
                  <td><input id="email" name="email" size="20" maxlength="40" type="text" onBlur="valida_mail(document.form1.email.value)" /></td>
                </tr>
                <tr>
                  <td><strong>Motivo: </strong></td>
                  <td><select name="motivo">
                      <option value="0">..::Seleccione::..</option>
                      <option value="Consulta">Consulta</option>
                      <option value="Felicitaciones">Felicitaciones</option>
                      <option value="Reclamo">Reclamo</option>
                      <option value="Sugerencia">Sugerencia</option>
                  </select></td>
                </tr>
                <tr>
                  <td><strong>Comentarios:</strong></td>
                  <td><textarea name="coment" id="coment" cols="52" rows="8"></textarea></td>
                </tr>
                <tr>
                  <td><input type="button" name="Submit" value="Enviar" onClick="validar();" />
                    <label>
                    <input name="Limpiar" type="reset" class="botones" id="Limpiar" value="Limpiar">
                    </label></td>
                </tr>
              </table>
            </form>
            <p>
              <?php
				}else{
				$cuerpo = "<html><head><title>Formulario de Contacto</title><style type='text/css'>body{font: .8em Verdana, Geneva, sans-serif; color: #444;}</style></head><body>";
				$cuerpo .= "<strong>---Formulario RECIBIDO DESDE PAGINA WEB---</strong><br /><br />";
				$cuerpo .= "<strong>Nombre: </strong>" . $_POST["nombre"] . "<br />";
				$cuerpo .= "<strong>Email: </strong><a href='mailto:" . $_POST["email"] . "'>". $_POST["email"] ."</a><br />";
				$cuerpo .= "<strong>Motivo: </strong>" . $_POST["motivo"] . "<br />";
			   			   				
		  		$email = "maria.carvajal15@inacapmail.cl";		   				
				$cuerpo .= "<br /><strong>Comentarios:</strong><br />" . $_POST["coment"] . "<br /><br /></body>";
		
				$headers = "MIME-Version: 1.0\r\n";
				$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
				$headers .= "From: ".$_POST["nombre"]." <".$_POST["email"].">";
				
				
		 		$email = "m.carvajal.carvajal@gmail.com";
				
		   	    mail($email,"Solicitud recibida desde pagina web",utf8_decode($cuerpo),$headers);
				echo "Los datos se han enviado correctamente.<br/>Pronto responderemos a su solicitud.";
				}
			  ?>
              <!--antes del echo final 			  -->
								</div>
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