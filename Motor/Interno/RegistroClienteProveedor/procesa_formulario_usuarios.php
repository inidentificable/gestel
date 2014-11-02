<?php

include("funciones/setup.php");

conecta_base();

if($eliminar==1)
{

    $sql="DELETE FROM cliente WHERE id_clipro=".$_REQUEST['frm_id_oculto'];
	
	$resultado=mysql_query($sql);
	
	header("Location:cliproveedor2.php");
	exit;

}

if($_REQUEST['cancelar'])
{
    header("Location:cliproveedor2.php");
	exit;
}

if($_REQUEST['ingresar'])
{
    $fecha=fecha_hoy();
	$hora=hora();
	
	$sql="INSERT INTO cliente SET nom_clipro='".$_REQUEST['frm_nombre']."',usuario_clipro='".$_REQUEST['frm_usuario']."',clave_clipro='".$_REQUEST['frm_clave_clipro']."',fecha_clipro='".fecha_bd($fecha)."',hora='".$hora."',estado=".$_REQUEST['frm_estado'];
	
	$resultado=mysql_query($sql);
	
	header("Location:cliproveedor2.php");
	exit;
}

if($_REQUEST['modificar'])
{
    
	$sql="UPDATE cliente SET nom_clipro='".$_REQUEST['frm_nombre']."',usuario_clipro='".$_REQUEST['frm_usuario']."',clave_clipro='".$_REQUEST['frm_clave_clipro']."',estado=".$_REQUEST['frm_estado']." WHERE id_clipro=".$_REQUEST['frm_id_oculto'];
	
	$resultado=mysql_query($sql);
	
	header("Location:cliproveedor2.php");
	exit;
	
	
}

if($_REQUEST['eliminar'])
{
    $sql="DELETE FROM cliente WHERE id_clipro=".$_REQUEST['frm_id_oculto'];
	
	$resultado=mysql_query($sql);
	
	header("Location:cliproveedor2.php");
	exit;
}

?>