<?php
use src\notificacion;
use config\generales;
require 'vendor/autoload.php';
$generales = new generales();

if(isset($_POST['mail'])) {

    $notificacion = new notificacion();

    $datos_cliente = '<h3>Nombre: ' . utf8_decode($_POST['name']).
        '</h3><br><h3> Apellido: ' . utf8_decode($_POST['lastName']) .
        '</h3><br><h3>'.utf8_decode("Teléfono").': ' . utf8_decode($_POST['phone']) .
        '</h3><br><h3>E-mail: ' . utf8_decode($_POST['mail']);
    session_start();
    $_SESSION["datos"]=$datos_cliente;
    $contenido = new stdClass();
    $contenido->subject = 'Contacto que quiere vender su hogar';
    $contenido->mensaje = $datos_cliente;

    $destinatario = new stdClass();
    $destinatario->email = 'jazmin.rodriguez@ivitec.com.mx';
    $destinatario->name = 'Alejandro Esquivel';
    $envia = $notificacion->envia(contenido: $contenido,destinatario:  $destinatario);
    if(gamboamartin\errores\errores::$error){
        $error = (new gamboamartin\errores\errores())->error(mensaje: 'Error',data:  $envia);
        print_r($error);
        die('Error');
    }
    //var_dump($envia);
    header('Location:' . $generales->url_base .$_POST['url_siguiente']);

}

