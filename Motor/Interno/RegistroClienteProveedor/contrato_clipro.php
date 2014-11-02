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
.Estilo2 {font-weight: bold}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
-->
    </style>
<head>
		<title>GESTEL</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
			parent.print();
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
			  <div align="left"> Ud. se encuentra en: <a href="index.php">Inicio </a>&gt; <a href="bien_admin.php"> Acceso a M&oacute;dulos </a>&gt; <a href="ver_cliproveedor.php"> Módulo Cliente Proveedor</a> &gt;<a href="#"> Contrato</a></div>
			  <br />
			  <form>
			    <h2><strong>Contrato Servicio</strong></h2>
			    <br />
			   <p align="justify">Conste por el presente documento el  Contrato de Servicio, que celebran de una parte GESTEL,  identificada con R.U.T. N° 69.300.900-O , inscrita  en la partida electrónica N° ..........................    del Registro de Personas Jurídicas    de ............................. ,               con    domicilio en Av. Francisco de Aguirre n°555, La Serena, debidamente representada por su gerente general don CLAUDIO REYES MIRANDA, identificado con R.U.T. N° ......................... , con  poderes inscritos en el asiento .....................    de la referida partida electrónica, a quien en lo  sucesivo se denominará EL CORREDOR; y, de otra parte,
			     <label>
			     <input name="txt_nom" type="text" id="txt_nom" maxlength="100" />
			     </label>
		        , identificado  con R.U.T.. N°
		        <label>
		        <input name="txt_rut" type="text" id="txt_rut" maxlength="10" />
		        </label>
		        , de estado civil  
		        <label>
		        <select name="select" size="1">
                  <option>..::Seleccione::..</option>
				  <option>Soltero(a)</option>
				  <option>Casado(a)</option>
				  <option>Separado(a)</option>
				  <option>Viudo(a)</option>
                </select>
		        </label> 
		        y con domicilio en 
		        <label>
		        <input name="txt_direc" type="text" id="txt_direc" maxlength="50" />
		        </label>
		        , a quien en lo sucesivo se denominará EL  CLIENTE PROVEEDOR; en los términos contenidos en las cláusulas siguientes: </p><br />
				<p align="justify"><strong>ANTECEDENTES:</strong><br />

                  PRIMERA.- EL CLIENTE PROVEEDOR es propietario del inmueble ubicado en <label><input name="textfield" type="text" maxlength="50" /></label>, en el distrito, cuyo dominio se encuentra inscrito en la partida electrónica N° <label>  <input name="txt_numero" type="text" id="txt_numero" maxlength="20" />  </label>   del Registro de la Propiedad Inmueble de Chile, dejando establecido que sobre dicho bien no pesa gravamen de ninguna especie, ni medida judicial o extrajudicial alguna y en general, acto o contrato que limite su libre disponibilidad.<br />

SEGUNDA.- EL CORREDOR es una persona jurídica de derecho privado constituida bajo el régimen de la sociedad anónima, cuya actividad principal es la intermediación en la celebración de contratos de compraventa y arrendamiento de inmuebles de toda naturaleza: casa-habitación, oficinas, tiendas, departamentos, etc.</p>
				<BR />
				<p align="justify"><strong>OBJETO DEL CONTRATO:</strong><br />
				</p>

                 <p align="justify"> TERCERA.- En virtud del presente contrato, EL CORREDOR se obliga a promover la venta del inmueble al que se refiere la cláusula primera, durante un plazo de 90 días. En contraprestación, EL CLIENTE PROVEEDOR se obliga a pagar a EL CORREDOR una comisión que se deducirá del precio de venta del inmueble.</p>
                 <br />
				<p align="justify"><strong>OBLIGACIONES Y DERECHOS DEL CORREDOR:</strong><br />
				</p>

                 <p align="justify">CUARTA.- En virtud del presente contrato, EL CORREDOR se obliga a: </p><br />
                     <p align="justify">    &nbsp; - &nbsp; Publicitar la venta del referido inmueble.<br />
                       &nbsp; - &nbsp; Informar semanalmente a EL CLIENTE PROVEEDOR sobre los potenciales compradores. <br />
					   &nbsp; - &nbsp; Mostrar el inmueble a los interesados.<br />
                   </p>  <br />
                <p align="justify">QUINTA.- EL CORREDOR, en cumplimiento de lo establecido en la cláusula anterior, deberá publicar por su cuenta, avisos publicitando la venta del inmueble en su página web www.gestel.cl. <br />

  SEXTA.- EL CORREDOR deberá brindar a los potenciales compradores o interesados en el inmueble, toda la información que estos requieran como lo referente a los antecedentes registrales, planos, antigüedad, etc., que obtendrá directamente de EL CLIENTE PROVEEDOR. <br />

  SEPTIMA.- En caso de no efectuarse la venta en el plazo pactado, o de efectuarse en condiciones distintas a las acordadas, no hay obligación de EL CORREDOR de pagar indemnización alguna.</p> <br />

