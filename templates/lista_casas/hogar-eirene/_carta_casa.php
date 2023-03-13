<?php
use config\generales;
$generales = new generales();
?>
<div class="col-md-4 col-sm-6" >

    <div class="property-card card color_cart_casa" >
        <?php //include $generales->path_base.'templates/lista_casas/links/_marca_venta.php' ?>
        <br><br>
        <a type="button"   class="btn_casa_vendida">  Vendida  </a>
        <div class="property-card-header image-box carta_img_casa" >

            <img src="<?php echo $generales->url_base;?>assets/img/venta_casas/hogar_eirene/2Sala/20220810_170200.jpg" alt="" class="carta_img" />
            <!--Casa destacada en caso de serlo-->
            <!--<div class="budget"><i class="fa fa-star"></i></div>-->
            <a href="<?php echo $generales->url_base; ?>hogares/hogar-eirene.php" class="property-card-hover">

            </a>

        </div>

        <?php //include $generales->path_base.'templates/lista_casas/links/_marca_venta.php' ?>
        <?php include $generales->path_base.'templates/lista_casas/hogar-eirene/_carta_casa_detalles.php' ?>
    </div>
</div>

<script>//<![CDATA[
    function getlinkEirene() {
        var aux = document.createElement("input");
        aux.setAttribute("value","<?php echo $generales->url_base; ?>hogares/hogar-eirene.php");
        document.body.appendChild(aux);
        aux.select();
        document.execCommand("copy");
        document.body.removeChild(aux);
        event.preventDefault();
    }
    //]]></script>