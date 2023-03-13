<?php
use config\generales;
$generales = new generales();
?>
<div class="col-md-5 col-sm-6" >
    <ul class="ul_links_footer list">
        <li class="padding-20 texto_footer">¡Contáctanos!</li>
        <li class="padding-20"><a class="texto_footer" href="mailto:contacto@inmobiliariatique.com" target="_blank">mail: contacto@inmobiliariatique.com</a></li>
        <li class="padding-20"><a class="texto_footer" href="https://www.google.com/maps/place/Av.+Ignacio+L.+Vallarta+%236503-Int.+H-12,+Granja,+45010+Zapopan,+Jal./@20.6937126,-103.4567653,17z/data=!3m1!4b1!4m5!3m4!1s0x8428a92d98cbaa17:0x7d7a498bf9b77a6!8m2!3d20.6937076!4d-103.4545712" target="_blank">Av. Vallarta 6503 Int. H-12, Col. Ciudad Granja 45010 Zapopan, Jalisco, México</a></li>
        <li ><?php include $generales->path_base.'templates/footer/foot/_redes_sociales.php' ?></li>
    </ul >
</div>