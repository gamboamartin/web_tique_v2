<?php
use config\generales;
include "./init.php";
require './vendor/autoload.php';
$generales = new generales();
?>
<div class="container-fluid h-100 color_azul contenedor_mapa_text" id="mapa">
    <div class="row w-100 align-items-center" >
        <div class="col text-center" >
            <div class="container " >
                <h1 class="texto_mapa"> Explora nuestras propiedades desde el mapa</h1>
                <br>
            </div>
            <div class="contenedor_centrado" style="">
                <form  method="post" action="#mapa" >
                    <ul class="ul_img_hogar">
                        <li class="li_img_hogar ">
                            <div class="btn-group">
                                <input type="submit"  id="btn_gdl" value="Guadalajara" name="btn_gdl" class="btn  boton_mapa" >
                            </div>

                        </li>
                        <li class="li_img_hogar ">
                            <div class="btn-group">
                                <input type="submit" id="btn_tonala" value="Tonalá" name="btn_tonala" class="btn  boton_mapa">
                            </div>

                        </li >
                        <li class="li_img_hogar ">
                            <div class="btn-group">
                                <input type="submit" id="btn_zapopan" value="Zapopan" name="btn_zapopan" class="btn  boton_mapa" >

                            </div>

                        </li>
                        <li class="li_img_hogar ">
                            <div class="btn-group">
                                <input type="submit" id="btn_tlajo" value="Tlajomulco" name="btn_tlajo" class="btn  boton_mapa" >

                            </div>
                        </li>


                </form>
            </div>

            <?php
            if(isset($_POST["btn_gdl"])){

                ?>
                <div class="btn-group mapa_gdl" id="gdl" name="gdl">
                    <p class="numero_boton_mapa">1</p>
                    <p class="texto_boton_mapa">Propiedades</p>
                    <p class="texto_boton_mapa estilo_redondo_abajo" >disponible</p>

                </div>
                <div style="position: relative; bottom: 15vh; margin-bottom: -14vh;">
                    <?php include $generales->path_base . 'templates/ubicaciones/_ubicaciones_hogares_gdl.php'; ?>

                </div>

            <?php }
            elseif (isset($_POST["btn_tonala"])){ ?>
                <div class="btn-group mapa_tona">
                    <p class="numero_boton_mapa">4</p>
                    <p class="texto_boton_mapa">Propiedades</p>
                    <p class="texto_boton_mapa estilo_redondo_abajo" >disponible</p>
                </div>
                <div style="position: relative; bottom: 15vh; margin-bottom: -14vh;">
                    <?php
                    include $generales->path_base . 'templates/ubicaciones/_ubicaciones_hogares_tonala.php'; ?>
                </div>
                <?php
            }
            elseif (isset($_POST["btn_zapopan"])){ ?>
                <div class="btn-group mapa_zapopan">
                    <p class="numero_boton_mapa">9</p>
                    <p class="texto_boton_mapa">Propiedades</p>
                    <p class="texto_boton_mapa estilo_redondo_abajo" >disponible</p>
                </div>
                <div style="position: relative; bottom: 15vh; margin-bottom: -14vh;">
                    <?php
                    include $generales->path_base . 'templates/ubicaciones/_ubicaciones_hogares_Zapopan.php'; ?>
                </div>
            <?php }
            elseif (isset($_POST["btn_tlajo"])){

                ?>
                <div class="btn-group mapa_tlajo"  name="gdl">
                    <p class="numero_boton_mapa">2</p>
                    <p class="texto_boton_mapa">Propiedades</p>
                    <p class="texto_boton_mapa estilo_redondo_abajo" >disponible</p>

                </div>
                <div style="position: relative; bottom: 15vh; margin-bottom: -14vh;">
                    <?php include $generales->path_base . 'templates/ubicaciones/_ubicaciones_hogares_tlajomulco.php'; ?>

                </div>
                <?php
            }
            else{
                include $generales->path_base . 'templates/ubicaciones/_ubicaciones_hogares.php';
            }?>

        </div>
    </div>
</div>