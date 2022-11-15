<?php
use config\generales;
$generales = new generales();
$numero=480000;
$costo= number_format($numero, 2);
$a = explode(",", $costo);
if(count($a)>2) {
    $b = explode(",", $costo,2);
    $costo=$b[0]."'".$b[1];
}
?>
<div class="property-card-box card-box card-block estilo_carta_casa_texto">
    <h3 class="titulo_carta_casa"><a class="titulo_carta_casa" href="<?php echo $generales->url_base; ?>hogares/hogar-eirene.php">Hogar Eirene</a></h3>
    <div class="property-card-descr texto_carta_casa">
        <p class="texto_carta_casa">Dirección Fuente Agua Marina #9043 </p>
        <p class="texto_carta_casa">2-G, Fraccionamiento Villa Fontana Diamante</p>
        <span class="property-card-value" id="texto_carta_casa">
                <i class="fa fa-dollar"><?php echo $costo ?></i>
            </span>
    </div>

</div>
