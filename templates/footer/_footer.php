<?php
use config\generales;
$generales = new generales();
?>
<div class="container footer-mask color_azul padding-21">
    <div class="container ">
        <div class="row" style="padding-bottom: 20px;">
            <div class="container-fluid h-100">
                <div class="row w-100 align-items-center">
                    <div class="col text-center">
                        <div class="logo"><a href="#"><img src="assets/img/icons/icono_tique.png" alt="" /></a></div>
                    </div>
                </div>
            </div>


            <?php include $generales->path_base.'templates/footer/foot/_links.php' ?>
            <?php include $generales->path_base . 'templates/footer/foot/_tips.php' ?>
            <?php include $generales->path_base.'templates/footer/foot/_contacto.php'?>

        </div>
    </div><!-- /.footer-content -->
    <?php include $generales->path_base.'templates/footer/foot/_footer_bottom.php'?>
</div>