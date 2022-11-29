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


if(isset($_POST['municipio'])) {
    echo "hola";

    header('Location:' . $generales->url_base .$_POST['url_siguiente']);

}

?>

