<?php
use config\generales;
$generales = new generales();
?>
<div class="container footer-mask color_azul padding-20">
    <div class="container ">
        <div class="row" style="padding-bottom: 20px;">
            <div class="container-fluid h-100">
                <div class="row w-100 align-items-center">
                    <div class="col text-center">
                        <h1 id="titulo_slider"> TIQUE</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3 hidden-sm hidden-xs"><!--Div img-->
                <?php //include $generales->path_base.'templates/footer/foot/_icono.php' ?>
                <?php include $generales->path_base.'templates/footer/foot/_redes_sociales.php'?>
            </div>

            <?php include $generales->path_base.'templates/footer/foot/_contacto.php'?>


            <?php include $generales->path_base.'templates/footer/foot/_horario.php'?>
        </div>
    </div><!-- /.footer-content -->
    <?php include $generales->path_base.'templates/footer/foot/_footer_bottom.php'?>
</div>