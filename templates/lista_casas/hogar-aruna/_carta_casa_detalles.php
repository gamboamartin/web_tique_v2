<?php
use config\generales;
$generales = new generales();
$numero=1190000;
$costo= number_format($numero, 2);
$a = explode(",", $costo);
if(count($a)>2) {
    $b = explode(",", $costo,2);
    $costo=$b[0]."'".$b[1];
}
?>
<div class="property-card-box card-box card-block">
    <h3 class="property-card-title"><a href="<?php echo $generales->url_base; ?>hogares/hogar-aruna.php">Hogar Aruna</a></h3>
    <div class="property-card-descr"> Av. Campo Príncipes 653, Condominio Madrid Int. 26, Fracc. Campo Real, Zapopan.</div>
    <div class="property-preview-footer  clearfix">
        <div class="property-preview-f-left text-color-primary">
            <span class="property-card-value">
                <i class="fa fa-dollar"><?php echo $costo ?></i>
            </span>
        </div>
    </div>
</div>
