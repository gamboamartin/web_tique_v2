<?php
use config\generales;
include "./init.php";
require './vendor/autoload.php';
$generales = new generales();
?>

<div class=" box position-relative">
        <div class="col-md-12 ">
            <button type="submit" id="btn_head_vende"  onclick="location.href='<?php echo $generales->url_base; ?>formulario_vende.php'"> Agenda una cita </button>
        </div>
</div><!-- /.header-search-->

