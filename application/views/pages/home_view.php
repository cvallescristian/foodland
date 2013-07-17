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
               <div id="portada1" class="span9 offset1" style="">
                   <p><h1>Hambre? ¡FoodLand (Beta) te da la solución!
                    </h1>
                    <h2>
                    Lo mejor del delivery en la V región en un sólo catálogo online
                    </h2>
                    </p>
                </div> 
            </div>
        </div>
        
    </section> 

    <div class="container" style="margin-top:30px;">
        <div class="row">
            <div  id="portada2" class="span4 offset1">
                <h2>
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
                        } ?></h2>
            </div>
            <div id="portada3" class="span9 offset1">
                <div class="row">
                    <?php foreach ($sector_entregas as $sector_entrega) {
                    ?>
                        <div class="span2"><h4><a href="<?= base_url();?>home?sector=<?= $sector_entrega->id_sector_entrega?>#prod"><?= $sector_entrega->nombre_sector_entrega?></a></h4></div>
                    <?php } ?>
                </div>    
            </div>
        </div>
    </div>
<!-- fin portada -->       

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
    <section id="categoria">
        <div class="span6 offset4">
                <button class="btn btn-danger btn-large" id="button">Cargar Todos los productos por categoria</button>
        </div>
    </section>
<!-- Fin categoria-->
 