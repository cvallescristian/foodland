<!DOCTYPE html>
<html lang="en" class="js no-touch cssanimations csstransitions wf-freightsanspro-i4-inactive wf-freightsanspro-i7-inactive wf-freightsanspro-n3-inactive wf-freightsanspro-n4-inactive wf-freightsanspro-n7-inactive wf-proximanova-i4-inactive wf-proximanova-i7-inactive wf-proximanova-n3-inactive wf-proximanova-n4-inactive wf-proximanova-n7-inactive wf-inactive">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Bienvenido a FoodLand</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <script type="text/javascript" src="<?= base_url();?>js/js_index/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="<?= base_url();?>js/js_index/jquery.jcarousel.min.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function() {
          jQuery('#mycarousel').jcarousel({
            wrap: 'circular'
          });
          jQuery('#mycarousel').jcarousel({
              auto: 2,
              speed:200,
              wrap: 'last',
              initCallback: mycarousel_initCallback
          });
      });
    </script>
    <link href="<?= base_url();?>css_index/style.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url();?>css/skins/skin.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url();?>css/css_index/bootstrap.css"rel="stylesheet">
    <link href="<?= base_url();?>css/css_index/custom.css"rel="stylesheet">
    <link href="<?= base_url();?>css/css_index/responsive.css"rel="stylesheet">
    <link href="<?= base_url();?>css/css_index/fonts.css"rel="stylesheet">
    <link href="<?= base_url();?>css/css_index/magnific-popup.css"rel="stylesheet">
    <link href="<?= base_url();?>css/css_index/jquery.bxslider.css"rel="stylesheet">
    <link href="<?= base_url();?>css/css_index/animate.css"  rel="stylesheet">
    <link href="<?= base_url();?>css/css_index/css" rel="stylesheet" type="text/css">
  </head>
<body data-twttr-rendered="true">
  <header class="clearfix">    
    <div class="navbar transparent navbar-inverse navbar-fixed-top" style="position:fixed; backgraund-color:rgba(0, 0, 0, 0.68)" id="barra_menu">
      <div class="navbar-inner" >
         <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
         </a>      
        <div class="span3" id="logo_foodland">
             <a  id="menu" href="">
              <img src="img/logo2.png" width="150" height="100"> <sup style="color:white;">BETA</sup>
             </a>   
         </div>       
       </div>
    </div>
  </header> 
  <div class="wrapper">
    <section id="portada">
      <?php if($this->session->userdata('user_profile')) : 
      $usuario= $this->session->userdata('user_profile');
    ?>   
      <div class="container">
          <div class="row">
              <br><br><br>
              <center>
              <div class="span8 offset2 center">
                  <h2 class="big-heading" id="letra_grande"><font><font>
                  Así podrás encontrar más fácilmente productos a tu domicilio
                  </font></font></h2>
              </div>
              </center>
              <div class="span11  offset1 center" id="lugares">
                  <div class="row">
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
                  <br><br><br>  
              </div>
          </div>
      </div>
      <?php else: ?>
            <div class="container">
        <div class="row">          
          <div class="span5 cuadro_portada offset7">
              <h3 align="center">Entra a Foodland Iniciando Sesión ó con tu ubicación</h3> <br>
            <center>
              <div class="social-face portada2" >
                  <a href="<?= $login_url; ?>" class="circle facebook">
                    <img src="./img/sm-facebook.png" alt="20" width="50">
                  </a>
                <a href="#"><img src="./img/sm-twitter.png" style="margin-left:15px;" alt="20" width="50"></a>
              </div>   
            </center>
            </div>
          </div>
        </div>
      </section>  
      <?php endif; ?>
      <section style="background:#222222">
        <div class="container">
          <div class="row">
            <div class="span12">
              <h1 align="center">Pide tu comida en tan Solo 3 Pasos</h1>
            </div>
            <center>
            <div class="feature span4">
              <img src="./img/paso_1.png" width="200">
              <h3>Escoge tu dirección</h3>
            </div>
            <div class="feature span4">
              <img src="./img/paso_2.png" width="200">
              <h3>Escoge el producto</h3>
            </div>
            <div class="feature span4">
              <img src="./img/paso_3.png" width="200">
              <h3>Pide tu producto</h3>
            </div>
            </center>
          </div>
        </div>
       </section> 

      <section id="testimonials">
       <div class="container">
          <h1 align="center">Locales Asociados</h1>
            <ul id="mycarousel" class="jcarousel-skin-tango" style="left:0px;">
          <?php foreach ($locales as $local ) {
                                ?>
              <li><img src="img/locales/<?=$local->id_local;?>_logo.png" width="150" height="150" alt="" /></li>
              <?php } ?>
            </ul> 
        </div>
      </section>

      <section id="features">
        <div class="container">
          <div class="row">
            <div class="span12 featured-image">
              <h1>Como Funciona Foodland para los Locales</h1>
              <br><br>
              <div class="bx-wrapper" style="max-width: 100%;">
                <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 533px;">
                  <ul class="featuredSlider" style="width: auto; position: relative;">
                <li style="float: none; list-style: none; position: absolute; width: 1170px; z-index: 50;">
                  <center>
                  <iframe width="820" height="450" src="//www.youtube.com/embed/zY258K4UlFk" frameborder="0" allowfullscreen></iframe>
                  </center>
                </li>
                  </ul>
                </div>            
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="footer-cta">
        <div class="container">
          <div class="row">
            <div class="span12 try-now">
              <h1>Visitanos en :</h1>            
            </div>
            <div class="span12 social" style="">
              <a href="https://www.facebook.com/FoodLandValparaiso?fref=ts" target="_blank"><img src="./img/sm-facebook.png" alt=""></a>
              <a href="https://twitter.com/FoodLand_Valpo" target="_blank"><img src="./img/sm-twitter.png" alt=""></a>     
            </div>
          </div>
          <div class="row copyright">
            <div class="span12">
              <br><br><br> © 2013 Foodland.cl Todos los derechos reservados.
            </div>
          </div>
        </div>
      </section>

      <form id="contact-form" class="mfp-hide white-popup-block zoom-anim-dialog user-form">
        <h2>Get in touch</h2>
        <input type="text" name="name" class="name" maxlength="50" pattern="^.+$" required="" placeholder="Enter your full name">
        <input type="email" name="email" class="email" placeholder="Enter your email" maxlength="320" pattern="^[a-z0-9!#$%\x26&#39;*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%\x26&#39;*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$" required="">    
        <textarea placeholder="What would you like to chat about?" rows="6" required=""></textarea>    
        <input type="submit" class="submit btn cta" value="Send your message">
      </form>



<script src="<?= base_url();?>js/./js_index/lte-ie7.js"></script>
<script src="<?= base_url();?>js/./js_index/bootstrap.js"></script>
<script src="<?= base_url();?>js/./js_index/custom.js"></script>    
</body>
</html>