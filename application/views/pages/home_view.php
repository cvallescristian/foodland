<<<<<<< HEAD
   
        <div id="myCarousel" class="carousel slide" style="top:-100px; height:600px; ">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="active item" style="background: url(<?= base_url();?>img/slider/1.jpg);background-size: 100%;">
                <div class="container" >
                    <div class="row" style="margin-top:160px; background:rgba(7, 7, 7, 0.68)">
                        <div class="span10">
                            <!-- <div class="span5 offset3" style="padding:30px;">
                                <form class="form-search" style="margin-bottom: 0px;">
                                  <input type="text" class="input-xlarge search-query" style="height: 35px; font-size: 24px;" placeholder="¿Qu&eacute quieres comer?" required>
                                  <button type="submit" class="btn btn-danger" style="height: 44px;">Buscar</button>
                                </form>
                            </div>
                            -->
                           <div class="span10 offset1" style="text-align:left;padding: 20px;">
                           	<h1>Foodland(beta) te mostrar&aacute muchos productos de comida del&iacutevery de la V regi&oacuten</h1>                            	
                            </div>
                            <br>
                            <div class="span10 offset1" style="text-align:left;padding: 20px;">
                            	<h2><?php 
                                    if($sector==""){
                                    ?>¿D&oacutende est&aacutes? <?php 
                                    }else{ 
                                    ?> Estas en <?php foreach ($sector_entregas as $s ) {
                                                        if($s->id_sector_entrega==$sector){
                                                            echo "$s->nombre_sector_entrega,  ¿Deseas cambiar de sector?";
                                                            break;
                                                        }
                                                    }
                                    } ?></h2>
                               <?php foreach ($sector_entregas as $sector_entrega) {
                                   
                                ?>
                                <div class="span2"><h4><a href="<?= base_url();?>home?sector=<?= $sector_entrega->id_sector_entrega?>"><?= $sector_entrega->nombre_sector_entrega?></a></h4></div>
                                <?php } ?>
=======
        
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
                            
                               
>>>>>>> tester
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
<<<<<<< HEAD
                        $cont= 0;
                       
                        foreach ($productos as $producto) {
=======
                        foreach ($productos_random as $producto) {
>>>>>>> tester
                            $id= $producto->id_producto;
                            $id_local=$producto->id_local;
                       
                      ?>
                        <!-- Inicio Bloque Grande-->
<<<<<<< HEAD
                        <div class="span12 project" style="height:400px;">
=======
                        <div class="span4 project bloque_producto" >
>>>>>>> tester
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
<<<<<<< HEAD
                        
                        <?php 
                          
                         }else{

                            ?>
                                                 <!-- Inicio bloque chico-->
                        <div class="span4  project" style="height: 280px;">
                            <!-- imagen de fondo -->
                            <img src="<?= base_url();?>img/locales/<?=$id?>.png" alt="" class="project-img">
                            <!-- logo del producto -->
                            <span class="overlay">
                                <img src="<?= base_url();?>img/locales/<?=$id_local?>_logo.png" alt="" style="width:70px; height:70px; position:relative; left:350px; top:20px;">
                            </span>

                            <div class="cnt">
                                <!-- Titulo producto -->
                                <h5><font><font><?=$producto->titulo_producto?></font></font></h5>

                                <!-- Descripcion Producto -->
                               <div class="span4 offset1"><strong><font><font><?= $producto->descrip_producto; ?></font></font></strong>
                                <!-- Precio producto -->
                                <h5><font><font>$ <?=$producto->precio?> </font></font></h5>
                                </div> 
                                <a href="<?= base_url() ?>producto?id=<?= $id ?>" class="btn btn-warning"><font><font>Ver detalles</font></font></a>
                                
                            </div>
                        </div>
                        <!-- Termino bloque chico -->

                            <?php

                        }
                        $cont++;
                        if($cont==4){
                            $cont=0;
                        }

                            }
                         ?>
=======
                        <?php } ?>
>>>>>>> tester
                    </div>
            </section>
            <!--INICIO PRODUCTOS POR CATEGORIA-->
            <section class="portfolio rev" style=" position:relative; top:120px;" >
                
                
                <div class="container" id="portfolio" >
                    
                    <div class="row">

                        <div class="span12 center" style=" position:relative; top:-50px;">
                            <h1 class="big-heading"><font><font>Productos por Categoria</font></font></h1>
                        </div>

                       <div class="span12">
                            <div id="filters_container">
                                <ul id="filters">
                                      <li><a href="index#" data-filter="*" class="active"><font><font>TODOS</font></font></a></li>
                                    
                                    <?php 

                                        foreach ($tipo_productos as $tproducto ) {
                                            ?>
                                            <li class="separator"><font><font>/</font></font></li>
                                            <li><a href="" data-filter=".<?= $tproducto->id_tipo_producto;?>"><font><font><?= $tproducto->nombre_tipo_producto;?></font></font></a></li>
                                            <?php
                                        }
                                     ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row isotope" id="portfolio-container" style="position: relative; overflow: hidden; height: 704px;">
                    <?php
                        foreach ($productos as $producto) { 
                         
                            
                     ?>
                           
                            <?php  
                                $tamaño=0;
                                foreach ($tipo_productos as $tproducto ) {
                                    if($producto->id_tipo_producto == $tproducto->id_tipo_producto){
                            ?>
                                        <div class="span3 project <?= $tproducto->id_tipo_producto; ?> isotope-item" style="height:147px; position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 0px, 0px);">
                                            <img src="<?= base_url();?>img/locales/<?= $producto->id_producto;?>.png" alt="" class="project-img">
                                            <span class="overlay"></span>
                                            <div class="cnt">
                                                <h5><font><font><?= $producto->titulo_producto; ?></font></font></h5>
                                                <a href="<?= base_url().'producto?id='.$producto->id_producto ?>" class="btn btn-warning"><font><font>Ver más detalles</font></font></a>
                                            </div>
                                        </div>
                            <?php 
                                    
                                    }

                                }
                             ?>
                        <?php 
                        } 
                        ?>
                </div>


            </section>
            <!--TERMINO PRODUCTOS POR CATEGORIA-->





