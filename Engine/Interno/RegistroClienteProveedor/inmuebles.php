<?php include("seguridad.php");?>
<!DOCTYPE HTML>
<html>

<link rel="shortcut icon" href="http:favicon.ico">
	<style type="text/css">
<!--
.Estilo1 {color: #000000}
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
				   <?php include("menu.php"); ?>					
				</div> <!--Div header -->
				<div align="center">
				<?php include("login.php"); ?>	
				<?php include("funciones/setup.php");
					conecta_base(); ?>		  
			</div> <!-- div container -->
		</div> <!-- div header-wrapper --> 
		<div id="wrapper">
		</br></br></br>
			<div id="page">
				<div class="container" align="center">
					<form id="form1" method="post" name="form1" action="registro_bd.php">
  <div align="center"></div>
  <center>
		<table width="44%" border="0" cellpadding="0" cellspacing="2" background="../imagenes/fond.JPG">
		  <tr>
			<td colspan="2" align="center"><h2>Datos del Inmueble </h2></td>
			<td width="0%"></br>
		  </tr>
		  <tr>
			<td width="19%"><span class="Estilo3">Id imnueble </span></td>
			<td width="81%"><label>
			<input name="frm_id_inmueble" type="text" id="frm_id_inmueble" onblur="validacion_id_inmueble_usu(document.form1.frm_id_inmueble.value)" maxlength="10"/>
			  <input name="frm_id_oculto" type="hidden" id="frm_id_oculto" value="<?php echo $registros['id_inmueble'];?>"/>
			</label></td>
		  </tr>
		  <tr>
			<td><div align="left" class="Estilo3">Ciudad</div></td>
			<td><label>
				<div align="left">
				  <input name="frm_inmueble" type="text" id="frm_inmueble" />
				</div>
			  </label></td>
		  </tr>
		  <tr>
			<td><div align="left" class="Estilo3">Dirección</div></td>
			<td><label>
				<div align="left">
				  <input name="frm_nombre" type="text" id="frm_nombre" onblur="validacion_id_inmueble_usu(document.form1.frm_id_inmueble.value)"/>
				</div>
			  </label></td>
		  </tr>
		  <tr>
			<td><div align="left" class="Estilo3">Tipo</div></td>
			<td><label>
				<div align="left">
				  <select name="select" id="select" onchange="combo();">
                    <option value="0">..::Seleccione::..</option>
                    <option value="Casa">Casa</option>
                    <option value="Departamento">Departamento</option>
                    <?php /*?>	<?php
				$sql="SELECT id_inmueble,tipo_inmueble FROM tipo_inmueble"; 
				$consulta=mysql_query($sql,$conn);
			
			 while($row=mysql_fetch_array($consulta)){
				   ?>
			<option value="<?php echo $row['id_inmueble']; ?>"><?php echo $row['tipo_inmueble']; ?>		</option>
				
				<?php } ?><?php */?>
                  </select>
				</div>
			  </label></td>
		  </tr>
		   <tr>
			<td><div align="left" class="Estilo3">Medio</div></td>
			<td><label>
				<div align="left">
				  <select name="select" id="select" onchange="combo();">
                    <option value="0">..::Seleccione::..</option>
                    <option value="Venta">Venta</option>
                    <option value="Arriendo">Arriendo</option>
                    <?php /*?>	<?php
				$sql="SELECT id_inmueble,tipo_inmueble FROM tipo_inmueble"; 
				$consulta=mysql_query($sql,$conn);
			
			 while($row=mysql_fetch_array($consulta)){
				   ?>
			<option value="<?php echo $row['id_inmueble']; ?>"><?php echo $row['tipo_inmueble']; ?>		</option>
				
				<?php } ?><?php */?>
                  </select>
				</div>
			  </label></td>
		  </tr>
		   <tr>
			<td><div align="left" class="Estilo3">Cantidad </div></td>
			<td><label>
				<div align="left">
				  Dormitorios 
				  <select name="select" id="select" onchange="combo();">
                    <option value="0">..::Seleccione::..</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
					<option value="3">3</option>
                    <option value="4">4</option>
                    <?php /*?>	<?php
				$sql="SELECT id_inmueble,tipo_inmueble FROM tipo_inmueble"; 
				$consulta=mysql_query($sql,$conn);
			
			 while($row=mysql_fetch_array($consulta)){
				   ?>
			<option value="<?php echo $row['id_inmueble']; ?>"><?php echo $row['tipo_inmueble']; ?>		</option>
				
				<?php } ?><?php */?>
                  </select>
				Baños
				<select name="select2" id="select2" onchange="combo();">
                  <option value="0">..::Seleccione::..</option>
                  	<option value="1">1</option>
                    <option value="2">2</option>
					<option value="3">3</option>
                    <option value="4">4</option>
                  <?php /*?>	<?php
				$sql="SELECT id_inmueble,tipo_inmueble FROM tipo_inmueble"; 
				$consulta=mysql_query($sql,$conn);
			
			 while($row=mysql_fetch_array($consulta)){
				   ?>
			<option value="<?php echo $row['id_inmueble']; ?>"><?php echo $row['tipo_inmueble']; ?>		</option>
				
				<?php } ?><?php */?>
                </select>
				</div>
			    </label></td>
		  </tr>
		  <tr>
			<td><div align="left" class="Estilo3">Comentario</div></td>
			<td><label>
				<div align="left">
				  <textarea name="frm_comentario" cols="25" rows="4" id="frm_comentario"></textarea>
				</div>
			  </label><?php /*?><?php include("funciones/setup.php");
				conecta_base();
						  
				$sql="SELECT id_tinmueble,tipo
					   FROM tipo_inmueble "; 
				
				$consulta=mysql_query($sql); 
				
				echo "<select name=\"tipo\">\n"; 
				while ($row=mysql_fetch_array($consulta))
					  { 
					   echo "<option value=\"".$row['id_tinmueble']."\">".$row['tipo']."</option>"; 
				} 
				echo "</select>"; 
		?><?php */?></td>
		  </tr>
		  
		  <tr>
			<td><div align="left" class="Estilo3">Contrase&ntilde;a</div></td>
			<td><label>
				<div align="left">
				  <input name="frm_clave" type="password" id="frm_clave" size="15" />
				</div>
			  </label></td>
		  </tr>
		  <tr>
			<td><div align="left" class="Estilo3">Repetir Contrase&ntilde;a </div></td>
			<td><label>
				<div align="left">
				  <input name="frm_clave2" type="password" id="frm_clave2" size="15" />
				</div>
			  </label></td>
		  </tr>
		  <tr>
			<td><span class="Estilo3">
			  <label>Tipo inmueble</label>
			</span></td>
			<td><label>
			<select name="frm_tipo_cliente" id="frm_tipo_cliente" onchange="combo();">
				<option value="0">..::Seleccione::..</option>
				<option value="Cliente-Proveedor">Cliente-Proveedor</option>
				<option value="Cliente">Cliente</option>
				<?php /*?>	<?php
				$sql="SELECT id_inmueble,tipo_inmueble FROM tipo_inmueble"; 
				$consulta=mysql_query($sql,$conn);
			
			 while($row=mysql_fetch_array($consulta)){
				   ?>
			<option value="<?php echo $row['id_inmueble']; ?>"><?php echo $row['tipo_inmueble']; ?>		</option>
				
				<?php } ?><?php */?>
			  </select>
			</label></td>
		  </tr>
		  <tr>
		  		<td>Subir imagen</td>
			  <td width="81%">
					<input name="userfile" type="file" class="cajatexto1" onChange="muestra();" size="16" style="float: left">
					<input type="hidden" name="MAX_FILE_SIZE" value="100000">
			  </td>
				<?php if ($_GET["errorimagen"]=="si")
					 {
					 ?> 
					   bgcolor=red><span style="color:ffffff"><b>Error al subir la imagen</b></span> 
			   <?php }else{if ($_GET["errorimagen"]=="no"){?>
					  bgcolor=#cccccc><span style="color:ffffff"><b>Imagen ingresada </b></span>  
				<?php }}?>
			</tr>
		  <tr>
			<td><span class="Estilo3">Fecha</span></td>
			<td><input name="frm_fecha" type="text" id="frm_fecha" size="20" disabled="disabled" value="<?php echo $fecha;?>"/></td>
		  </tr>
		  <tr>
			<td colspan="2" 
		  
		  <?php if (isset($_GET["errorregistro"])){
					if($_GET["errorregistro"]=="si"){
						?> 
						 bgcolor="red"><span style="color:ffffff"><b>Datos incorrectos</b></span>
				<?php    }else{?>
			  bgcolor=#cccccc&gt; datos guardados con exito
			  <?php    }
					}     ?>
			  <div align="center">
				<table border="0" align="center" cellpadding="0" cellspacing="5">
				  <tr>
					<td><label>
					  <input name="<?php if($id_inmueble==""){?>ingresar<?php }else{?>modificar<?php }?>" type="button" id="ingresar2" value="<?php if($id_inmueble==""){?>Ingresar<?php }else{?>Modificar<?php }?>" onclick="validar()" />
					</label></td>
					<?php
			  if($id_inmueble!="")
			  {
			  ?>
					<td><input name="eliminar2" type="submit" id="eliminar2" value="Eliminar" /></td>
					<?
			  }
			  ?>
					<td><input name="cancelar2" type="submit" id="cancelar2" value="Cancelar" /></td>
				  </tr>
				</table>
				</div></td>
		  </tr>
		</table>
		<p>
		<input type="hidden" name="imagen" value="<?php 
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
			?>">
<?php
		$id_inmueble=$_POST["id_inmueble"];
		$ciud_inmueble=$_POST["ciud_inmueble"];
		$dire_inmueble=$_POST["dire_inmueble"];
		$tipo_inmueble=$_POST["tipo_inmueble"];
		$medio_inmueble=$_POST["medio_inmueble"];
		$dorm_inmueble=$_POST["dorm_inmueble"];
		$banio_inmueble=$_POST["banio_inmueble"];
		$comentario_inmueble=$_POST["comentario_inmueble"];		
		$imagen_inmueble=$_POST["imagen_inmueble"];
		$fecha_inmueble=$_POST["fecha_inmueble"];
	
	if ($id_inmueble !="" && $ciud_inmueble !="" && $dire_inmueble !="" && $tipo_inmueble!="" && $medio_inmueble !="" && $dorm_inmueble!="" && $banio_inmueble!=""&& $comentario_inmueble!=""&& $imagen_inmueble!=""&& $fecha_inmueble!=""){
		$sql="select * from inmueble where id_inmueble='".$id_inmueble."'";
		$result=mysql_query($sql);
		
		if($row=mysql_fetch_array($result)) {
			echo "El inmueble con el id_inmueble ".$id_inmueble." ya se encuentra ingresado.";
		}else{
			
			$sql="insert into inmueble (id_inmueble, ciu_inmueble, dire_inmueble, tipo_inmueble, medio_inmueble, dorm_inmueble, banio_inmueble, comentario_inmueble, imagen_inmueble, fecha_inmueble) values ('$id_inmueble','$usua','$nombre','$apellido','$email','$clave','$tipo_inmueble')";
			$result=mysql_query($sql);
			echo "Se ha ingresado al inmueble.";
		}
	
	
	$sql="select * from inmueble where id_inmueble='".$id_inmueble."'";
	$result=mysql_query($sql);
				if($row=mysql_fetch_array($result)){
				echo "<table width=80% border=0 align=center >";
				echo "<th>id_inmueble</th>";
				echo "<th>Ciudad</th>";
				echo "<th>Direcci&oacute;n</th>";
				echo "<th>Tipo</th>";
				echo "<th>Medio</th>";
				echo "<th>Cantidad Dormitorio</th>";
				echo "<th>Cantidad Ba&ntilde;o</th>";
				echo "<th>Comentario/th>";
				echo "<th>Imagen</th>";				
				echo "<th>Fecha</th>";
				do{
					echo "<tr>";
					echo "<td>",$row["id_inmueble"],"</td>";
					echo "<td>",$row["ciud_inmueble"],"</td>";
					echo "<td>",$row["dire_inmueble"],"</td>";
					echo "<td>",$row["tipo_inmueble"],"</td>";
					echo "<td>",$row["medio_inmueble"],"</td>";
					echo "<td>",$row["dorm_inmueble"],"</td>";
					echo "<td>",$row["banio_inmueble"],"</td>";
					echo "<td>",$row["comentario_inmueble"],"</td>";					
					echo "<td>",$row["imagen_inmueble"],"</td>";
					echo "<td>",$row["fecha_inmueble"],"</td>","<br>";
					echo "</tr>";
					
				}while($row=mysql_fetch_array($result));
				echo"</table>";
			}
	}
	?>
		</p>
		</center>
	</form>
	<p>&nbsp;</p>
	<p>
	  <?php
	$_pagi_sql= "SELECT * FROM inmueble ";
			
	$_pagi_cuantos = 5;
	include("funciones/paginator.inc.php");
	?>
	</p>
	<table width="89%" border="0" align="center" cellpadding="0" cellspacing="2" bordercolor="#0033FF">
	  <tr bgcolor="#0e99b5">
		<td><div align="center" class="Estilo1">Id Inmueble</div></td>
		<td><div align="center" class="Estilo1">Ciudad</div></td>
		<td><div align="center" class="Estilo1">Direcci&oacute;n</div></td>
		<td><div align="center" class="Estilo1">Tipo</div></td>
		<td><div align="center" class="Estilo1">Medio</div></td>
		<td><div align="center" class="Estilo1">Cantidad Dormitorio</div></td>
		<td><div align="center" class="Estilo1">Cantidad Ba&ntilde;o</div></td>
		<td><div align="center" class="Estilo1">Comentario</div></td>
		<td><div align="center" class="Estilo1">Imagen</div></td>
		<td><div align="center" class="Estilo1">Fecha</div></td>
		<td><div align="center" class="Estilo1">Acción</div></td>		
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
		<td><div align="center" class="Estilo1"><?php echo $row_todas['id_inmueble'];?></div></td>
		<td><div align="center" class="Estilo1"><?php echo $row_todas['ciud_inmueble'];?></div></td>
		<td><div align="center" class="Estilo1"><?php echo $row_todas['dire_inmueble'];?></div></td>
		<td><span class="Estilo1"><?php echo $row_todas['tipo_inmueble'];?></span></td>
		<td><div align="center" class="Estilo1"><?php echo $row_todas['medio_inmueble'];?></div></td>
		<td><div align="center" class="Estilo1"><?php echo $row_todas['dorm_inmueble'];?></div></td>		
		<td><div align="center" class="Estilo1"><?php echo $row_todas['banio_inmueble'];?></div></td>
		<td align="justify"><div align="center" class="Estilo1"><?php echo $row_todas['comentario_inmueble'];?></div></td>		
		<td><div align="center" class="Estilo1"><?php echo $row_todas['imagen_inmueble'];?></div></td>		
		<td><div align="center" class="Estilo1"><?php echo $row_todas['fecha_inmueble'];?></div></td>
		<td><div align="center"><a href="ver_inmuebles.php?id_inmueble=<?php echo $row_todas['id_inmueble'];?>"><img src="images/modificar.gif"  alt="Modificar" width="20" height="20" border="0" /></a><a href="registro_bd.php?id_inmueble=<?php echo $row_todas['id_inmueble'];?>&amp;eliminar=1"><img src="images/eliminar.gif" alt="Eliminar" width="20" height="20"></a></div></td>
	  </tr>
	  
	  <?php }?>
	  <tr bgcolor="#0c849c">
		<td height="20" colspan="11"><div align="center"><span class="Estilo3"><?php echo $_pagi_navegacion;?></span></div></td>
	  </tr>
	</table>
				</div>
			</div>
		</div>
		<?php include("container.php"); ?>
		<?php include("footer.php"); ?>
	</body>
</html>
<script language="javascript">
function muestra()
{
document.form1.imagenes.src=document.form1.userfile. value;
}
</script>