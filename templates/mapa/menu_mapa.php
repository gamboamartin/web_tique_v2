<?php
use config\generales;
include "./init.php";
require './vendor/autoload.php';
$generales = new generales();
?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    .city {display:none}
</style>


<div class="container-fluid h-100 color_azul contenedor_mapa_text">
    <div class="row w-100 align-items-center" >
        <div class="col text-center" >
            <div class="container " >
                <h1 class="texto_mapa"> Explora nuestras propiedades desde el mapa</h1>
                <br>
            </div>
            <div class="container">

                <div class="btn-group">
                    <button type="button" onclick="openCity(event, 'todo')" class="tablink btn dropdown-toggle boton_mapa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Todo
                    </button>
                    <div class="dropdown-menu contenido_boton_mapa_text ">
                        <p class="numero_boton_mapa">1</p>
                        <p class="texto_boton_mapa">Propiedades</p>
                        <p class="texto_boton_mapa estilo_redondo_abajo" >disponible</p>
                    </div>
                </div>
                <div class="btn-group">
                    <button type="button" onclick="openCity(event, 'gdl')" class="tablink btn dropdown-toggle boton_mapa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Guadalajara
                    </button>
                    <div class="dropdown-menu contenido_boton_mapa_text ">
                        <p class="numero_boton_mapa">1</p>
                        <p class="texto_boton_mapa">Propiedades</p>
                        <p class="texto_boton_mapa estilo_redondo_abajo" >disponible</p>
                    </div>
                </div>
                <div class="btn-group">
                    <button type="button" onclick="openCity(event, 'tonala')" class="tablink btn dropdown-toggle boton_mapa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tonalá
                    </button>
                    <div class="dropdown-menu contenido_boton_mapa_text ">
                        <p class="numero_boton_mapa">3</p>
                        <p class="texto_boton_mapa">Propiedades</p>
                        <p class="texto_boton_mapa estilo_redondo_abajo" >disponible</p>
                    </div>
                </div>
                <div class="btn-group">
                    <button type="button" onclick="openCity(event, 'zapopan')" class="tablink btn dropdown-toggle boton_mapa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Zapopan
                    </button>
                    <div class="dropdown-menu contenido_boton_mapa_text ">
                        <p class="numero_boton_mapa">5</p>
                        <p class="texto_boton_mapa">Propiedades</p>
                        <p class="texto_boton_mapa estilo_redondo_abajo" >disponible</p>
                    </div>
                </div>
            </div>

            <div id="todo" class=" city">
                <?php include $generales->path_base.'templates/ubicaciones/_ubicacion_general.php'?>
            </div>
            <div id="gdl" class=" city">
                <?php include $generales->path_base.'templates/ubicaciones/_ubicaciones_hogares_gdl.php'?>
            </div>
            <div id="tonala" class=" city">
                <?php include $generales->path_base.'templates/ubicaciones/_ubicaciones_hogares_gdl.php'?>
            </div>
            <div id="zapopan" class=" city">
                <?php include $generales->path_base.'templates/ubicaciones/_ubicaciones_hogares_gdl.php'?>
            </div>




        </div>
    </div>
</div>


<script>
    document.getElementsByClassName("tablink")[0].click();

    function openCity(evt, cityName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].classList.remove("w3-light-grey");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.classList.add("w3-light-grey");
    }
</script>