<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="img/logo.ico">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Foodland Admin</title>   
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">        
    <link rel="stylesheet" href="<?= base_url();?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url();?>css/admin.css">
    <link rel="stylesheet" href="<?= base_url();?>css/font-awesome.min.css" rel="stylesheet">   
    <link rel="stylesheet" href="<?= base_url();?>css/base-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url();?>/css/base-admin-2-responsive.css" rel="stylesheet">        
    <link rel="stylesheet" href="<?= base_url();?>css/bootstrap-responsive.min.css">
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">	<!--Parte 1 Header -->		
	<div class="navbar-inner">		
		<div class="container">			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<i class="icon-cog"></i>
			</a>			
			<a class="span2" href="<?= base_url();?>admin">
				<img src="<?= base_url();?>img/logo2.png"> <sup style="color:white;">Beta</sup>
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
			</div>
		</div> 
	</div>
</div> <!--/Parte 1 Header -->		
        
<div class="subnavbar"><!--Parte 2 Header -->		
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
							<span>Locales-Sectores</span>
						</a>	    
					</li>					
					<li class="">					
						<a href="<?= base_url();?>admin_producto">
							<i class="icon-barcode"></i>
							<span>Productos</span>							
						</a>				
					</li>
					<li class="">					
						<a href="<?= base_url();?>admin_member">
							<i class="icon-user"></i>
							<span>Members</span>
						</a>				
					</li>			
				</ul>
			</div> <!-- /.subnav-collapse -->
		</div> <!-- /container -->	
	</div> <!-- /subnavbar-inner -->
</div> <!--/Parte 2 Header -->		
</body>
</html>