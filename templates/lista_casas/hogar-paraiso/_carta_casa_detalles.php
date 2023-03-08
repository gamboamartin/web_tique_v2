<?php
use config\generales;
$generales = new generales();
$numero=2600000;
$costo= number_format($numero, 2);
$a = explode(",", $costo);
if(count($a)>2) {
    $b = explode(",", $costo,2);
    $costo=$b[0]."'".$b[1];
}
?>

<div class="property-card-box card-box card-block estilo_carta_casa_texto">
    <h3 class="titulo_carta_casa"><a class="titulo_carta_casa" href="<?php echo $generales->url_base; ?>hogares/hogar-paraiso.php">Hogar Paraíso</a></h3>
    <div class="property-card-descr texto_carta_casa">
        <p class="texto_carta_casa">  Av. La Campiña # 5784, El Campestre, Zapopan, Jal.</p>
        <span class="property-card-value"   id="texto_carta_casa">
                 <i > $ <?php echo $costo ?></i>
        </span>
        <p></p>
    </div>


</div>
