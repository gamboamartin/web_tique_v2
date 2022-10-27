<?php
use config\generales;
include "./init.php";
require './vendor/autoload.php';
$generales = new generales();
?>
<div class="container-fluid h-100 color_azul contenedor_mapa_text">
    <div class="row w-100 align-items-center">
        <div class="col text-center">
            <div class="container ">

                <h1 class="texto_mapa"> Explora nuestras propiedades desde el mapa</h1>
                <br>
            </div>
            <?php include $generales->path_base.'templates/mapa/menu_mapa.php'?>
            <?php include $generales->path_base.'templates/ubicaciones/_ubicaciones_hogares.php'?>
        </div>
    </div>
</div>