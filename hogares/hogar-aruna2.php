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
$descripcion_twitter = 'Hogar Aruna es una bonita vivienda, que se encuentra ubicado en Campo Real un bonito 
Fraccionamiento Residencial dentro del  Municipio de Zapopan, Jalisco, el cual se caracteriza por sus parques lineales,  
sus extensas áreas verdes y su bonito lago artificial. En Hogar Aruna se puede sentir un ambiente familiar ideal para la 
convivencia y recreación  ya que cuenta con canchas deportivas, terraza familiar,se encuentra perfectamente ubicado, con 
acceso a gimnasio dentro del mismo fraccionamiento, plazas comerciales y hospitales. 
Descubre Hogar Aruna y enamorate de tu nuevo estilo de vida'; //falta por automatizar
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
                <div class="col-md-12">
                    <div class="control-group col-sm-7 margen_izquierda center_item">
                        <ul class="breadcrumb">
                            <li class="item"><a href="<?php echo $generales->url_base; ?>index.php"> Inicio </a></li>
                            <li class="item"> <?php echo $nombre_hogar;?> </li>
                        </ul>
                        <h2 class="subtitulo_hogar_gris">Casa en venta <?php echo $municipio;?></h2>
                        <h1 class="titulo_notice"><?php echo $nombre_hogar;?></h1>
                        <h3 class="texto_hoagar_h3"><?php echo $direccion;?></h3>
                    </div>
                    <div class="control-group col-sm-3 margen_izquierda margen_derecha center_item">
                        <div class="btn_casa_vendida_x ">
                            <h4 class="texto_btn_casa_vendida_x ">Vendida </h4>

                        </div>

                        <div class="">
                            <br><br><br>
                            <h4 class="texto_hoagar_h3" >Precio total (MXN) </h4>

                        </div>
                        <div class="">
                            <h4 class="subtitulo_hogar_gris"><?php echo $costo;?> </h4>
                        </div>
                    </div>
                    <div class="control-group margen_izquierda col-sm-8">



                    </div>
                    <div class="control-group col-sm-4 margen_derecha ">

                    </div>
                </div>

                <div class="col-md-12 padding_bottom_5vh " >




                        <div  class=" padding-top-5vh  contenedor_formulario">



                        </div>


                        <div class="control-group col-sm-12 center_item color_azul  margin_top contenedor_formulario_4 padding_bottom_10vh">




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