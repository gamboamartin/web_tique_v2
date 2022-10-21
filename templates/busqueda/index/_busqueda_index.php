<?php
use config\generales;
include "./init.php";
require './vendor/autoload.php';
$generales = new generales();
?>

<div class="container fixed">
    <div class="col-md-12">
        <div class="col-md-6 col-lg-offset-3" id="buscador">
    <form action="<?php echo $generales->url_base; ?>" method="post" >

            <?php include 'templates/busqueda/index/links/_proposito_busqueda.php' ?>
            <?php include 'templates/busqueda/index/links/_ubicacion_busqueda.php' ?>
            <?php include 'templates/busqueda/index/links/_boton_buscar.php' ?>
    </form>
        </div>
    </div>

</div><!-- /.header-search-->

