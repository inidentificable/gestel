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
			   if(document.form1.frm_rutclipro.value=="")
			   {
				  alert("Debe Ingresar Rut");
				  document.form1.frm_rutclipro.focus();
				  return;
			   }
			   if(document.form1.frm_nomclipro.value=="")
			   {
				  alert("Debe Ingresar Nombre");
				  document.form1.frm_nomclipro.focus();
				  return;
			   }
				
			   if(document.form1.frm_apeclipro.value=="")
			   {
					alert("Debe Ingresar Apellido");
					document.form1.frm_apeclipro.focus();
				  return;
			   }
			   if(document.form1.select_seccli.value=="")
			   {
					alert("Debe Ingresar Sexo");
					document.form1.select_seccli.focus();
				  return;
			   }
			
				if(document.form1.select_estacli.value=="")
			   {
				   alert("Debe Ingresar Esatdo Civil");
				   document.form1.select_estacli.focus();
				 return;
			   }
				 if(document.form1.frm_clave.value=="")
			   {
				   alert("Debe Ingresar Campos");
				   document.form1.frm_clave.focus();
				  return;
			   }
			    if(document.form1.frm_usuario.value=="")
			   {
				   alert("Debe Ingresar Usuario");
				   document.form1.frm_usuario.focus();
				  return;
			   }
			    if(document.form1.frm_clave.value=="")
			   {
				   alert("Debe Ingresar Clave");
				   document.form1.frm_clave.focus();
				  return;
			   }
				 if(document.form1.frm_clave2.value=="")
			   {
				   alert("Debe Ingresar Campos");
				   document.form1.frm_clave2.focus();
				  return;
			   }
				 if(document.form1.userfile.value=="")
			   {
				   alert("Debe Adjuntar Documentación");
				   document.form1.userfile.focus();
				  return;
			   }
				document.form1.accion.value = 'ingresar2';   
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
					  
			</div> <!-- div container -->
		</div> <!-- div header-wrapper --> 
		<div id="wrapper">
		</br></br></br>
			<div id="page">
				<div class="container" align="center">
					<form id="form1" method="post" name="form1" action="registro_bd.php">
  <div align="center"></div>
  <center>
		<table width="44%" border="0" align="center" cellpadding="4" cellspacing="4" background="../imagenes/fond.JPG">
		  <tr>
			<td colspan="2" align="center"><h2>Datos del Cliente Proveedor </h2></td>
					  
		  </tr>
		  <tr>
			<td width="27%"><span class="Estilo3">Id Cliente Proveedor </span></td>
			<td width="73%"><label>
			<input name="frm_id_clipro" type="text" id="frm_id_clipro" onBlur="validacion_id_clipro_usu(document.form1.frm_id_clipro.value)" maxlength="10"/>
			  <input name="frm_id_oculto" type="hidden" id="frm_id_oculto" value="<?php echo $registros['id_clipro'];?>"/>
			</label></td>
		  </tr>
		  <tr>
			<td><div align="left" class="Estilo3">Rut</div></td>
			<td><label>
				<div align="left">
				  <input name="frm_rutclipro" type="text" id="frm_rutclipro" />
				</div>
			  </label></td>
		  </tr>
		  <tr>
			<td><div align="left" class="Estilo3">Nombre</div></td>
			<td><label>
				<div align="left">
				  <input name="frm_nomclipro" type="text" id="frm_nomclipro" onBlur="validacion_id_clipro(document.form1.frm_id_clipro.value)"/>
				</div>
			  </label></td>
		  </tr>
		  <tr>
			<td><div align="left" class="Estilo3">Apellidos</div></td>
			<td><label>
				<div align="left">
				  <input name="frm_apeclipro" type="text" id="frm_apeclipro" onBlur="validacion_id_clipro(document.form1.frm_id_clipro.value)"/>
				</div>
			  </label></td>
		  </tr>
		  <tr>
			<td><div align="left" class="Estilo3">Sexo</div></td>
			<td><label>
				<div align="left">
				  <select name="select_sexcli" id="select_sexcli" onChange="combo();">
                    <option value="0">..::Seleccione::..</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Masculino">Masculino</option>
                    <?php /*?>	<?php
				$sql="SELECT id_clipro,ape_clipro FROM ape_clipro"; 
				$consulta=mysql_query($sql,$conn);
			
			 while($row=mysql_fetch_array($consulta)){
				   ?>
			<option value="<?php echo $row['id_clipro']; ?>"><?php echo $row['ape_clipro']; ?>		</option>
				
				<?php } ?><?php */?>
                  </select>
				</div>
			  </label></td>
		  </tr>
		   <tr>
			<td><div align="left" class="Estilo3">Estado Civil </div></td>
			<td><label>
				<div align="left">
				  <select name="select_estacli" id="select_estacli" onChange="combo();">
                    <option value="0">..::Seleccione::..</option>
                    <option value="Soltero">Soltero</option>
                    <option value="Casado">Casado</option> 
					<option value="Viudo">Viudo</option>
                    <option value="Divorciado">Divorciado</option>
                    <?php /*?>	<?php
				$sql="SELECT id_clipro,ape_clipro FROM ape_clipro"; 
				$consulta=mysql_query($sql,$conn);
			
			 while($row=mysql_fetch_array($consulta)){
				   ?>
			<option value="<?php echo $row['id_clipro']; ?>"><?php echo $row['ape_clipro']; ?>		</option>
				
				<?php } ?><?php */?>
                  </select>
				</div>
			  </label></td>
		  </tr>
		  <tr>
		    <td><div align="left" class="Estilo3">Usuario</div></td>
		    <td><label>
                <div align="left">
                  <input name="frm_usuario" type="text" id="frm_usuario" size="15" />
                </div>
		      </label></td>
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
		  		<td>Adjuntar Documentos</td>
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
					  <input name="<?php if($id_clipro==""){?>ingresar<?php }else{?>modificar<?php }?>" type="button" id="ingresar2" value="<?php if($id_clipro==""){?>Ingresar<?php }else{?>Modificar<?php }?>" onClick="validar()" />
					</label></td>
					<?php
			  if($id_clipro!="")
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
		<p><?php
		$id_clipro=$_POST["id_clipro"];
		$rut_clipro=$_POST["rut_clipro"];
		$nom_clipro=$_POST["nom_clipro"];
		$ape_clipro=$_POST["ape_clipro"];
		$sexo_clipro=$_POST["sexo_clipro"];
		$estado_clipro=$_POST["estado_clipro"];
		$usuario_clipro=$_POST["usuario_clipro"];
		$contras_clipro=$_POST["contras_clipro"];
		$fecha_clipro=$_POST["fecha_clipro"];
	
	if ($id_clipro !="" && $rut_clipro !="" && $nom_clipro !="" && $ape_clipro!="" && $sexo_clipro !="" && $estado_clipro!="" && $usuario_clipro!=""&& $contras_clipro!=""&& $fecha_clipro!=""){
		$sql="select * from cliente where id_clipro='".$id_clipro."'";
		$result=mysql_query($sql);
		
		if($row=mysql_fetch_array($result)) {
			echo "El cliente con el id_clipro ".$id_clipro." ya se encuentra ingresado.";
		}else{
			
			$sql="insert into cliente (id_clipro, rut_clipro, nom_clipro, ape_clipro, sexo_clipro, estado_clipro, usuario_clipro, contras_clipro, fecha_clipro) values ('$id_clipro','$rut_clipro','$nom_clipro','$ape_clipro','$sexo_clipro','$estado_clipro', '$usuario_clipro','$contras_clipro','$fecha_clipro')";
			$result=mysql_query($sql);
			echo "Se ha ingresado al Cliente Proveedor.";
		}
	
	
	$sql="select * from cliente where id_clipro='".$id_clipro."'";
	$result=mysql_query($sql);
				if($row=mysql_fetch_array($result)){
				echo "<table width=80% border=0 align=center >";
				echo "<th>Id Cliente Proveedor</th>";
				echo "<th>Rut Cliente</th>";
				echo "<th>Nombre</th>";
				echo "<th>Apellidos</th>";
				echo "<th>Sexo</th>";
				echo "<th>Estado</th>";
				echo "<th>Usuario</th>";
				echo "<th>Contrase&ntilde;a</th>";			
				echo "<th>Fecha</th>";
				do{
					echo "<tr>";
					echo "<td>",$row["id_clipro"],"</td>";
					echo "<td>",$row["rut_clipro"],"</td>";
					echo "<td>",$row["nom_clipro"],"</td>";
					echo "<td>",$row["ape_clipro"],"</td>";
					echo "<td>",$row["sexo_clipro"],"</td>";
					echo "<td>",$row["estado_clipro"],"</td>";
					echo "<td>",$row["usuario_clipro"],"</td>";
					echo "<td>",$row["contras_clipro"],"</td>";	
					echo "<td>",$row["fecha_clipro"],"</td>","<br>";
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
			$_pagi_sql= "SELECT * FROM cliente ";
					
			$_pagi_cuantos = 5;
			include("funciones/paginator.inc.php");
	?>
	</p>
	<table width="89%" border="0" align="center" cellpadding="0" cellspacing="2" bordercolor="#0033FF">
	  <tr bgcolor="#0e99b5">
		<td><div align="center" class="Estilo1">Id Cliente Proveedor</div></td>
		<td><div align="center" class="Estilo1">Rut Cliente</div></td>
		<td><div align="center" class="Estilo1">Nombre</div></td>
		<td><div align="center" class="Estilo1">Apellidos</div></td>
		<td><div align="center" class="Estilo1">Sexo</div></td>
		<td><div align="center" class="Estilo1">Estado</div></td>
		<td><div align="center" class="Estilo1">Usuario</div></td>
		<td><div align="center" class="Estilo1">Contrase&ntilde;a</div></td>
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
		<td><div align="center" class="Estilo1"><?php echo $row_todas['id_clipro'];?></div></td>
		<td><div align="center" class="Estilo1"><?php echo $row_todas['rut_clipro'];?></div></td>
		<td><div align="center" class="Estilo1"><?php echo $row_todas['nom_clipro'];?></div></td>
		<td><span class="Estilo1"><?php echo $row_todas['ape_clipro'];?></span></td>
		<td><div align="center" class="Estilo1"><?php echo $row_todas['sexo_clipro'];?></div></td>
		<td><div align="center" class="Estilo1"><?php echo $row_todas['estado_clipro'];?></div></td>		
		<td><div align="center" class="Estilo1"><?php echo $row_todas['usuario_clipro'];?></div></td>
		<td align="justify"><div align="center" class="Estilo1"><?php echo $row_todas['contras_clipro'];?></div></td>		
		<td><div align="center" class="Estilo1"><?php echo $row_todas['fecha_clipro'];?></div></td>
		<td><div align="center"><a href="cliproveedor.php?id_clipro=<?php echo $row_todas['id_clipro'];?>"><img src="images/modificar.gif"  alt="Modificar" width="20" height="20" border="0" /></a><a href="registro_bd.php?id_clipro=<?php echo $row_todas['id_clipro'];?>&amp;eliminar=1"><img src="images/eliminar.gif" alt="Eliminar" width="20" height="20"></a></div></td>
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