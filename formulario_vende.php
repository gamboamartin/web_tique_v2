<?php
use config\generales;
include "./init.php";
require './vendor/autoload.php';
$generales = new generales();


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
                            <img class="num_img" src="<?php echo $generales->url_base; ?>assets/img/formulario_vende/ICONO-20.png" alt="" />
                        </a>

                    </div>
                </div>

                <div class="col-md-12 padding_bottom_5vh " >
                    <div class="padding_bottom_5vh">
                        <h1 class="whatsapp_titulo">¿Cómo te contactamos?</h1>
                    </div >
                    <div class="barra btn-group ">
                        <a type="button" href="<?php echo $generales->url_base; ?>comprar_hogar.php" class="btn btn_barra"></a>


                    </div>
                    <form class=" padding-top-5vh  contenedor_formulario" action="<?php echo $generales->url_base; ?>compra_hogar.php" method="post">
                        <div class="control-group col-sm-12 center_item">
                            <label class="control-label texto_formulario" for="nombre">Nombre</label>
                            <div class="controls">
                                <input type="text" name="name" value="" class="form-control respuesta_formulario" required="" id="nombre" >
                            </div>
                        </div>
                        <div class="control-group col-sm-12 center_item">
                            <label class="control-label texto_formulario" for="apellido">Apellido</label>
                            <div class="controls">
                                <input type="text" name="lastName" value="" class="form-control respuesta_formulario" required="" id="apellido" >
                            </div>
                        </div>
                        <div class="control-group col-sm-12 center_item">
                            <label class="control-label texto_formulario" for="telefono">Teléfono</label>
                            <div class="controls">
                                <input pattern="[0-9]{10}" title="Ingresa 10 digitos. Ejemplo: 3316052732" type="tel" name="phone" value="" class="form-control respuesta_formulario" required="" id="telefono" >
                            </div>
                        </div>
                        <div class="control-group col-sm-12 center_item">
                            <label class="control-label texto_formulario" for="correo">Correo electrónico</label>
                            <div class="controls">
                                <input type="email"  pattern="[a-z0-9!#$%&\'*+=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&\'*+=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?"
                                       title="Agregar alguna extencion valida. Ejemplo: nombre@ejemplo.algo" name="mail" value="" class="form-control respuesta_formulario" required="" id="correo" >
                            </div>
                        </div>
                        <div class="control-group col-sm-12 texto_checkbox center_item">
                            <input type="checkbox" id="terminos" name="terminos" value="terminos" required="">
                            <label for="terminos">Acepto todos los términos y condiciones</label><br>

                        </div>
                        <input name="url_siguiente" value="formulario/formulario2.php" hidden>
                        <div class="control-group col-sm-12 centrar padding-top-5vh center_item">
                            <input class="btn_info_casa " name='submit' type="submit" value="Siguiente">
                        </div>



                    </form>

                </div>



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

