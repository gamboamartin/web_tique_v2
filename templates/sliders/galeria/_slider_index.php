<?php
use config\generales;

$generales = new generales();

?>
<div class="container contenedor_slider">
    <section class="header-slider">
        <!-- Carousel container -->
        <div id="deslizador_slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <?php include $generales->path_base . 'templates/sliders/galeria/_indicador_carrusel.php'?>
            <!-- Content -->
            <?php include $generales->path_base . 'templates/sliders/galeria/_contenido_carrusel.php'?>
            <!-- Previous/Next controls -->



        </div >
        <!-- Carousel container -->
    </section><!-- /.header-slider-->
</div>

