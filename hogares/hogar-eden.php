<?php

use base\conexion;
use config\generales;
use models\wt_hogar;

include "../init.php";
require '../vendor/autoload.php';


$conf_database = new stdClass();

$paths_conf = new stdClass();
$paths_conf->generales = '/var/www/html/web_tique/config/generales.php';
$paths_conf->database = '/var/www/html/web_tique/config/database.php';
$paths_conf->views = '/var/www/html/web_tique/config/views.php';

$cnx = new conexion(paths_conf: $paths_conf);
$generales = new generales();

require ($generales->path_base.'src/landing.php');

$wt_hogar_modelo = new wt_hogar(conexion::$link);

$url_landing = get_landing_url();
$url_landing_limpia = limpia_url_landing(url_landing: $url_landing);
$landing_url_sin_ext = quitar_php(url_landing_limpia: $url_landing_limpia);

$wt_hogar = $wt_hogar_modelo->obtener_registro_wt_hogar($landing_url_sin_ext);

$img_hogar = '';
$nombre_hogar = '';
$nombre_calle = " Fracc. Campo Real";
$buscar = stripos($wt_hogar['wt_hogar_ubicacion'], $nombre_calle);
if($wt_hogar > 0 and $buscar !== false){
    $direccion = $wt_hogar['wt_hogar_ubicacion'];
    $img_hogar = $wt_hogar['wt_hogar_img_descripcion'];
    $nombre_hogar = $wt_hogar['wt_hogar_descripcion'];
    $proposito_hogar_id = $wt_hogar['wt_hogar_wt_proposito_id'];
    $municipio="Zapopan";
}
$numero=1380000;
$costo= number_format($numero, 2);
$a = explode(",", $costo);
if(count($a)>2) {
    $b = explode(",", $costo,2);
    $costo=$b[0]."'".$b[1];
}

$descripcion_twitter ='Hogar Edén se encuentra dentro de Campo Real un bonito Fraccionamiento Residencial ubicado en el Municipio de Zapopan,
                        Jalisco, característico por sus extensas áreas verdes, parque lineal y su bonito lago artificial. Hogar Edén es ideal 
                        para la convivencia y recreación familiar ya que cuenta con canchas deportivas, terraza familiar, Hogar Edén cuenta con 
                        gimnasio dentro del mismo fraccionamiento, acceso a plazas comerciales y hospitales.';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title><?php echo $nombre_hogar;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta property='twitter:title' content="<?php echo $nombre_hogar;?>"/>
    <meta property='twitter:image' content="<?php echo $generales->url_base.$img_hogar; ?>"/>
    <meta property="og:description" content="<?php echo $descripcion_twitter ?>" /> <!-- falta por automatizar -->
    <meta name="twitter:card" content="summary_large_image"/>

    <?php include $generales->path_base.'templates/css.php'; ?>

</head>
<body class="">
<img src="<?php echo $generales->url_base.$img_hogar; ?>" hidden>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v14.0" nonce="Ug42YVNC"></script>
<div class="container container-wrapper color_blanco">
    <header class="header">
        <?php include $generales->path_base.'templates/head/_head.php' ?>
    </header><!-- /.header-->
    <main class="main ">
        <div class="container contenedor_index">
            <div class="row">
                <div class="col-md-12 padding-top-3vh padding_bottom_2vh ">
                    <div class="control-group col-sm-8 margen_izquierda center_item">

                        <h2 class="subtitulo_hogar_gris">Casa en venta <?php echo $municipio;?></h2>
                        <h1 class="titulo_notice"><?php echo $nombre_hogar;?></h1>
                        <h3 class="texto_hoagar_h3"><?php echo $direccion;?></h3>
                    </div>
                    <div class="control-group col-sm-2 margen_top_3vh margen_izquierda center_item">
                        <div class="contenido_ "  >
                            <?php if ($proposito_hogar_id == 2){?>
                                <h4 class=" btn_info_casa_" style="  background:  #FF3300 !important;"> Vendida </h4>

                            <?php }
                            elseif ($proposito_hogar_id == 3){?>
                                <h4 class=" btn_info_casa_" style="  background:  #FF8C00 !important;"> Apartado </h4>

                            <?php } ?>


                            <div class="padding-top-3vh inner_"  >

                                <h4 class="texto_hoagar_h3 texto_izquierda"  >Precio total (MXN) </h4>

                                <h4 class="subtitulo_hogar_gris texto_izquierda">$ <?php echo $costo;?> </h4>

                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-md-12 padding_bottom_5vh " >
                    <?php include $generales->path_base.'templates/sliders/hogar_general/_slider_hogar.php' ?>

                    <?php include $generales->path_base.'templates/detalles/_detalles_hogar_general.php' ?>

                    <div class="margen_izquierda margen_derecha color_blanco">
                        <?php include $generales->path_base.'templates/descripcion/_descripcion_general.php' ?>
                    </div>
                    <?php include $generales->path_base.'templates/galeria/hogar-eden/_galeria_hogar_eden.php' ?>
                    <div class="margen_izquierda margen_derecha padding-top-5vh ">
                        <?php include $generales->path_base.'templates/ubicaciones/_ubicacion_general.php' ?>
                    </div>
                    <div class="margen_izquierda margen_derecha color_blanco">

                        <h1 class="texto_vender_listo">Imprimir visatde hogar  <?php echo $nombre_hogar;?> </h1>
                        <div class="contenedor_centrado">
                            <a href='<?php echo $generales->url_base; ?>hogares/vista-impresion/vista-impresion-<?php echo $url_landing_limpia?>' class="btn btn-danger regular-button btn_info_casa">Vista de impresión</a>
                        </div>

                    </div>


                    <?php if ($proposito_hogar_id != 2)
                        include $generales->path_base . 'templates/informacion/_texto_informacion_hogar.php'; ?>

                    <?php //include  $generales->path_base.'templates/facebook/_fb_comments_hogar_general.php'?>
                    <div class="padding-top-5vh">
                        <h2 class="titulo_slider_hogares">También te podría interesar</h2>
                    </div>
                    <!-- /.ES EN ESTA LINEA INGE!!! -->
                    <div class=""> <?php
                        include $generales->path_base . 'templates/sliders/galeria/_slider_index.php';
                        include $generales->path_base . 'templates/boton_todas_casas/boton_ver.php';
                        ?> </div>



                </div><!-- /.center-content -->
                <div class="col-md-3">

                    <?php //include $generales->path_base.'templates/agentes/hogar-cihualpilli/_ficha_agente.php' ?>


                </div>
            </div>
        </div>
</div>
</main>

<footer class="footer">
    <?php include $generales->path_base . 'templates/footer/_footer.php' ?>
</footer>
<a class="btn  " id="btn-scroll-up"> <img src="<?php echo $generales->url_base;?>assets/img/ICONO-16.jpg" alt="" class="img_scroll" /></a>
</div>

<?php include $generales->path_base . 'templates/java.php' ?>

</body>

</html>