<?php
use config\generales;
$generales = new generales();
?>
<div class="col-md-3 col-sm-6" >
    <ul class="ul_links_footer borde_footer_contenido list">
        <li class="padding-20 ho"><a class="texto_footer"  href="<?php echo $generales->url_base; ?>index.php" target="_blank">Home</a></li>
        <li class="padding-20"><a class="texto_footer" href="<?php echo $generales->url_base; ?>elige-tu-hogar.php" target="_blank">Compra</a></li>
        <li class="padding-20 "><a class="texto_footer" href="<?php echo $generales->url_base; ?>compramos_casa.php" target="_blank">Vende</a></li>
    </ul >
</div>