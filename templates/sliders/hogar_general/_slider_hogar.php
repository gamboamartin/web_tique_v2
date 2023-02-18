<?php
use config\generales;

$generales = new generales();

?>
<div class="property-slider-box color_azul padding-top-5vh">
    <div id="property-slider" class="property-slider carousel slide " data-ride="carousel">
        <!-- Content -->
        <?php
            $landing_url = get_landing_url();
            $landing_url_limpia = limpia_url_landing(url_landing: $landing_url);
            $landing_url_sin_ext = quitar_php(url_landing_limpia: $landing_url_limpia);
            $ruta_regenerada = regenera_ruta(landing_name: $landing_url_sin_ext);

            $url = 'assets/img/venta_casas/'.$ruta_regenerada.'/';
            $carpeta_hogar = $generales->path_base.$url;
            $direccion_hogar = $generales->url_base.$url;
            $carpetas = scandir($carpeta_hogar, SCANDIR_SORT_ASCENDING);
            $img_activo = false;

        ?>
        <div class="carousel-inner vh-90" role="listbox">
            <?php
            for($i = 2 ; $i < count($carpetas) ; $i++)
            {
                $carpeta = $carpetas[$i].'/';
                $directorio = dir($carpeta_hogar.$carpeta);
                while(($archivo = $directorio->read()) != false) {
                    $es_imagen = strpos($archivo, ".gif") || strpos($archivo, ".jpg") || strpos($archivo, ".png");
                    $item_activo = '';
                    if (!$img_activo)
                    {
                        if($es_imagen){
                            $item_activo = ' active';
                            $img_activo = true;
                        }
                    }
                    if ($es_imagen){
                            ?>
                            <div class="item<?php echo $item_activo ?>">
                                <img id="imagen_slider_" height="100%" src="<?php echo $direccion_hogar.$carpeta.$archivo?>" alt="<?php echo $archivo ?>" />
                            </div>
                            <?php
                    }
                }
                $directorio->close();
            }
            if($ruta_regenerada == "lote_itze"){
            ?>
            <div class="item" data-interval="50000">
                <div class=" hover-default  ">
                    <iframe id="video"
                            src="https://www.youtube.com/embed/MF4xaqHmVfI"

                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media;
                             gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <?php
             }
            elseif($ruta_regenerada == "lote_nicte"){
            ?>
                <div class="item" data-interval="50000">
                    <div class=" hover-default  ">
                        <iframe id="video" src="https://www.youtube.com/embed/xKj9SRFnVfs"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;
                                 picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
                <?php
            }
            elseif($ruta_regenerada == "lote_xaman"){
            ?>
                <div class="item" data-interval="50000">
                    <div class=" hover-default  ">
                        <iframe id="video" src="https://www.youtube.com/embed/HmkOwTBbcwE"
                                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;
                        clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                    </div>
                </div>

            <?php
            }
            elseif($ruta_regenerada == "lote_yaax"){
            ?>
                <div class="item" data-interval="50000">
                    <div class=" hover-default  ">
                        <iframe id="video" src="https://www.youtube.com/embed/-_d8r2tHonM"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media;
                         gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>

            <?php
            }

            ?>
        </div>

        <!-- Previous/Next controls -->
        <?php include $generales->path_base.'templates/sliders/hogar_general/links/_boton_atras.php'?>
        <?php include $generales->path_base.'templates/sliders/hogar_general/links/_boton_adelante.php'?>

    </div>
</div>