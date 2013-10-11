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
            
            <li class="settings hidden-xs hidden-sm">
                <a href="" role="button">
                    <i class="icon-share-alt"></i>
                </a>
            </li>
        </ul>
    </header>
    <!-- //HEADER -->

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

    <!-- main content -->
    <div class="content">
        <br><br><br>        
        <div id="pad-wrapper" class="users-list">
            <div class="row header">
                <h3>Amigos en Foodland</h3>
                <br><br><br>
                <br>
                <br>
                <div class="col-md-10 col-sm-12 col-xs-12 pull-right">
                    <input type="text" class="col-md-5 search" placeholder="Pon un Nombre de usuario...">
                    <div class="ui-dropdown">
                        <div class="head" data-toggle="tooltip" title="" data-original-title="Click me!" style="margin-top:10px">
                            Filtrar usuarios
                            <i class="arrow-down"></i>
                        </div>  
                        <div class="dialog" style="display: none;">
                            <div class="pointer">
                                <div class="arrow"></div>
                                <div class="arrow_border"></div>
                            </div>
                            <div class="body">
                                <p class="title">
                                    Mostrar Usuarios Cuando:
                                </p>
                                <div class="form">
                                    <select>
                                        <option>Nombre</option>
                                        <option>Email</option>
                                        <option>Numero de compras</option>                                        
                                    </select>                                    
                                    <input type="text" class="form-control">
                                    <a class="btn-flat small">Add filter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="col-md-4 sortable">
                                    Nombre
                                </th>
                                <th class="col-md-3 sortable">
                                    <span class="line"></span>Signed up
                                </th>
                                <th class="col-md-2 sortable">
                                    <span class="line"></span>Total de Pedidos
                                </th>
                                <th class="col-md-3 sortable align-right">
                                    <span class="line"></span>Email
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr class="first">
                            <td>
                                <img src="img/diego.jpg" width="80" class="img-circle avatar hidden-phone">
                                <a href="" class="name">Alejandra Galvan Castillo</a>
                            </td>
                            <td>
                                Mar 13, 2012
                            </td>
                            <td>
                                $ 4,500.00
                            </td>
                            <td class="align-right">
                                <a href="">alejandra@canvas.com</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="img/diego.jpg" width="80" class="img-circle avatar hidden-phone">
                                <a href="" class="name">Alejandra Galvan Castillo</a>
                                
                            </td>
                            <td>
                                Jun 03, 2012
                            </td>
                            <td>
                                $ 549.99
                            </td>
                            <td class="align-right">
                                <a href="">alejandra@canvas.com</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="img/diego.jpg" width="80" class="img-circle avatar hidden-phone">
                                <a href="" class="name">Alejandra Galvan Castillo</a>
                               
                            </td>
                            <td>
                                Mar 01, 2013
                            </td>
                            <td>
                                $ 30.00
                            </td>
                            <td class="align-right">
                                <a href="">alejandra@canvas.com</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="img/diego.jpg" width="80" class="img-circle avatar hidden-phone">
                                <a href="" class="name">Alejandra Galvan Castillo</a>
                               
                            </td>
                            <td>
                                Jan 28, 2012
                            </td>
                            <td>
                                $ 1,320.00
                            </td>
                            <td class="align-right">
                                <a href="">alejandra@canvas.com</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="img/diego.jpg" width="80" class="img-circle avatar hidden-phone">
                                <a href="" class="name">Alejandra Galvan Castillo</a>
                               
                            </td>
                            <td>
                                May 16, 2012
                            </td>
                            <td>
                                $ 89.99
                            </td>
                            <td class="align-right">
                                <a href="">alejandra@canvas.com</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="img/diego.jpg" width="80" class="img-circle avatar hidden-phone">
                                <a href="" class="name">Alejandra Galvan Castillo</a>
                                
                            </td>
                            <td>
                                Sep 06, 2012
                            </td>
                            <td>
                                $ 344.00
                            </td>
                            <td class="align-right">
                                <a href="">alejandra@canvas.com</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="img/diego.jpg" width="80"  class="img-circle avatar hidden-phone">
                                <a href="" class="name">Alejandra Galvan Castillo</a>
                                
                            </td>
                            <td>
                                Jul 13, 2012
                            </td>
                            <td>
                                $ 800.00
                            </td>
                            <td class="align-right">
                                <a href="">alejandra@canvas.com</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="img/diego.jpg" width="80" class="img-circle avatar hidden-phone">
                                <a href="" class="name">Alejandra Galvan Castillo</a>
                                
                            </td>
                            <td>
                                Feb 13, 2013
                            </td>
                            <td>
                                $ 250.00
                            </td>
                            <td class="align-right">
                                <a href="">alejandra@canvas.com</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="img/diego.jpg" width="80" class="img-circle avatar hidden-phone">
                                <a href="" class="name">Alejandra Galvan Castillo</a>
                               
                            </td>
                            <td>
                                Feb 27, 2013
                            </td>
                            <td>
                                $ 1,300.00
                            </td>
                            <td class="align-right">
                                <a href="">alejandra@canvas.com</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>                
            </div>
            <ul class="pagination pull-right">
                <li><a href="inicio#">‹</a></li>
                <li><a href="1#">1</a></li>
                <li><a href="2#">2</a></li>
                <li><a href="3#">3</a></li>
                <li><a href="final#">›</a></li>
            </ul>
        </div>
    </div>

    <script src="<?= base_url();?>js/js_perfil/jquery-latest.js"></script>
    <script src="<?= base_url();?>js/js_perfil/bootstrap.min.js"></script>
    <script src="<?= base_url();?>js/js_perfil/theme.js"></script>
</body>
</html>