<?php
use config\generales;
$generales = new generales();
?>
<div class="carousel-caption">
    <h3 class="carousel-caption-title"><span style="background: rgba(153, 153, 153, 0.5);" class=" nombre_hogar">Hogar Beatriz</span></h3>
    <div class="s-description"><p style="  background: rgba(255, 51, 0, 0.7);
    font-family: Montserrat-Medium;
    border-radius: 15px; font-size: 300%"  >V E N D I D A</p></div>
    <!--<div class="s-description"><p>Ubicada en Zapopan</p></div>-->
    <a href="<?php echo $generales->url_base;?>hogares/hogar-beatriz.php" class="btn btn-primary btn_info_casa"><span>Ver mi nuevo hogar</span></a>
</div>