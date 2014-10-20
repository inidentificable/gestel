<?php if (!defined('ENTRADA')) exit('no puedes acceder directamente a este contenido, vuelve al indice http://www.Gestel.cl');

// this is a little redundant
function load_path($type)
{
    switch ($type) {
        case 'Libreria':
            return DireccionLibreria;
            break;
        case 'BaseDatos':
            return DireccionBaseDatos;
            break;
        case 'help':
            return DireccionAyudantes;
            break;
        case 'mod':
            return DireccionModulos;
            break;
        case 'Lenguaje':
            return DireccionLenguajes;
            break;
    }
}

// can't return direct references (weird bug)
function &get_instance()
{
    global $OBJ, $INDX;

    if (is_object($INDX)) {
        $reference = $INDX;
        return $reference;
    } else {
        $reference = $OBJ;
        return $reference;
    }
}


// this is a little ugly but it works
function &load_class($class, $instantiate = TRUE, $type, $internal = FALSE)
{
    global $indx;

    static $objects = array();

    $path = load_path($type);
    $file = $class;

    // exceptions
    if ($type == 'BaseDatos') $file = 'BaseDatos.' . $indx['sql'];
    if ($type == 'Lenguaje') $file = 'index';


    if (!isset($objects[$class])) {
        if ($internal == FALSE) {
            if (file_exists(DIRNAME . BASENAME . '/' . $path . '/' . $file . '.php')) {
                require_once(DIRNAME . BASENAME . '/' . $path . '/' . $file . '.php');
            } else {
                show_error('class not found');
            }

            if ($instantiate == TRUE) {
                $objects[$class] =& new $class();
            } else {
                $objects[$class] = TRUE;
            }
        } else // TRUE
        {
            if (file_exists(DIRNAME . BASENAME . '/' . $path . '/' . $file . '/index.php')) {
                require_once(DIRNAME . BASENAME . '/' . $path . '/' . $file . '/index.php');
            } else {
                show_error('class not found');
            }

            if ($instantiate == TRUE) {
                $objects[$class] =& new $class();
            } else {
                $objects[$class] = TRUE;
            }
        }
    }

    return $objects[$class];
}


// from the Ayudantes folder
function load_helper($file)
{
    if ($file == '') return;

    if (file_exists(DIRNAME . BASENAME . '/' . DireccionAyudantes . '/' . $file . '.php')) {
        require_once(DIRNAME . BASENAME . '/' . DireccionAyudantes . '/' . $file . '.php');
    }
}


// load multiple helpers
function load_helpers($files)
{
    if (!is_array($files)) return;

    foreach ($files as $file) load_helper($file);
}


// loading helpers for a Modulos (located in Modulos folder)
function load_module_helper($file, $section)
{
    if ($file == '') return;

    if (file_exists(DIRNAME . BASENAME . '/' . DireccionModulos . '/' . $section . '/' . $file . '.php'))
        require_once(DIRNAME . BASENAME . '/' . DireccionModulos . '/' . $section . '/' . $file . '.php');
}


function show_error($message = '')
{
    // we'll use the default language for this
    $lang =& load_class('Lenguaje', TRUE, 'Libreria');
    $lang->setlang(); // get the default strings

    $message = $lang->word($message);

    $error =& load_class('error', TRUE, 'Libreria');
    header('Status: 503 Service Unavailable'); // change to right error note
    echo $error->show_error($message);
    exit;
}


// could use refinement - rethink
function show_login($message = '')
{
    // we'll use the default language for this
    $lang =& load_class('Lenguaje', TRUE, 'Libreria');
    $lang->setlang(); // get the default strings

    $login = "<form method='post' action=''>
	<h1>Indexhibit</h1>
	<br />
	<p><strong>" . $lang->word('login') . ":</strong> (" . $lang->word('number chars') . ")
		<input name='uid' type='text' maxlength='12' /></p>
	<p><strong>" . $lang->word('password') . ":</strong> (" . $lang->word('number chars') . ")
		<input name='pwd' type='password' maxlength='12' /></p>
	<p><input name='submitLogin' type='submit' value='" . $lang->word('login') . "' class='login-button' /></p>
	<p>" . $lang->word($message) . "&nbsp;</p>
	</form>";

    $error =& load_class('error', TRUE, 'Libreria');
    echo $error->show_login($login);
    exit;
}


/* system_redirect("?a=$go[a]&q=note&id=$last"); */
function system_redirect($params = '')
{
    // do we need to put some validators on this?
    // don't want the extra slash
    $self = (dirname($_SERVER['PHP_SELF']) == '/') ? '' : dirname($_SERVER['PHP_SELF']);

    header('Location: http://' . $_SERVER['HTTP_HOST'] . $self . '/' . $params);
    return;
}


// revise this later...
function entry_uri($uri = '', $server_uri)
{
    $url = $server_uri;

    // remove any illegal chars first ' " $ * @
    // remove non alpha chars (a-zA-Z0-9-/?# only)
    // all urls are lowercase
    $url = preg_replace(
        array("/[^a-zA-Z0-9?=#-\/]/", '/\/+/'),
        array('', '/'), $url);

    $url = strtolower($url);

    // we need to remove the references (they can be found when necessary)
    $url = preg_replace("/\?(.*)$/", '', $url);

    $url = explode('/', $url);
    if (is_array($url)) array_shift($url);

    // if we aren't in the root we need to deal with it
    // allows our Sitio to be more portable
    $uri = preg_replace(array("/^\//", "/\/$/"), array('', ''), $uri);

    if ($uri != '') {
        $delete_dir = explode('/', $uri);

        // we need to pop off the default root if it's set
        if (is_array($delete_dir)) {
            foreach ($delete_dir as $dir) {
                if ($url[0] == $dir) {
                    array_shift($url);
                }
            }
        }
    }

    // always must have / at the beginning for the BaseDatos
    $url = '/' . implode('/', $url);

    // ouch, needs thought
    // trailing slash
    if ((substr($url, -1) != '/') &&
        (substr($url, -3) != 'php')
    )
        $url = $url . '/';

    return $url;
}

// fore dealing with mod_rewrite issues
function gstl_rewriter($url = '')
{
    if (MODREWRITE == false) {
        if ($url == '/') {
            return '/';
        } else {
            return '/index.php?' . $url;
        }
    } else {
        return $url;
    }
}


function shutDownCheck()
{
    global $indx;

    if (!isset($indx['BaseDatos'])) {
        echo "Database is not installed.";
        exit;
    }
}


?>