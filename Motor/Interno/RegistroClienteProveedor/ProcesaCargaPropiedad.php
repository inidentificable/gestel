<?php 
include("funciones/setup.php");

$sql="INSERT INTO inmuebles SET rut_clipro='".$_REQUEST['frm_clirut']."',direc_inmueble='".$_REQUEST['frm_direinmue']."',ciudad_inmueble='".$_REQUEST['frm_ciudad']."',pais_inmueble='".$_REQUEST['frm_pais']."',descrip_inmueble='".$_REQUEST['descripcion']."',valor_inmueble='".$_REQUEST['valor']."',imagen='".$_REQUEST['userfile']."',fecha_inmueble='".date("y-m-d")."',hora_inmueble='".time("hh-mm-ss")."'"; 
	
	$resul=mysql_query($sql);
	
	echo $sql;
	exit;
		
		header("Location:cargar_propiedad.php");
?> 