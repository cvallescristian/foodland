 <link rel="stylesheet" href="<?= base_url();?>css/slider-main.css">     
<script src="<?= base_url()?>js/ajax.js"></script>
  <link rel="stylesheet" href="<?= base_url();?>css/css/reset.css">
  <!-- Global CSS for the page and tiles -->
  <link rel="stylesheet" href="<?= base_url();?>css/css/main.css">
   <link rel="stylesheet" href="<?= base_url();?>css/css/style.css">
    <link rel="stylesheet" href="<?= base_url();?>css/css/colorbox.css">
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

     

<!-- Inicio Sector Reparto -->
<section class="portfolio rev" id="sector_reparto" style="background: url(<?= base_url()?>img/dondeestas.png);background-size: 100% 100%;">
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
                                    $sec=$s->nombre_subsector_entrega;
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


                     <ul class="nav nav-pills" style="margin-left:2px;">
                    <?php foreach ($sector_entregas as $sector_entrega) {
                    ?>                   
                        <li class="dropdown span2" >
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
<!-- inicio portasda -->
<section class="portfolio2 center">
    <h2><img src="<?= base_url()?>/img/dos.png" style="width:60px">  &nbsp; &nbsp; &nbsp; Elige el producto que deseas </h2>
</section>
<!-- fin portada -->  
<!-- Inicio Productos-->    
    <section class="portfolio" id="prod" style="position:relative; background: url('<?php base_url()?>img/greyzz.png')">

                <div class="container">

                    <div class="row">
                        <div class="span12" >
                            <h1 class="big-heading" id="letra_grande"><font><font>Puedes Seleccionar un tipo de producto </font></font></h1>
                        </div>
                        <div class="span12">
                          <br>
                          <ol id="filters">
                                <?php foreach ($categoria as $c ) {
                                ?>
                                 <li data-filter="<?= $c->id_tipo_producto?>"> <font><font><?= $c->nombre_tipo_producto?></font></font> </li>
                                <?php 
                                } ?>
                             </ol>
                        </div>
                    </div>
                </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                        <div class="span10 offset1">
                            <div class="tab-content">
                                  <div class="tab-pane active" id="Promocion">
                                                <div id="main" role="main">
                                                   <style>
                                                    /**
                                                     * Grid items
                                                     */
                                                    #tiles li {
                                                      -moz-box-sizing: border-box;
                                                           box-sizing: border-box;
                                                    }

                                                    #tiles li img {
                                                      width: 100%;
                                                      height: auto;
                                                    }
                                                  </style>
                                                <ul id="tiles">
                                                  <?php 
                                                    $i=0;
                                                    foreach ($productos_random as $producto) {
                                                      $id= $producto->id_producto;
                                                      $id_local=$producto->id_local;
                                                    ?>        
                                                        <!-- These are our grid blocks -->
                                                        <li data-filter-class='["<?= $producto->id_tipo_producto ?>"]' align="center" >
                                                            <img src="<?= base_url();?>img/locales/<?=$id?>.jpeg" width="200" >
                                                            <p>
                                                              <h5 style="color:rgb(214, 18, 18)" ><?= $producto->titulo_producto ?></h5>
                                                              <h3>$ <?= $producto->precio?></h3>
                                                            </p>
                                                         
                                                        </li>
                                                        <!-- End of grid blocks -->
                                                      
                                                    <?php } ?>
                                                </ul>
                                                    </div>
                                                
                                            
                                        </div>
                                    </div>
                            </div>
                </div>
            </div>
        </section>
<!-- Termino Productos-->
 <script src="<?= base_url();?>js/libs/jquery.min.js"></script>
  <script src="<?= base_url();?>js/libs/jquery.imagesloaded.js"></script>
  <!-- Include the plug-in -->
   <script src="<?= base_url();?>js/libs/jquery.colorbox-min.js"></script>
  <script src="<?= base_url();?>js/jquery.wookmark.js"></script>

  <!-- Once the page is loaded, initalize the plug-in. -->
 <script type="text/javascript">
    (function ($){
      $('#tiles').imagesLoaded(function() {
        // Prepare layout options.
        var options = {
          itemWidth: 200, // Optional min width of a grid item
          autoResize: true, // This will auto-update the layout when the browser window is resized.
          container: $('#tiles'), // Optional, used for some extra CSS styling
          offset: 16, // Optional, the distance between grid items
          outerOffset: 20, // Optional the distance from grid to parent
          flexibleWidth: 300 // Optional, the maximum width of a grid item
        };

        // Get a reference to your grid items.
        var handler = $('#tiles li'),
            filters = $('#filters li');

        // Call the layout function.
        handler.wookmark(options);

        

         var onClickFilter = function(event) {
          var item = $(event.currentTarget),
              activeFilters = [];


          if (!item.hasClass('active')) {
            filters.removeClass('active');
          }
          item.toggleClass('active');

          // Filter by the currently selected filter
          if (item.hasClass('active')) {
            activeFilters.push(item.data('filter'));
          }

          handler.wookmarkInstance.filter(activeFilters);
        }
        // Capture filter click events.
        filters.click(onClickFilter);
      });
    })(jQuery);
  </script>

 