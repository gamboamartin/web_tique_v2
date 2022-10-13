<?php
use config\generales;
$generales = new generales();
$numero=1970000;
$costo= number_format($numero, 2);
$a = explode(",", $costo);
if(count($a)>2) {
    $b = explode(",", $costo,2);
    $costo=$b[0]."'".$b[1];
}
?>
<div class="property-card-box card-box card-block">
    <h3 class="property-card-title"><a href="<?php echo $generales->url_base; ?>hogares/hogar-pasitea.php">Hogar Pasítea</a></h3>
    <div class="property-card-descr">
        Hacienda del Agave #167 Condominio 6, Hacienda Real. Tonala, Jalisco
    </div>
    <div class="property-preview-footer  clearfix">
        <div class="property-preview-f-left text-color-primary">
            <span class="property-card-value">
                <i class="fa fa-dollar"><?php echo $costo ?></i>
            </span>
        </div>
    </div>
</div>
