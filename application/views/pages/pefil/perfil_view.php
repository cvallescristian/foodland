<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Mi Perfil Foodland</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url();?>css/css_perfil/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url();?>css/css_perfil/bootstrap-overrides.css" type="text/css" rel="stylesheet">
    <link href="<?= base_url();?>css/css_perfil/font-awesome.css" type="text/css" rel="stylesheet">
    <link href="<?= base_url();?>css/css_perfil/layout.css"rel="stylesheet" type="text/css">
    <link href="<?= base_url();?>css/css_perfil/elements.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url();?>css/css_perfil/icons.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url();?>css/css_perfil/user-profile.css" rel="stylesheet" type="text/css" media="screen">
    <link href="<?= base_url();?>css/css_perfil/css" rel="stylesheet" type="text/css">
    <link href="<?= base_url();?>css/css_perfil/dark.css" rel="stylesheet" type="text/css" id="skin-file">
</head>
<body style="">
    <!-- HEADER -->
    <header class="navbar navbar-inverse" role="banner">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" id="menu-toggler">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=""><img src="img/logo2.png" width="150"></a>
        </div>
        <ul class="nav navbar-nav pull-right hidden-xs">
            <!-- Notificaciones y mensajes.

            <li class="notification-dropdown hidden-xs hidden-sm">
                <a href="" class="trigger">
                    <i class="icon-warning-sign"></i>
                    <span class="count">8</span>
                </a>
                <div class="pop-dialog">
                    <div class="pointer right">
                        <div class="arrow"></div>
                        <div class="arrow_border"></div>
                    </div>
                    <div class="body">
                        <a href="" class="close-icon"><i class="icon-remove-sign"></i></a>
                        <div class="notifications">
                            <h3>You have 6 new notifications</h3>
                            <a href="" class="item">
                                <i class="icon-signin"></i> New user registration
                                <span class="time"><i class="icon-time"></i> 13 min.</span>
                            </a>
                            
                            <div class="footer">
                                <a href="" class="logout">View all notifications</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="notification-dropdown hidden-xs hidden-sm">
                <a href="http://detail.herokuapp.com/user-profile.html#" class="trigger">
                    <i class="icon-envelope"></i>
                </a>
                <div class="pop-dialog">
                    <div class="pointer right">
                        <div class="arrow"></div>
                        <div class="arrow_border"></div>
                    </div>
                    <div class="body">
                        <a href="" class="close-icon"><i class="icon-remove-sign"></i></a>
                        <div class="messages">
                            <a href="" class="item">
                                <img src="./perfil_files/contact-img.png" class="display">
                                <div class="name">Alejandra Galván</div>
                                <div class="msg">
                                    There are many variations of available, but the majority have suffered alterations.
                                </div>
                                <span class="time"><i class="icon-time"></i> 13 min.</span>
                            </a>
                            <a href="" class="item">
                                <img src="./perfil_files/contact-img2.png" class="display">
                                <div class="name">Alejandra Galván</div>
                                <div class="msg">
                                    There are many variations of available, have suffered alterations.
                                </div>
                                <span class="time"><i class="icon-time"></i> 26 min.</span>
                            </a>
                            <a href="" class="item last">
                                <img src="./perfil_files/contact-img.png" class="display">
                                <div class="name">Alejandra Galván</div>
                                <div class="msg">
                                    There are many variations of available, but the majority have suffered alterations.
                                </div>
                                <span class="time"><i class="icon-time"></i> 48 min.</span>
                            </a>
                            <div class="footer">
                                <a href="" class="logout">View all messages</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            -->

            <li class="">
                <a href="" role="button">
                    <span> Inicio </span>
                </a>
            </li>

            <li class="">
                <a href="" role="button">
                  <span> Nuestros Locales</span>
                </a>
            </li>
            
            <li class="settings hidden-xs hidden-sm">
                <a href="" role="button">
                    <span>  </span>
                    <i class="icon-share-alt"></i>
                </a>
            </li>
        </ul>
    </header>
    <!-- end HEADER -->

    <!-- sidebar -->
    <div id="sidebar-nav">
        <ul id="dashboard-menu">
            <li>                
                <a href="perfil_view.php">
                    <i class="icon-home"></i>
                    <span>Usuarios</span>
                </a>
            </li>            
             <li>
                <a href="cambiar_datos_view.php">
                    <i class="icon-edit"></i>
                    <span>Cambiar Datos</span>
                </a>
            </li>
             <li>
                <a href="amigos_view.php">
                    <i class="icon-group"></i>
                    <span>Amigos en FoodLand</span>
                </a>
            </li>            
        </ul>
    </div>
    <!-- end sidebar -->

	<!-- main container -->
    <div class="content">
         <br><br><br>        
        <div id="pad-wrapper" class="user-profile">
            <!-- header -->
            <div class="row header">
                <div class="col-md-8">
                    <img src="/img/diego.jpg" class="avatar img-circle" height="150">
                    <h3 class="name">Diego ql</h3>
                    <span class="area">Graphic Designer</span>
                </div>
                <a class="btn-flat icon pull-right delete-user" data-toggle="tooltip" data-placement="top" data-original-title="Eliminar usuario"> Eliminar Cuenta <i class="icon-trash"></i>
                </a>
                 <a href="cambiar_datos_view.php" class="btn-flat icon large pull-right edit">
                    Editar datos personales
                </a>
            </div>

            <div class="row profile">
                <div class="col-md-9 bio">
                    <div class="profile-box">
                        <h6>Pedidos en FoodLand</h6>
                        <br>                        
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="col-md-2">
                                        Orden ID
                                    </th>
                                    <th class="col-md-3">
                                        <span class="line"></span>
                                        Fecha
                                    </th>
                                    <th class="col-md-3">
                                        <span class="line"></span>
                                        Productos
                                    </th>
                                    <th class="col-md-3">
                                        <span class="line"></span>
                                        Precio
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="first">
                                    <td>
                                        <a href="">#459</a>
                                    </td>
                                    <td>
                                        Jan 03, 2013
                                    </td>
                                    <td>
                                        Pizza Napolitana
                                    </td>
                                    <td>
                                        $ 3,500.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="">#510</a>
                                    </td>
                                    <td>
                                        Feb 22, 2013
                                    </td>
                                    <td>
                                        Pizza Napolitana
                                    </td>
                                    <td>
                                        $ 800.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="">#618</a>
                                    </td>
                                    <td>
                                        Jan 03, 2013
                                    </td>
                                    <td>
                                        Pizza Napolitana
                                    </td>
                                    <td>
                                        $ 3,499.99
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>

                        <h6>Historial en FoodLand</h6>
                        <br>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="col-md-2">
                                        Orden ID
                                    </th>
                                    <th class="col-md-3">
                                        <span class="line"></span>
                                        Fecha
                                    </th>
                                    <th class="col-md-3">
                                        <span class="line"></span>
                                        Productos
                                    </th>
                                    <th class="col-md-3">
                                        <span class="line"></span>
                                        Precio
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="first">
                                    <td>
                                        <a href="">#459</a>
                                    </td>
                                    <td>
                                        Jan 03, 2013
                                    </td>
                                    <td>
                                        Pizza Napolitana
                                    </td>
                                    <td>
                                        $ 3,500.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="">#510</a>
                                    </td>
                                    <td>
                                        Feb 22, 2013
                                    </td>
                                    <td>
                                        Pizza Napolitana
                                    </td>
                                    <td>
                                        $ 800.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="">#618</a>
                                    </td>
                                    <td>
                                        Jan 03, 2013
                                    </td>
                                    <td>
                                        Pizza Napolitana
                                    </td>
                                    <td>
                                        $ 3,499.99
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-3 col-xs-12 address pull-right">
                    <h6>Mis Gustos</h6>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="col-md-2">
                                       Tags
                                    </th>
                                </tr>
                            </thead>  
                            <tbody>
                                <tr>
                                  <td>Pizzas</td>
                                </tr>
                                <tr>
                                  <td>Sandwich</td>
                                </tr>
                                <tr>
                                  <td>Sushi</td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
	
    <script src="<?= base_url();?>js/js_perfil/jquery-latest.js"></script>
    <script src="<?= base_url();?>js/js_perfil/bootstrap.min.js"></script>
    <script src="<?= base_url();?>js/js_perfil/theme.js"></script>
</body>
</html>