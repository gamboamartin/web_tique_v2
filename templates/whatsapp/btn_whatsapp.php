<?php
use config\generales;
$generales = new generales();
?>
<div class="container-fluid h-100"  >
    <div class="row w-100 align-items-center">
        <div class="col text-center">

            <div class="position_whats"  >
                <a class="transparente" href="https://api.whatsapp.com/send?phone=3316052732&text=Hola Alejandro, me gustaría obtener informes mas detallados acerca de: " target="_blank"><img class="img_whats img_big" src=" <?php echo $generales->url_base?>assets/img/whats1.png" alt="" /></i></a>
                
            </div>

            <div class="ocultar_responsivo"  >
                <a class="btn btn-danger regular-button btn_whatsapp" href="https://web.whatsapp.com/send?phone=3316052732&text=Hola Alejandro, me gustaría obtener informes mas detallados acerca de: " target="_blank" >  Whatsapp  </a>
            </div>

            <div class="ocultar_pag_web" >
                <a class="btn btn-danger regular-button btn_whatsapp" href="https://api.whatsapp.com/send?phone=3316052732&text=Hola Alejandro, me gustaría obtener informes mas detallados acerca de: " target="_blank" >  Whatsapp  </a>
            </div>


        </div>
    </div>
</div>