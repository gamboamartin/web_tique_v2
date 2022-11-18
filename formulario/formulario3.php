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
                        <form class=" padding-top-5vh  contenedor_formulario" action="<?php echo $generales->url_base; ?>compra_hogar.php" method="post">
                            <div class="control-group col-sm-12 center_item">
                                <label class="control-label texto_formulario" for="tipo_vivienda">Tipo de vivienda</label>
                                <div class="controls">
                                    <select name="tipo_vivienda" required class="form-control respuesta_formulario">
                                        <option>Casa</option>
                                        <option>Departamento</option>
                                        <option>Duplex</option>
                                        <option>Terreno</option>
                                        <option>Otro</option>
                                    </select>
                                </div>

                            </div>
                            <div class="control-group col-sm-12 center_item">
                                <label class="control-label texto_formulario" for="Calle">Calle</label>
                                <div class="controls">
                                    <input type="text" name="Calle" value="" class="form-control respuesta_formulario" required="" id="calle" >
                                </div>
                            </div>
                            <div class="control-group col-sm-6 center_item">
                                <label class="control-label texto_formulario" for="num_ext">Número Exterior</label>
                                <div class="controls">
                                    <input  type="tel" name="num_ext" value="" class="form-control respuesta_formulario" required="" id="num_ext" >
                                </div>
                            </div>
                            <div class="control-group col-sm-6 center_item">
                                <label class="control-label texto_formulario" for="num_int">Número Interior</label>
                                <div class="controls">
                                    <input  type="tel" name="num_int" value="" class="form-control respuesta_formulario" required="" id="num_int" >
                                </div>
                            </div>
                            <div class="control-group col-sm-12 center_item">
                                <label class="control-label texto_formulario" for="colonia">Colonia</label>
                                <div class="controls">
                                    <input type="text"  name="colonia" value="" class="form-control respuesta_formulario" required="" id="colonia" >
                                </div>
                            </div>
                            <div class="control-group col-sm-12 center_item">
                                <label class="control-label texto_formulario" for="municipio">Municipio</label>
                                <div class="controls">
                                    <input type="email"  name="municipio" value="" class="form-control respuesta_formulario" required="" id="municipio" >
                                </div>
                            </div>
                            <div class="control-group col-sm-12 texto_checkbox center_item">
                                <label class="control-label texto_formulario" for="pregunta">¿La vivienda esta en un coto?</label>
                            </div>
                            <div class="control-group col-sm-5 texto_checkbox center_item">
                                <label for="terminos">No</label>
                                <input type="checkbox" id="terminos" name="terminos" value="terminos" required="">
                            </div>
                            <div class="control-group col-sm-7 center_item">

                                <label class="control-label padding-right_1vw texto_formulario" for="si">Si</label>

                                    <input type="text" name="resp_si" placeholder="¿como se llama el coto?" value="" class="form-control respuesta_formulario_si" required="" id="calle" >

                            </div>
                            <input name="url_siguiente" value="formulario/formulario2.php" hidden>
                            <div class="control-group col-sm-12 centrar padding-top-5vh center_item">
                                <input class="btn_info_casa " name='submit' type="submit" value="Siguiente">
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
