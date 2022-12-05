<?php
use config\generales;
$generales = new generales();

use base\conexion;
use gamboamartin\errores\errores;
use models\wt_hogar;

$conf_database = new stdClass();

$paths_conf = new stdClass();
$paths_conf->generales = '/var/www/html/web_tique/config/generales.php';
$paths_conf->database = '/var/www/html/web_tique/config/database.php';
$paths_conf->views = '/var/www/html/web_tique/config/views.php';

$cnx = new conexion(paths_conf: $paths_conf);
$generales = new generales();

$wt_hogar_modelo = new wt_hogar(conexion::$link);

$landing_url = get_landing_url();
$landing_url_limpia = limpia_url_landing(url_landing: $landing_url);
$landing_url_sin_ext = quitar_php(url_landing_limpia: $landing_url_limpia);

$wt_hogar = $wt_hogar_modelo->obtener_registro_wt_hogar($landing_url_sin_ext);
$nombre_hogar = '';

if($wt_hogar > 0){
    $nombre_hogar = $wt_hogar['wt_hogar_descripcion'];
}


?>
<head>

    <style>
        body {font-family: Arial, Helvetica, sans-serif;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #ffffff;
            margin: auto;
            padding: 0;
            border: 1px solid #888;
            width: 80%;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }

        /* Add Animation */
        @-webkit-keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }

        @keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }

        /* The Close Button */
        .close {
            padding-bottom: 10vh;
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            padding: 2px 16px;
            background-color: #0000Cc;
            color: #ffffff;
        }

        .modal-body {padding: 2px 16px;}

        .modal-footer {
            padding: 2px 16px;
            background-color: #ffffff;
            color: #ffffff;
        }
    </style>
</head>
<div class="container-fluid h-100 color_azul contenedor_mapa_text padding_bottom_5vh padding-top-5vh">
    <div class="row w-100 align-items-center" >
        <div class="col text-center" >
            <div class="container " >
                <h1 class="texto_mapa"> ¿Listo, para el siguiente paso?</h1>
                <br>
            </div>
            <div class="container padding_bottom_5vh">
                <h2 class="subtitulo_formulario_4"> Contacta uno de nuestros asesores inmobiliarios para
                    conocer tu siguiente hogar</h2>
            </div>
            <div class="container-fluid h-100">
                <div class="row w-100 align-items-center">
                    <div class="col text-center">
                        <button class="btn btn-danger regular-button btn_info_casa" style="background: #FFFFFF !important; color: #0000Cc !important;" id="myBtn" >  Ver todo  </button>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content redondear_esquinas_30px">
        <div class="modal-header redondear_esquinas_arriba">
            <span class="close padding-top-5vh"> &times;</span>
            <h2>Modal Header</h2>
        </div>
        <div class="modal-body">


            <form class=" padding-top-5vh  "  action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
                <div class="control-group col-sm-12 center_item">
                    <label class="control-label texto_formulario" for="name">Nombre completo</label>
                    <div class="controls">
                        <input type="text" name="name" value="" class="form-control respuesta_formulario" required id="name">
                    </div>

                </div>
                <div class="control-group col-sm-12 center_item">
                    <label class="control-label texto_formulario" for="phone">Teléfono</label>
                    <div class="controls">
                        <input type="tel" name="phone" value="" class="form-control respuesta_formulario" required id="phone"
                               attern="[0-9]{10}" title="Ingresa 10 digitos. Ejemplo: 3316052732" >
                    </div>
                </div>
                <div class="control-group col-sm-12 center_item">
                    <label class="control-label texto_formulario" for="mail">Email</label>
                    <div class="controls">
                        <input  type="text" name="mail" value="" class="form-control respuesta_formulario" id="mail"
                                pattern="[a-z0-9!#$%&\'*+=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&\'*+=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?"
                                title="Agregar alguna extencion valida. Ejemplo: nombre@ejemplo.algo" >
                    </div>
                </div>
                <div class="control-group col-sm-12 center_item">
                    <label class="control-label texto_formulario" for="message">Mensaje o comentario</label>
                    <div class="controls">
                        <input type="text" name="message" value="" class="form-control respuesta_formulario" required id="message">
                    </div>

                </div>
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
                <div class="form-group" hidden>
                    <input type="text" name="hogar" class="form-control" placeholder="Hogar" value=" <?php echo $nombre_hogar;?>" />
                </div>
                <div class="form-group" hidden>
                    <input type="text" name="url_redireccion" class="form-control" placeholder="Hogar" value="<?php echo $landing_url_limpia;?>" />
                </div>
                <div class="form-group form-group-submit col-sm-6 padding-top-5vh">
                    <div class="container-fluid h-100"  >
                        <div class="row w-100 align-items-center">
                            <div class="col text-center ">
                                <button type="button" class="btn btn-danger regular-button btn_info_casa" style="background-color: #FF3300 !important;" onclick="document.getElementById('myModal').style.display='none'">Cancelar</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="form-group form-group-submit col-sm-6 padding-top-5vh">
                    <div class="container-fluid h-100"  >
                        <div class="row w-100 align-items-center">
                            <div class="col text-center">
                                <input type="submit" name='submit' class="btn btn-danger regular-button btn_info_casa" value="Enviar"  />
                            </div>
                        </div>
                    </div>

                </div>


            </form>




        </div>
        <div class="modal-footer redondear_esquinas_abajo">
            <div class="modal-footer">

            </div>

        </div>

    </div>

</div>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
