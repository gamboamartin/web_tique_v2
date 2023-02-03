<?php
use config\generales;
$generales = new generales();
?>
<div class="container footer-mask">
    <div class="container footer-contant">
        <div class="row">
            <div class="col-md-3 hidden-sm hidden-xs"><!--Div img-->
                <?php include $generales->path_base.'templates/footer/foot_imp/_icono.php' ?>

            </div>

            <?php include $generales->path_base.'templates/footer/foot_imp/_contacto.php'?>


            <?php include $generales->path_base.'templates/footer/foot_imp/_horario.php'?>

        </div>
    </div><!-- /.footer-content -->
    <?php include $generales->path_base.'templates/footer/foot_imp/_footer_bottom.php'?>
</div>