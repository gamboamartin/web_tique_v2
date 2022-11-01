
<?php
use config\generales;
$generales = new generales();
?>

<div class="col-sm-4 " >
    <div class="card ">

        <div class="row">

            <div class="col-md-12 contenido_texto_notice_lateral" >
                <img class="img_comillas"  src="<?php echo $generales->url_base; ?>assets/img/comillas.png"  />
                <p class="texto_notice_secundario">
                    Lorem ipsum dolor sit amet, adipiscing
                    elit, sed diam nonummy nibh euismod
                    tincidunt ut laoreet dolore magna
                    aliquam erat volutpat. Ut wisi enim ad
                    minim veniam, quis nostrud exerci
                </p>
                <div class="  col-md-6 ">
                <div class=" img-circle-cover ">
                    <img  src="<?php echo $generales->url_base; ?>assets/img/user.png" alt="" class="img-circle" />
                </div>
                </div>
                <div class="col-md-6">
                    <p class="usuario_comentario"> usuario 01</p>


                </div>
            </div>

        </div>
    </div>
</div>
