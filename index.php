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
            <?php //include $generales->path_base.'templates/busqueda/index/_busqueda_index.php' ?>
            <main class="main ">
                <div class="container contenedor_index">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="h-side top-pad h-side-slim clearfix contenedor_index" style="padding: 0px;">

                            </div> <!-- /. content-header -->
                           <?php if(isset($_POST['seccion'])){
                                if($_POST['seccion']==1 and $_POST['ubi']=="") {

                                    include $generales->path_base.'templates/lista_casas/_lista_casas.php';



                                    include $generales->path_base.'templates/lista_casas/hogar-venus/_carta_casa.php';
                                    include $generales->path_base.'templates/lista_casas/hogar-pasitea/_carta_casa.php';
                                    include $generales->path_base.'templates/lista_casas/hogar-orquidea/_carta_casa.php';
                                    include $generales->path_base.'templates/lista_casas/hogar-aruna/_carta_casa.php';
                                    include $generales->path_base.'templates/lista_casas/hogar-beatriz/_carta_casa.php';
                                    include $generales->path_base.'templates/lista_casas/hogar-eirene/_carta_casa.php';
                                }
                                elseif ( $_POST['ubi']=='Zapopan'){
                                    include $generales->path_base . 'templates/lista_casas/hogar-venus/_carta_casa.php';
                                    include $generales->path_base . 'templates/lista_casas/hogar-orquidea/_carta_casa.php';
                                    include $generales->path_base . 'templates/lista_casas/hogar-aruna/_carta_casa.php';
                                    include $generales->path_base . 'templates/lista_casas/hogar-eirene/_carta_casa.php';
                                    include $generales->path_base . 'templates/lista_casas/hogar-eden/_carta_casa.php';
                                }
                                elseif( $_POST['ubi']=='Tonalá'){
                                    include $generales->path_base . 'templates/lista_casas/hogar-pasitea/_carta_casa.php';
                                    include $generales->path_base.'templates/lista_casas/hogar-cihualpilli/_carta_casa.php';
                                    include $generales->path_base.'templates/lista_casas/hogar-santiago/_carta_casa.php';
                                }
                                elseif( $_POST['ubi']=='Guadalajara'){
                                    include $generales->path_base.'templates/lista_casas/hogar-eirene/_carta_casa.php';
                                }
                                else{ ?>
                                        <h1>Lo sentimos en este momento no contamos  con hogares en la ubicación: <?php echo $_POST['ubi'] ?></h1>
                               <?php }

                            }else{
                           ?><div class="contenedor_whats"> <?php
                                include $generales->path_base . 'templates/sliders/galeria/_slider_index.php';
                                include $generales->path_base . 'templates/boton_todas_casas/boton_ver.php';
                                ?> </div> <?php
                            }?>

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
            <a class="btn btn-scoll-up color-secondary" id="btn-scroll-up"></a>
        </div>

        <?php include $generales->path_base.'templates/java.php' ?>
    </body>
</html>