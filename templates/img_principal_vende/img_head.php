<?php
use config\generales;
$generales = new generales();
?>
<section class="container-fluid vh-100 padding-0" id="fondo_slider" >
    <div class="center-block">
        <h1 class="titulo_slider" >La manera más fácil y</h1>
        <h1 class="titulo_slider" >segura de vender tu casa</h1>

    </div>

    <div class="header-slider" >

        <!-- Carousel container -->
        <div id="header-slider" class="carousel slide vh-70"  data-ride="carousel" >

            <div class="">
                <img id="imagen_slider" src="<?php echo $generales->url_base; ?>assets/img/img_vende/imge_principal.jpg" alt="Hogar Venus" height="100%"/>

            </div>
            <!-- Previous/Next controls -->


        </div >


        <!-- Carousel container -->
    </div><!-- /.header-slider-->



</section>
