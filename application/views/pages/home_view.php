 <link rel="stylesheet" href="<?= base_url();?>css/slider-main.css">     
<script src="<?= base_url()?>js/ajax.js"></script>

<script>
    // using JQUERY's ready method to know when all dom elements are rendered
    $( document ).ready(function () {
      // set an on click on the button
      $("#button").click(function () {
        // get the time if clicked via an ajax get queury
        // see the code in the controller time.php
         
        $.get('<?= base_url(); ?>home/categoria?sector=<?= $sector?>' ,function (time) {
        })
        .done(function(time) { $("#categoria").html(time); })
        .fail(function() { alert("error"); });
        });
    });
</script>
<!-- inicio portasda -->
    <section id="feature_slider">
        <div id="fondo">
        </div>
        <div class="container">
            <div class="row">
               <div id="portada1" class="span3 " style="" >
                   <p><h1>¿Hambre?</h1>
                    
                    <h2>Eso que imaginas lo puedes encontrar <a href="#sector_reparto" style="color:rgb(210, 226, 26)">aquí</a> en Foodland </h2>
                    </p>
                </div>
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=281140838696478";
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
                
                    <div class="span3 offset9" id="redes_sociales">
                        <h4>Redes Sociales</h4>
                            <div class="fb-like span1"  style="z-index: 999" data-href="https://www.facebook.com/FoodLandValparaiso" data-send="false" data-layout="box_count" data-width="200" data-show-faces="true" data-font="tahoma"></div>
                            <div class="span1 ">
                               <a href="https://twitter.com/FoodLand_Valpo" class="twitter-follow-button" data-show-count="false" data-lang="es" data-size="large" data-show-screen-name="false">Seguir a @FoodLand_Valpo</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                            </div>
                             </div>
                
            </div>
        </div>
        
    </section> 
<!-- fin portada -->       

<!-- Inicio Sector Reparto -->
<section class="portfolio rev" id="sector_reparto">
    <div class="container">
        <div class="row">
            <div class="span12 center">
                <h1 class="big-heading"><font><font>
                     <?php 
                        $nombre_sector="";
                        if($sector==""){
                            ?>¿D&oacutende est&aacutes? <?php 
                        }else{ 
                            ?> Estas en 
                            <?php foreach ($sector_entregas as $s ) {
                                if($s->id_sector_entrega==$sector){
                                    echo "$s->nombre_sector_entrega,  ¿Deseas cambiar de sector?";
                                    $nombre_sector=$s->nombre_sector_entrega;
                                    break;
                                }
                            }
                        } ?>
                </font></font></h1>
                <h4 class="sub-heading"><font><font>Así podrás encontrar más fácilmente productos a tu domicilio</font></font></h4>
                        
            </div>
            <div class="span11  offset1 center">
                <div class="row">
                    <?php foreach ($sector_entregas as $sector_entrega) {
                    ?>
                        <div class="span2"><h4><a href="<?= base_url();?>home?sector=<?= $sector_entrega->id_sector_entrega?>#prod"><?= $sector_entrega->nombre_sector_entrega?></a></h4></div>
                    <?php } ?>
                </div>    
            </div>
 
        </div>
    </div>
</section>
<!-- Fin sector reparto -->
<!-- Inicio Productos-->    
    <section class="portfolio" id="prod" style="position:relative; ">

                <div class="container">

                    <div class="row">

                        <div class="span12 center">

                            <h1 class="big-heading"><font><font>Productos por llamado Telefonico</font></font></h1>
                            
                            <h4 class="sub-heading"><font><font>Te mostramos lo mejor de nuestra linea telefonica...</font></font></h4>
                        </div>

                     <?php 
                        foreach ($productos_random as $producto) {
                            $id= $producto->id_producto;
                            $id_local=$producto->id_local;
                       
                      ?>
                        <!-- Inicio Bloque Grande-->
                        <div class="span4 project bloque_producto" >
                            <!-- Imagen de fondo-->
                            <img src="<?= base_url();?>img/locales/<?=$id?>.jpeg"  class="img-rounded"> 
                            <!-- Logo del local-->
                            <span class="overlay"> 
                            </span>

                            <div class="cnt">
                                <!-- Titulo Del producto-->
                                <h3><font><font><?= $producto->titulo_producto ?></font></font></h3>
                                 <!-- Precio Del producto-->
                                 <h3><font><font> $<?=  $producto->precio  ?></font></font></h3>
                                <br><br>
                                <a href="<?= base_url() ?>producto?id=<?= $id ?>" class="btn btn-warning btn-large"><font><font>Ver detalles</font></font></a>
                            </div>
                        </div>
                        <!-- Termino Bloque Grande-->
                        <?php } ?>
                    </div>
                    <section id="cat">
                   </section> 
    </section>
<!-- Termino Productos-->

<!-- Inicio Categoria-->
    <section id="categoria" class="portfolio rev">
        <div class="container" id="buttom_categoria">
            <div class="row">
                <div class="span12 center">
                    <h1 class="big-heading"><font><font>Productos por categoría</font></font></h1>
                    <h4 class="sub-heading"><font><font>Todos nuetros productos diferenciados por tipo de producto</font></font></h4>
                </div>
                <div class="span12 center">
                    <button class="btn btn-danger btn-large" id="button">Cargar Todos los productos por categoria</button>
                </div> 
            </div>
        </div>
        
    </section>
<!-- Fin categoria-->
 <script type="text/javascript" src="<?= base_url();?>js/index-slider.js"></script>  
 