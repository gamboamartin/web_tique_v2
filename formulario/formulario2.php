<?php

use base\conexion;
use config\generales;
use models\wt_hogar;

include "../init.php";
require '../vendor/autoload.php';
$generales = new generales();

require ($generales->path_base.'src/landing.php');
session_start();
$datos=$_SESSION["datos"];
$georeferencia_hogar ="";
$ubicacion_hogar="";
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
                                <input type="text" name="calle" value="" class="form-control respuesta_formulario" required="" id="calle">
                            </div>
                        </div>
                        <div class="control-group col-sm-6 center_item">
                            <label class="control-label texto_formulario" for="num_ext">Número Exterior</label>
                            <div class="controls">
                                <input  type="text" name="num_ext" value="" class="form-control respuesta_formulario"  id="num_ext" >
                            </div>
                        </div>
                        <div class="control-group col-sm-6 center_item">
                            <label class="control-label texto_formulario" for="num_int">Número Interior</label>
                            <div class="controls">
                                <input  type="text" name="num_int" value="" class="form-control respuesta_formulario"  id="num_int" >
                            </div>
                        </div>
                        <div class="control-group col-sm-12 center_item">
                            <label class="control-label texto_formulario" for="colonia">Colonia</label>
                            <div class="controls">
                                <input type="text"  name="colonia" value="" class="form-control respuesta_formulario"  id="colonia" >
                            </div>
                        </div>
                        <div class="control-group col-sm-12 center_item">
                            <label  class="control-label texto_formulario"   for="municipio">Municipio</label>
                            <div class="controls">
                                <input  type="text" onchange="this.form.submit()" name="municipio" value="" class="form-control respuesta_formulario" required="" id="municipio" >
                            </div>
                        </div>
                        <div class="control-group col-sm-12 texto_checkbox center_item">
                            <label class="control-label texto_formulario" for="pregunta">¿La vivienda esta en un coto?</label>
                        </div>
                        <div class="control-group col-sm-5 texto_checkbox center_item">
                            <label for="resp_no">No</label>
                            <input type="checkbox" id="resp_no" name="resp_no"  value="" >
                        </div>
                        <div class="control-group col-sm-7 center_item">

                            <label class="control-label padding-right_1vw texto_formulario" for="si">Sí</label>

                            <input type="text" name="resp_si"  placeholder="¿como se llama el coto?" value="" class="form-control respuesta_formulario_si" id="resp_si" >

                        </div>
                        <?php
                        if (isset($_POST['municipio']) ) {
                            $datos_cliente = '<h3>Calle: ' . utf8_decode($_POST['calle']).
                                '</h3><br><h3> Número exterior: ' . utf8_decode($_POST['num_ext']) .
                                '</h3><br><h3> Número interior: ' . utf8_decode($_POST['num_int']) .
                                '</h3><br><h3> Colonia: ' . utf8_decode($_POST['colonia']) .
                                '</h3><br><h3> Municipio: ' . utf8_decode($_POST['municipio']);

                            $_SESSION["datos_form2"]= $datos_cliente;
                            ?>

                            <div class="control-group col-sm-7 center_item">

                                <label class="control-label padding-right_1vw texto_formulario" for="si">¿La ubicación es correcta?</label>


                            </div>
                            <div class="control-group col-sm-5 texto_checkbox center_item">

                                <label for="resp_no">Si</label>
                                <input type="checkbox" id="resp_map" name="resp_map"  value="" >
                            </div>

                        <?php } ?>
                        <div class=" padding-top-5vh  contenedor_mapa" id="map"></div>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                        <script type="text/javascript" src="https://unpkg.com/xlsx@0.14.1/dist/xlsx.full.min.js"></script>
                        <script
                                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABFoveisZMRWysqm4eCzhf_Jx2Yka4jEg&callback=initMap&v=weekly"
                                defer
                        ></script>

                    </form>

                    <div class="control-group col-sm-12 centrar padding-top-5vh center_item">
                        <input class="btn_info_casa " name='submit' type="submit"  onclick="url_siguiente()"  value="Siguiente">
                    </div>

                    <script>
                        var calle = document.getElementById("calle").value  = "<?php echo($_POST["calle"]);?>";
                        var num_ext = document.getElementById("num_ext").value = "<?php echo($_POST["num_ext"]);?>";
                        var num_int = document.getElementById("num_int").value = "<?php echo($_POST["num_int"]);?>";
                        var colonia = document.getElementById("colonia").value = "<?php echo($_POST["colonia"]);?>";
                        var municipio = document.getElementById("municipio").value = "<?php echo($_POST["municipio"]);?>";
                        var direccion = calle+ " " +num_ext+ ", "+ municipio+ ", Jalisco";
                        var cords;
                        var direc;
                        var latlong;
                        function initMap() {
                            const myLatLng = { lat: 20.6595328, lng: -103.3516331 };
                            const newLatIng = {lat: 20.73566186958581, lng: -103.3776738885237};
                            const map = new google.maps.Map(document.getElementById("map"), {
                                zoom: 11,
                                center: myLatLng,
                            });
                            var geocoder = new google.maps.Geocoder();
                            var inputAddress = direccion;
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
                                            title: 'Mi ubicacion'
                                        })
                                    }
                                }
                            );


                        }

                        window.initMap = initMap;


                        initMap();
                        function url_siguiente(){
                            var resp_no = document.getElementById("resp_no").checked;
                            var resp_si = document.getElementById("resp_si").value;
                            var resp_map = document.getElementById("resp_map").checked;
                            var url = "<?php echo $generales->url_base; ?>formulario/formulario3.php?resp_no=" + encodeURIComponent(resp_no)
                                + "&resp_si=" + encodeURIComponent(resp_si)+ "&resp_map=" + encodeURIComponent(resp_map);
                            window.location.href = url;

                        }


                    </script>





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
