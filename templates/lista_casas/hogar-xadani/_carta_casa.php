<?php
use config\generales;
$generales = new generales();
?>
<div class="col-md-4 col-sm-6" >

    <div class="property-card card color_cart_casa" >
        <?php //include $generales->path_base.'templates/lista_casas/links/_marca_venta.php' ?>
        <br><br>
        <a type="button"  href="<?php echo $generales->url_base; ?>hogares/hogar_xadani.php" class="btn_info_cart_casa" >  Detalles  </a>

        <div class="property-card-header image-box carta_img_casa"  >
            <h3 class="etiqueta_imagen" style="color: #0000cc !important;
    text-align: center !important;
    font-family: Montserrat-Medium !important;
    font-size: 15px !important;
    margin: 0px !important;
    width: 90px;
    border-radius:10px 10px 10px 10px !important;
    background-color: #cccccc !important;
    padding: 5px;
    position: absolute;
    top: 5%;
    left: 10%;
    z-index:1;">En renovación</h3>

            <img src="<?php echo $generales->url_base;?>assets/img/venta_casas/hogar_xadani/1Fachada/9 (1).jpg" alt="" class="" />
            <!--Casa destacada en caso de serlo-->
            <!--<div class="budget"><i class="fa fa-star"></i></div>-->
            <a href="<?php echo $generales->url_base; ?>hogares/hogar-xadani.php" class="property-card-hover">

            </a>
        </div>


        <?php include $generales->path_base.'templates/lista_casas/hogar-xadani/_carta_casa_detalles.php' ?>
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
