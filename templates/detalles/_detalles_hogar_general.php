<?php
use base\conexion;
use config\generales;
use gamboamartin\errores\errores;
use models\wt_hogar;
use models\wt_tipo_inmueble;


$conf_database = new stdClass();

$paths_conf = new stdClass();
$paths_conf->generales = '/var/www/html/web_tique/config/generales.php';
$paths_conf->database = '/var/www/html/web_tique/config/database.php';
$paths_conf->views = '/var/www/html/web_tique/config/views.php';

$cnx = new conexion(paths_conf: $paths_conf);
$generales = new generales();

$wt_hogar_modelo = new wt_hogar(conexion::$link);
$wt_tipo_inmueble_modelo = new wt_tipo_inmueble(conexion::$link);

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
$tiempo_hogar='';

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
    $tiempo_hogar= $wt_hogar['wt_hogar_años'];
    $estacionamiento_hogar = $wt_hogar['wt_hogar_estacionamiento'];

}

$tipo_proposito = array('venta.php', 'vendido.php', 'apartado.php');
$url_proposito = 'templates/detalles/links/proposito/';

$niveles_label = 'Niveles: ';

if($tipo_hogar_id == 2){
    $niveles_label = 'Nivel: ';
}
$wt_tipo_inmueble = $wt_tipo_inmueble_modelo->registro(registro_id: $tipo_hogar_id);
$patron = "/^[[:digit:]]+$/";
$letra="/[a-z or A-z]/";
$medio="1/2";
$banio_medio = strpos($banio_hogar, $medio);

//var_dump($num_banio);
$num_recamara = explode($patron, $recamara_hogar);
$tipo_hogar = '';
if($wt_tipo_inmueble > 0){
    $tipo_hogar = $wt_tipo_inmueble['wt_tipo_inmueble_descripcion'];
}


?>

<div class="col-md-12 contenedor_centrado color_blanco">
    <ul class="ul_img_hogar">
        <?php if($tipo_hogar_id != 3){ ?>
            <li  class="li_img_hogar mergen_lateral_vw1" >
                <div>
                    <div class=" centrar" style="margin-left: 1vw;">
                        <img id="imagen_slider " class="sin_redondeo_borde" src="<?php echo $generales->url_base; ?>assets/img/iconos_hogar_detalles/habitacion.png" alt="Lote itze" height="80%"/>
                    </div>
                    <h3 class="texto_icono_hogar"> <?php


                        //var_dump(preg_match($patron, $recamara_hogar)); exit();

                        if (preg_match($patron, $recamara_hogar)) {
                            echo $recamara_hogar;
                        }else{
                            if($num_recamara){
                                echo $num_recamara[0] ;
                            }

                        }
                        ?></h3>
                </div>

            </li>
            <li  class="li_img_hogar mergen_lateral_vw1" >
                <div>
                    <div class="">
                    <img id="imagen_slider" class="sin_redondeo_borde" src="<?php echo $generales->url_base; ?>assets/img/iconos_hogar_detalles/baño.png" alt="Lote itze" height="80%"/>
                    </div>
                        <h3 class="texto_icono_hogar"><?php


                                if (preg_match($patron, $banio_hogar)) {
                                    echo $banio_hogar;
                                }else{
                                    if($banio_medio){
                                        $usuario = strstr($banio_hogar, $medio, true);
                                        echo $usuario; ?>
                                        1/2 <?php
                                    }
                                    else{
                                        $usuario = strstr($banio_hogar, " ", true);
                                        echo $usuario;

                                    }



                                }



                            ?></h3>
                </div>
            </li>

            <li  class="li_img_hogar mergen_lateral_vw1" >
                <div>
                    <div class="">
                        <img id="imagen_slider" class="sin_redondeo_borde" src="<?php echo $generales->url_base; ?>assets/img/iconos_hogar_detalles/cochera.png" alt="Lote itze" height="80%"/>
                    </div>
                    <h3 class="texto_icono_hogar"><?php
                        if (preg_match($patron, $estacionamiento_hogar)) {
                            echo $estacionamiento_hogar;

                        }else{

                            $resultado = intval(preg_replace($patron, '', $estacionamiento_hogar), 10);

                            if($resultado!=0){
                                echo $resultado;
                            }
                            else{
                                ?> 1 <?php
                            }


                        } ?></h3>
                </div>
            </li>

            <?php
        } ?>
            <li  class="li_img_hogar mergen_lateral_vw1" >
                <div>
                    <div class="">
                        <img id="imagen_slider" class="sin_redondeo_borde" src="<?php echo $generales->url_base; ?>assets/img/iconos_hogar_detalles/construccion.png"  height="80%"/>
                    </div>
                    <h3 class="texto_icono_hogar"><?php echo $construccion_hogar; ?></h3>


                </div>
            </li>


        <li  class="li_img_hogar mergen_lateral_vw1" >
            <div>
                <div class="">
                    <img id="imagen_slider" class="sin_redondeo_borde" src="<?php echo $generales->url_base; ?>assets/img/iconos_hogar_detalles/terreno.png"  height="80%"/>
                </div>
                <h3 class="texto_icono_hogar"><?php echo $terreno_hogar; ?></h3>


            </div>
        </li>
        <?php if (isset($tiempo_hogar)){?>

        <li  class="li_img_hogar mergen_lateral_vw1" >
            <div>
                <div class="">
                    <img id="imagen_slider" class="sin_redondeo_borde" src="<?php echo $generales->url_base; ?>assets/img/iconos_hogar_detalles/tiempo.png"  height="80%"/>
                </div>
                <h3 class="texto_icono_hogar"><?php echo $tiempo_hogar; ?></h3>


            </div>
        </li>
        <?php
        }
         ?>

    </ul>

</div>
