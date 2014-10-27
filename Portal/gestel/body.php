<?php
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
 * Date: 18-10-14
 * Time: 11:49 PM
 */
include_once("Motor/Interno/ControlUsuario/Usuario.php");
$gestionUsuario = new Usuario();

?>

<body class="homepage">
<div id="header-wrapper">
    <div class="container">
        <div id="header">
            <?php $gestionUsuario->generarMenu(isset($_SESSION["perfil"]) ? $_SESSION["perfil"] : "Ninguno") ?>
        </div>
        <!--Div header -->
        <div align="center">

            <!-- <p align="right" class="button-style2"><a href="#">Regístrate&nbsp; </a></p> -->
            <?php $gestionUsuario->imprimirSeccionLogin(); ?>
        </div>
        <!-- div container -->
    </div>
    <!-- div header-wrapper -->

    <div class="row">
        <div id="banner" class="12u">
            <div class="container">
                <div id="slider1_container" style="position: relative; width: 600px; height: 300px; overflow: hidden;">

                    <!-- Loading Screen -->
                    <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                        <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                        </div>
                        <div style="position: absolute; display: block; background: url(images/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
                        </div>
                    </div>

                    <!-- Slides Container -->
                    <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
            overflow: hidden;">
                        <div>
                            <a u=image href="#"><img src="images/pics01.jpg"/></a>

                            <div u=caption t="*" class="captionTurquesa"
                                 style="position:absolute; left:20px; top: 30px; width:300px; height:30px;">
                                Tú casa soñada
                            </div>
                        </div>
                        <div>
                            <a u=image href="#"><img src="images/pics02.jpg"/></a>

                            <div u=caption t="*" class="captionTurquesa"
                                 style="position:absolute; left:20px; top: 30px; width:300px; height:30px;">
                                Lugares cómodos
                            </div>
                        </div>
                        <div>
                            <a u=image href="#"><img src="images/pics03.jpg"/></a>

                            <div u=caption t="*" class="captionTurquesa"
                                 style="position:absolute; left:20px; top: 30px; width:300px; height:30px;">
                                Disfruta de tú vida
                            </div>
                        </div>
                        <div>
                            <a u=image href="#"><img src="images/pics04.jpg"/></a>

                            <div u=caption t="*" class="captionTurquesa"
                                 style="position:absolute; left:20px; top: 30px; width:300px; height:30px;">
                                en la IV Regi&oacute;n
                            </div>
                        </div>
                    </div>
                    <!-- div container -->
                </div>
            </div>
        </div>
    </div>
    <!--row-->
</div>
<!--container -->
<div id="wrapper">
    <div class="container" id="marketing">
        <div class="row divider">
            <div class="3u">
                <section>
                    <p><a href="#"><img src="images/ico04.png" alt=""></a></p>
                </section>
            </div>
            <div class="3u">
                <section>
                    <p><a href="#"><img src="images/ico05.png" alt=""></a></p>
                </section>
            </div>
            <div class="3u">
                <section>
                    <p><a href="#"><img src="images/ico06.png" alt=""></a></p>
                </section>
            </div>
            <div class="3u">
                <section>
                    <p><a href="#"><img src="images/ico07.png" alt=""></a></p>
                </section>
            </div>

        </div>
        <!-- div row divider -->
    </div>
    <!-- div marketing -->
</div>
<!-- div wrapper -->
<?php include(GESTEL . "/container.php"); ?>
</div>
<?php include(GESTEL . "/footer.php"); ?>
</body>