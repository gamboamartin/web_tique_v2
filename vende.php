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
    <?php include $generales->path_base.'templates/css.php'?>
</head>
<body class="color_blanco">
<div id="fb-root"></div>
<div class="container container-wrapper">
    <header class="header">
        <?php include $generales->path_base.'templates/head/_head.php'?>
    </header><!-- /.header-->
    <?php include $generales->path_base . 'templates/img_principal_vende/img_head.php' ?>
    <?php include $generales->path_base.'templates/boton_head_vende/_btn.php' ?>
    <main class="main ">
        <div class="container contenedor_index">
            <div class="row">
                <div class="col-md-12">
                    <div class="contenedor_whats posicion_whats" >
                        <?php
                        include $generales->path_base . 'templates/porque_vender/porque_vender.php';
                        ?>
                    </div>
                    <div >
                        <?php
                        include $generales->path_base . 'templates/porque_vender/porque_vender_img.php';
                        include $generales->path_base . 'templates/boton_head_vende/_btn_quiero_vender.php';
                        include $generales->path_base . 'templates/texto_listo/texto_listo.php';

                        ?>
                    </div>

                    <?php  include $generales->path_base.'templates/noticias/index/_noticias_index.php'?>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <?php include $generales->path_base.'templates/footer/_footer.php' ?>
    </footer>
    <a class="btn  " id="btn-scroll-up"> <img src="<?php echo $generales->url_base;?>assets/img/ICONO-16.jpg" alt="" class="img_scroll" /></a>
</div>

<?php include $generales->path_base.'templates/java.php' ?>

</body>

</html>

