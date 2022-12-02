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
$wt_tipo_inmueble_modelo = new wt_hogar(conexion::$link);

$landing_url = get_landing_url();
$landing_url_limpia = limpia_url_landing(url_landing: $landing_url);
$landing_url_sin_ext = quitar_php(url_landing_limpia: $landing_url_limpia);

$wt_hogar = $wt_hogar_modelo->obtener_registro_wt_hogar($landing_url_sin_ext);
$img_hogar = '';
$descripcion_hogar = '';
$terreno_hogar = '';
$construccion_hogar = '';
$niveles_hogar = '';
$banio_hogar = '';
$recamara_hogar = '';
$patio_hogar = '';
$estacionamiento_hogar = '';

if($wt_hogar > 0){
    $direccion_hogar = $wt_hogar['wt_hogar_ubicacion'];
    $proposito_hogar_id = $wt_hogar['wt_hogar_wt_proposito_id'];
    $tipo_hogar_id = $wt_hogar['wt_hogar_wt_tipo_inmueble_id'];
    $terreno_hogar = $wt_hogar['wt_hogar_terreno'];
    $construccion_hogar = $wt_hogar['wt_hogar_construccion'];
    $niveles_hogar = $wt_hogar['wt_hogar_niveles'];
    $banio_hogar = $wt_hogar['wt_hogar_banio'];
    $recamara_hogar = $wt_hogar['wt_hogar_recamara'];
    $patio_hogar = $wt_hogar['wt_hogar_patio'];
    $estacionamiento_hogar = $wt_hogar['wt_hogar_estacionamiento'];

}

$tipo_proposito = array('venta.php', 'vendido.php');
$url_proposito = 'templates/detalles/links/proposito/';

$niveles_label = 'Niveles: ';

if($tipo_hogar_id == 2){
    $niveles_label = 'Nivel: ';
}
$wt_tipo_inmueble = $wt_tipo_inmueble_modelo->registro(registro_id: $tipo_hogar_id);



$tipo_hogar = '';
if($wt_tipo_inmueble > 0){
    $tipo_hogar = $wt_tipo_inmueble['wt_tipo_inmueble_descripcion'];
}


?>
<div class="col-md-12 contenedor_centrado color_blanco">
    <ul class="ul_img_hogar">

        <li  class="li_img_hogar ">
            <div>
                <img id="imagen_slider" src="<?php echo $generales->url_base; ?>assets/img/iconos_hogar_detalles/habitacion.png" alt="Hogar Venus" height="80%"/>
                <br>
                <h3 class="texto_icono_hogar"><?php echo $recamara_hogar; ?></h3>
            </div>


        </li>
        <li  class="li_img_hogar ">
            <div>
                <img id="imagen_slider" src="<?php echo $generales->url_base; ?>assets/img/iconos_hogar_detalles/baño.png" alt="Hogar Venus" height="80%"/>
                <h3 class="texto_icono_hogar"><?php echo $banio_hogar; ?></h3>
            </div>
        </li>
        <li  class="li_img_hogar ">
            <div>
                <img id="imagen_slider" src="<?php echo $generales->url_base; ?>assets/img/iconos_hogar_detalles/cochera.png" alt="Hogar Venus" height="80%"/>
                <h3 class="texto_icono_hogar"><?php echo $estacionamiento_hogar; ?></h3>
            </div>
        </li>
        <li  class="li_img_hogar ">
            <div>
                <img id="imagen_slider" src="<?php echo $generales->url_base; ?>assets/img/iconos_hogar_detalles/terreno.png" alt="Hogar Venus" height="80%"/>
                <h3 class="texto_icono_hogar"><?php echo $terreno_hogar; ?></h3>
            </div>
        </li>
        <li  class="li_img_hogar ">
            <div>
                <img id="imagen_slider" src="<?php echo $generales->url_base; ?>assets/img/iconos_hogar_detalles/construccion.png" alt="Hogar Venus" height="80%"/>
                <br>
                <h3 class="texto_icono_hogar"><?php echo $construccion_hogar; ?></h3>
            </div>
        </li>
        <li  class="li_img_hogar ">
            <div>
                <img id="imagen_slider" src="<?php echo $generales->url_base; ?>assets/img/iconos_hogar_detalles/tipo_hogar.png" alt="Hogar Venus" height="80%"/>
                <br>
                <h3 class="texto_icono_hogar"><?php echo $tipo_hogar." ".$niveles_label." ".$niveles_hogar; ?></h3>
            </div>
        </li>
        <li  class="li_img_hogar ">
            <div>
                <img id="imagen_slider" src="<?php echo $generales->url_base; ?>assets/img/iconos_hogar_detalles/patio.png" alt="Hogar Venus" height="80%"/>
                <br>
                <h3 class="texto_icono_hogar"><?php echo  $patio_hogar; ?></h3>
            </div>
        </li>


    </ul>

</div>


