<?php include ("seguridad.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="shortcut icon" href="http:favicon.ico">
	<style type="text/css">
<!--
.Estilo2 {font-weight: bold}
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
		<script language="javascript">

			function validar()
			{
			   if(document.form1.frm_direinmue.value=="")
			   {
				  alert("Debe Ingresar Dirección");
				  document.form1.frm_direinmue.focus();
				  return;
			   }
			   if(document.form1.descripcion.value=="")
			   {
				  alert("Debe Ingresar Descripción del Inmueble");
				  document.form1.descripcion.focus();
				  return;
			   }
			   if(document.form1.valor.value=="")
			   {
				  alert("Debe Ingresar Valor");
				  document.form1.valor.focus();
				  return;
			   }
				 if(document.form1.userfile.value=="")
			   {
				   alert("Debe Adjuntar Documentación");
				   document.form1.userfile.focus();
				  return;
			   }
				document.form1.accion.value = 'ingresar';   
			   document.form1.submit();
			}
			
	</script>
	</head>
	<body>
		<div id="header-wrapper">
		  <div class="container">
				<div id="header">				  
				   <?php include("menu.php"); ?>					
				</div> <!--Div header -->
				<div align="center">
				<?php include("login.php"); ?>
			</div> 
			<!-- div container -->
		</div> <!-- div header-wrapper --> 
		<div id="wrapper">
		</br></br></br>
			<div id="page">
				<div class="container" align="center">
				
	<p>&nbsp;</p>
	<h2><strong>Cargar Propiedad    </strong></h2><br />
	<p align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ingrese su propiedad con los datos solicitados. <br />
	  <form id="form1" action="" method="post" enctype="multipart/form-data">
			  <table width="54%" border="0" cellpadding="0" cellspacing="0" bordercolor="#111111" id="AutoNumber1" style="border-collapse: collapse">
				<tr>
				  <td colspan="2">&nbsp;</td>
				  <td width="34%">&nbsp;</td>
				</tr>
				<tr>
				  <td width="30%">&nbsp;</td>
				  <td width="35%">&nbsp;</td>
				  <td>&nbsp;</td>
			    </tr>
				<tr>
				  <td><div align="left">Codigo Inmueble </div></td>
				  <td><p>&nbsp;</p>
					<p>
					  <input type="text" name="cod_inmueble" size="17" />
</p></td>
				  <td></td>
				</tr>
				
				</tr>
				<tr>
				  <td><div align="left">Direcci&oacute;n </div></td>
				  <td><input type="text" name="frm_direinmue" size="17" /> </td>
				  <td><strong>Valor en U.T.M</strong>. </td>
				</tr>
				<tr>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td><label>
					<input type="text" name="valor" id="valor" />
				  </label></td>
				</tr>
				<tr>
				  <td>Descripci&oacute;n</td>
				  <td rowspan="6"><textarea name="descripcion" cols="25" rows="7"></textarea></td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td height="19">&nbsp;</td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td>Buscar Imagen del Inmueble</td>
				  <td><input name="userfile" type="file" class="cajatexto1" onchange="muestra();" size="16" style="float: left" />
					<input type="hidden" name="MAX_FILE_SIZE" value="100000" />				  </td></td>
				</tr>
				<tr>
				  <td></td>
				  <td 
					<?php if ($_GET["errorpro"]=="si")
					 {
					 ?> 
					   bgcolor="red"><span style="color:ffffff"><b>Error al ingresar producto</b></span>
					<?php }else{if ($_GET["errorpro"]=="no"){?>
					bgcolor=#cccccc&gt;<span style="color:ffffff"><b>producto ingresado </b></span>
					<?php }}?></td>
				  <td><img src="images/ico16.png" alt="Cargue Imagen" width="203" height="91" class="cajatexto1" id="imagen" /></td>
					
				</tr>
				<tr>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td><p align="center">
				   
				  </p></td>
				  <td> <input name="grabar" type="submit" class="cajatexto1" value="Cargar Inmueble" style="font-weight: bold" />
                    <input name="reset" type="reset" style="font-weight: bold" value="Cancelar" /></td>
				</tr>
				
				<tr>
				  <td valign="top">&nbsp;</td>
				  
				  <td><input type="hidden" name="imagen" value="<?php 
			 function tamano_imagen($size) 
			{
				  $sizes = array(" Bytes", " KB", " MB", " GB", " TB", " PB", " EB", " ZB", " YB");
				  if ($size == 0) { return('n/a'); } else {
				  return (round($size/pow(1024, ($i = floor(log($size, 1024)))), $i > 1 ? 2 : 0) . $sizes[$i]); }
			}
			
			function limpiar_acentos($s) 
			{ 
			$s = ereg_replace("[áàâãª]","a",$s); 
			$s = ereg_replace("[ÁÀÂÃ]","A",$s); 
			$s = ereg_replace("[ÍÌÎ]","I",$s); 
			$s = ereg_replace("[íìî]","i",$s); 
			$s = ereg_replace("[éèê]","e",$s); 
			$s = ereg_replace("[ÉÈÊ]","E",$s); 
			$s = ereg_replace("[óòôõº]","o",$s); 
			$s = ereg_replace("[ÓÒÔÕ]","O",$s); 
			$s = ereg_replace("[úùû]","u",$s); 
			$s = ereg_replace("[ÚÙÛ]","U",$s); 
			$s = str_replace("ç","c",$s); 
			$s = str_replace("Ç","C",$s); 
			$s = str_replace("ñ","n",$s); 
			$s = str_replace("Ñ","N",$s); 
			return $s; 
			} 
			function tipo_imagen($tipo)
			{
				 if(($tipo=='image/gif') or ($tipo=='image/jpeg') or ($tipo=='image/pjpeg') or ($tipo=='image/png'))
			{
			$sw=1;
			}
			else
			{
			   $sw=0;
			}
			return($sw); 
			}
			$nombre=limpiar_acentos(strtolower(str_replace(" ","_", $_FILES['frm_archivo']['name'])));
			$tipo=$_FILES['frm_archivo']['type'];
			$tamano=$_FILES['frm_archivo']['size'];
			$temp=$_FILES['frm_archivo']['temp_name'];
			
			echo "Nombre del archivo : ".$nombre."<br>";
			echo "Formato del archivo : ".$tipo."<br>";
			echo "Tamaño del archivo : ".tamano_imagen($tamano)."<br>";
			echo "Nombre del Temp del archivo : ".$temp."<br>";
			
			if (tipo_imagen($tipo)!=1)
			{
				 $tipo='Formato Invalido';
				 echo $tipo;
			}
			else
			{
			   move_uploaded_file($temp,"fotos/".$nombre); 
			}
			?>" /></td>
				</tr>
				<tr>
				  <td colspan="2"><p align="center">&nbsp;</p></td>
				  <td width="1%">&nbsp;</td>
				</tr>
	    </table>
			  </form>
	</p>
	            </div>
			</div>
		</div>
		<?php include("container.php"); ?>
		<?php include("footer.php"); ?>
	</body>
</html>