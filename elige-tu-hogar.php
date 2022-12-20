<?php
use config\generales;
include "./init.php";
require './vendor/autoload.php';
$generales = new generales();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Inmobiliaria Tique</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <?php include $generales->path_base.'templates/css.php'; ?>
</head>
<body class="color_blanco" >
<div id="fb-root"></div>
<div class="container container-wrapper color_gris_claro  contenedor_index">
    <header class="header">
                <?php include $generales->path_base.'templates/head/_head.php'?>
            </header><!-- /.header-->
    <main class="main ">
        <div class="container contenedor_index">
            <div class="row">
                <div class="col-md-12">
                    <div class="h-side top-pad h-side-slim clearfix contenedor_index" style="padding: 0px;">

                    </div> <!-- /. content-header -->
                    <div class="col-md-12 contenedor_porque_vender padding_bottom_5vh">
                            <h1 class="whatsapp_titulo" >Todos los hogares</h1>
                            <?php include $generales->path_base.'templates/lista_casas/elige-tu-hogar/_lista_casas_elije_tu_hogar.php' ?>
                            <?php include $generales->path_base.'templates/facebook/_fb_adds.php'?>
                    </div>
                </div><!-- /.center-content -->


                        <!-- /.right side bar -->
            </div><!-- /.center-content -->

                        <!-- /.right side bar -->
        </div>

    </main><!-- /.main-part-->
            <?php // include $generales->path_base.'templates/agentes/index/_agentes_index.php' ?>
            <?php  include $generales->path_base.'templates/noticias/index/_noticias_index.php' ?>
            <?php include $generales->path_base.'templates/ubicaciones/_ubicaciones_hogares.php'?>

            <footer class="footer">
                <?php include $generales->path_base.'templates/footer/_footer.php' ?>
            </footer>
            <a class="btn btn-scoll-up color-secondary" id="btn-scroll-up"></a>
        </div>
        <?php include $generales->path_base.'templates/java.php' ?>
    </body>

</html>
