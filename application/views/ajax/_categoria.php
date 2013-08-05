 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     
        <link rel="stylesheet" type="text/css" href="<?= base_url();?>css/theme.css">
       
        <link href="<?= base_url();?>css/font-awesome.css" media="all" rel="stylesheet" type="text/css">
     
        <link href="<?= base_url();?>css/style.css" rel="stylesheet" type="text/css">
        
        <link href="<?= base_url();?>css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url();?>css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?= base_url();?>css/home.css"> 

          
       <!--INICIO PRODUCTOS POR CATEGORIA-->
            <section class="portfolio rev"  >
                
                
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
                                            <img src="<?= base_url();?>img/locales/<?= $producto->id_producto;?>.jpeg" alt="" class="project-img">
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
 
       
        <script src="<?= base_url();?>js/portfolio.js"></script>
        