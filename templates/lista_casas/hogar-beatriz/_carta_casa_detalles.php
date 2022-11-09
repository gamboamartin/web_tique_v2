<?php
use config\generales;
$generales = new generales();
$numero=876000;
$costo= number_format($numero, 2);
$a = explode(",", $costo);
if(count($a)>2) {
    $b = explode(",", $costo,2);
    $costo=$b[0]."'".$b[1];
}
?>
<div class="property-card-box card-box card-block estilo_carta_casa_texto">
    <h3 class="titulo_carta_casa"><a class="titulo_carta_casa" href="<?php echo $generales->url_base; ?>hogares/hogar-beatriz.php">Hogar Beatriz</a></h3>
    <div class="property-card-descr texto_carta_casa">
        <p class="texto_carta_casa">Dirección Lázaro Pavia 3436,</p>
        <p class="texto_carta_casa">Beatriz Hernández, 44760</p>
        <span class="property-card-value" id="texto_carta_casa">
                <i class="fa fa-dollar"><?php echo $costo ?></i>
            </span>
    </div>
</div>
