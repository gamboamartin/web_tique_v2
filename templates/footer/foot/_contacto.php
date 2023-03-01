<?php
use config\generales;
$generales = new generales();
?>
<div class="col-md-5 col-sm-6" >
    <ul class="ul_links_footer list">
        <li class="padding-20 texto_footer">¡Contáctanos!</li>
        <li class="padding-20"><a class="texto_footer" href="mailto:contacto@inmobiliariatique.com" target="_blank">mail: contacto@inmobiliariatique.com</a></li>
        <li ><?php include $generales->path_base.'templates/footer/foot/_redes_sociales.php' ?></li>
    </ul >
</div>