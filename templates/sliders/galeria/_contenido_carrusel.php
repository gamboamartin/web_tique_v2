<?php
use config\generales;
$generales = new generales();


?>
<div class="carousel-inner" role="listbox" id="altura_slider">
    <!-- Slide 1 -->
    <div class="item active">
        <?php include $generales->path_base.'templates/lista_casas/hogar-paraiso/_carta_casa.php' ?>
        <?php include $generales->path_base.'templates/lista_casas/hogar-pasitea/_carta_casa.php' ?>
        <?php include $generales->path_base.'templates/lista_casas/hogar-izel/_carta_casa.php' ?>
    </div>
    <div class="item">
        <?php include $generales->path_base . 'templates/lista_casas/hogar-teva/_carta_casa.php' ?>
        <?php include $generales->path_base.'templates/lista_casas/hogar-xadani/_carta_casa.php' ?>
        <?php include $generales->path_base.'templates/lista_casas/lote-itze/_carta_casa.php' ?>

    </div>
    <div class="item">
        <?php include $generales->path_base.'templates/lista_casas/lote-nicte/_carta_casa.php' ?>
        <?php include $generales->path_base.'templates/lista_casas/lote-xaman/_carta_casa.php' ?>
        <?php include $generales->path_base.'templates/lista_casas/hogar-orquidea/_carta_casa.php' ?>

    </div>
    <div class="item">
        <?php include $generales->path_base.'templates/lista_casas/hogar-xiadani/_carta_casa.php' ?>
        <?php include $generales->path_base.'templates/lista_casas/lote-yaax/_carta_casa.php' ?>
        <?php include $generales->path_base.'templates/lista_casas/hogar-venus/_carta_casa.php' ?>

    </div>
    <div class="item">
        <?php include $generales->path_base.'templates/lista_casas/hogar-eden/_carta_casa.php' ?>
        <?php include $generales->path_base.'templates/lista_casas/hogar-aruna/_carta_casa.php' ?>
        <?php include $generales->path_base.'templates/lista_casas/hogar-santiago/_carta_casa.php' ?>

    </div>
    <div class="item">
        <?php include $generales->path_base.'templates/lista_casas/hogar-cihualpilli/_carta_casa.php' ?>
        <?php include $generales->path_base.'templates/lista_casas/hogar-beatriz/_carta_casa.php' ?>
        <?php include $generales->path_base.'templates/lista_casas/hogar-eirene/_carta_casa.php' ?>
    </div>

</div>