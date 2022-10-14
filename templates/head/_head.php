<?php
use config\generales;
$generales = new generales();
?>
<div class="top-box" data-toggle="sticky-onscroll">
    <div class="container">

        <?php //include $generales->path_base.'templates/head/nav/_redes_sociales.php' ?>

        <section class="header-inner">
            <div class="container">
                <div  style="float: left" >
                    <?php include $generales->path_base.'templates/head/nav/_logos.php' ?>
                </div>
                <div  style="float: right" >
                    <?php include $generales->path_base.'templates/head/nav/menu.php' ?>
                </div>
            </div>
        </section><!-- /.menu-->
    </div>
</div>
<div class="top-box-mask"></div>
