<?php
$a = $generales->url_base."assets/img/venta_casas/hogar_izel/1Fachada/img1.jpg";
$b = $generales->url_base."assets/img/venta_casas/hogar_izel/2Sala/20230306_122835.jpg";
$c = $generales->url_base."assets/img/venta_casas/hogar_izel/7Patio/20230306_122804.jpg";
?>


<div class="margen_izquierda margen_derecha padding-top-5vh">

    <ul data-target="#modal-gallery" data-toggle="modal-gallery" class="images-gallery clearfix">


        <li class="col-xs-4 ">
            <a data-gallery="gallery" href="<?php echo $a ?>" title="" download="<?php echo $a ?>" class="preview show-icon ">
                <img  src="<?php echo $a ?>" class="" alt=""/>
            </a>
            <div class="preview-img img_borddes"><img src="<?php echo $a ?>" data-src="<?php echo $a ?>" alt="" class="img_borddes" width="10px"/></div>
        </li>
        <li class="col-xs-4">
            <a data-gallery="gallery" href="<?php echo $b ?>" title="" download="<<?php echo $b ?>" class="preview show-icon">
                <img src="<?php echo $b ?>" class="" alt=""/>
            </a>
            <div class="preview-img img_borddes"><img src="<?php echo $b ?>" data-src="<?php echo $b ?>" alt="" class="img_borddes" /></div>
        </li>
        <li class="col-xs-4">
            <a data-gallery="gallery" href="<?php echo $c ?>" title="" download="<?php echo $c ?>" class="preview show-icon">
                <img src="<?php echo $c ?>" class="" alt=""/>
            </a>
            <div class="preview-img img_borddes"><img src="<?php echo $c ?>" data-src="<?php echo $c ?>" alt="" class="img_borddes" /></div>
        </li>

    </ul>
</div><!-- /. widget-gallery -->