<!DOCTYPE html>
<!-- saved from url=(0050)http://wbpreview.com/previews/WB0N22916/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script async="" src="./locales_files/user_timeline.json"></script>

	<meta charset="utf-8">
    <title>Nuestros Locales</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Styles -->
    <link href="<?= base_url();?>css/css-locales/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url();?>css/css-locales/nuestros_locales.css" rel="stylesheet">
    

    <link rel="stylesheet" type="text/css" href="<?=base_url();?>css/theme.css">
    
    <link rel="stylesheet" href="<?= base_url()?>css/header/header.css">  
    
    <!-- HTML5 shim -->
    <!--[if lt IE 9]>
	    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <link href="<?= base_url();?>css/css-locales/css" rel="stylesheet" type="text/css">

</head>    
<body>

<!-- Header -->
 <div class="navbar transparent navbar-inverse navbar-fixed-top">
      <div class="navbar-inner" style="padding: 10px 0px 0px 0px;" >
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
         <div class="span3">
            <form class="form-search">
            <div class="input-append" id="buscador">
                <input type="text" name="search" id="search" class="search-query" placeholder="¿Qué quieres comer?" autocomplete="off" required>
                <button type="submit"  class="btn btn-warning"><i class="icon icon-search"></i></button>
            </div>
            </form>
         </div>
          
            
          <div class="nav-collapse collapse" cz-shortcut-listen="true">
                <ul class="nav pull-right"> 
                        <li><a href="<?= base_url();?>">Inicio</a></li>
                        <li><a href="#cat">Nuestros locales</a></li>
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
    