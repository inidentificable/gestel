<?php
include("funciones/setup.php");
conecta_base();	  
		  
$sql="SELECT c.usuario,p.nom_perfil,c.rut_cliproveedor 
FROM cliente_proveedor as c INNER JOIN perfiles as p
on (c.cod_perfil=p.cod_perfil)
WHERE c.usuario = '" . $_POST["usuario"] . "'
AND c.clave = '" .$_POST["contrasena"] . "'" ;
//echo $sql;
      	$array	 =	mysql_query($sql);
        $row	 =	mysql_fetch_array($array);
		$usuario =	$row["usuario"];
		$perfil  =  $row["nom_perfil"];
		$rut   =  $row["rut_cliproveedor"];
        
		
if (mysql_num_rows($array)==1){ 
 
    session_start(); 
    $_SESSION["autentificado"]= "SI"; 
	$_SESSION["usuario"]=$usuario; 
	$_SESSION["perfil"]=$perfil;
	$_SESSION["rut_cliproveedor"]=$rut;
    header ("Location: index.php"); 
}else { 
       header("Location: index.php?errorusuario=si"); 
} 
?> 