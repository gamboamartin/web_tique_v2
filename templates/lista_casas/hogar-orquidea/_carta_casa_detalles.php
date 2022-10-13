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

<div class="property-card-box card-box card-block">
    <h3 class="property-card-title"><a href="<?php echo $generales->url_base; ?>hogares/hogar-orquidea.php">Hogar Orquidea</a></h3>
    <div class="property-card-descr">
        La Mancha, Andador Altamesa #209,Edif. E-52,  Int.3, Col. Altagracia, Zapopan, Jal.
    </div>
    <div class="property-preview-footer  clearfix">
        <div class="property-preview-f-left text-color-primary">
            <span class="property-card-value">
                <i class="fa fa-dollar"><?php echo $costo ?></i>
            </span>
        </div>
    </div>
</div>
