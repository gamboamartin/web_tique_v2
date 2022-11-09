<?php
use config\generales;
include "./init.php";
require './vendor/autoload.php';
$generales = new generales();
?>

<div class=" box position-relative">
    <div class="col-md-12 buscador" >

    <form action="<?php echo $generales->url_base; ?>" method="post"  >

            <?php include 'templates/busqueda/index/links/_busqueda_hogar_venta.php' ?>
            <?php include 'templates/busqueda/index/links/_busqueda_tipo_hogar.php' ?>
            <?php include 'templates/busqueda/index/links/_boton_buscar.php' ?>
    </form>
    </div>


</div><!-- /.header-search-->

