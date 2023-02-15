
<section class="section news color_blanco">
    <div class="container dimenciones_laterale_0" style="width: 100%">

        <div class="news-slide ">
            <div id="deslizador_slider_coments" class="carousel slide " data-interval="50000" data-ride="carousel" >
                <div class="carousel-inner comentario_responsivo"  role="listbox"  >
                    <?php include 'templates/noticias/index/_pagina_activa.php'?>
                    <?php include 'templates/noticias/index/_pagina.php'?>


                </div>
                <?php include 'templates/noticias/index/_cantidad_paginas.php'?>
            </div>
        </div><!-- /.news-slider-->
    </div>
</section><!-- /.news -->
<script>
    $('.carousel').carousel({
        interval: 2000000
    })
</script>