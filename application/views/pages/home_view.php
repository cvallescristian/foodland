        
        <div id="myCarousel" class="carousel slide" style="top:-100px; height:600px; ">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="active item">
                <img src="<?= base_url();?>img/slider/1.jpg" width="100%">
                
            </div>
            <div class="item">
                <img src="<?= base_url();?>img/slider/2.jpg" width="100%" >


            </div>
            <div class="item"><img src="<?= base_url();?>img/slider/3.jpg" width="100%"></div>
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
                            <img src="<?= base_url();?>img/locales/<?=$id_local?>_<?=$id?>.jpg"  class="project-img"> 
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
                                 <h1><font><font> <?= $producto->precio  ?></font></font></h1>

                                <a href="productos.php" class="btn btn-large"><font><font>Ver detalles</font></font></a>
                            </div>
                        </div>
                        <!-- Termino Bloque Grande-->
                        
                        <?php 
                          
                         }else{

                            ?>
                                                 <!-- Inicio bloque chico-->
                        <div class="span6 project" style="height: 280px;">
                            <!-- imagen de fondo -->
                            <img src="<?= base_url();?>img/locales/<?=$id_local."_".$id?>.jpg" alt="" class="project-img">
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
                                <a href="producto.php" class="btn btn-normal"><font><font>Ver detalles</font></font></a>
                                
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
            <section class="portfolio rev" style=" position:relative; top:-120px;">
                
                
                <div class="container" id="portfolio">
                    
                    <div class="row">

                        <div class="span12 center" style=" position:relative; top:-50px;">
                            <h1 class="big-heading"><font><font>Productos por Categoria</font></font></h1>
                        </div>

                       <div class="span12">
                            <div id="filters_container">
                                <ul id="filters">
                                    <li><a href="http://uexel.us/themes/purity/multipage/wide/portfolio.html#" data-filter="*" class="active"><font><font>Sushi</font></font></a></li>
                                    <li class="separator"><font><font>/</font></font></li>
                                    <li><a href="http://uexel.us/themes/purity/multipage/wide/portfolio.html#" data-filter=".pizza"><font><font>Pizzas</font></font></a></li>
                                    <li class="separator"><font><font>/</font></font></li>
                                    <li><a href="http://uexel.us/themes/purity/multipage/wide/portfolio.html#" data-filter=".illustration"><font><font>Comida Rapida</font></font></a></li>
                                    <li class="separator"><font><font>/</font></font></li>
                                    <li><a href="http://uexel.us/themes/purity/multipage/wide/portfolio.html#" data-filter=".print"><font><font>Comida China</font></font></a></li>
                                    <li class="separator"><font><font>/</font></font></li>
                                    <li><a href="http://uexel.us/themes/purity/multipage/wide/portfolio.html#" data-filter=".web"><font><font>Otros</font></font></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>        

                    <div class="row isotope" id="portfolio-container" style="position: relative; overflow: hidden; height: 704px;">
                        <div class="span3 project pizza isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 0px, 0px);">

                            <img src="<?= base_url();?>img/slider/1.jpg" alt="" class="project-img">
                            <span class="overlay"></span>
                            <div class="cnt">
                                <h5><font><font>Proyecto</font></font></h5>

                                <a href="" class="btn btn-normal"><font><font>Ver más detalles</font></font></a>
                            </div>





                        </div>



                        <div class="span3 project web isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(300px, 0px, 0px);">

                            <img src="<?= base_url();?>img/slider/2.jpg" alt="" class="project-img">
                            <span class="overlay"></span>
                            <div class="cnt">
                                <h5><font><font>Proyecto</font></font></h5>

                                <a href="" class="btn btn-normal"><font><font>Ver más detalles</font></font></a>
                            </div>





                        </div>

                        <div class="span3 project illustration isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(600px, 0px, 0px);">

                            <img src="<?= base_url();?>img/slider/3.jpg" alt="" class="project-img">
                            <span class="overlay"></span>
                            <div class="cnt">
                                <h5><font><font>Proyecto</font></font></h5>

                                <a href="" class="btn btn-normal"><font><font>Ver más detalles</font></font></a>
                            </div>





                        </div>

                        <div class="span3 project web print isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(900px, 0px, 0px);">

                            <img src="<?= base_url();?>img/slider/5.jpg" alt="" class="project-img">
                            <span class="overlay"></span>
                            <div class="cnt">
                                <h5><font><font>Proyecto</font></font></h5>

                                <a href="http://uexel.us/themes/purity/multipage/wide/single-portfolio.html" class="btn btn-normal"><font><font>Ver más detalles</font></font></a>
                            </div>





                        </div>
                        <div class="span3 project art print isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 286px, 0px);">

                            <img src="<?= base_url();?>img/slider/3.jpg" alt="" class="project-img">
                            <span class="overlay"></span>
                            <div class="cnt">
                                <h5><font><font>Proyecto</font></font></h5>

                                <a href="http://uexel.us/themes/purity/multipage/wide/single-portfolio.html" class="btn btn-normal"><font><font>Ver más detalles</font></font></a>
                            </div>





                        </div>
                        <div class="span3 project art web illustration isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(600px, 286px, 0px);">

                            <img src="<?= base_url();?>img/slider/1.jpg" alt="" class="project-img">
                            <span class="overlay"></span>
                            <div class="cnt">
                                <h5><font><font>Proyecto</font></font></h5>

                                <a href="http://uexel.us/themes/purity/multipage/wide/single-portfolio.html" class="btn btn-normal"><font><font>Ver más detalles</font></font></a>
                            </div>





                        </div>
                        <div class="span3 project print web isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(300px, 418px, 0px);">

                            <img src="<?= base_url();?>img/slider/2.jpg" alt="" class="project-img">
                            <span class="overlay"></span>
                            <div class="cnt">
                                <h5><font><font>Proyecto</font></font></h5>

                                <a href="" class="btn btn-normal"><font><font>Ver más detalles</font></font></a>
                            </div>





                        </div>
                        <div class="span3 project  web isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(900px, 418px, 0px);">

                            <img src="<?= base_url();?>img/slider/4.jpg" alt="" class="project-img">
                            <span class="overlay"></span>
                            <div class="cnt">
                                <h5><font><font>Proyecto</font></font></h5>

                                <a href="http://uexel.us/themes/purity/multipage/wide/single-portfolio.html" class="btn btn-normal"><font><font>Ver más detalles</font></font></a>
                            </div>





                        </div>






                    </div>
                </div>


            </section>

        

        <!--################ PUSH WILL KEEP THE FOOTER AT BOTTOM IF YOU WANT TO CREATE OTHER PAGES ################-->

        <div id="push"></div>