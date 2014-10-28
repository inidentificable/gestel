<?php
include("funciones/setup.php");
conecta_base();	  
		  
$sql="SELECT c.usuario,p.nom_perfil,c.rut 
FROM usuarios as c INNER JOIN perfiles as p
on (c.cod_perfil=p.cod_perfil)
WHERE c.usuario = '" . $_POST["usuario"] . "'
AND c.clave = '" .$_POST["contrasena"] . "'" ;
//echo $sql;
      	$array	 =	mysql_query($sql);
        $row	 =	mysql_fetch_array($array);
		$usuario =	$row["usuario"];
		$perfil  =  $row["nom_perfil"];
		$rut   =  $row["rut"];
        
		
if (mysql_num_rows($array)==1){ 
 
    session_start(); 
    $_SESSION["autentificado"]= "SI"; 
	$_SESSION["usuario"]=$usuario; 
	$_SESSION["perfil"]=$perfil;
	$_SESSION["rut"]=$rut;
	
	if(isset($_SESSION["perfil"])){
  		switch ( $_SESSION["perfil"] )
           {
		        case "Administrador" :
			   			 header ("Location: bien_admin.php");
		          	break;
				case "Cliente-Proveedor" :
			   			 header ("Location: bien_clipro.php");
		          	break;
			}
	}
	/*if($_SESSION["perfil"]=="Administrador"){
            
	}else{
	       header ("Location: index.php");
	}  */ 
	
	
}else { 
       header("Location: index.php?errorusuario=si"); 
} 
?> 