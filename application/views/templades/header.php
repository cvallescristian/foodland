<!DOCTYPE html>
<html lang="en" >
<head>
    <link rel="shortcut icon" href="img/logo.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <title><?= $title ?></title>
        <link rel="stylesheet" type="text/css" href="<?= base_url();?>css/theme.css">
        <link href="<?= base_url();?>css/css.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?= base_url();?>css/home.css"> 
        <link rel="stylesheet" href="<?= base_url();?>css/font-awesome.min.css" rel="stylesheet">   
        <link href="<?= base_url();?>css/font-awesome.css" media="all" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="<?= base_url();?>css/jquery.fancybox.css" media="all">
        <link rel="stylesheet" type="text/css" href="<?= base_url();?>css/jquery.fancybox-thumbs.css">
        <link href="<?= base_url();?>css/animate.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url();?>css/isotope.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url();?>css/style.css" rel="stylesheet" type="text/css">        
        <link href="<?= base_url();?>css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url();?>css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?= base_url()?>css/header/header.css">
        <link rel="stylesheet" href="<?= base_url();?>css/home.css"> 
        <link rel="stylesheet" href="<?= base_url();?>css/style_footer.css">
        <link rel="stylesheet" href="<?= base_url();?>css/fondocarousel.css"> 
        <link href="<?= base_url();?>css/sign-in.css" rel="stylesheet">
      

        <script type="text/javascript">
        
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-35483407-1']);
          _gaq.push(['_trackPageview']);
        
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
        
        </script>    

</head>
<body>
    <div class="navbar transparent navbar-inverse navbar-fixed-top" style="height:45px;">
      <div class="navbar-inner" >
         <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
         </a>      
        <div class="span3">
             <a  id="menu" href="<?= base_url();?>">
                    <img src="<?= base_url();?>img/logo2.png" width="200" height="40"> <sup style="color:white;">BETA</sup>
             </a>   
         </div>
         <div class="span2">
            <form class="form-search" action="<?= base_url()?>producto/buscar" method="post">
              <div class="input-append" id="buscador">
                <input type="text" name="search" id="search" class="search-query" placeholder="¿Qué quieres comer?" autocomplete="off" required>
                <button type="submit"  class="btn btn-warning"><i class="icon icon-search"></i></button>
              </div>
              
            </form>
         </div>
          
            
          <div class="nav-collapse collapse" cz-shortcut-listen="true">
                <ul class="nav pull-right"> 
                        <li><a href="<?= base_url();?>">Inicio</a></li>
                        <li><a href="<?= base_url()?>nuestros_locales">Nuestros Locales</a></li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                Sector reparto
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <?php foreach ($sector_entregas as $s) {
                                ?>    
                                <li><a href="<?= base_url();?>home?sector=<?= $s->id_sector_entrega  ?>"><?= $s->nombre_sector_entrega ?></a></li>
                                <?php }?>
                            </ul>
                        </li>
                        <?php if($this->session->userdata('user_profile')) : 
                              $usuario= $this->session->userdata('user_profile');
                        ?>
                        
                        <li class="dropdown">
                          
                         <a href="" class="dropdown-toggle" data-toggle="dropdown"> <?= $usuario['first_name'];?> <b class="caret"></b></a>
                         </font></font>
                       
                      <?php else : ?>
                                   <li><a href="#test_modal_login" data-toggle="modal">Iniciar Sesion</a></li>
                      <?php endif; ?>
                         
                   
                        <div class="dropdown-menu" style="padding: 15px; color:white;" >
                            <div class="span2">
                                <div >
                                   <div class="logout">
                                        <p><a href="<?php echo $logout_url; ?>" >Cerrar Sesion</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li> 
                                                       
                </ul>
            </div>
       </div>
    </div>

<!-- pup-pop Login -->


  <div class="modal fade" id="test_modal_login">
  
    <div id="sign_in1">
        <div class="container">
            <div class="row"> 
              <a class="close2" data-dismiss="modal">&times;</a>
                <div class="span12 header">
                    <h4>Iniciar Sesión con Facebook</h4>
                    <div class="span4 social">

                        <a href="<?= $login_url; ?>" class="circle facebook">
                            <img src="<?= base_url()?>img/img_redes/face.png" alt="">
                        </a>
                        <!-- login Twitter Facebook
                         <a href="" class="circle twitter">
                            <img src="<?= base_url()?>img/img_redes/twt.png" alt="">
                        </a>
                         <a href="" class="circle gplus">
                            <img src="<?= base_url()?>img/img_redes/gplus.png" alt="">
                        </a>
                        -->
                    </div>
                </div>

         
                
            </div>
        </div>
    </div>
   
</div>
<!-- Termino pup-pop -->