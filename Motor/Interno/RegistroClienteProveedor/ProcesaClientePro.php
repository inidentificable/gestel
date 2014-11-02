<?php

include("funciones/setup.php");

$sql="select * from cliente where usuario_clipro='".$_REQUEST['txt_usuario']."'";
$resul=mysql_query($sql);
$registro=mysql_num_rows($resul);

if($registro==0)
{
	$fecha_nac=$_REQUEST['txt_anio']."-".$_REQUEST['txt_mes']."-".$_REQUEST['txt_dia'];

		$sql="INSERT INTO cliente SET rut_clipro='".$_REQUEST['txt_rut']."',nom_clipro='".$_REQUEST['txt_nombre']."',ape_clipro='".$_REQUEST['txt_apellido']."',usuario_clipro='".$_REQUEST['txt_usuario']."',contras_clipro='".$_REQUEST['txt_clave']."',tipo_usuario='".$_REQUEST['txt_tusuario']."',fn_clipro='".$fecha_nac."',telefono='".$_REQUEST['txt_telefono']."',mail='".$_REQUEST['txt_mail']."',direc_clipro='".$_REQUEST['txt_direccion']."',ciudad_clipro='".$_REQUEST['txt_ciudad']."',document_clipro='".$_REQUEST['userfile']."'";
		
		$resul=mysql_query($sql);
		
		header("Location:index.php");
}
else
{
	   header("Location:cliproveedor.php?sw=1"); 
}

?>