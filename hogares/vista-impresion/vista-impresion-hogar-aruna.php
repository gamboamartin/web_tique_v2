<?php

use base\conexion;
use config\generales;
use models\wt_hogar;

include "../../init.php";
require '../../vendor/autoload.php';


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
$municipio = "Zapopan";
$buscar = stripos($wt_hogar['wt_hogar_ubicacion'], $municipio);
if($wt_hogar > 0 and $buscar !== false){
    $direccion = $wt_hogar['wt_hogar_ubicacion'];
    $img_hogar = $wt_hogar['wt_hogar_img_descripcion'];
    $nombre_hogar = $wt_hogar['wt_hogar_descripcion'];
    $proposito_hogar_id = $wt_hogar['wt_hogar_wt_proposito_id'];

}
$numero=1190000;
$costo= number_format($numero, 2);
$a = explode(",", $costo);
if(count($a)>2) {
    $b = explode(",", $costo,2);
    $costo=$b[0]."'".$b[1];
}

?>
<style>
    html, body {
        height: 100%;
        overflow-x: revert !important;;
    }
</style>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title><?php echo $nombre_hogar ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />

        <?php include $generales->path_base.'templates/css.php'; ?>
        <!-- End custom template style   -->
        <link rel="stylesheet" href="<?php echo $generales->url_base; ?>assets/css/print.css"  media="print"/>
    </head>
    <body class="">
        <div class="container container-wrapper">
            <main class="main color_blanco">
                <div class="container">
                    <div class="row">
                        <div class="contenedor_centrado">
                            <img src="<?php echo $generales->url_base?>assets/img/icons/Logotipo-TIQUE.png" width="40%">
                        </div>
                        <div class="col-md-12 padding-top-5vh padding_bottom_5vh color_blanco">
                            <div class="control-group col-sm-8 margen_izquierda center_item">
                                <ul class="breadcrumb">
                                    <li class="item"><a href="<?php echo $generales->url_base; ?>index.php"> Inicio </a></li>
                                    <li class="item"> <?php echo $nombre_hogar;?> </li>
                                </ul>
                                <h2 class="subtitulo_hogar_gris">Casa en venta <?php echo $municipio;?></h2>
                                <h1 class="titulo_notice"><?php echo $nombre_hogar;?></h1>
                                <h3 class="texto_hoagar_h3"><?php echo $direccion;?></h3>
                            </div>
                            <div class="control-group col-sm-2 margen_izquierda center_item">
                                <div class="contenido_"  >
                                    <div class="inner_ ">
                                        <div class="btn_casa_vendida_x float_right">
                                            <h4 class="texto_btn_casa_vendida_x ">Vendida </h4>

                                        </div>
                                    </div>


                                    <div class="padding-top-3vh inner_"  >

                                        <h4 class="texto_hoagar_h3 texto_derecha"  >Precio total (MXN) </h4>

                                        <h4 class="subtitulo_hogar_gris texto_derecha">$ <?php echo $costo;?> </h4>

                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-md-9">
                            <div class="widget widget-box box-container widget-property">
                                <?php include $generales->path_base.'templates/sliders/hogar_general/_slider_hogar.php' ?>
                                <?php include $generales->path_base.'templates/descripcion/_descripcion_general_print.php' ?>
                            </div> <!-- /. widget-body -->
                            <?php include $generales->path_base.'templates/ubicaciones/_ubicacion_general.php' ?>
                            <?php include $generales->path_base.'templates/galeria/hogar-aruna/_galeria_hogar.php' ?>
                        </div><!-- /.center-content -->
                        <div class="col-md-3">
                            <?php include $generales->path_base.'templates/detalles/_detalles_imp_general.php' ?>
                            <button class="print_hidden print_btn btn_casa_vendida_x texto_btn_casa_vendida_x btn" onclick="print_page()">Imprimir</button>
                        </div>
                        <!-- /.right side bar -->
                        <footer class="footer">
                            <?php include $generales->path_base.'templates/footer/_footer.php' ?>
                        </footer>
                    </div>
                </div>
            </main><!-- /.main-part--> 
        </div>
        <?php include $generales->path_base.'templates/java.php' ?>
        <!-- End custom template style   -->
        <script src="../assets/js/dpejes/dpe.js"></script>
        <script src="../assets/js/dpejes_custom.js"></script>
    </body>
</html>