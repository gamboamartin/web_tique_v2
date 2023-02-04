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
$municipio = "Tonalá";
$buscar = stripos($wt_hogar['wt_hogar_ubicacion'], $municipio);
if($wt_hogar > 0 and $buscar !== false){
    $direccion = $wt_hogar['wt_hogar_ubicacion'];
    $img_hogar = $wt_hogar['wt_hogar_img_descripcion'];
    $nombre_hogar = $wt_hogar['wt_hogar_descripcion'];
    $proposito_hogar_id = $wt_hogar['wt_hogar_wt_proposito_id'];

}
$numero=1200000;
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
    <main class="main section-color-primary">
        <div class="container">
            <div class="row">
                <img style="margin-bottom: -3vh; margin-top: -3vh" src="<?php echo $generales->url_base?>assets/img/icons/Logotipo-TIQUE.png" width="40%">
                <div class="col-md-9">
                    <div class="color_blanco margen_izquierda center_item">
                        <h2 class="subtitulo_hogar_gris">Casa en venta <?php echo $municipio;?></h2>
                        <h1 class="titulo_notice"><?php echo $nombre_hogar;?></h1>
                        <h3 class="texto_hoagar_h3"><?php echo $direccion;?></h3>
                    </div>
                    <div class="color_blanco ">
                        <?php include $generales->path_base.'templates/sliders/hogar_general/_slider_hogar.php' ?>
                    </div>

                    <div class="color_blanco">
                        <?php include $generales->path_base.'templates/descripcion/_descripcion_general_xiadani.php' ?>
                    </div>
                    <div class="margen_top-5vh ">
                        <?php include $generales->path_base.'templates/ubicaciones/_ubicacion_general.php' ?>
                    </div>

                </div>


                <div class="col-md-3">
                    <div class="inner_ ">
                        <div class="float_right">
                            <?php if ($proposito_hogar_id == 2){?>
                                <div class="btn_casa_vendida_x ">
                                    <h4 class="texto_btn_casa_vendida_x ">Vendida </h4>

                                </div>

                            <?php }
                            elseif ($proposito_hogar_id == 3){?>
                                <h4 class=" btn_info_casa" style="  background:  #FF8C00 !important;"> Apartado </h4>

                            <?php }
                            else{?>
                                <h4 class=" btn_info_casa" style=" color: #0000cc !important; background-color: #cccccc !important"> Renovada </h4>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="padding-top-3vh inner_"  >
                        <h4 class="texto_hoagar_h3 texto_derecha"  >Precio total (MXN) </h4>

                        <h4 class="subtitulo_hogar_gris texto_derecha">$ <?php echo $costo;?> </h4>

                    </div>
                    <?php include $generales->path_base.'templates/detalles/_detalles_imp_general.php' ?>
                    <?php //include $generales->path_base.'templates/agentes/hogar-cihualpilli/_ficha_agente.php' ?>
                    <?php include $generales->path_base.'templates/galeria/hogar-xiadani/_galeria_hogar_imp.php' ?>
                    <button onclick="window.print()">Print this page</button>
                </div><!-- /.center-content -->
                <footer class="footer" style="background: #FFFFFF">
                    <?php include $generales->path_base . 'templates/footer/_footer.php' ?>
                </footer>

            </div>
        </div>
    </main>

</div>

<?php include $generales->path_base . 'templates/java.php' ?>

</body>

</html>