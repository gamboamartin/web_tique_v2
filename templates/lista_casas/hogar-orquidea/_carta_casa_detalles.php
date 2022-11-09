<?php
use config\generales;
$generales = new generales();
$numero=920000;
$costo= number_format($numero, 2);
$a = explode(",", $costo);
if(count($a)>2) {
    $b = explode(",", $costo,2);
    $costo=$b[0]."'".$b[1];
}
?>
<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>

<div class="property-card-box card-box card-block estilo_carta_casa_texto">
    <h3 class="titulo_carta_casa"><a class="titulo_carta_casa" href="<?php echo $generales->url_base; ?>hogares/hogar-orquidea.php">Hogar Orquidea</a></h3>
    <div class="property-card-descr texto_carta_casa">
        <p class="texto_carta_casa">La Mancha, Andador Altamesa #209, Edif.</p>
        <p class="texto_carta_casa">E-52, Int.3, Col. Altagracia, Zapopan, Jal.</p>
        <span class="property-card-value" id="texto_carta_casa">
                <i class="fa fa-dollar"><?php echo $costo ?></i>
            </span>
    </div>

</div>
