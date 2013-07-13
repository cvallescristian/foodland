<!DOCTYPE html>
<html lang="es" >
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <title>Bienvenido a Foodland</title>
        <link rel="stylesheet" type="text/css" href="<?= base_url();?>css/theme.css">
        <link href="<?= base_url();?>css/style-responsive.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url();?>css/bootstrap.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="<?= base_url();?>css/style.css" type="text/css">
        <link rel="stylesheet" href="<?= base_url();?>css/style_footer.css">
</head>

<body style="background: url('../img/fondo_admin.jpg') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  color:#280308;">
    <div class="navbar transparent navbar-inverse navbar-fixed-top" style="height:45px;">
      <div class="navbar-inner" style="height:45px;">
         <a class="span3 offset2" style="position:relative; left:20px;" href="<?= base_url();?>">
                <img src="<?= base_url();?>img/logo2.png" width="200" height="40"> <sup style="color:white;">BETA</sup>
            </a>     
        <div class="container">
          <div class="nav-collapse">
                <ul class="nav pull-right" style="position:relavite; top:-22px;">                        
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
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">
                            <font><font>
                                 <?php if($this->session->userdata('user_profile')) : 
                                        $usuario= $this->session->userdata('user_profile');
                                        echo $usuario['first_name'];
                                    ?>

                                    <?php else : ?>
                                    Iniciar Session
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
                                        <p><a href="<?php echo $logout_url; ?>">Cerrar Session</a></p>
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
    </div>
</body>