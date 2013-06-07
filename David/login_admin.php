<!DOCTYPE html>
<!-- saved from url=(0067)http://foodland.cl/foodland2/implementacion/admin/admin_usuario.php -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Administracion Foodland</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <link href="http://jumpstartuidemo.com/themes/base/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://jumpstartuidemo.com/themes/base/css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="http://foodland.cl/foodland2/implementacion/admin/css/font-awesome.min.css" rel="stylesheet">   
    
    <link href="http://foodland.cl/foodland2/implementacion/admin/css/ui-lightness/jquery-ui-1.10.0.custom.min.css" rel="stylesheet">
    
    <link href="http://foodland.cl/foodland2/implementacion/admin/css/base-admin-2.css" rel="stylesheet">
    <link href="http://foodland.cl/foodland2/implementacion/admin/css/base-admin-2-responsive.css" rel="stylesheet">
    
    <link href="http://foodland.cl/foodland2/implementacion/admin/css/dashboard.css" rel="stylesheet">   

    <link href="http://foodland.cl/foodland2/implementacion/admin/css/custom.css" rel="stylesheet">
</head>

<body style="background: #DDDCE2 url(img/body_bg.jpg) repeat left top;">
<div class="navbar navbar-inverse navbar-fixed-top">	
	<div class="navbar-inner">		
		<div class="container">			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<i class="icon-cog"></i>
			</a>
			
			<a class="span4" href="http://foodland.cl/foodland2/implementacion/admin/admin_inicio.php">
				<img src="./images/logo2.png" width="200" height="40"> <sup style="color:white;">Beta</sup>
			</a>		
		</div> <!-- /container -->		
	</div> <!-- /navbar-inner -->	
</div> <!-- /navbar -->     
<br> <br> <br>
<!-- Login -->   
<div class="main">
    <div class="container">
    	 	<div class="offset3 span6">      		
      		<div class="widget stacked">					
				<div class="widget-header">
					<i class="icon-user"></i>
				</div> 				
				<div class="widget-content">
					
					<!-- Formulario del Login -->
					<fieldset>
						<form class="form-horizontal">
						  <div class="control-group">
						    <label class="control-label" for="inputNombre">Nombre</label>
						    <div class="controls">
						      <input type="text" id="inputNombre" placeholder="ej: Cristian Valles" value="">
						    
						    </div>
						  </div>

						  <div class="control-group">
						    <label class="control-label" for="inputEmail">Email</label>
						    <div class="controls">
						      <input type="text" id="inputEmail" placeholder="ej: ejemplo@ejemplo.cl" value="">
						    
						    </div>
						  </div>
						  <div class="control-group">
						    <label class="control-label" for="inputEmail"></label>
						    <div class="controls">						    
						    </div>
						    <div class="control-group" style="margin-right: 60px;">
						    <div class="controls">
						      <button type="submit" class="btn btn-small btn-block btn-warning" style="width:100px">Editar</button>
						    </div>
						  </div>
						  </div>						  
					</form>
				</fieldset>
				</div> <!-- /widget-content -->
			</div> <!-- /widget -->	
	    </div> <!-- /span6 -->
	</div>
<!-- Fin login -->
<br> <br> <br>

<?php include('footer.php') ?>

<script src="./js/jquery-1.8.3.min.js"></script>
<script src="./js/jquery-ui-1.10.0.custom.min.js"></script>
<script src="./js/bootstrap.min.js"></script>

<script src="./js/jquery.flot.js"></script>
<script src="./js/jquery.flot.pie.js"></script>
<script src="./js/jquery.flot.resize.js"></script>

<script src="./js/Application.js"></script>

<script src="./js/area.js"></script>
<script src="./js/donut.js"></script>

<a id="back-to-top" href="http://jumpstartuidemo.com/themes/base/index.html#top" style="display: none;">
<i class="icon-chevron-up"></i></a></div><a id="back-to-top" href="http://foodland.cl/foodland2/implementacion/
admin/admin_usuario.php#top" style="display: none;"><i class="icon-chevron-up"></i></a></body></html>