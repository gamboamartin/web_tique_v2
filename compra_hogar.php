<?php
use src\notificacion;
use config\generales;
require 'vendor/autoload.php';
$generales = new generales();


if(isset($_POST['mail'])) {

    $notificacion = new notificacion();
    $data = '<h3>Nombre: ' . utf8_decode($_POST['name']).
        '</h3><br><h3>'.utf8_decode("Teléfono").': ' .
        utf8_decode($_POST['phone']) .
        '</h3><br><h3>E-mail: ' .
        utf8_decode($_POST['mail']) . '</h3><br><h3>Estado: ' .
        utf8_decode($_POST['estado']) . '</h3><br><h3>Municipio: ' . utf8_decode($_POST['municipio']) . '</h3><br><h3>Comentarios: ' . utf8_decode($_POST['message']);
    $contenido = new stdClass();
    $contenido->subject = 'Contacto que quiere vender su hogar, situada en el estado de: '. utf8_decode($_POST['estado']);;
    $contenido->mensaje = $data;

    $destinatario = new stdClass();
    $destinatario->email = 'alejandro.esquivel@inmobiliariatique.com';
    $destinatario->name = 'Alejandro Esquivel';
    $envia = $notificacion->envia(contenido: $contenido,destinatario:  $destinatario);
    if(gamboamartin\errores\errores::$error){
        $error = (new gamboamartin\errores\errores())->error(mensaje: 'Error',data:  $envia);
        print_r($error);
        die('Error');
    }
    //var_dump($envia);
    header('Location:' . $generales->url_base .$_POST['url_redireccion']);

}

