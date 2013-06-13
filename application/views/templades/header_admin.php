<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
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
<body>
<div class="navbar navbar-inverse navbar-fixed-top">	
	<div class="navbar-inner">		
		<div class="container">			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<i class="icon-cog"></i>
			</a>
			
			<a class="span4" href="<?= base_url();?>admin_local">
				<img src="./img/logo2.png" width="200" height="40"> <sup style="color:white;">Beta</sup>
			</a>		
			<div class="nav-collapse collapse">
				<ul class="nav pull-right">
					<li class="dropdown">
						<a href="<?= base_url();?>admin/logout" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i> 
							LOGOUT
							
						</a>
												
					</li>
				</ul>				
			</div><!--/.nav-collapse -->	
		</div> <!-- /container -->		
	</div> <!-- /navbar-inner -->	
</div> <!-- /navbar -->    
     
<div class="subnavbar">
	<div class="subnavbar-inner">	
		<div class="container">		
			<a class="btn-subnavbar collapsed" data-toggle="collapse" data-target=".subnav-collapse">
				<i class="icon-reorder"></i>
			</a>
			<div class="subnav-collapse collapse">
				<ul class="mainnav">					
					<li class="">					
						<a href="<?= base_url();?>admin_local">
							<i class="icon-map-marker"></i>
							<span>Local</span>
						</a>	    
					</li>					
					<li class="">					
						<a href="<?= base_url();?>admin_producto">
							<i class="icon-barcode"></i>
							<span>Productos</span>
							
						</a>				
					</li>
					<li class="">					
						<a href="<?= base_url();?>admin_sector">
							<i class="icon-globe"></i>
							<span>Sectores</span>							
						</a>	
					</li>
				</ul>
			</div> <!-- /.subnav-collapse -->

		</div> <!-- /container -->	
	</div> <!-- /subnavbar-inner -->
</div> <!-- /subnavbar -->
