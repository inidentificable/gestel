<?php if (!defined('ENTRADA')) exit('no puedes acceder directamente a este contenido, vuelve al indice http://www.Gestel.cl');

/**
 * Error output class
 *
 * @version 1.0
 * @author Vaska
 */
class Error
{
    /**
     * Returns error page
     *
     * @param string $message
     * @param string $template
     * @return string
     */
    function show_error($message, $template = 'error')
    {
        $message = "<p>$message</p>";

        ob_start();
        include_once DireccionTemplate . $template . '.php';
        $buffer = ob_get_contents();
        ob_end_clean();
        return $buffer;
    }

    /**
     * Returns login page
     *
     * @param string $message
     * @param string $template
     * @return string
     */
    function show_login($message, $template = 'login')
    {
        $login = $message;

        ob_start();
        include_once DireccionTemplate . $template . '.php';
        $buffer = ob_get_contents();
        ob_end_clean();
        return $buffer;
    }
}


?>