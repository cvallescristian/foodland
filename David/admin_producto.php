<!DOCTYPE html>
<!-- saved from url=(0066)http://foodland.cl/foodland2/implementacion/admin/admin_inicio.php -->
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
    
<?php include('header.php') ?>

<div class="main">
    <div class="container">
      <div class="row">     

      	<div class="offset1 span10">     		
      		<div class="widget stacked widget-table action-table">				
				<div class="widget-header">
					<i class="icon-th-list"></i>
					<h3>Productos</h3></div>
						<center>
							<div class="btn-group">
 				 			<button class="btn btn-large">Buscar productos por tipo</button>
 				 			<button class="btn btn-large dropdown-toggle" data-toggle="dropdown">
 				   				<span class="caret"></span>
 				 			</button>
 				 			<ul class="dropdown-menu">
				    			<li>Pizza</li>
				    			<li>China</li>
				    			<li>Árabe</li>
				    			<li>Vegetariano</li>
 				 			</ul>
	    					</div>
	    				</center>
     		</div> 
     	</div>

     	<!-- agregar local -->
		<div class="offset3 span6">
	    	<div class="widget stacked">					
				<div class="widget-header">
				<i class="icon-th-list"></i>
					<h3>Agregar Local</h3>
				</div> <!-- /widget-header -->
				
				<div class="widget-content">
					
					<fieldset>					
					<form class="form-horizontal">
						<div class="control-group">
						    <label class="control-label" for="inputEmail">Nombre</label>
						    <div class="controls">
						      <input type="text" id="inputEmail" placeholder="ej : XL Express">
						    
						    </div>
						  </div>						 
						  <div class="control-group">
						    <label class="control-label" for="inputEmail">Direccion</label>
						    <div class="controls">
						      <input type="text" id="inputEmail" placeholder="ej : direccion #111">
						    </div>
						  </div>						 

						  <div class="control-group">
						    <label class="control-label" for="inputEmail">Ciudad</label>
						    <div class="controls">
						      <input type="text" id="inputEmail" placeholder="ej: Valparaiso">
						    </div>
						  </div>
						  
						  <div class="control-group">
						    <label class="control-label" for="inputEmail">Teléfono</label>
						    <div class="controls">
						      <input type="text" id="inputEmail" placeholder="ej:032 8657983">						    
						    </div>
						  </div>

						   <div class="control-group">
						    <label class="control-label" for="inputEmail">Email</label>
						    <div class="controls">
						      <input type="text" id="inputEmail" placeholder="ej: ejemplo@ejemplo.cl">
						    </div>
						  </div>

						   <div class="control-group">
						    <label class="control-label" for="inputEmail">Sector Reparto</label>
						    <div class="controls">
						      <input type="text" id="inputEmail" placeholder="ej: ejemplo@ejemplo.cl">
						    </div>
						  </div>

						  <div class="control-group" style="margin-right: 60px;">
						    <div class="controls">
						      <button type="submit" class="btn btn-small btn-block btn-warning" style="width:100px">Agregar</button>
						    </div>
						  </div>
					</form>				
				</fieldset>					
				</div> 
			</div>
	    </div> <!-- agregar local -->
      </div> <!-- /row -->
    </div> <!-- /container -->   
</div> <!-- /main -->
    
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
	<i class="icon-chevron-up"></i></a><a id="back-to-top" href="http://foodland.cl/foodland2/implementacion/admin/
	admin_inicio.php#top" style="display: none;"><i class="icon-chevron-up"></i></a></body></html>