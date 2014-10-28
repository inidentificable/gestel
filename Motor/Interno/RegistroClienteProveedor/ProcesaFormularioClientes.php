<?php
include("funciones/setup.php");


	$fecha_nac=$_REQUEST['select']."-".$_REQUEST['select2']."-".$_REQUEST['select3'];

		$sql="INSERT INTO cliente SET usuario_clipro='".$_REQUEST['frm_cliusua']."',clave_clipro='".$_REQUEST['frm_cliclave']."',rut_clipro='".$_REQUEST['frm_clirut']."',nom_clipro='".$_REQUEST['frm_clinom']."',ape_clipro='".$_REQUEST['frm_cliape']."',fecha_nac='".$fecha_nac."',email_clipro='".$_REQUEST['frm_email']."',telefono='".$_REQUEST['frm_telefono']."',direc_clipro='".$_REQUEST['frm_clidire']."',ciudad_clipro='".$_REQUEST['frm_cliciudad']."',estado='".$_REQUEST['frm_estado']."',fecha_clipro='".$_REQUEST['txt_fecha2']."',document_clipro='".$_REQUEST['userfile2']."'";
		
		$resul=mysql_query($sql);

	   header("Location:cliproveedor2.php?sw=1"); 


?>