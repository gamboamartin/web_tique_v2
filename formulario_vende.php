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
                    <div class="contenedor_whats posicion_whats" >
                        <?php
                        include $generales->path_base . 'templates/formulario/formulario_1.php';
                        ?>
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


