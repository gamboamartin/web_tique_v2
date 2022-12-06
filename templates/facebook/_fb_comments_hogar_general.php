<?php
    $url_landing = get_landing_url();
    $url_landing_limpia = limpia_url_landing(url_landing: $url_landing);
?>

<div class="contenedor_centrado margen_izquierda margen_derecha padding-top-5vh col-sm-12">
    <h2 class="texto_vender_listo">Nos interesa saber tu opinion, por favor escribe tu comentario acerca de nuestros hogares</h2>

</div>
<div class="contenedor_centrado margen_izquierda margen_derecha padding-top-5vh">

<div class="contenedor_centrado col-sm-12">
    <div class="fb-comments " data-href="https://inmobiliariatique.com/hogares/<?php echo $url_landing_limpia?>" data-width="" data-numposts="5"></div>

</div>
    </div><!-- /. widget-facebook -->
