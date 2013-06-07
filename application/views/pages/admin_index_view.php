
<div class="navbar navbar-inverse navbar-fixed-top">	
	<div class="navbar-inner">		
		<div class="container">			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<i class="icon-cog"></i>
			</a>
			
			<a class="span4" href="http://foodland.cl/foodland2/implementacion/admin/admin_inicio.php">
				<img src="./img/logo2.png" width="200" height="40"> <sup style="color:white;">Beta</sup>
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
						<form class="form-horizontal" action="<?= base_url(); ?>admin_local">
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




