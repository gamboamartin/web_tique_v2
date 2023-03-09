<?php
echo "hola";
use base\conexion;
use config\generales;
use gamboamartin\errores\errores;
use models\wt_hogar;


$conf_database = new stdClass();

$paths_conf = new stdClass();
$paths_conf->generales = '/var/www/html/web_tique/config/generales.php';
$paths_conf->database = '/var/www/html/web_tique/config/database.php';
$paths_conf->views = '/var/www/html/web_tique/config/views.php';

$cnx = new conexion(paths_conf: $paths_conf);
$generales = new generales();

$wt_pos_venta_modelo = new wt_pos_venta(conexion::$link);

$landing_url = get_landing_url();
$landing_url_limpia = limpia_url_landing(url_landing: $landing_url);
$landing_url_sin_ext = quitar_php(url_landing_limpia: $landing_url_limpia);

$wt_pos_venta = $wt_pos_venta_modelo->obtener_registro_wt_pos_venta($landing_url_sin_ext);
$img_hogar = '';
$descripcion_hogar = '';


if($wt_pos_venta > 0){
    $nombre_pos_venta = $wt_pos_venta['wt_pos_venta_nombre'];
    $apellido_pos_venta = $wt_pos_venta['wt_pos_venta_apellido'];
}
echo $nombre_pos_venta, $apellido_pos_venta;