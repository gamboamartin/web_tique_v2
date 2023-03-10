<?php
use base\conexion;
use config\generales;
use gamboamartin\errores\errores;
use models\wt_hogar;


$conf_database = new stdClass();

$paths_conf = new stdClass();
$paths_conf->generales = '/var/www/html/web_tique/config/generales.php';
$paths_conf->database = '/var/www/html/web_tique/config/database.php';
$paths_conf->views = '/var/www/html/web_tique/config/views.php';
$i = 0;
$cnx = new conexion(paths_conf: $paths_conf);
$generales = new generales();

$wt_hogar_modelo = new wt_hogar(conexion::$link);

$casa=3;
$status=2;
$hogares = array();
//var_dump($wt_hogar_modelo->obten_registros_activos()->registros); exit;
foreach ($wt_hogar_modelo->obten_registros_activos()->registros as $registro) {
    $hogar = array();
    $buscar = stripos($registro['wt_hogar_wt_tipo_inmueble_id'], $casa);
    $buscar1 = stripos($registro['wt_hogar_wt_proposito_id'], $status);

    if ($buscar !== false and $buscar1 === false ) {
        //echo $registro['wt_hogar_url'];
        include $generales->path_base . 'templates/lista_casas/'.$registro['wt_hogar_url'].'/_carta_casa.php';


    }


}

?>
