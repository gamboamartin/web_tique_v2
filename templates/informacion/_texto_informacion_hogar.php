<?php
use config\generales;
$generales = new generales();
?>

<div class="container-fluid h-100 color_azul contenedor_mapa_text">
    <div class="row w-100 align-items-center" >
        <div class="col text-center" >
            <div class="container " >
                <h1 class="texto_mapa"> Explora nuestras propiedades desde el mapa</h1>
                <br>
            </div>
            <div class="container">
                <div class="btn-group">
                    <button type="button" id="btn_gdl" class="btn dropdown-toggle boton_mapa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Guadalajara
                    </button>
                    <div class="dropdown-menu contenido_boton_mapa_text ">
                        <p class="numero_boton_mapa">1</p>
                        <p class="texto_boton_mapa">Propiedades</p>
                        <p class="texto_boton_mapa estilo_redondo_abajo" >disponible</p>
                    </div>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle boton_mapa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tonalá
                    </button>
                    <div class="dropdown-menu contenido_boton_mapa_text ">
                        <p class="numero_boton_mapa">3</p>
                        <p class="texto_boton_mapa">Propiedades</p>
                        <p class="texto_boton_mapa estilo_redondo_abajo" >disponible</p>
                    </div>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle boton_mapa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Zapopan
                    </button>
                    <div class="dropdown-menu contenido_boton_mapa_text ">
                        <p class="numero_boton_mapa">5</p>
                        <p class="texto_boton_mapa">Propiedades</p>
                        <p class="texto_boton_mapa estilo_redondo_abajo" >disponible</p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>