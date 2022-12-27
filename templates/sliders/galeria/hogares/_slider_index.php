<?php
use config\generales;
$generales = new generales();
?>
<section class="container-fluid padding-0"  style="min-height: 90vh;">

    <div class="carousel" >

        <!-- Carousel container -->
        <div id="myCarousel" class="carousel slide vh-70"  data-ride="carousel" >

            <?php include $generales->path_base.'templates/sliders/galeria/hogares/_contenido_carrusel.php'?>
            <!-- Previous/Next controls -->


        </div >
        <?php include $generales->path_base.'templates/sliders/galeria/hogares/_indicador_carrusel.php'?>



        <!-- Carousel container -->
    </div><!-- /.header-slider-->



</section>
