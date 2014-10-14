<?php
include("funciones/setup.php");
conecta_base();

		
if($eliminar==1)
{
    $sql="DELETE FROM ver_inmueble WHERE id_usuario=".$id_inmueble;
	
	$resultado=mysql_query($sql);
	
	header("Location:ver_inmueble.php");
    exit;
}

if($_REQUEST['cancelar'])
{
    header("Location:ver_inmueble.php");
    exit;
}

if($_REQUEST['cancelar2'])
{
    header("Location:ver_inmueble.php");
    exit;
}

if($_REQUEST['cancelar3'])
{
    header("Location:registro.php");
    exit;
}

if($_REQUEST['cancelar4'])
{
    header("Location:modificar_inmueble.php");
    exit;
}


if($_REQUEST['registrarsebtn']==1)
{   
	$hora=hora();
	
	$sql="INSERT INTO inmueble SET rut='".$_REQUEST['frm_rut']."',usuario='".$_REQUEST['frm_usuario']."',nombre_user='".$_REQUEST['frm_nombre']."'apellido_user='".$_REQUEST['frm_apellido']."',meil='".$_REQUEST['frm_meil']."',fecha='".fecha_bd($fecha)."'clave='".$_REQUEST['frm_clave']."',clave2=".$_REQUEST['frm_clave2'];
	
	$resultado=mysql_query($sql);
	
	header("Location:ver_perfil.php");
    exit;
	
}

if($_REQUEST['ingresar2'])
{
    
	$hora=hora();
	
	$sql="INSERT INTO cliente SET rut_clipro='".$_REQUEST['frm_rutclipro']."',nom_clipro='".$_REQUEST['frm_nomclipro']."'ape_clipro='".$_REQUEST['frm_apeclipro']."',sexo_clipro='".$_REQUEST['select_sexcli']."'estado_clipro='".$_REQUEST['select_estacli']."'usuario='".$_REQUEST['frm_usuario']."'clave='".$_REQUEST['frm_clave']."',clave2=".$_REQUEST['frm_clave2']."',fecha_clipro='".fecha_bd($fecha);
	
	$resultado=mysql_query($sql);
	
	header("Location:ver_cliproveedor.php");
    exit;
	
}


if($_REQUEST['modificar'])
{
  
  $sql="UPDATE usuario SET nombre_completo='".$_REQUEST['frm_nombre']."',usuario='".$_REQUEST['frm_usuario']."',clave='".$_REQUEST['frm_contrasena']."',estado=".$_REQUEST['frm_estado']." WHERE rut=".$_REQUEST['frm_id_oculto'];
  
  $resultado=mysql_query($sql);
	
	header("Location:ver_perfil.php");
    exit;
  
}
if($_REQUEST['modificar2'])
{
  
  $sql="UPDATE usuario SET nombre_completo='".$_REQUEST['frm_nombre']."',usuario='".$_REQUEST['frm_usuario']."',clave='".$_REQUEST['frm_contrasena']."',estado=".$_REQUEST['frm_estado']." WHERE rut=".$_REQUEST['frm_id_oculto'];
  
  $resultado=mysql_query($sql);
	
	header("Location:ver_perfil.php");
    exit;
  
}

if($_REQUEST['eliminar'])
{
    $sql="DELETE FROM usuario WHERE rut=".$_REQUEST['frm_id_oculto'];
	
	$resultado=mysql_query($sql);
	
	header("Location:ver_perfil.php");
    exit;
}

if($_REQUEST['eliminar2'])
{
    $sql="DELETE FROM usuario WHERE rut=".$_REQUEST['frm_id_oculto'];
	
	$resultado=mysql_query($sql);
	
	header("Location:ver_perfil.php");
    exit;
}
?>
<?php /*?><?php
include("../funciones/setup.php");
conecta_base();
		  
$sql="SELECT * 
FROM `usuario` 
WHERE  `rut` = '" . $_REQUEST["frm_rut"] . "' 
AND `nombre_user` = '" . $_REQUEST["frm_nombre"] . "'
AND `apellido_user` = '" . $_REQUEST["frm_apellido"] . "'
AND `email` = '" . $_REQUEST["frm_email"] . "'
AND `usuario` = '" . $_REQUEST["frm_usuario"] . "'
AND `clave` = '" . $_REQUEST["frm_clave"] . "'
AND `cod_perfil` = '" . $_REQUEST["frm_tipo_usua"] . "'";

echo $sql;

	    $array	 =	mysql_query($sql);
		if (mysql_num_rows($array)==1){ 
		   mysql_close();
		     header("Location: ver_perfil.php?errorver_perfil=si"); 
		   }else{
			     $inser="INSERT INTO usuario (
                                       		   rut,
                                               nombre_user ,
                                               apellido_user,
                                               email,
                                               usuario,
                                               clave,
                                               cod_perfil 
                                               )
                                        VALUES (
                                                  
												 '" . $_REQUEST["frm_rut"] . "', 
												 '" . $_REQUEST["frm_nombre"] . "', 
												 '" . $_REQUEST["frm_apellido"] . "', 
												 '" . $_REQUEST["frm_email"] . "', 
												 '" . $_REQUEST["frm_usuario"] . "', 
												 '" . $_REQUEST["frm_clave"] . "', 
												 )";
										echo $inser;
										$result=mysql_query($inser);	

                                        
$sql2="SELECT u.usuario,p.nombre_perfil 
FROM usuario as u INNER JOIN perfiles as p
on (u.cod_perfil=p.cod_perfil)
WHERE u.usuario = '" . $_REQUEST["frm_usuario"] . "'
AND u.clave = '" .$_REQUEST["frm_clave"] . "'" ;

//echo $sql2;
      	$array2	 =	mysql_query($sql2);
        $row	 =	mysql_fetch_array($array2);
		
		$usuario =	$row["usuario"];
		$perfil  =  $row["nombre_perfil"];
		if (mysql_num_rows($array2)==1){ 								
	
	session_start(); 
    $_SESSION["autentificado"]= "SI"; 
	$_SESSION["usuario"]=$usuario; 
	$_SESSION["perfil"]=$perfil;
	
    header ("Location:../index.php");
		}

		        }
				//mysql_close($conn);

?><?php */?>