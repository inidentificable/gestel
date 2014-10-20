<?php if (!defined('ENTRADA')) exit('no puedes acceder directamente a este contenido, vuelve al indice http://www.Gestel.cl');

// mod_rewrite is being used?
// in case the server does not have mod_rewrite
define('MODREWRITE', false);

// image quality
$default['img_quality'] = 100;

// things you don't want stats to track
$default['ignore_ip'] = array();

//////////// you won't normally need to edit anything below this line ////////////

// darn quotes
set_magic_quotes_runtime(0);

// database prefix
define('PX', 'gstl_');

// version
define('VERSION', '1.0 beta </a>');

// language default in case of error
define('LANGUAGE', 'es-es');

// Paths/definitions of things (relative to index file)
define('DireccionLibreria', 'Libreria');
define('DireccionAyudantes', 'Ayudantes');
define('DireccionModulos', 'Modulos');
define('DireccionBaseDatos', 'BaseDatos');
define('DireccionLenguajes', 'Lenguaje');
define('EXTPATH', 'ext');

// paths to internal parts
define('Recursos', 'Recursos/');
define('CSS', Recursos . 'css/');
define('JS', Recursos . 'js/');
define('IMG', Recursos . 'img/');
define('DireccionTemplate', Recursos . 'tpl/');

// improve this later
$adjust = realpath(dirname(__FILE__));

define('BASENAME', '/Portal');
define('DIRNAME', str_replace(BASENAME, '', $adjust));

$self = (dirname($_SERVER['PHP_SELF']) == '/') ? '' : dirname($_SERVER['PHP_SELF']);
$base = 'http://' . $_SERVER['HTTP_HOST'] . $self . '/';
$base = str_replace(BASENAME, '', $base);
define('BASEURL', preg_replace("/\/$/i", '', $base)); // no trailing slashes


// default Modulos
$default['Modulos'] = 'exhibits';

// do we want to use the internal stats?
$default['statistics'] = TRUE;

// for paths to Archivos/images
define('BASEFILES', '/Archivos');
define('GIMGS', BASEFILES . '/gimgs');

// use an editor, i guess...
$default['tinymce'] = FALSE; // not yet

// cache time
$default['cache_time'] = '30'; // not yet

// report to Indexhibit
$default['reporting'] = FALSE; // not yet

// first year
$default['first_year'] = 1900;

// Add default types for Archivos, images and movies upload
// if we add new 'media' we need to update modedit.js
$uploads['images'] = array('jpg', 'jpeg', 'bmp', 'gif', 'png');
$uploads['media'] = array('mov', 'mp3', 'jar');
$uploads['Archivos'] = array('txt', 'pdf', 'doc', 'xls');
$uploads['flash'] = array('swf');

// define the default encoding
$default['encoding'] = 'UTF-8';

// basic sizes for images and thumbnails uploading
$default['thumbsize'] = array(100 => 100, 150 => 150, 200 => 200);
$default['imagesize'] = array(200 => 200, 400 => 400, 600 => 600, 'full' => 9999);

// max exhibit images upload
$default['exhibit_imgs'] = 30;

// 'standard' formats
$default['standard_formats'] = array('horizontal', 'slideshow+thumbs');

// many requests for this
// have a box for background colors instead of picker
$default['color_picker'] = true;

?>