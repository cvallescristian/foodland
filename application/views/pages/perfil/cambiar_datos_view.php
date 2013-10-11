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
<body>
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
                        <div class="actions offset2">
                            <input type="button" class="btn-glow primary" value="Guardar Cambios">
                            <span>  </span>
                            <input type="button" value="Cancelar" class="btn-danger btn primary">
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-md avatar-box">
                    <div class="personal-image">
                        <br><br><br>
                        <img src="/img/diego.jpg" width="200" class="avatar img-circle">
                        <br><br>
                        <h3>Cambia tu foto...</h3>                        
                        <input type="file">
                    </div>
                </div>
            </div>            
        </div>
    </div>
</body>
</html>