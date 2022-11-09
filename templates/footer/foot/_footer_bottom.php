<?php
use config\generales;
$generales = new generales();
?>
<div class="footer-bottom color_azul borde" > <!--link-->
    <div class="container text-left col-md-3 col-sm-6">
        <span class=""><a class="texto_footer_bottom ancho_fotter" href="<?php echo $generales->url_base; ?>aviso_privacidad.php" >Términos y Condiciones</a></span>

    </div>
    <div class="container text-left col-md-3">
        <span class=""><a class="texto_footer_bottom " href="<?php echo $generales->url_base; ?>aviso_privacidad.php">Politicas de Privacidad</a></span>

    </div>
    <div class="container text-left col-md-4">
        <span class=""><a class="texto_footer_bottom" href="<?php echo $generales->url_base; ?>aviso_privacidad.php">TIQUE © 2022 Todos los derechos reservados.</a></span>

    </div>
</div><!-- /.footer-bottom -->