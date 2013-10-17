<!doctype html>
<html lang="en">
<head>
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
<body>
    <div id="sidebar-nav" >
        <ul id="dashboard-menu" style="width: 176px;">
            <li>                
                <a href="<?= base_url()?>perfil_usuario">
                    <i class="icon-home"></i>
                    <span>Usuarios</span>
                </a>
            </li>            
             <li>
                <a href="<?= base_url()?>perfil_usuario/cambiar_datos">
                    <i class="icon-edit"></i>
                    <span>Cambiar Datos</span>
                </a>
            </li>
             <li>
                <a href="<?= base_url()?>perfil_usuario/amigos">
                    <i class="icon-group"></i>
                    <span>Amigos en FoodLand</span>
                </a>
            </li>            
        </ul>
    </div>
