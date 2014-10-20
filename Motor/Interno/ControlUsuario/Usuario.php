<?php if (!defined('ENTRADA')) exit('no puedes acceder directamente a este contenido, vuelve al indice http://www.Gestel.cl');

/**
 *GESTEL is free software: you can redistribute it and/or modify
 *it under the terms of the GNU General Public License as published by
 *the Free Software Foundation, either version 3 of the License, or
 *(at your option) any later version.
 *GESTEL is distributed in the hope that it will be useful,
 *but WITHOUT ANY WARRANTY; without even the implied warranty of
 *MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *GNU General Public License for more details.
 *You should have received a copy of the GNU General Public License
 *along with GESTEL.  If not, see <http://www.gnu.org/licenses/>.
 * Created by PhpStorm.
 * User: inidentificable
 * Date: 30-09-14
 * Time: 10:51 PM
 */

namespace ControlUsuario;
include_once("");


class Usuario
{
    // Declaración de la propiedad
    public $nombreUsuario;
    private $idEsAdministrador;
    private $claveUsuario;
    private $emailUsuario;

    // Declaración del método
    public function CrearUsuario()
    {
        public
        Usuario $UsuarioNuevo;

    }

    public function EliminarUsuario()
    {

    }

    public function ModificarUsuario()
    {

    }

    public function ListarUsuario()
    {

    }

    public function ModificarClaveUsuario()
    {

    }

    public function ModificarEmailUsuario()
    {

    }

    public function AsignarAdministrador()
    {

    }

    public function EliminarAdministrador()
    {

    }

    function usuarioAsociado($cod)
    {
        if (!empty($cod)) {
            conecta_base();
            $sql2 = "SELECT nombre_user, apellido_user FROM usuario WHERE activo_user = 1 AND id_usuario = " . $cod;
            $res2 = mysql_query($sql2);
            if (mysql_num_rows($res2) == 1) {
                $dato = mysql_fetch_array($res2);
                $html = $dato[0] . " " . $dato[1];
            } else {
                $html = "Sin usuario";
            }
            return $html;
        }
    }

} 