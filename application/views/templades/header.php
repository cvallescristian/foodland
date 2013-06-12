<!DOCTYPE html>
<!-- saved from url=(0059)http://uexel.us/themes/purity/multipage/wide/portfolio.html -->
<html lang="en" >
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        

        <!--Le HTML5 shim, for IE6-8 support of HTML5 elements--> 
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- Le styles -->
        <link rel="stylesheet" type="text/css" href="<?= base_url();?>css/theme.css">
        <link rel="stylesheet" href="<?= base_url();?>css/index.css" type="text/css" media="screen">
        <link href="<?= base_url();?>css/css.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://responsivewebinc.com/premium/metroman/style/font-awesome.css">

        <link rel="stylesheet" href="<?= base_url();?>css/slider-main.css">
       
        <link href="<?= base_url();?>css/font-awesome.css" media="all" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="<?= base_url();?>css/jquery.fancybox.css" media="all">
        <link rel="stylesheet" type="text/css" href="<?= base_url();?>css/jquery.fancybox-thumbs.css">
        <link href="<?= base_url();?>css/animate.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url();?>css/isotope.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url();?>css/style.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url();?>css/style-responsive.css" rel="stylesheet" type="text/css">
         <link href="<?= base_url();?>css/bootstrap.css" rel="stylesheet" type="text/css">
       

    
   
    
</head>

    <body style="background:#c1c1c1">

    <div class="navbar transparent navbar-inverse navbar-fixed-top" style="height:45px;">
      <div class="navbar-inner" style="height:45px;">
         <a class="span3 offset2" href="<?= base_url();?>home" style="position:relative; left:20px;">
                <img src="<?= base_url();?>img/logo2.png" width="200" height="40"> <sup style="color:white;">2.0</sup>
            </a>     
        <div class="container">
          <div class="nav-collapse">
                <ul class="nav pull-right" style="position:relavite; top:-10px;">
                        
                        <li><a href="<?= base_url();?>" class="active">Inicio</a></li>
                        <li><a href="#portfolio">Categoria Productos</a></li>
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
                        <a href="" class="dropdown-toggle" data-toggle="dropdown"><font><font>Iniciar Sesión</font></font><b class="caret"></b></a>
                        <div class="dropdown-menu" style="padding: 15px; color:white;" >
                            <div class="span3">
                                <div >
                                    <font><font>Iniciar con:</font></font>
                                        <h4> <a href=""> <i class="icon-twitter"></i></a>
                                            <a href=""><i class="icon-facebook"></i></a> 
                                           <a href=""><i class="icon-google-plus"></i> </a></h4>
                                    
                                </div>
                            </div>
                            <form action="" method="post" accept-charset="UTF-8" class="form-menu">
                                <input id="user_username" type="text" name="user[username]" size="33" placeholder="Username">
                                <input id="user_password" type="password" name="user[password]" size="33" placeholder="Password">
                                <label class="checkbox muted hidden-tablet">
                                <font> Registrarce<font></font></font></label>
                                <font><font><input class="btn btn-success span3" type="submit" name="commit" value="Entrar"></font></font>
                            </form>

                        </div>
                  </li>
                   
                </ul>
            </div>
        </div>
      </div>
    </div>
