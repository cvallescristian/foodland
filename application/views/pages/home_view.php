<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script>
     // using JQUERY's ready method to know when all dom elements are rendered
    $( document ).ready(function () {
      // set an on click on the button
      $("#button").click(function () {
        // get the time if clicked via an ajax get queury
        // see the code in the controller time.php
        
        $.get('<?= base_url(); ?>time' ,function (time) {
        })
        .done(function(time) { $("#categoria").html(time); })
        .fail(function() { alert("error"); });

        });
    });
</script>
     <section id="feature_slider" class="">
        
            <div id="fondo">
                
                <div class="container offset1" >
                            <div class="row" style="margin-top:30px; background:rgba(7, 7, 7, 0.55); position:absolute; z-index:1000;
                                margin-left: 20px;">
                                    <div class="span10" style="text-align:left;padding: 20px; margin-left: 39px;">
                                        <p><h1>Foodland(beta) te mostrará muchos productos de comida delívery de la V región</h1></p>
                                        <h2>
                                        <br>
                                        <?php 
                                        $nombre_sector="";
                                            if($sector==""){
                                            ?>¿D&oacutende est&aacutes? <?php 
                                            }else{ 
                                            ?> Estas en <?php foreach ($sector_entregas as $s ) {
                                                                if($s->id_sector_entrega==$sector){
                                                                    echo "$s->nombre_sector_entrega,  ¿Deseas cambiar de sector?";
                                                                    $nombre_sector=$s->nombre_sector_entrega;
                                                                    break;
                                                                }
                                                            }
                                            } ?></h2>
                                       <?php foreach ($sector_entregas as $sector_entrega) {
                                           
                                        ?>
                                        <div class="span2"><h4><a href="<?= base_url();?>home?sector=<?= $sector_entrega->id_sector_entrega?>#prod"><?= $sector_entrega->nombre_sector_entrega?></a></h4></div>
                                        <?php } ?>
                                    </div>
                            
                               
                            </div>
                </div>
                  </div>
        
    </section>   
        <!--################ WRAP START ################-->


            <!--################ HEADER START ################-->
         
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
                            <img src="<?= base_url();?>img/locales/<?=$id?>.png"  class="img-rounded"> 
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
            <section id="categoria">
                <div class="span6 offset4">
                      <button class="btn btn-danger btn-large" id="button">Cargar Todos los productos por categoria</button>
                    
                </div>
            </section>      