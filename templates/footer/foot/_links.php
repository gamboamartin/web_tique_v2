<?php
use config\generales;
$generales = new generales();
?>
<div >
    <ul>
        <p><a href="<?php echo $generales->url_base; ?>index.php" target="_blank">Home</a></p>
        <p><a href="<?php echo $generales->url_base; ?>elige-tu-hogar.php" target="_blank">Compra</a></p>
        <p><a href="<?php echo $generales->url_base; ?>compramos_casa.php" target="_blank">Vende</a></p>


    </ul>
</div>