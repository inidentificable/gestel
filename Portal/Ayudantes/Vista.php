<?php
/**
 * Created by PhpStorm.
 * User: inidentificable
 * Date: 26-10-14
 * Time: 03:02 AM
 */

include_once(AYUDANTES . "/Archivos.php");

class Vista
{

    private $directorioCss;
    private $directorioJs;
    private $directorioLetras;
    private $listados;

    public function Vista($css, $js, $letras)
    {
        $this->directorioCss = $css;
        $this->directorioJs = $js;
        $this->directorioLetras = $letras;
        $this->listados = new Archivos();
    }

    public function listarCss()
    {
        $listadoCss = (array)$this->listados->listarArchivos($this->directorioCss);
        echo "\n".'<!--  Seccion ingreso css -->'."\n\t";
        $x = 0;
        foreach ($listadoCss as $listando) {
            echo '<link rel="stylesheet" type="text/css" href="' . $listadoCss[$x] . '" >'."\n\t";
            $x++;
        }
    }

    public function listarJs()
    {
        $listadoJs = (array)$this->listados->listarArchivos($this->directorioJs);
        echo "\n<!--  Seccion ingreso js -->\n\t";
        $x = 0;
        echo '<script src="Portal/Recursos/js/jquery-1.11.1.min.js"></script>'."\n\t";
        foreach ($listadoJs as $listando) {
            if ($listadoJs[$x]!='Portal/Recursos/js/jquery-1.11.1.min.js'){
            echo '<script src="' . $listadoJs[$x] . '"></script>'."\n\t";
            $x++;
            }
        }
    }

    public function listarLetras()
    {
        $listadoLetras = (array)$this->listados->listarArchivos($this->directorioLetras);
        echo "\n".'<!--  Seccion ingreso letras -->'."\n\t";
        $x = 0;
        foreach ($listadoLetras as $listando) {
            echo '<link href="' . $listadoLetras[$x] . '" rel="stylesheet" type="text/css">'."\n\t";
            $x++;
        }
    }

    public function insertarSlide($contenido)
    {
        echo '<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="' . PROPIEDADES . '/pics01.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Tú casa soñada</h1>
              <p>Somos una empresa seria y de prestigio</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Ingresa a nuestro sitio</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="' . PROPIEDADES . '/pics02.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Lugares cómodos</h1>
              <p>Las mejores propiedades de chile las encuentras aquí</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Pon tu propiedad a la venta</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="' . PROPIEDADES . '/pics03.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Disfruta de tu vida</h1>
              <p>Encontraras lo que estas buscando y al mejor precio</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Cotiza con nosotros</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
        ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="' . MINIPROPIEDADES . '/ico01.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>¿Cómo comprar una propiedad?</h2>
          <p>Muchas personas creen que...</p>
          <p><a class="btn btn-default" href="#" role="button">Ver más detalles &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="' . MINIPROPIEDADES . '/ico02.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Deseas arrendar o vender tu propiedad</h2>
          <p>A la hora de concretar un negocio inmoviliario, es importante tener en cuenta...</p>
          <p><a class="btn btn-default" href="#" role="button">Seguir leyendo los consejos inmobiliarios &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="' . MINIPROPIEDADES . '/ico03.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>¿Cómo obtener el crédito hipotecario?</h2>
          <p>Existen diversas instituciones financieras dispuestas a financiar la compra de una propiedad, a la hora de pedir un crédito debes pensar...</p>
          <p><a class="btn btn-default" href="#" role="button">Visita la sección de financiamiento &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Av. El Santo <span class="text-muted">Vista a la bahía</span></h2>
          <p class="lead">Ubicada en la ciudad de La Serena y a pasos del centro de la ciudad, el condominio Av. El Santo es la mejor opción para que vivas con tu familia a un paso de Colegios y Supermercados.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="' . MINIPROPIEDADES . '/ico04.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="' . MINIPROPIEDADES . '/ico05.png" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Casas Serena Oriente <span class="text-muted">El templo de la privacidad</span></h2>
          <p class="lead">Excelente sector residencial, maravillosos parques y jardines adornan el entorno...</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">El Atardecer <span class="text-muted">De Peñuelas</span></h2>
          <p class="lead">Un lugar tranquilo y a tu alcance, canchas de tenis, gimnasio y quincho...</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="' . MINIPROPIEDADES . '/ico06.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Volver arriba</a></p>
        <p>&copy; 2014 GESTEL, Inc. &middot; <a href="#">Privacidad</a> &middot; <a href="#">Terminos y condiciones</a></p>
      </footer>

    </div><!-- /.container -->';
    }

} 