<?php
use config\generales;
$generales = new generales();
?>
<div class="col-md-4 col-sm-6" >

    <div class="property-card card color_cart_casa" >
        <?php //include $generales->path_base.'templates/lista_casas/links/_marca_venta.php' ?>
        <br><br>
        <a type="button"  href="<?php echo $generales->url_base; ?>hogares/hogar_izel.php" class="btn_info_cart_casa" >  Detalles  </a>

        <div class="property-card-header image-box carta_img_casa"  >
            <h3 class="etiqueta_imagen" style="  width: 130px;color:  #ffffff!important; background-color:  #55a38b !important;">En renovación</h3>

            <img src="<?php echo $generales->url_base;?>assets/img/venta_casas/hogar_izel/1Fachada/img1.jpg" alt="" class="" />
            <!--Casa destacada en caso de serlo-->
            <!--<div class="budget"><i class="fa fa-star"></i></div>-->
            <a href="<?php echo $generales->url_base; ?>hogares/hogar-izel.php" class="property-card-hover">

            </a>
        </div>


        <?php include $generales->path_base.'templates/lista_casas/hogar-izel/_carta_casa_detalles.php' ?>
    </div>
</div>
<script>

    function getlinkVenus() {
        var aux = document.createElement("input");
        aux.setAttribute("value","<?php echo $generales->url_base; ?>hogares/hogar-venus.php");
        document.body.appendChild(aux);
        aux.select();
        document.execCommand("copy");
        document.body.removeChild(aux);
        event.preventDefault();

    }
</script>
