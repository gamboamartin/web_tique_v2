<?php
use config\generales;
$generales = new generales();
?>
<div class="col-md-5 col-sm-6" >
    <div class="margen_izquierda3">
    <ul class="ul_links_footer borde_footer_contenido list margen_izquierda3">
        <li class="padding-20 "><a class="texto_footer"  href="<?php echo $generales->url_base; ?>index.php" >Home</a></li>
        <li class="padding-20"><a class="texto_footer" href="<?php echo $generales->url_base; ?>elige-tu-hogar.php" >Compra</a></li>
        <li class="padding-20 "><a class="texto_footer" href="<?php echo $generales->url_base; ?>vende.php" >Vende</a></li>
        <li class="padding-20"><a class="texto_footer" href="#" target="_blank">Blog</a></li>
    </ul >
    </div>
</div>