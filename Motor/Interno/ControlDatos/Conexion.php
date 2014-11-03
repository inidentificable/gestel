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
 * Time: 11:12 PM
 */
class Conexion
{
    private $nombreServidor;
    private $nombreUsuario;
    private $clave;
    private $nombreBD;

    public function Conexion($servidor, $usuario, $clave, $bd)
    {
        $this->nombreServidor = $servidor;
        $this->nombreUsuario = $usuario;
        $this->clave = $clave;
        $this->nombreBD = $bd;
        Conexion::conectaBase();
    }

    function interactuarBase($sql)
    {
        $nombreServidor = "localhost";
        $nombreUsuario = "username";
        $clave = "password";
        $nombreBD = "myDB";

        // Create connection
        $conn = new mysqli($nombreServidor, $nombreUsuario, $clave, $nombreBD);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if ($conn->query($sql) === TRUE) {
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }


    }
}
?>