 <link rel="stylesheet" href="<?= base_url();?>css/slider-main.css">     
<script src="<?= base_url()?>js/ajax.js"></script>

<script>
    // using JQUERY's ready method to know when all dom elements are rendered
    $( document ).ready(function () {
      // set an on click on the button
      $("#button").click(function () {
        // get the time if clicked via an ajax get queury
        // see the code in the controller time.php
         
        $.get('<?= base_url(); ?>home/categoria?subsector=<?= $subsector?>' ,function (time) {
        })
        .done(function(time) { $("#categoria").html(time); })
        .fail(function() { alert("error"); });
        });
    });
</script>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=150921735071642";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

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
            </div>
        </div>
        


    </section> 
<!-- fin portada -->       

<!-- Inicio Sector Reparto -->
<section class="portfolio rev" id="sector_reparto">
    <div class="container">
        <div class="row">
            <div class="span12 center">
                <h1 class="big-heading" id="letra_grande"><font><font>
                     <?php 
                        $nombre_sector="";
                        if($subsector==""){
                            ?>¿D&oacutende est&aacutes? <?php 
                        }else{ 
                            ?> Estas en 
                            <?php foreach ($sub_sector_entregas as $s ) {
                                if($s->id_subsector_entrega==$subsector){
                                    echo "$s->nombre_subsector_entrega,  ¿Deseas cambiar de sector?";
                                    $nombre_sector=$s->nombre_subsector_entrega;
                                    break;
                                }
                            }
                        } ?>
                </font></font></h1>
                <h4 class="sub-heading"><font><font>Así podrás encontrar más fácilmente productos a tu domicilio</font></font></h4>
                        
            </div>
            <div class="span11  offset1 center" id="lugares">
                <div class="row">

                    <!-- Php de Lugares 
                    <div class="span2"><h4><a href="<?= base_url();?>home">Todos los Sectores</a></h4></div>

                    <?php foreach ($sector_entregas as $sector_entrega) {
                    ?>
                        <div class="span2">
                            <h4>
                                <a href="<?= base_url();?>home?sector=<?= $sub_sector_entrega->id_sector_entrega?>#prod">
                            <?= $sector_entrega->nombre_sector_entrega?></a>
                            </h4>
                        </div>
                    <?php } ?>
                    -->


                     <ul class="nav nav-pills">
                    <?php foreach ($sector_entregas as $sector_entrega) {
                    ?>                   
                        <li class="dropdown" style="margin-left:50px;">
                            <a class="dropdown-toggle"
                            data-toggle="dropdown"
                            href="#">
                            <h4><?=$sector_entrega->nombre_sector_entrega?></h4>
                            
                            <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                       <?php foreach ($sub_sector_entregas as $sub_sector) { 
                                    if($sub_sector->id_sector_entrega == $sector_entrega->id_sector_entrega)
                                    {
                            ?>
                                <li><a href="<?= base_url();?>home?subsector=<?= $sub_sector->id_subsector_entrega?>#prod">
                            <?=$sub_sector->nombre_subsector_entrega?></a></li>
                                <?php } } ?>
                            </ul>
                        </li>
                        <?php } ?>

                    </ul>



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

                            <h1 class="big-heading" id="letra_grande"><font><font>Productos por llamado Telefónico</font></font></h1>
                            
                            <h4 class="sub-heading"><font><font>Te mostramos lo mejor de nuestra linea telefonica...</font></font></h4>
                        </div>

                        <div class="span10" id="ancho_productos">
                     <?php 
                        foreach ($productos_random as $producto) {
                            $id= $producto->id_producto;
                            $id_local=$producto->id_local;
                       
                      ?>


                     
                        <!-- Inicio Bloque Grande-->
                        <a href="<?= base_url() ?>producto?id=<?= $id ?>">
                        <div class="span3 project bloque_producto" id="imagen_producto">
                            <!-- Imagen de fondo-->
                            <img src="<?= base_url();?>img/locales/<?=$id?>.jpeg"  class="img-rounded"> 
                            <!-- Logo del local-->
                            <span class="overlay"> 
                            </span>

                            <div class="cnt">
                                <!-- Titulo Del producto-->
                                <h4><font><font><?= $producto->titulo_producto ?></font></font></h4>
                                 <!-- Precio Del producto-->
                                 <h4><font><font> $<?=  $producto->precio  ?></font></font></h4>

                                <br>

                                <h6><i class="icon-user"></i> 3 Personas </h6>
                                
                                 <br>

                                <a href="<?= base_url() ?>producto?id=<?= $id ?>" class="btn btn-warning btn-large"><font><font>Ver detalles</font></font></a>
                        
                               
                            </div>
                        </div>
                        </a>
                        <!-- Termino Bloque Grande-->
                        <?php } ?>

                        </div>

                       
                                <!-- SideBar -->
                <div class="span3 sidebar" id="categoria" style=" background:rgb(230, 230, 230);   " >
                    <div class="box">
                        <div class="sidebar_header center">
                            <h3>Categorias</h3>
                        </div>

                        <ul >
                            <h4>
                                <ul>
                                    <li class="active"><a <a style="   color: #BE3F3F;"  href="<?= base_url() ?>home?subsector=<?=$subsector?>">Todo</a></li>
                            <?php foreach ($categoria as $pro){ ?>
                                    <li><a style="   color: #949494;" href="<?= base_url() ?>home?tipo_producto=<?= $pro->id_tipo_producto ?>&subsector=<?=$subsector?>"><?=$pro->nombre_tipo_producto?></a></li>
                                    <?php } ?>
                                </ul>
                            </h4>
                        </ul>
                    </div>
                    <br>
                    

                    <div class="box2">
                        <div class="sidebar_header center">
                            <h3>Facebook Foodland</h3>
                        </div>

                       <div class="fb-like"  style="margin-left:20px;" data-href="https://www.facebook.com/FoodLandValparaiso?fref=ts" data-width="70" data-colorscheme="dark" data-show-faces="true" data-send="false"></div>
                    </div>

                    <div class="box2">
                        <div class="sidebar_header center">
                            <h3>Twitter Foodland</h3>
                        </div>

                            <div class="span1"  style="margin-left:80px;">
                               <a href="https://twitter.com/FoodLand_Valpo" class="twitter-follow-button" data-show-count="false" data-lang="es" data-size="large" data-show-screen-name="false">Seguir a @FoodLand_Valpo</a>
                                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                             
                             </div>

                        </div>
                 

                 
                </div>
                   
                      
                    </div>

                
    </section>
<!-- Termino Productos-->


 <script type="text/javascript" src="<?= base_url();?>js/index-slider.js"></script>  
<script src="<?= base_url();?>js/theme.js"></script>
 