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
    private $consulta;
    private $linea;
    private $link;

    public function Conexion($servidor, $usuario, $clave, $bd)
    {
        $this->nombreServidor = $servidor;
        $this->nombreUsuario = $usuario;
        $this->clave = $clave;
        $this->nombreBD = $bd;
    }

    public function conectarBD()
    {
        // Conectando, seleccionando la base de datos
        $this->link = mysql_connect($this->nombreServidor, $this->nombreUsuario, $this->nombreUsuario) or die ('No se pudo conectar');
        mysql_select_db('my_database') or die ('No se pudo seleccionar la base de datos');
    }

    function consultarBaseDatos($consulta)
    {
        $this->consulta = $consulta;

        $this->conectarBD();

        // Realizar una consulta MySQL
        $this->resultado = mysql_query($this->consulta) or die('Consulta fallida');
    }

    public function imprimirTablaHtml()
    {
        // Imprimir los resultadoados en HTML
        echo "<table>\n";
        while ($this->linea = mysql_fetch_array($this->resultado, MYSQL_ASSOC)) {
            echo "\t<tr>\n";
            foreach ($this->linea as $col_value) {
                echo "\t\t<td>$col_value</td>\n";
            }
            echo "\t</tr>\n";
        }
        echo "</table>\n";
        // Liberar resultadoados
        mysql_free_result($this->resultado);

        // Cerrar la conexión
        mysql_close($this->link);
    }
}
?>