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

	<!-- main container -->
    <div class="content">
        <br><br><br><br>
        <div class="settings-wrapper " id="pad-wrapper">
            <div class="row">
                <div class="col-md-7 personal-info" style="margin-left:100px;">                
                    <h3 class="personal-title">Personal info</h3>
                    <br> <br>
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Nombres:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="Alejandra">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Apellidos:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="Galvan">
                            </div>
                        </div>                      
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Email:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="alejandra@design.com">
                            </div>
                        </div>                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Username:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="alegalvan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Contraseña:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="password" value="blablablabla">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Confirma contraseña:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="password" value="blablablabla">
                            </div>
                        </div>
                        <div class="actions">
                            <input type="button" class="btn-glow primary" value="Save Changes">
                            <span>  </span>
                            <input type="button" value="Cancel" class="btn-danger btn primary">
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-md avatar-box">
                    <div class="personal-image">
                        <img src="/img/diego.jpg" width="200" class="avatar img-circle">
                        <p>Sube una foto diferente...</p>                        
                        <input type="file">
                    </div>
                </div>
            </div>            
        </div>
    </div>

    <script src="<?= base_url();?>js/js_perfil/jquery-latest.js"></script>
    <script src="<?= base_url();?>js/js_perfil/bootstrap.min.js"></script>
    <script src="<?= base_url();?>js/js_perfil/theme.js"></script>
</body>
</html>