<?php if (!defined('ENTRADA')) exit('no puedes acceder directamente a este contenido, vuelve al indice http://www.gestel.cl');

/**
* Simple News
*
* Plugin
* 
* @version 1.0
* @author James Dodd

*/

function header_inc()
{
	$OBJ =& get_instance();
	global $rs;
	
	?>
	<div id="header"><h1><a href="<?=$rs['baseurl']?>"><span></span><?=$rs['obj_name']?></a></h1></div>
		<?=$rs['obj_itop']?>
		<?=front_index()?>
		<?=$rs['obj_ibot']?>
<?	
die;	
}


?>