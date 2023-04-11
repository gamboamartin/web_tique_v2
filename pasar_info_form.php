<?php
use src\notificacion;
use config\generales;
require 'vendor/autoload.php';

$generales = new generales();


session_start();//crea una sesión o reanuda la actual basada en un identificador de sesión pasada mediante una petición GET o POST, o pasada mediante una cookie .
$datos=$_SESSION["datos"];
$datos2=$_SESSION["datos_form2"];
//se mandan a llamar los datos se las anteriosers sesiones


if(isset($_POST['hora']) and isset($_POST['fecha']) ) {
    //si laS variableS 'hora' y 'fecha' no estan vacías, podemos entrar al if
    // (esta información se obtiene del método post del formulario3.php)

    $no_adeudo = (isset($_POST["no_adeudo"])) ? 'No' : 'Si';
    $infonavit = (isset($_POST["infonavit"])) ? 'Si' : 'No';
    $fovisste = (isset($_POST["fovisste"])) ? 'Si' : 'No';
    $predial = (isset($_POST["predial"])) ? 'Si' : 'No';
    $luz = (isset($_POST["luz"])) ? 'Si' : 'No';
    $hipotecario = (isset($_POST["hipotecario"])) ? 'Si' : 'No';
    $otro_gravamen = (isset($_POST["otro_gravamen"])) ? 'Si' : 'No';
    $agua = (isset($_POST["agua"])) ? 'Si' : 'No';
    $mantenimiento = (isset($_POST["mantenimiento"])) ? 'Si' : 'No';
    $amenidades_no = (isset($_POST["amenidades_no"])) ? 'No' : 'Si';
    //los datos que son tipo checkbox se guardan de esta manera para saber si la casilla fue marcada o no

    $notificacion = new notificacion(); // se declara nueva notificación

    $datos_cliente = '<h3>La vivienda es un coto: ' . utf8_decode($_POST['resp_no']).
        '</h3><br><h3> Nombre del coto: ' . utf8_decode($_POST['resp_si']).
        '</h3><br><h3> El mapa esta bien ubicado: ' . utf8_decode($_POST['resp_map']).
        '</h3><br><h3> Coordenadas: ' . utf8_decode($_POST['coordenadas']).
        '</h3><br><h3> Motivo de venta: ' . utf8_decode($_POST['motivo_venta']).
        '</h3><br><h3> Tinene adeudo: ' . utf8_decode($no_adeudo) .
        '</h3><br><h3> Tinene adeudo por la cantidad de: ' . utf8_decode($_POST['si_adeudp']) .
        '</h3><br><h3> Adeudo en infonavit: ' . utf8_decode($infonavit) .
        '</h3><br><h3> Adeudo en fovisste: ' . utf8_decode($fovisste) .
        '</h3><br><h3> Adeudo en predial: ' . utf8_decode($predial) .
        '</h3><br><h3> Adeudo en luz: ' . utf8_decode($luz) .
        '</h3><br><h3> Adeudo en hipoteca: ' . utf8_decode($hipotecario) .
        '</h3><br><h3> Adeudo en Otro Gravamen: ' . utf8_decode($otro_gravamen) .
        '</h3><br><h3> Adeudo en agua: ' . utf8_decode($agua) .
        '</h3><br><h3> Adeudo en mantenimiento: ' . utf8_decode($mantenimiento) .
        '</h3><br><h3> Mts de terreno: ' . utf8_decode($_POST['mts_terreno']) .
        '</h3><br><h3> Mts en construccion: ' . utf8_decode($_POST['mts_construc']) .
        '</h3><br><h3> Habitaciones: ' . utf8_decode($_POST['habitaciones']) .
        '</h3><br><h3>'.utf8_decode("Baños").': ' . utf8_decode($_POST['baños']) .
        '</h3><br><h3> Es un departamento y esta en el piso: ' . utf8_decode($_POST['depa']) .
        '</h3><br><h3> Es una casa y tiene: ' . utf8_decode($_POST['pisos']) .' pisos'.
        '</h3><br><h3> Amenidades: ' . utf8_decode($amenidades_no) .
        '</h3><br><h3> Las amenidades son: ' . utf8_decode($_POST['amenidades_si']) .
        '</h3><br><h3> Fecha de la cita: ' . utf8_decode($_POST['fecha']) .
        '</h3><br><h3> Hora de la cita: ' . utf8_decode($_POST['hora']) ;
    //se almacenan los datos enviados por el post del formulario3.php
    $datos_formulario= $datos . $datos2 . $datos_cliente;
    //se une la información de los tes formularios
    $contenido = new stdClass(); // se genera una nueva stdClass
    $contenido->subject = 'Contacto que quiere vender su hogar, termino formulario'; //asunto de la notificación
    $contenido->mensaje = $datos_formulario; //contenido de la notificación

    $destinatario = new stdClass(); // se genera una nueva stdClass
    $destinatario->email = 'alejandro.esquivel@inmobiliariatique.com';//correo de la persona a la cual se le enviará la notificación
    $destinatario->name = 'Alejandro Esquivel';//nombre de la persona a la cual se le enviará la notificación
    // (dueñ@ del email o correo proporcionado en la anterior línea de código)
    $envia = $notificacion->envia(contenido: $contenido,destinatario:  $destinatario);
    if(gamboamartin\errores\errores::$error){
        $error = (new gamboamartin\errores\errores())->error(mensaje: 'Error',data:  $envia);
        print_r($error);
        die('Error');
    }
    //se envía el correo o notificación con las variables $contenido y $destinatario
    session_destroy();// se destruye la sesión
    //var_dump($envia);
    header('Location:' . $generales->url_base .$_POST['url_siguiente']);
    //si se envía exitosamente la notificación nos redirigiremos a la url_redireccion la cual también la obtendremos del formulario formulario3.php

}

?>

