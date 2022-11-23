<?php

use base\conexion;
use config\generales;
use models\wt_hogar;

include "../init.php";
require '../vendor/autoload.php';
$generales = new generales();

require ($generales->path_base.'src/landing.php');
//session_start();
//echo $_SESSION["datos"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Inmobiliaria Tique</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <?php include $generales->path_base . 'templates/css.php' ?>
</head>
<body class="color_blanco">
<div id="fb-root"></div>
<div class="container container-wrapper">
    <header class="header">
        <?php //include $generales->path_base . 'templates/head/_head.php' ?>
    </header><!-- /.header-->

    <main class="main ">
        <div class="container contenedor_index">
            <div class="row">
                <div class="col-md-12">


                    <div class="logo  pull-sm-up  col-xs-12 " style="text-align: center; float: none;">
                        <a href="<?php echo $generales->url_base; ?>index.php">
                            <img src="<?php echo $generales->url_base; ?>assets/img/icons/Logotipo-TIQUE.png" alt="" />
                        </a>

                    </div>
                    <div class=" pull-sm-up  col-xs-12 " style="text-align: center; float: none;">
                        <a href="<?php echo $generales->url_base; ?>formulario_vende.php">
                            <img class="num_img" src="<?php echo $generales->url_base; ?>assets/img/formulario_vende/ICONO-21.png" alt="" />
                        </a>

                    </div>
                </div>
                <div class="col-md-12 padding_bottom_5vh contenedor_porque_vender" >
                    <div class="padding_bottom_5vh">
                        <h1 class="whatsapp_titulo">¿Qué propiedad quieres vender?</h1>
                    </div >
                    <div class="barra btn-group">
                        <a type="button" href="<?php echo $generales->url_base; ?>formulario_vende.php" class="btn btn_barra"></a>
                        <a type="button" href="<?php echo $generales->url_base; ?>formulario/formulario2.php" class="btn btn_barra"></a>

                    </div>
                    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
                    <link rel="stylesheet" type="text/css" href="./style.css" />
                    <form class=" padding-top-5vh  contenedor_formulario"  action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
                        <div class="control-group col-sm-12 center_item">
                            <label class="control-label texto_formulario" for="tipo_vivienda">Tipo de vivienda</label>
                            <div class="controls">
                                <select name="tipo_vivienda" id="tipo_vivienda"  class="form-control respuesta_formulario">
                                    <option value="">seleccionar</option>
                                    <option value="Casa">Casa</option>
                                    <option value="epartamento">Departamento</option>
                                    <option value="Duplex">Duplex</option>
                                    <option value="Terreno">Terreno</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>

                        </div>
                        <div class="control-group col-sm-12 center_item">
                            <label class="control-label texto_formulario" for="Calle">Calle</label>
                            <div class="controls">
                                <input type="text" name="calle" value="" class="form-control respuesta_formulario" required="" id="calle" >
                            </div>
                        </div>
                        <div class="control-group col-sm-6 center_item">
                            <label class="control-label texto_formulario" for="num_ext">Número Exterior</label>
                            <div class="controls">
                                <input  type="tel" name="num_ext" value="" class="form-control respuesta_formulario"  id="num_ext" >
                            </div>
                        </div>
                        <div class="control-group col-sm-6 center_item">
                            <label class="control-label texto_formulario" for="num_int">Número Interior</label>
                            <div class="controls">
                                <input  type="tel" name="num_int" value="" class="form-control respuesta_formulario"  id="num_int" >
                            </div>
                        </div>
                        <div class="control-group col-sm-12 center_item">
                            <label class="control-label texto_formulario" for="colonia">Colonia</label>
                            <div class="controls">
                                <input type="text"  name="colonia" value="" class="form-control respuesta_formulario"  id="colonia" >
                            </div>
                        </div>
                        <div class="control-group col-sm-12 center_item">
                            <label  class="control-label texto_formulario" for="municipio">Municipio</label>
                            <div class="controls">
                                <input  type="text"  name="municipio" value="" class="form-control respuesta_formulario" required="" id="municipio" >
                            </div>
                        </div>
                    </form>
                    <?php
                        if (!isset($_POST['municipio']) ) { ?>
                        <div class="control-group col-sm-12 centrar padding-top-5vh center_item">
                            <input class="btn_info_casa " name='submit' type="submit" onchange="initMap()"  value="Siguiente">
                        </div>
                    <?php } ?>

                    <script>
                        var cords;
                        var direc;
                        var calle = document.getElementById("calle").value;
                        var num_ext = document.getElementById("num_ext").value;
                        var num_int = document.getElementById("num_int").value;
                        var colonia = document.getElementById("colonia").value;
                        var municipio = document.getElementById("municipio").value;
                        function initMap() {
                            const myLatLng = { lat: 19.373191219984808, lng: -99.1649069195726 };
                            const newLatIng = {lat: 20.73566186958581, lng: -103.3776738885237};
                            const map = new google.maps.Map(document.getElementById("map"), {
                                zoom: 4,
                                center: myLatLng,
                            });

                            new google.maps.Marker({
                                position: myLatLng,
                                map,
                                title: "",
                            });
                            new google.maps.Marker({
                                position: newLatIng,
                                map,
                                title: "Casa",
                            })
                            var geocoder = new google.maps.Geocoder();
                            var inputAddress = document.getElementById("calle").value + " " + document.getElementById("num_ext").value + ", "+ document.getElementById("municipio").value + ", Jalisco";
                            direc = inputAddress;
                            console.log(inputAddress);
                            geocoder.geocode({
                                    "address": inputAddress
                                }, function (results, status) {
                                    console.log(results);
                                    console.log(status);

                                    if (status == google.maps.GeocoderStatus.OK) {
                                        var cordenada = {
                                            lat: results[0].geometry.location.lat(),
                                            lng: results[0].geometry.location.lng()
                                        }
                                        cords = cordenada;
                                        new google.maps.Marker({
                                            position: cordenada,
                                            map,
                                            title: 'ubicacion A'
                                        })
                                    }
                                }
                            );

                        }

                        window.initMap = initMap;

                        function get_maker(colonia, calle, numero, entre_calles) {
                            console.log(cordenada);
                        }
                    </script>


                    <div id="map"></div>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                    <script type="text/javascript" src="https://unpkg.com/xlsx@0.14.1/dist/xlsx.full.min.js"></script>
                    <script
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABFoveisZMRWysqm4eCzhf_Jx2Yka4jEg&callback=initMap&v=weekly"
                            defer
                    ></script>
                    <?php
                    if (isset($_POST['municipio']) ) {
                        echo "hola"?>

                    <?php } ?>
                </div>


            </div>
        </div>
    </main>

    <footer class="footer">
        <?php include $generales->path_base . 'templates/footer/_footer.php' ?>
    </footer>
    <a class="btn  " id="btn-scroll-up"> <img src="<?php echo $generales->url_base;?>assets/img/ICONO-16.jpg" alt="" class="img_scroll" /></a>
</div>

<?php include $generales->path_base . 'templates/java.php' ?>



</body>
</html>
