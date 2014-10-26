<div id="logo">
    <h1><img src="images/logo.png" alt="24" width="166" height="151"></h1>
</div> <!-- div logo -->
</br>


<?php
echo '<nav id="nav">
            <ul>
                <li><a href="index.php">Inicio</a></li>
			    <li><a href="empresa.php">La Empresa</a></li>
			    <li><a href="propiedades.php">Propiedades</a></li>
			    <li><a href="contacto.php">Cont&aacute;ctenos</a></li>';

if (isset($_SESSION["perfil"])) {
    switch ($_SESSION["perfil"]) {
        case "Administrador" :
            echo '<li><a href="bien_admin.php">Configuraci&oacute;n</a></li>';
            break;

        case "Cliente-Proveedor":
            echo '<li><a href="bien_clipro.php">Configuraci&oacute;n</a></li>
                  <li><a href="cargar_propiedad.php">Cargar Propiedades</a></li>';
            break;
    }
}
echo '</ul>
    </div>';