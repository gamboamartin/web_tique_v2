<?php
use config\generales;
$generales = new generales();
?>
<div class="container footer-mask color_azul padding-21">
    <div class="container ">
        <div class="row" style="padding-bottom: 20px;">
            <div class=" text-center">
                <div class="logo"><a href="#"><img class="" src="<?php echo $generales->url_base; ?>assets/img/icons/icono_tique.png" alt="" /></a></div>

            </div>

            <div class="col-md-6 hidden-sm hidden-xs">
            <?php include $generales->path_base.'templates/footer/foot/_links.php' ?>
            <?php include $generales->path_base . 'templates/footer/foot/_tips.php' ?>
            </div>
            <?php include $generales->path_base.'templates/footer/foot/_contacto.php'?>

        </div>
    </div><!-- /.footer-content -->
    <?php include $generales->path_base.'templates/footer/foot/_footer_bottom.php'?>
</div>