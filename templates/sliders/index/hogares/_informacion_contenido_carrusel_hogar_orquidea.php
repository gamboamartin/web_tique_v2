<?php
use config\generales;
$generales = new generales();
?>
<div class="carousel-caption">
    <h3 class="carousel-caption-title"><span style="background: rgba(153, 153, 153, 0.5);" class=" nombre_hogar">Hogar Orquidea</span></h3>
    <!--<div class="s-description"><p>Ubicada en Zapopan</p></div>-->
    <div class="contenedor_centrado">
        <?php  include $generales->path_base.'templates/etiquetas_hogar/apartado.php' ?>
    </div>
    <a href="<?php echo $generales->url_base;?>hogares/hogar-orquidea.php" class="btn btn-primary btn_info_casa"><span>Ver mi nuevo hogar</span></a>
</div>