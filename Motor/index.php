<?php if (!defined('ENTRADA')) exit('no puedes acceder directamente a este contenido, vuelve al indice http://www.Gestel.cl');
	
	define('INTERNO',MOTOR.'/Interno');
	define('EXTERNO',MOTOR.'/Externo');
	
	$cargadorClasesMotor = new Archivos();
	
	$motor=(array)$cargadorClasesMotor->listarArchivosRecursivo(INTERNO);
	$x=0;
	foreach($motor as $encendiendo)
	{
		if(is_file($motor[$x]))
			{
					include_once($motor[$x]);
					$x++;
			}
	}
	
?>