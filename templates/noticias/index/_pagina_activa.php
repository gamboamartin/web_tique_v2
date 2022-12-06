<?php
use config\generales;

$generales = new generales();

?>
<div class="item active ">
    <div class="row" >
        <?php include $generales->path_base.'templates/noticias/index/_carta_noticia.php'?>
        <?php include $generales->path_base.'templates/noticias/index/_carta_noticia_2.php'?>

    </div>
</div>