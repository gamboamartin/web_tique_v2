<?php
use config\generales;
include "./init.php";
require './vendor/autoload.php';
$generales = new generales();
?>

</style>
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
                    <div class="contenedor_whats posicion_whats" style="background-color: #FFFFFF; padding-bottom: 30px">
                        <?php
                        include $generales->path_base . 'templates/porque_vender/porque_vender.php';
                        include $generales->path_base . 'templates/porque_vender/porque_vender_img.php';
                        include $generales->path_base . 'templates/boton_head_vende/_btn_quiero_vender.php';

                        ?>
                    </div>



                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <?php include $generales->path_base.'templates/footer/_footer.php' ?>
    </footer>
    <a class="btn btn-scoll-up color-secondary" id="btn-scroll-up"></a>
</div>

<?php include $generales->path_base.'templates/java.php' ?>

</body>

</html>

