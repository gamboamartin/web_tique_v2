<?php
use config\generales;
$generales = new generales();
?>
<div class="carousel-inner" role="listbox" id="altura_slider">
    <!-- Slide 1 -->
    <div class="item active">
        <?php
        include $generales->path_base.'templates/lista_casas_slider/hogar-venus/_carta_casa.php';
        include $generales->path_base.'templates/lista_casas_slider/hogar-pasitea/_carta_casa.php';
        include $generales->path_base.'templates/lista_casas_slider/hogar-aruna/_carta_casa.php';
        ?>
    </div>
    <div class="item">
        <?php include $generales->path_base.'templates/lista_casas_slider/hogar-orquidea/_carta_casa.php' ?>
        <?php include $generales->path_base.'templates/lista_casas_slider/hogar-beatriz/_carta_casa.php' ?>
        <?php include $generales->path_base.'templates/lista_casas_slider/hogar-eirene/_carta_casa.php' ?>
    </div>
    <div class="item">
        <?php include $generales->path_base.'templates/lista_casas_slider/hogar-cihualpilli/_carta_casa.php' ?>
        <?php include $generales->path_base.'templates/lista_casas_slider/hogar-eden/_carta_casa.php' ?>
        <?php include $generales->path_base.'templates/lista_casas_slider/hogar-santiago/_carta_casa.php' ?>
    </div>

</div>