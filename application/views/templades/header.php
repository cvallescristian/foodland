<!DOCTYPE html>
<html lang="en" >
<head>
    <link rel="shortcut icon" href="img/logo.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <title>Bienvenido a Foodland</title>
        <link rel="stylesheet" type="text/css" href="<?= base_url();?>css/theme.css">
        <link href="<?= base_url();?>css/css.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?= base_url();?>css/home.css"> 
        <link rel="stylesheet" href="<?= base_url();?>css/font-awesome.min.css" rel="stylesheet">   
        <link rel="stylesheet" href="<?= base_url();?>css/slider-main.css">       
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
            <form class="form-search">
              <div class="input-append" id="buscador">
                <input type="text" name="search" id="search" class="search-query" placeholder="¿Qué quieres comer?" autocomplete="off">
                <button type="submit"  class="btn"><i class="icon icon-search"></i></button>
              </div>
              
            </form>
         </div>
          
            
          <div class="nav-collapse collapse" cz-shortcut-listen="true">
                <ul class="nav pull-right"> 
                        <li><a href="<?= base_url();?>">Inicio</a></li>
                        <li><a href="#cat">Categoria Productos</a></li>
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
                   <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">
                            <font><font>
                                 <?php if($this->session->userdata('user_profile')) : 
                                        $usuario= $this->session->userdata('user_profile');
                                        echo $usuario['first_name'];
                                    ?>

                                    <?php else : ?>
                                    Iniciar Sesion
                                    <?php endif; ?>
                            </font></font><b class="caret"></b>
                        </a>
                        <div class="dropdown-menu" style="padding: 15px; color:white;" >
                            <div class="span3">
                                <div >
                                    <?php if($this->session->userdata('user_profile')) : 
                                        $usuario= $this->session->userdata('user_profile');
                                        
                                    ?>
                                     <div class="logout">
                                        <p><a href="<?php echo $logout_url; ?>">Cerrar Sesion</a></p>
                                    </div>
                                    <?php else : ?>
                                    <font><font>Iniciar con:</font></font>
                                        <a href="<?php echo $login_url; ?>"><img src="<?= base_url();?>img/icono-facebook.png" width="40px"></a>                                                                     
                                    <?php endif; ?>                                   
                                </div>
                            </div>
                        </div>
                    </li>                    
                </ul>
            </div>
       </div>
    </div>