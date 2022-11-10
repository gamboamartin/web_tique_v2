<?php
use config\generales;
$generales = new generales();
?>
<div class="col-md-3 col-sm-6" >
    <ul class="ul_links_footer borde_footer_contenido list">
        <li class="padding-20 ho"><a class="texto_footer"  href="<?php echo $generales->url_base; ?>index.php" >Home</a></li>
        <li class="padding-20"><a class="texto_footer" href="<?php echo $generales->url_base; ?>elige-tu-hogar.php" >Compra</a></li>
        <li class="padding-20 "><a class="texto_footer" href="<?php echo $generales->url_base; ?>vende.php" >Vende</a></li>
    </ul >
</div>