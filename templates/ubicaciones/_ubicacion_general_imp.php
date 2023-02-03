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

$cnx = new conexion(paths_conf: $paths_conf);
$generales = new generales();

$wt_hogar_modelo = new wt_hogar(conexion::$link);

$landing_url = get_landing_url();
$landing_url_limpia = limpia_url_landing(url_landing: $landing_url);
$landing_url_sin_ext = quitar_php(url_landing_limpia: $landing_url_limpia);

$wt_hogar = $wt_hogar_modelo->obtener_registro_wt_hogar($landing_url_sin_ext);
$img_hogar = '';
$descripcion_hogar = '';


if($wt_hogar > 0){
    $georeferencia_hogar = $wt_hogar['wt_hogar_georeferencia'];
    $ubicacion_hogar = $wt_hogar['wt_hogar_ubicacion'];
}
?>

<div class="color_blanco">
    <form name="formulario" method="post" >
    <input name="georeferencia" id="georeferencia" value="<?php echo $georeferencia_hogar; ?>" hidden>
    <input name="ubicacion" id="ubicacion" value="<?php echo $ubicacion_hogar; ?>" hidden>

    <div class="property-map " id='property-map-general' style='height: 380px;'></div>

    </form>
</div>  <!-- /. widget-map and walkscore -->

<script>
    function pasarvariable()
    {
        window.open("https://www.google.com/maps/dir/"+$("#route_from").val()+"/"+$("#georeferencia").val(), '_blank');
    }


</script>