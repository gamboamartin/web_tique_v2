<?php

use base\conexion;
use config\generales;
use models\wt_hogar;

include "../init.php";
require '../vendor/autoload.php';
$generales = new generales();

require ($generales->path_base.'src/landing.php');
session_start();
//echo $_SESSION["datos"];
//echo $_SESSION["datos_form2"];
$resp_no = (isset($_GET["resp_no"])) ? 'No' : 'Si';
$resp_si = "";
if(isset($_GET["resp_si"])) {
    $resp_si= $_GET["resp_si"];
}
$resp_map = (isset($_GET["resp_map"])) ? 'Si' : 'No';
$cords = "";
if(isset($_GET["cords"])) {
    $cords= $_GET["cords"];
}
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
                        <a href="<?php echo $generales->url_base; ?>formulario/formulario3.php">
                            <img class="num_img" src="<?php echo $generales->url_base; ?>assets/img/formulario_vende/ICONO-22.png" alt="" />
                        </a>

                    </div>
                </div>

                <div class="col-md-12 padding_bottom_5vh " >
                    <div class="padding_bottom_5vh">
                        <h1 class="whatsapp_titulo">Descripción del inmueble</h1>
                    </div >
                    <div class="barra btn-group">
                        <a type="button" href="<?php echo $generales->url_base; ?>formulario_vende.php" class="btn btn_barra"></a>
                        <a type="button" href="<?php echo $generales->url_base; ?>formulario/formulario2.php" class="btn btn_barra"></a>
                        <a type="button" href="<?php echo $generales->url_base; ?>formulario/formulario3.php" class="btn btn_barra_3"></a>

                    </div>
                    <form  action="<?php echo $generales->url_base; ?>pasar_info_form.php" method="post">
                        <input name="resp_no" id="resp_no" value="<?php echo $resp_no ?>" hidden>
                        <input name="resp_si" id="resp_si" value="<?php echo $resp_si ?>" hidden>
                        <input name="resp_map" id="resp_map" value="<?php echo $resp_map ?>" hidden>
                        <input name="coordenadas" id="coordenadas" value="<?php echo $cords ?>" hidden>

                        <div  class=" padding-top-5vh  contenedor_formulario">
                            <div class="control-group col-sm-12 center_item">
                                <label class="control-label texto_formulario" for="motivo_venta">¿Por que motivo vendes tu vivienda?</label>
                                <div class="controls">
                                    <input type="text" name="motivo_venta" value="" class="form-control respuesta_formulario" required="" id="motivo_venta" >
                                </div>
                            </div>
                            <div class="control-group col-sm-12 center_item">
                                <label class="control-label texto_formulario" for="pregunta">¿Tu vivienda tiene adeudo?</label>
                            </div>
                            <div class="control-group col-sm-6 texto_checkbox center_item">
                                <label for="no_adeudo">No</label>
                                <input type="checkbox" id="no_adeudo" name="no_adeudo" value="" >
                            </div>
                            <div class="control-group col-sm-6 ">

                                <label class="control-label padding-right_1vw texto_formulario" for="si_adeudp">Si</label>

                                <input type="text" name="si_adeudp" placeholder="¿Cuanto?" value="" class="form-control respuesta_formulario_si" id="si_adeudp" >

                            </div>
                            <div class="control-group col-sm-12 center_item">
                                <label class="control-label texto_formulario" for="pregunta">Selecciona los tipos de adeudo</label>
                            </div>
                            <div class="control-group col-sm-6 texto_checkbox_list center_item">
                                <input type="checkbox" id="infonavit" name="infonavit" value="infonavit" > <label for="infonavit">Infonavit</label><br>
                                <input type="checkbox" id="fovisste" name="fovisste" value="fovisste" > <label for="fovisste">Fovisste</label><br>
                                <input type="checkbox" id="predial" name="predial" value="predial" > <label for="predial">Predial</label><br>
                                <input type="checkbox" id="luz" name="luz" value="luz" > <label for="luz">Luz</label>
                            </div>
                            <div class="control-group col-sm-6 texto_checkbox_list center_item">
                                <input type="checkbox" id="hipotecario" name="hipotecario" value="hipotecario" > <label for="hipotecario">Hipotecario</label><br>
                                <input type="checkbox" id="otro_gravamen" name="otro_gravamen" value="otro_gravamen" > <label for="otro_gravamen">Otro Gravamen</label><br>
                                <input type="checkbox" id="agua" name="agua" value="agua" > <label for="agua">Agua</label><br>
                                <input type="checkbox" id="mantenimiento" name="mantenimiento" value="mantenimiento" > <label for="mantenimiento">Mantenimiento</label>
                            </div>


                            <div class="control-group col-sm-6 center_item">
                                <label class="control-label texto_formulario" for="mts_terreno">Mts de terreno</label>
                                <div class="controls">
                                    <input  type="text" name="mts_terreno" value="" class="form-control respuesta_formulario" required="" id="mts_terreno" >
                                </div>
                            </div>
                            <div class="control-group col-sm-6 center_item">
                                <label class="control-label texto_formulario" for="mts_construc">Mts de construcción</label>
                                <div class="controls">
                                    <input  type="text" name="mts_construc" value="" class="form-control respuesta_formulario" id="mts_construc" >
                                </div>
                            </div>
                            <div class="control-group col-sm-6 center_item">
                                <label class="control-label texto_formulario" for="habitaciones">Habitaciones</label>
                                <div class="controls">
                                    <input  type="text" name="habitaciones" value="" class="form-control respuesta_formulario" id="habitaciones" >
                                </div>
                            </div>
                            <div class="control-group col-sm-6 center_item">
                                <label class="control-label texto_formulario" for="baños">Baños</label>
                                <div class="controls">
                                    <input  type="text" name="baños" value="" class="form-control respuesta_formulario"  id="baños" >
                                </div>
                            </div>
                            <div class="control-group col-sm-12 center_item">
                                <label class="control-label texto_formulario" for="depa">Sí es departamento ¿En qué piso está?</label>
                                <div class="controls">
                                    <input type="number" min="0" name="depa" value="" class="form-control respuesta_formulario"  id="depa" >
                                </div>
                            </div>
                            <div class="control-group col-sm-12 center_item">
                                <label class="control-label texto_formulario" for="pisos">Sí es casa ¿Cuántos pisos son?</label>
                                <div class="controls">
                                    <input type="number" min="0" name="pisos" value="" class="form-control respuesta_formulario" id="pisos" >
                                </div>
                            </div>
                            <div class="control-group col-sm-12 texto_checkbox center_item">
                                <label class="control-label texto_formulario" for="pregunta">Sí es coto ¿Tiene alguna amenidades?</label>
                            </div>
                            <div class="control-group col-sm-6 texto_checkbox center_item">
                                <label for="amenidades_no">No</label>
                                <input type="checkbox" id="amenidades_no" name="amenidades_no" value="" >
                            </div>
                            <div class="control-group col-sm-6 center_item">

                                <label class="control-label padding-right_1vw texto_formulario" for="amenidades_si">Si</label>

                                <input type="text" name="amenidades_si" placeholder="¿Cuales?" value="" class="form-control respuesta_formulario_si" id="amenidades_si" >

                            </div>

                        </div>


                        <div class="control-group col-sm-12 center_item color_azul  margin_top contenedor_formulario_4 padding_bottom_10vh">
                            <div class=" pull-sm-up  col-xs-12 " style="text-align: center; float: none;">
                                <a href="<?php echo $generales->url_base; ?>formulario/formulario3.php">
                                    <img class="num_img4" src="<?php echo $generales->url_base; ?>assets/img/formulario_vende/ICONO-23.png" alt="" />
                                </a>

                            </div>
                            <h1 class="titulo_slider">Día de la cita</h1>
                            <h2 class="subtitulo_formulario_4">Por favor compartenos tu disponibilidad de horario
                                para ir a la vivienda que quieres vender</h2>
                            <br>

                            <div class="control-group col-sm-6 margin_top center_item">
                                <label class="control-label contenedor_hora_fecha subtitulo_slider" for="fecha">Día de la semana</label>
                                <div class="controls contenedor_hora_fecha">
                                    <input class="form-control redondear_esquinas" type="date" name="fecha" id="fecha" placeholder="Introduce una fecha" required min=<?php $hoy=date("Y-m-d"); echo $hoy;?> />

                                </div>
                            </div>

                            <div class="control-group col-sm-6 margin_top center_item">
                                <label class="control-label contenedor_hora_fecha subtitulo_slider" for="hora">Día de la semana</label>
                                <div class="controls contenedor_hora_fecha">
                                    <select name="hora" id="hora" required class="form-control redondear_esquinas">
                                        <option value="">Selecciona</option>
                                        <option value="09:00">09:00 A.M</option>
                                        <option value="09:30">09:30 A.M</option>
                                        <option value="10:00">10:00 A.M</option>
                                        <option value="10:30">10:30 A.M</option>
                                        <option value="11:00">11:00 A.M</option>
                                        <option value="11:30">11:30 A.M</option>
                                        <option value="12:00">12:00 P.M</option>
                                        <option value="12:30">12:30 P.M</option>
                                        <option value="01:00">01:00 P.M</option>
                                        <option value="01:30">01:30 P.M</option>
                                        <option value="02:00">02:00 P.M</option>
                                        <option value="02:30">02:30 P.M</option>
                                        <option value="03:00">03:00 P.M</option>
                                        <option value="03:30">03:30 P.M</option>
                                        <option value="04:00">04:00 P.M</option>
                                        <option value="04:30">04:30 P.M</option>
                                        <option value="05:00">05:00 P.M</option>
                                        <option value="05:30">05:30 P.M</option>
                                    </select>
                                </div>

                            </div>


                        </div>

                        <input name="url_siguiente" value="vende.php" hidden>
                        <div class="control-group col-sm-12 centrar padding-top-5vh center_item">
                            <input class="btn_info_casa " name='submit' type="submit" value="Enviar">
                        </div>


                    </form>

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