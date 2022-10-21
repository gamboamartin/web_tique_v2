<?php
use config\generales;
$generales = new generales();
?>
<section class="container-fluid vh-100 color_dos_fondos_azul padding-0" id="fondo_slider" >
    <div class="center-block">
        <h1 class="titulo_slider" >Encuentra tu próxima casa</h1>
        <h1 class="subtitulo_slider" >Nosotros te ayudamos con nuestro servicio personalizado</h1>

    </div>

    <div class="header-slider" >

        <!-- Carousel container -->
        <div id="header-slider" class="carousel slide vh-70"  data-ride="carousel" >

            <?php include 'templates/sliders/index/_contenido_carrusel.php'?>
            <!-- Previous/Next controls -->


        </div >


        <!-- Carousel container -->
    </div><!-- /.header-slider-->



</section>
