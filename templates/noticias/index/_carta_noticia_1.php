
<?php
use config\generales;
$generales = new generales();
?>

<div class="col-sm-4 " >
    <div class="card ">

        <div class="row">

            <div class="col-md-12 contenido_texto_notice_lateral" >
                <img class="img_comillas"  src="<?php echo $generales->url_base; ?>assets/img/comillas.png"  />
                <div style="margin-top: -6%;">
                    <p class="texto_notice_secundario">
                        Una inmobiliaria de confianza sin duda alguna,
                        la atención por parte del personal es muy profesional y personalizada,
                        siempre estuvieron al pendiente de mis dudas y
                        fueron resueltas de forma clara y sencilla, recibí ayuda
                        en todo momento durante el trámite hasta la escrituración.
                    </p>
                </div>

                <div class="  col-md-6 " style="flex: 50%"  >
                <div class=" img-circle-cover " style="border: none; width: 60px; height: 60px; ">
                    <img   src="<?php echo $generales->url_base; ?>assets/img/user_blanco.png"  alt="" class="img-circle"  />
                </div>
                </div>
                <div class="col-md-6" style="margin-top: -12%;  flex: 50%; ">
                    <p class="usuario_comentario" style="float: right;  margin-right: 2vw"> Isabel Zúñiga</p>


                </div>
            </div>

        </div>
    </div>
</div>