<p align="justify"><strong>OBLIGACIONES Y DERECHOS DEL CLIENTE PROVEEDOR:</strong></p>


<p align="justify">OCTAVA.- EL CLIENTE PROVEEDOR de acuerdo a lo señalado anteriormente, pagará a EL CORREDOR una comisión que asciende al 3% del precio de la venta del inmueble, en caso que se realice la operación. De ocurrir esto último, dicho pago se efectuará al momento de la suscripción del contrato de compraventa.<br />

NOVENA.- EL CLIENTE PROVEEDOR se obliga a abstenerse de ofertar la venta del inmueble de su propiedad, mientras esté vigente el contrato.<br />

DÉCIMA.- Si EL CLIENTE PROVEEDOR incumple la cláusula anterior y promociona y vende el inmueble durante la vigencia del contrato, se obliga a pagarle a EL CORREDOR la comisión establecida en la cláusula octava.<br />

DÉCIMO PRIMERA.- EL CLIENTE PROVEEDOR se obliga a brindar todas las facilidades para que EL CORREDOR cumpla con la labor encomendada. </p><br />
<p align="justify"><strong>DOMICILIO:</strong></p>

<p align="justify">  DÉCIMO SEGUNDA.- Para la validez de todas las comunicaciones y notificaciones a las partes, con motivo de la ejecución de este contrato, ambas señalan como sus respectivos domicilios los indicados en la introducción de este documento. El cambio de cualquiera de las partes surtirá efectos desde la fecha de comunicación de dicho cambio a la otra parte, por vía notarial.</p><br />

<p align="justify"><strong>APLICACIÓN SUPLETORIA DE LA LEY</strong>:</p>
 
<p align="justify">DÉCIMO TERCERA.- En todo lo no previsto por las partes en el presente contrato, ambas se someten a lo establecido por el Código Civil y demás del sistema jurídico que resulten aplicables.</p>
<p align="justify">La fecha de inicio del contrato es:
  <label>
  <input name="txt_fechai" type="text" id="txt_fechai" />
  </label> 
  hasta 
  <label>
  <input name="txt_fechat" type="text" id="txt_fechat" />
  </label> 
  , siendo un total de 
  <label>
  <input name="txt_meses" type="text" id="txt_meses" size="3" maxlength="3" />
  </label> 
  meses; en modalidad de 
  <label>
  <input type="text" name="textfield2" />
  </label>
.</p>
<br />

<p align="justify">En señal de conformidad, las partes suscriben este documento en la ciudad de La Serena, <? echo fecha_hoy_mas_dia();?>.<br /></p>
<div align="center"><input name="generar" type="submit" id="generar" value="Generar" onclick="print();" /></div>
			  </form><br />
			  </div>
			</div>
		</div>
		<?php include("container.php"); ?>
		<?php include("footer.php"); ?>
</body>
</html>