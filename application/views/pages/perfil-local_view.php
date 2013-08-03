<link href="<?= base_url();?>css/perfil-local/style.css" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url()?>css/perfil-local/perfil-local.css">
 <div class="container" id="contenido_pagina_perfil">
        <div class="row">
            <div class="span3 left-sidebar">
                <div class="account-settings">
                    <img src="<?=base_url();?>img/locales/<?= $local->id_local?>_logo.png">
                </div>
                <div class="account-detail">
                    <p></p><h1 class="t-center"><?= $local->nombre_local ?></h1><p></p>
                    <p><strong>Direccion  :</strong></p>
                    <p><?= $local->direccion_local  ?></p>
                    <p><strong>Telefono: </strong></p>
                    <p><?= $local->telefono_local  ?></p>
                    <?php if($local->horario_entrada!=""){ ?>
                      <p><strong>horario Atencion: </strong></p>
                      <p>Lunes a viernes de <?= $local->horario_entrada?> hrs a <?= $local->horario_salida?> hrs</p>
                      <p>Sabados y domingos de <?= $local->horario_entrada_fds?> hrs a <?= $local->horario_salida_fds?> hrs</p>
                    <?php }if($local->sitio_referencia!=""){ ?>
                      <p><strong>Sitio Web: </strong></p>
                      <p><a href="<?= $local->sitio_referencia?>"><?= $local->sitio_referencia?></a></p>
                    <?php } if($local->email!="" && $local->email!="test@test.cl"){?>
                    <p><strong>E-mail: </strong></p>
                    <p><a href=""><?= $local->email?></a></p>
                    <?php } ?>
                </div>
            </div>
            <div class="span9 content-setting">
                  <div class="span9 center">

                            <h1 class="big-heading"><font><font><?= $local->nombre_local?></font></font></h1>
                            
                            <h4 class="sub-heading"><font><font>Los mejores productos de <?= $local->nombre_local?> al mejor precio</font></font></h4>
                   </div>
                   <?php foreach ($productos_local as $pl) {
                  ?>
                    <!-- Inicio Producto -->
                      <div class="span4 project bloque_producto " >
                            <!-- Imagen de fondo-->
                            <img src="<?=base_url();?>img/locales/<?= $pl->id_producto ?>.jpeg"  class="img-rounded"> 
                            <!-- Logo del local-->
                            <span class="overlay"> 
                            </span>
                            <div class="cnt">
                                <!-- Titulo Del producto-->
                                <h5><font><font><?= $pl->titulo_producto ?></font></font></h5>
                                 <!-- Precio Del producto-->
                                 <h5><font><font> $<?= $pl->precio?></font></font></h5>
                                <br><br>
                                <a href="<?= base_url() ?>producto?id=<?= $pl->id_producto?>" class="btn btn-warning btn-large"><font><font>Ver detalles</font></font></a>
                            </div>
                        </div> 
                      <!-- termino producto -->

                  <?php 
                   } ?>
            </div>
        </div>
  </div>
    
            
   
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= base_url();?>js/perfil_local/jquery-1.7.2.min.js"></script>
 
    <script src="<?= base_url();?>js/perfil_local/image-gallery.js"></script>
    <script src="<?= base_url();?>js/perfil_local/jquery.mousewheel-3.0.6.pack.js"></script>
    <script src="<?= base_url();?>js/perfil_local/jquery.fancybox.js"></script>

  

