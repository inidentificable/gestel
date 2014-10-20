<?php if (!defined('ENTRADA')) exit('no puedes acceder directamente a este contenido, vuelve al indice http://www.Gestel.cl');

/**
 * Core class
 *
 * Loading tools
 *
 * @version 1.0
 * @author Vaska
 */
class Core
{
    var $is_loaded;

    /**
     * Returns loaded database object or error
     *
     * @param void
     * @return array
     */
    function Core()
    {
        $this->load_db();
    }

    /**
     * Return language and core classes
     *
     * @param void
     * @return array
     */
    function auto_load()
    {
        $this->load_lang();
        $this->assign_core();
    }

    /**
     * Returns core classes
     *
     * @param void
     * @return array
     */
    function assign_core()
    {
        foreach (array('template', 'access') as $val) {
            $class = strtolower($val);
            if (!is_object($class)) $this->$class =& load_class($val, TRUE, 'Libreria');
            $this->is_loaded[] = $class;
        }
    }

    /**
     * Returns language file
     *
     * @param void
     * @return array
     */
    function load_lang()
    {
        $class = strtolower('Lenguaje');
        if (!is_object($class)) $this->$class =& load_class($class, TRUE, 'Lenguaje');
        $this->is_loaded[] = $class;
    }

    /**
     * Returns loaded database object or error
     *
     * @param void
     * @return array
     */
    function load_db()
    {
        $class = strtolower('BaseDatos');
        if (!is_object($class)) $this->$class =& load_class($class, TRUE, 'BaseDatos');
        $this->is_loaded[] = $class;
    }

    /**
     * Return loaded object
     *
     * @param string $class
     * @return array
     */
    function lib_class($class)
    {
        if ($class == '') return;

        $class = strtolower($class);
        if (!is_object($class)) $this->$class =& load_class($class, TRUE, 'Libreria');
        $this->is_loaded[] = $class;
    }
}


?>