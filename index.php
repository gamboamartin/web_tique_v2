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
            <?php include $generales->path_base.'templates/sliders/index/_slider_index.php' ?>
            <?php include $generales->path_base.'templates/busqueda/index/_busqueda_index.php' ?>
            <?php //include $generales->path_base.'templates/busqueda/index/_btn.php' ?>
            <main class="main ">
                <div class="container contenedor_index">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="h-side top-pad h-side-slim clearfix contenedor_index" style="padding: 0px;">

                            </div> <!-- /. content-header -->
                            <div style="margin-top: -5%;" >
                                <?php if(isset($_POST['propiedades'])){
                                    if($_POST['propiedades']=="2") { ?>
                                        <div class="col-md-12 container " style="margin-bottom: 2%;">
                                            <div class="margen4" >

                                                <h1 class="whatsapp_subtitulo" style="font-size: 35px; background: none;">Casas Disponibles </h1>
                                                <?php
                                                include $generales->path_base . 'templates/tipo_hogar/casa.php';
                                                ?>
                                            </div>
                                        </div>
                                        <?php
                                        include $generales->path_base . 'templates/boton_todas_casas/boton_ver.php';
                                    }
                                    elseif($_POST['propiedades']=="3"){
                                        ?>
                                        <div class="col-md-12 container " style="margin-bottom: 2%;">
                                            <div class="margen4" >

                                                <h1 class="whatsapp_subtitulo" style="font-size: 35px; background: none;">Departamentos Disponibles </h1>
                                                <?php

                                                include $generales->path_base . 'templates/tipo_hogar/depa.php';

                                                ?>


                                            </div>

                                        </div>

                                        <?php
                                        include $generales->path_base . 'templates/boton_todas_casas/boton_ver.php';
                                    }
                                    elseif($_POST['propiedades']=="5"){
                                        ?>

                                        <div class="col-md-12 container " style="margin-bottom: 2%;">
                                            <div class="margen4" >

                                                <h1 class="whatsapp_subtitulo" style="font-size: 35px;  background: none ;"> Terreno Residenciales Disponibles</h1>
                                                <?php
                                                include $generales->path_base . 'templates/tipo_hogar/terreno.php';
                                                ?>


                                            </div>

                                        </div>
                                        <?php
                                        include $generales->path_base . 'templates/boton_todas_casas/boton_ver.php';
                                        ?>

                                        <?php

                                    }
                                    elseif( $_POST['propiedades']=="4"){ ?>
                                        <div class="margen4 " style="margin-bottom: 5%;">
                                            <h1 class="whatsapp_subtitulo" style="font-size: 35px;  background: none;">!!!Lo sentimos.¡¡¡ En este momento no contamos con hogares Duplex </h1>
                                        </div>
                                    <?php
                                        
                                    }






                                }

                           else{ ?>

                               <div class="contenedor_whats " style="margin-top: 2%;"> <?php
                                include $generales->path_base . 'templates/sliders/galeria/_slider_index.php';
                                include $generales->path_base . 'templates/boton_todas_casas/boton_ver.php';
                                ?> </div>


                            <?php }
                            ?>

                            </div>

                            <div class="contenedor_whats posicion_whats" style="background-color: #FFFFFF; padding-bottom: 30px">
                                <?php
                                include $generales->path_base . 'templates/whatsapp/info_whatsapp.php';
                                include $generales->path_base . 'templates/whatsapp/img_whatsapp.php';
                                ?>

                            </div>
                            <div class="container posicion_mapa_texto " style="background-color: #0000CC; padding: 0px;">
                                <?php include $generales->path_base . 'templates/mapa/texto_mapa.php'; ?>


                            </div>
                            <div class="contenedor_whats posicion_whats" style="background-color: #FFFFFF; padding-bottom: 30px">

                            </div>
                            <?php  include $generales->path_base.'templates/noticias/index/_noticias_index.php'?>
                        </div><!-- /.center-content -->


                        <!-- /.right side bar -->
                    </div>



                </div>

            </main><!-- /.main-part-->




            <?php /*include $generales->path_base.'templates/agentes/index/_agentes_index.php' */?>
            <footer class="footer ">
                <?php include $generales->path_base.'templates/footer/_footer.php' ?>
            </footer>
            <div class="position_whats"  >
                <a class="transparente" href="https://api.whatsapp.com/send?phone=3316052732&text=Hola Alejandro, me gustaría obtener informes mas detallados acerca de: " target="_blank"><img class="img_whats img_big" src=" <?php echo $generales->url_base?>assets/img/whats1.png" alt="" /></i></a>

            </div>

            <a class="btn  " id="btn-scroll-up"> <img src="<?php echo $generales->url_base;?>assets/img/ICONO-16.jpg" alt="" class="img_scroll" /></a>
        </div>

        <?php include $generales->path_base.'templates/java.php' ?>
    </body>
</html>