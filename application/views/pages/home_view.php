        
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
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="item" style="background: url(<?= base_url();?>img/slider/2.jpg);background-size: 100%;" >
                
            </div>
            <div class="item" style="background: url(<?= base_url();?>img/slider/3.jpg);background-size: 100%;">
            </div>
          </div>
          <!-- Carousel nav -->
          <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
          <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
       
        <!--################ WRAP START ################-->


            <!--################ HEADER START ################-->
         
            <section class="portfolio" style="position:relative; top:-120px;">

                <div class="container">

                    <div class="row">
                        <div class="span12 center">
                            <h1 class="big-heading"><font><font>Productos por llamado Telefonico</font></font></h1>
                            <h4 class="sub-heading"><font><font>Te mostramos lo mejor de nuestra linea telefonica...</font></font></h4>
                        </div>

                     <?php 
                        $cont= 0;
                        foreach ($productos as $producto) {
                            $id= $producto->id_producto;
                            $id_local=$producto->id_local;
                        
                        if($cont==0){
                      ?>
                        <!-- Inicio Bloque Grande-->
                        <div class="span12  project" style="height:400px;">
                            <!-- Imagen de fondo-->
                            <img src="<?= base_url();?>img/locales/<?=$id?>.png"  class="project-img"> 
                            <!-- Logo del local-->
                            <span class="overlay"> 
                                <img src="<?= base_url();?>img/locales/<?=$id_local?>_logo.png" alt="" style="width:120px; height:120px; position:relative; left:790px; top:20px;">
                            </span>

                            <div class="cnt">
                                <!-- Titulo Del producto-->
                                <h1><font><font><?= $producto->titulo_producto ?></font></font></h1>
                                <!-- Descripcion del producto -->
                                <strong><font><font><?= $producto->descrip_producto?></font></font></strong>
                                 <!-- Precio Del producto-->
                                 <h1><font><font> $<?=  $producto->precio  ?></font></font></h1>
                                <br><br>
                                <a href="<?= base_url() ?>producto?id=<?= $id ?>" class="btn btn-warning btn-large"><font><font>Ver detalles</font></font></a>
                            </div>
                        </div>
                        <!-- Termino Bloque Grande-->
                        
                        <?php 
                          
                         }else{

                            ?>
                                                 <!-- Inicio bloque chico-->
                        <div class="span6 project" style="height: 280px;">
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
                        if($cont==3){
                            $cont=0;
                        }

                            }
                         ?>
                    </div>
        
                

            </section>
            <!--INICIO PRODUCTOS POR CATEGORIA-->
            <section class="portfolio rev" style=" position:relative; top:-120px;" >
                
                
                <div class="container" id="portfolio" >
                    
                    <div class="row">

                        <div class="span12 center" style=" position:relative; top:-50px;">
                            <h1 class="big-heading"><font><font>Productos por Categoria</font></font></h1>
                        </div>

                       <div class="span12">
                            <div id="filters_container">
                                <ul id="filters">
                                      <li><a href="http://uexel.us/themes/purity/multipage/wide/portfolio.html#" data-filter="*" class="active"><font><font>TODOS</font></font></a></li>
                                    
                                    <?php 
                                        foreach ($tipo_productos as $tproducto ) {
                                            ?>
                                            <li class="separator"><font><font>/</font></font></li>
                                            <li><a href="http://uexel.us/themes/purity/multipage/wide/portfolio.html#" data-filter=".<?= $tproducto->nombre_tipo_producto;?>"><font><font><?= $tproducto->nombre_tipo_producto;?></font></font></a></li>
                                            <?php
                                        }
                                     ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row isotope" id="portfolio-container" style="position: relative; overflow: hidden; height: 704px;">
                    <?php 
                         foreach ($tipo_productos as $tproducto ) {
                        
                     ?>
                           
                            <?php  
                                $tamaño=0;
                                foreach ($productos as $producto) { 
                                if($producto->id_tipo_producto == $tproducto->id_tipo_producto){
                            ?>
                            <div class="span3 project <?= $tproducto->nombre_tipo_producto; ?> isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(<?= $tamaño;?>px, 0px, 0px);">
                                <img src="<?= base_url();?>img/locales/<?= $producto->id_producto;?>.png" alt="" class="project-img">
                                <span class="overlay"></span>
                                <div class="cnt">
                                    <h5><font><font><?= $producto->titulo_producto; ?></font></font></h5>

                                    <a href="" class="btn btn-warning"><font><font>Ver más detalles</font></font></a>
                                </div>
                            </div>
                            <?php 
                                $tamaño=$tamaño+300;
                                }
                            }
                             ?>
                    <?php 
                    } 
                    ?>
                </div>


            </section>
            <!--INICIO PRODUCTOS POR CATEGORIA-->

        

        <!--################ PUSH WILL KEEP THE FOOTER AT BOTTOM IF YOU WANT TO CREATE OTHER PAGES ################-->

        <div id="push"></div>