<?php include ("seguridad.php");
include("funciones/setup.php");

conecta_base();

if($id!="")
{
     $sql_busqueda="select * from cliente where id_clipro=".$id;
	 $resultado_busqueda=mysql_query($sql_busqueda);
	 $registros_busqueda=mysql_fetch_array($resultado_busqueda); 
	 $fecha=fecha_es($registros_busqueda['fecha_clipro']);
	 $hora=$registros_busqueda['hora'];
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
.Estilo2 {font-weight: bold}
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

			function validar()
			{
			   if(document.form1.frm_cliusua.value=="")
			   {
				  alert("Debe Ingresar Usuario");
				  document.form1.frm_cliusua.focus();
				  return;
			   }
			   if(document.form1.frm_cliclave.value=="")
			   {
				  alert("Debe Ingresar Clave");
				  document.form1.frm_cliclave.focus();
				  return;
			   }
			   if(document.form1.frm_clirut.value=="")
			   {
				  alert("Debe Ingresar Rut");
				  document.form1.frm_clirut.focus();
				  return;
			   }
			   if(document.form1.frm_clinom.value=="")
			   {
				  alert("Debe Ingresar Nombre");
				  document.form1.frm_clinom.focus();
				  return;
			   }
				
			   if(document.form1.frm_cliape.value=="")
			   {
					alert("Debe Ingresar Apellido");
					document.form1.frm_cliape.focus();
				  return;
			   }
			   if(document.form1.select.value=="")
			   {
					alert("Debe Ingresar Día");
					document.form1.select.focus();
				  return;
			   }
			
				if(document.form1.select2.value=="")
			   {
				   alert("Debe Ingresar Mes");
				   document.form1.select2.focus();
				 return;
			   }
				 if(document.form1.select3.value=="")
			   {
				   alert("Debe Ingresar A&ntilde;o");
				   document.form1.select3.focus();
				  return;
			   }
			    if(document.form1.frm_cliemail.value=="")
			   {
				   alert("Debe Ingresar Email");
				   document.form1.frm_cliemail.focus();
				  return;
			   }
			    if(document.form1.frm_clidire.value=="")
			   {
				   alert("Debe Ingresar Dirección");
				   document.form1.frm_clidire.focus();
				  return;
			   }
				 if(document.form1.frm_clitele.value=="")
			   {
				   alert("Debe Ingresar Teléfono");
				   document.form1.frm_clitele.focus();
				  return;
			   }
			    if(document.form1.frm_cliciudad.value=="")
			   {
				   alert("Debe Ingresar Ciudad");
				   document.form1.frm_cliciudad.focus();
				  return;
			   }
				 if(document.form1.userfile2.value=="")
			   {
				   alert("Debe Adjuntar Documentación");
				   document.form1.userfile2.focus();
				  return;
			   }
			   document.form1.submit();
			}
				function valida_mail()
			{
					 
					if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.form1.frm_cliemail.value))
					{
					   return;
					}
					else
					{
					   alert("La dirección de email no es Valida.");
					   document.form1.frm_cliemail.value="";
					   document.form1.frm_cliemail.focus();
					   return;
					}	
			}
	</script>
	<script language="javascript">

			function validacion_rut_usu(rut)
			{
			 var tmpstr = "";
			 if (rut=="")
				return;
			 for ( i=0; i < rut.length; i++ )
			   if ( rut.charAt(i) != ' ' && rut.charAt(i) != '.' && rut.charAt(i) != '-' )
				 tmpstr = tmpstr + rut.charAt(i);
				 rut = tmpstr;
				 largo = rut.length;
				 tmpstr = "";
			 for ( i=0; rut.charAt(i) == '0' ; i++ );
			   for (; i < rut.length; i++ )
				 tmpstr = tmpstr + rut.charAt(i);
				 rut = tmpstr;
				 largo = rut.length;
				 if ( largo < 2 )
				  {
					alert("Debe ingresar el rut Completo");
					document.form1.frm_clirut.value = "";
					document.form1.frm_clirut.focus();
					return;
				  }function validacion_rut_usu(rut)
			{
			 var tmpstr = "";
			 if (rut=="")
				return;
			 for ( i=0; i < rut.length; i++ )
			   if ( rut.charAt(i) != ' ' && rut.charAt(i) != '.' && rut.charAt(i) != '-' )
				 tmpstr = tmpstr + rut.charAt(i);
				 rut = tmpstr;
				 largo = rut.length;
				 tmpstr = "";
			 for ( i=0; rut.charAt(i) == '0' ; i++ );
			   for (; i < rut.length; i++ )
				 tmpstr = tmpstr + rut.charAt(i);
				 rut = tmpstr;
				 largo = rut.length;
				 if ( largo < 2 )
				  {
					alert("Debe ingresar el rut Completo");
					document.form1.frm_clirut.value = "";
					document.form1.frm_clirut.focus();
					return;
				  }
			   for (i=0; i < largo ; i++ )
				  {
					if ( rut.charAt(i) != "0" && rut.charAt(i) != "1" && rut.charAt(i) !="2" && rut.charAt(i) != "3" && rut.charAt(i) != "4" && rut.charAt(i) !="5" && rut.charAt(i) != "6" && rut.charAt(i) != "7" && rut.charAt(i) !="8" && rut.charAt(i) != "9" && rut.charAt(i) !="k" && rut.charAt(i) != "K" )
					  {
						alert("El valor ingresado no Corresponde a un R.U.T valido.");
						document.form1.frm_clirut.value = "";
						document.form1.frm_clirut.focus();
						return;
					  }
				 }
			 var invertido = "";
			 for ( i=(largo-1),j=0; i>=0; i--,j++ )
				invertido = invertido + rut.charAt(i);
			 var drut = "";
			 drut = drut + invertido.charAt(0);
			 drut = drut + '-';
			 cnt = 0;
			 for ( i=1,j=2; i<largo; i++,j++ )
			   {
				 if ( cnt == 3 )
				 {
				   drut = drut + '.';
				   j++;
				   drut = drut + invertido.charAt(i);
				   cnt = 1;
				 }
				 else
				 {
				   drut = drut + invertido.charAt(i);
				   cnt++;
				 }
			  }
			invertido = "";
			for ( i=(drut.length-1),j=0; i>=0; i--,j++ )
			   invertido = invertido + drut.charAt(i);
			document.form1.frm_clirut.value = invertido;
			if ( validar_digito_usu(rut)==1 )
			{
				return;
				
			}
			}
			
			function validar_digito_usu(crut)
			{
			 largo = crut.length;
			 if ( largo < 2 )
			   {
				 alert("Debe ingresar el rut completo");
				 document.form1.frm_clirut.value = "";
				 document.form1.frm_clirut.focus();
				 return;
			   }
			 if ( largo > 2 )
			   rut = crut.substring(0, largo - 1);
			 else
			   rut = crut.charAt(0);
			   dv = crut.charAt(largo-1);
			   checkCDV_usu( dv );
			 if ( rut == null || dv == null )
			   return 0;
			 var dvr = '0';
			 suma = 0;
			 mul = 2;
			 for (i= rut.length -1 ; i >= 0; i--)
			  {
				suma = suma + rut.charAt(i) * mul;
				if (mul == 7)
				   mul = 2;
				else
				   mul++;
						}
				res = suma % 11;
				if (res==1)
				  dvr = 'k';
				else if (res==0)
				   dvr = '0';
				else
				 {
				   dvi = 11-res;
				   dvr = dvi + "";
				 }
				if ( dvr != dv.toLowerCase() )
				{
				  alert("EL RUT es Incorrecto. Verifique...");
				  document.form1.frm_clirut.value = "";
				  document.form1.frm_clirut.focus();
				  return 1;
				}
			   return;
			}
			
			function checkCDV_usu( dvr )
			{
			  dv = dvr + "";
			  if ( dv != '0' && dv != '1' && dv != '2' && dv != '3' && dv != '4' && dv != '5' && dv != '6' && dv != '7' && dv != '8' && dv != '9' && dv != 'k'  && dv != 'K')
				{
				   alert("Debe ingresar un digito verificador valido.");
				   document.form1.frm_clirut.value = "";
				   document.form1.frm_clirut.focus();
				   return;
				}
			  return;
			}
			function valida_mail()
			{
					 
					if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.form1.frm_cliemail.value))
					{
					   return;
					}
					else
					{
					   alert("La dirección de email no es Valida.");
					   document.form1.frm_cliemail.value="";
					   document.form1.frm_cliemail.focus();
					   return;
					}	
			}
			function validacion_rut_usu(rut)
			{
			 var tmpstr = "";
			 if (rut=="")
				return;
			 for ( i=0; i < rut.length; i++ )
			   if ( rut.charAt(i) != ' ' && rut.charAt(i) != '.' && rut.charAt(i) != '-' )
				 tmpstr = tmpstr + rut.charAt(i);
				 rut = tmpstr;
				 largo = rut.length;
				 tmpstr = "";
			 for ( i=0; rut.charAt(i) == '0' ; i++ );
			   for (; i < rut.length; i++ )
				 tmpstr = tmpstr + rut.charAt(i);
				 rut = tmpstr;
				 largo = rut.length;
				 if ( largo < 2 )
				  {
					alert("Debe ingresar el rut Completo");
					document.form1.frm_clirut.value = "";
					document.form1.frm_clirut.focus();
					return;
				  }function validacion_rut_usu(rut)
			{
			 var tmpstr = "";
			 if (rut=="")
				return;
			 for ( i=0; i < rut.length; i++ )
			   if ( rut.charAt(i) != ' ' && rut.charAt(i) != '.' && rut.charAt(i) != '-' )
				 tmpstr = tmpstr + rut.charAt(i);
				 rut = tmpstr;
				 largo = rut.length;
				 tmpstr = "";
			 for ( i=0; rut.charAt(i) == '0' ; i++ );
			   for (; i < rut.length; i++ )
				 tmpstr = tmpstr + rut.charAt(i);
				 rut = tmpstr;
				 largo = rut.length;
				 if ( largo < 2 )
				  {
					alert("Debe ingresar el rut Completo");
					document.form1.frm_clirut.value = "";
					document.form1.frm_clirut.focus();
					return;
				  }
			   for (i=0; i < largo ; i++ )
				  {
					if ( rut.charAt(i) != "0" && rut.charAt(i) != "1" && rut.charAt(i) !="2" && rut.charAt(i) != "3" && rut.charAt(i) != "4" && rut.charAt(i) !="5" && rut.charAt(i) != "6" && rut.charAt(i) != "7" && rut.charAt(i) !="8" && rut.charAt(i) != "9" && rut.charAt(i) !="k" && rut.charAt(i) != "K" )
					  {
						alert("El valor ingresado no Corresponde a un R.U.T valido.");
						document.form1.frm_clirut.value = "";
						document.form1.frm_clirut.focus();
						return;
					  }
				 }
			 var invertido = "";
			 for ( i=(largo-1),j=0; i>=0; i--,j++ )
				invertido = invertido + rut.charAt(i);
			 var drut = "";
			 drut = drut + invertido.charAt(0);
			 drut = drut + '-';
			 cnt = 0;
			 for ( i=1,j=2; i<largo; i++,j++ )
			   {
				 if ( cnt == 3 )
				 {
				   drut = drut + '.';
				   j++;
				   drut = drut + invertido.charAt(i);
				   cnt = 1;
				 }
				 else
				 {
				   drut = drut + invertido.charAt(i);
				   cnt++;
				 }
			  }
			invertido = "";
			for ( i=(drut.length-1),j=0; i>=0; i--,j++ )
			   invertido = invertido + drut.charAt(i);
			document.form1.frm_clirut.value = invertido;
			if ( validar_digito_usu(rut)==1 )
			{
				return;
				
			}
			}
			
			function validar_digito_usu(crut)
			{
			 largo = crut.length;
			 if ( largo < 2 )
			   {
				 alert("Debe ingresar el rut completo");
				 document.form1.frm_clirut.value = "";
				 document.form1.frm_clirut.focus();
				 return;
			   }
			 if ( largo > 2 )
			   rut = crut.substring(0, largo - 1);
			 else
			   rut = crut.charAt(0);
			   dv = crut.charAt(largo-1);
			   checkCDV_usu( dv );
			 if ( rut == null || dv == null )
			   return 0;
			 var dvr = '0';
			 suma = 0;
			 mul = 2;
			 for (i= rut.length -1 ; i >= 0; i--)
			  {
				suma = suma + rut.charAt(i) * mul;
				if (mul == 7)
				   mul = 2;
				else
				   mul++;
						}
				res = suma % 11;
				if (res==1)
				  dvr = 'k';
				else if (res==0)
				   dvr = '0';
				else
				 {
				   dvi = 11-res;
				   dvr = dvi + "";
				 }
				if ( dvr != dv.toLowerCase() )
				{
				  alert("EL RUT es Incorrecto. Verifique...");
				  document.form1.frm_clirut.value = "";
				  document.form1.frm_clirut.focus();
				  return 1;
				}
			   return;
			}
			
			function checkCDV_usu( dvr )
			{
			  dv = dvr + "";
			  if ( dv != '0' && dv != '1' && dv != '2' && dv != '3' && dv != '4' && dv != '5' && dv != '6' && dv != '7' && dv != '8' && dv != '9' && dv != 'k'  && dv != 'K')
				{
				   alert("Debe ingresar un digito verificador valido.");
				   document.form1.frm_clirut.value = "";
				   document.form1.frm_clirut.focus();
				   return;
				}
			  return;
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
				<div align="left"> Ud. se encuentra en: <a href="index.php">Inicio </a>&gt; <a href="bien_admin.php"> Acceso a M&oacute;dulos </a>&gt; <a href="ver_cliproveedor.php"> Módulo Cliente Proveedor</a> &gt;<a href="#"> Ingreso </a></div><br />
				  <h2><strong>Ingreso de Cliente Proveedor</strong></h2>
				  </br></br>
				  <form id="form1" name="form1" method="post" action="ProcesaFormularioClientes.php" enctype="multipart/form-data">
 <table cellpadding="4" cellspacing="0" border="0" align="center">
   <tr>
     <td><fieldset>
       <legend>Identificaci&oacute;n de usuario:</legend><br />
       <table cellpadding="4" cellspacing="0" border="0" width="100%">
         <tr>
		  <td>Id Cliente </td>
          <td colspan="3"><label>
            <input name="frm_id_clipro" type="text" id="frm_id_clipro" size="10" disabled="disabled" value="<?php echo $registros_busqueda['id_clipro'];?>"/>
            <input name="frm_id_oculto" type="hidden" id="frm_id_oculto" value="<?php echo $registros_busqueda['id_clipro'];?>"/>
          </label></td>
           <td style="text-align: right;">Nombre usuario:</td>
           <td><input name="frm_cliusua" type="text" class="campo_form" id="frm_cliusua" value="<? if ($editando) echo $dato["usuario_clipro"]?>" /></td>
           <td style="text-align: right;">Contrase&ntilde;a:</td>
           <td><input name="frm_cliclave" type="password" class="campo_form" id="frm_cliclave" value="<? if ($editando) echo $dato["clave_clipro"]?>" /></td>
         </tr>
       </table><br />
       </fieldset>
         <fieldset>
         <legend>Identificaci&oacute;n de persona:</legend><br />
           <table cellpadding="4" cellspacing="0" border="0" width="100%">
           <tr>
             <td width="12%" style="text-align: right;">RUT:</td>
             <td width="46%"><input name="frm_clirut" type="text" class="campo_form" id="frm_clirut" onBlur="validacion_rut_usu(document.form1.frm_clirut.value)"/></td>
             <td colspan="2">&nbsp;</td>
           </tr>
           <tr>
             <td style="text-align: right;">Nombre:</td>
             <td><input name="frm_clinom" type="text" class="campo_form" id="frm_clinom" /></td>
             <td width="19%" style="text-align: right;">Apellido:</td>
             <td width="23%"><input name="frm_cliape" type="text" class="campo_form" id="frm_cliape" /></td>
           </tr>
           <tr>
             <td style="text-align: right;">Fecha Nac.</td>
             <td colspan="2"><select name="select" id="select">
               <option value="0">..::Seleccionar::..</option>
               <?php
							  
							   for($i=1;$i<=31;$i++)
							   {
							   
							   ?>
               <option value="<?php echo $i;?>"><?php echo $i;?></option>
               <?php 
							   }
							  
							  ?>
             </select>
               <select name="select2" id="select2">
                 <option value="0">..::Seleccionar::..</option>
                 <?php
							  
							   for($i=1;$i<=12;$i++)
							   {
							   
							   ?>
                 <option value="<?php echo $i;?>"><?php echo $i;?></option>
                 <?php 
							   }
							  
							  ?>
               </select>
               <select name="select3" id="select3">
                 <option value="0">..::Seleccionar::..</option>
                 <?php
							  
							   for($i=2012;$i>=1940;$i--)
							   {
							   
							   ?>
                 <option value="<?php echo $i;?>"><?php echo $i;?></option>
                 <?php 
							   }
							  
							  ?>
               </select></td>
             <td>&nbsp;</td>
           </tr>
         </table><br />
           </fieldset>
       <fieldset>
         <legend>Contacto:</legend><br />
         <table cellpadding="4" cellspacing="0" border="0" width="100%">
           <tr>
             <td width="49%" style="text-align: right;">E-mail:</td>
             <td width="23%"><input name="frm_cliemail" type="text" id="frm_cliemail" class="campo_form" onBlur="valida_mail(document.form1.frm_cliemail.value)"/></td>
			 <td width="9%" style="text-align: right;">Dirección:</td>
			 <td width="19%"><input name="frm_clidire" type="text" class="campo_form" id="frm_clidire" /></td>
           </tr>
           <tr>
             <td style="text-align: right;">Teléfono:</td>
             <td><input name="frm_clitele" type="text" class="campo_form" id="frm_clitele" /></td>
			 <td style="text-align: right;">Ciudad:</td>
			 <td><input name="frm_cliciudad" type="text" class="campo_form" id="frm_cliciudad"/></td>
           </tr>
           <tr>
             <td style="text-align: right;">Estado:</td>
             <td></td>
             <td style="text-align: right;">Fecha:</td>
             <td><input name="txt_fecha2" type="text" id="txt_fecha2" size="20" disabled="disabled" value="<?php echo $fecha;?>"/></td>
           </tr>
		   <tr>
		     <td style="text-align: right;">Adjuntar Documentos </td>
		     <td><input name="userfile2" type="file" class="cajatexto1" onchange="muestra();" size="16" style="float: left" /></td>
		     <td><input type="hidden" name="MAX_FILE_SIZE2" value="100000" /></td>
		     <td></td>
			 <tr>			 </tr>
			 <tr>
			   <td>&nbsp;</td>
			   <td>&nbsp;</td>
			   <td>&nbsp;</td>
			   <td>&nbsp;</td>
			   </tr>
			 <tr>
		     <td>
				  <input type="button" name="Submit" value="Ingresar" onClick="validar()"/>
                </td>
				<?php
				
				if($id!="")
				{
				?>
                <td><label>
                  <input name="eliminar" type="submit" id="eliminar" value="Eliminar" />
                  <input name="cancelar2" type="submit" id="cancelar2" value="Cancelar" />
                </label></td>
				<?php
				}
				?>
                <td><label>
                  <input type="reset" name="Submit22" value="Limpiar" />
                </label></td>
				<td>&nbsp;</td>
			</tr>
         </table>
       </fieldset></td>
     <td style="width: 100px; text-align: right; vertical-align: top;">&nbsp;</td>
   </tr>
 </table>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
				  </form>
                </div>
			</div>
		</div>
		<?php include("container.php"); ?>
		<?php include("footer.php"); ?>
	</body>
</html>