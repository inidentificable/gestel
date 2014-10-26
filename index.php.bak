<?php define('ENTRADA', 'Adelante!');

// turn this on if you want to check things
//error_reporting(E_ALL);

// the basics
if (file_exists('Portal/Configuracion/Configuracion.php')) require_once 'Portal/Configuracion/configuracion.php';
else {
    header('location: Portal/install.php');
}


require_once 'Portal/Inicializar.php';
require_once 'Portal/FuncionesComunes.php';

// make sure we have our connection array
shutDownCheck();

// messy, but seems to work
$_UbicacionRealArchivo = realpath(dirname($_SERVER['SCRIPT_FILENAME']));
$_DirectorioBaseReal = realpath(dirname(__FILE__));
$_MiParteRuta = substr($_UbicacionRealArchivo, strlen($_DirectorioBaseReal));
$uri = $_MiParteRuta
    ? substr(dirname($_SERVER['SCRIPT_NAME']), 0, -strlen($_MiParteRuta))
    : dirname($_SERVER['SCRIPT_NAME']);

// clean up the uri
$uri = (MODREWRITE == false) ?
    str_replace('/index.php?', '', $_SERVER['REQUEST_URI']) :
    entry_uri($uri, $_SERVER['REQUEST_URI']);

// TEMPORARY
// what if it's more than one folder up?
$uri = str_replace($self, '', $uri);

//remove out the third level of url since it doesn't work.
if (count($uri_arr = explode('/', $uri)) > 3) {
    $uri = '/' . $uri_arr[1] . '/' . $uri_arr[2] . '/';
}

// time to roll
load_helpers(array('time'));
$OBJ =& load_class('core', TRUE, 'Libreria');

// page query
$rs = $OBJ->db->fetchRecord("SELECT * 
	FROM " . PX . "objects, " . PX . "objects_prefs
	WHERE url = '$uri'
	AND status = '1' 
	AND object = obj_ref_type");

if (!$rs) {
    // try again with Sitio root
    $rs = $OBJ->db->fetchRecord("SELECT *
		FROM " . PX . "objects, " . PX . "objects_prefs
		WHERE id = 3
		AND status = '1' 
		AND object = obj_ref_type");

    // we don't search engines indexing this
    header("HTTP/1.1 404 Not Found");

    // we need a formal error page
    if (!$rs) echo 'Page not found error here.';
}
// autoload 'plugins' folder
include DIRNAME . BASENAME . '/Sitio/plugin/index.php';

// additional variables
// perhaps we should port these differently?
$rs['baseurl'] = BASEURL;
$rs['basename'] = BASENAME;
$rs['basefiles'] = BASEFILES;
$rs['gimgs'] = GIMGS;

// get the front end Ayudantes class
$OBJ->lib_class('front');

// time for some action
if ($rs['obj_theme'] == 'eatock') {
    $contents = $OBJ->front->front_eatock();
} else {
    $filename = DIRNAME . BASENAME . '/Sitio/' . $rs['obj_theme'] . '/index.php';
    $fp = @fopen($filename, 'r');
    $contents = fread($fp, filesize($filename));
    fclose($fp);
}

// makin' stuff happen
$PARSE =& load_class('parse', TRUE, 'Libreria');
$PARSE->vars = $rs;
$PARSE->code = $contents;
echo $PARSE->parsing();

// do stats if they are wanted
if ($default['statistics'] == TRUE) load_class('statistics', TRUE, 'Libreria');
exit;


?>