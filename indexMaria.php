<?php
//Por razones de seguridad y para impedir que usuario acceda a código interno
//se declara la variable ENTRADA que permite acceder a los archivos de ENGINE

define('ENTRADA', 'Adelante!');

//Revisa que la base de datos esté instalada
//si no está instalada redirige al instalador

if (file_exists('Engine/config/config.php')) require_once 'Engine/config/config.php';
else {
    header('location: Engine/install.php');
}

//Llama  a los archivos de inicialización del ENGINE

require_once 'Engine/defaults.php';
require_once 'Engine/common.php';
?>

<!DOCTYPE HTML>

<html>
<link rel="shortcut icon" href="http:favicon.ico">
<style type="text/css">
    <!--
    .Estilo2 {
        color: #FFFFFF
    }

    .captionTurquesa, .captionBlack {
        color: #fff;
        font-size: 20px;
        line-height: 30px;
        text-align: center;
        border-radius: 4px;
    }

    .captionTurquesa {
        background: #2AA198;
        background-color: rgba(42, 161, 152, 0.49);
    }

    .bricon {
        background: url(../img/browser-icons.png);
    }

    -->
</style>
<head>
    <title>GESTEL</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <link href="http://fonts.googleapis.com/css?family=Oswald:400,300" rel="stylesheet" type="text/css"/>
    <!--[if lte IE 8]>
    <script src="js/html5shiv.js"></script><![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-panels.min.js"></script>
    <script src="js/init.js"></script>
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel-noscript.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/style-desktop.css"/>
    </noscript>
</head>

<body class="homepage">
<div id="header-wrapper">
    <div class="container">
        <div id="header">
            <?php include("menu.php"); ?>
        </div>
        <!--Div header -->
        <div align="center">

            <!-- <p align="right" class="button-style2"><a href="#">Regístrate&nbsp; </a></p> -->
            <?php include("login.php"); ?>
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
<?php include("container.php"); ?>
</div>
<?php include("footer.php"); ?>
</body>
</html>