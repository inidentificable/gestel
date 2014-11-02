<?php
function conecta_base(){
		$link=mysql_connect("localhost","root","123456");
		if(!$link)
		{
			die("No existe Conexion con el motor de Base de Datos".mysql_error());
		}
		$base=mysql_select_db("gestel");
		if(!$base)
		{
			die("No se encuentra la Base de Datos".mysql_error());
		}
		
}

function fecha_hoy_mas_dia()
{
	$dia=date("d");
	$mes=date("m");
	$ano=date("Y");
	$nombre_dia=date("w");
	switch ($mes)
	{
		case 1:
			$mes="Enero";
			break;
		case 2:
			$mes="Febrero";
			break;
		case 3:
			$mes="Marzo";
			break;
		case 4:
			$mes="Abril";
			break;
		case 5:
			$mes="Mayo";
			break;
		case 6:
			$mes="Junio";
			break;
		case 7:
			$mes="Julio";
			break;
		case 8:
			$mes="Agosto";
			break;
		case 9:
			$mes="Septiembre";
			break;
		case 10:
			$mes="Octubre";
			break;
		case 11:
			$mes="Noviembre";
			break;
		case 12:
			$mes="Diciembre";
			break;
	}
	switch ($nombre_dia)
	{
		case 0:
			$nombre_dia="Domingo";
			break;
		case 1:
			$nombre_dia="Lunes";
			break;
		case 2:
			$nombre_dia="Martes";
			break;
		case 3:
			$nombre_dia="Miercoles";
			break;
		case 4:
			$nombre_dia="Jueves";
			break;
		case 5:
			$nombre_dia="Viernes";
			break;
		case 6:
			$nombre_dia="Sabado";
			break;
	}
	$fecha=$nombre_dia." ".$dia." de ".$mes." de ".$ano;
	echo "$fecha";
}


function fecha_hoy(){
    $fecha=date("d-m-Y");
	return $fecha;
}

function hora(){
    $hora=date("H:i:s");
	return $hora;
}

function fecha_es($fecha){
	$ano=substr($fecha,0,4);
	$mes=substr($fecha,5,2);
	$dia=substr($fecha,8,2);

	$fecha=$dia."-".$mes."-".$ano;

	return $fecha;
}

function fecha_bd($fecha){
	$dia=substr($fecha,0,2);
	$mes=substr($fecha,3,2);
	$ano=substr($fecha,6,4);

	$fecha=$ano."-".$mes."-".$dia;

	return $fecha;
}

function imagen($archivo) {
  $ruta = "../images/".$archivo;
  if (file_exists($ruta)) {
    $t = getimagesize($ruta);
    return '<img src="'.$ruta.'" border="0" width="'.$t[0].'" height="'.$t[1].'" alt="" style="vertical-align: middle;" />'; 
  }
  return '';
  
}

function espacio($ancho, $alto) {
  $ruta = "../images/espacio.png";
  if (file_exists($ruta)) {
    return '<img src="'.$ruta.'" border="0" width="'.$ancho.'" height="'.$alto.'" alt="" />';
  }
  return '';
}

function crearBotonBuscar() {
  $textoBoton = "Buscar";
  $nombreBoton = "buscar";
  $fxJS = "vBuscar(this.form)";
  $html = "<input type=\"button\" name=\"".$nombreBoton."\" value=\"".$textoBoton."\" class=\"boton\" onclick=\"".$fxJS."\" />\n<br /><br />\n";
  return $html;
}

function clienteAsociado($cod) {
  if (!empty($cod)) {
    conecta_base();
    $sql1 = "SELECT nom_clipro, ape_clipro FROM cliente WHERE activo_user = 1 AND id_usuario= ".$cod;
    $res1 = mysql_query($sql1);
    if (mysql_num_rows($res1) == 1) {
      $dato = mysql_fetch_array($res1);
      $html = $dato[0]." ".$dato[1];
    }
    else {
      $html = "Sin due&ntilde;o";
    }
  return $html;
  }
}

function InmuebleAsociado($cod) {
  if (!empty($cod)) {
    conecta_base();
    $sql3 = "SELECT ciud_inmueble FROM inmueble WHERE estado_inmueble = 1 AND id_inmueble = ".$cod;
    $res3 = mysql_query($sql3);
    if (mysql_num_rows($res3) == 1) {
      $dato = mysql_fetch_array($res3);
      $html = $dato[0];
    }
    else {
      $html = "Sin inmueble";
    }
  return $html;
  }
}


function horaAsociada($codigo) {
  if (!empty($codigo)) {
    conecta_base();
    $sql5 = "SELECT hora FROM horario WHERE id_hora = ".$codigo;
    $res5 = mysql_query($sql5);
    if (mysql_num_rows($res5) == 1) {
      $dato = mysql_fetch_array($res5);
      $html = $dato[0];
    }
    else {
      $html = "Sin hora";
    }
  return $html;
  }
}


function crearListaClientes($nombre_campo, $sel=0) {
  $html = "<select name=\"".$nombre_campo."\" class=\"lista_form\">\n";
  $html .= "<option value=\"0\"";
  if ($sel == 0) $html .= " selected=\"selected\"";
  $html .= ">Seleccione:</option>\n";
  $html .= "<option value=\"\" onclick=\"location.href='index.php?modulo=cliente&amp;accion=1&amp;origen=inmuebles'\" style=\"font-weight:bold\">Agregar cliente...</option>";

  conectar_bd();
  $sql9 = "SELECT * FROM cliente WHERE estado_clipro = 1 ORDER BY ape_clipro";
  $res9 = mysql_query($sql9);
  while ($dato = mysql_fetch_array($res9)) {
    $html .= "<option value=\"".$dato["id_clipro"]."\"";
    if ($sel != 0 && $sel == $dato["id_clipro"]){
      $html .= " selected=\"selected\"";
    }
    $html .= ">".$dato["ape_clipro"].", ".$dato["nom_clipro"]."</option>\n";
  }
  $html .= "</select>\n";
  return $html;
}

function hay_inyeccion() {
  if (substr_count($_SERVER["QUERY_STRING"], "'") == 0)
    return false;
  return true;
}

function varEsOK($variable) {
  if (isset($variable) && !empty($variable))
    return true;
  return false;
}

function incluir($archivo) {
  if (file_exists($archivo)) {
    include($archivo);
  }
}

?>