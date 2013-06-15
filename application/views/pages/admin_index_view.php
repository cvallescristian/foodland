

<div class="navbar navbar-inverse navbar-fixed-top">	
	<div class="navbar-inner">		
		<div class="container">			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<i class="icon-cog"></i>
			</a>
			
			<a class="span4" href="<?= base_url(); ?>">
				<img src="./img/logo2.png" width="200" height="40"> <sup style="color:white;">Beta</sup>
			</a>		
		</div> <!-- /container -->		
	</div> <!-- /navbar-inner -->	
</div> <!-- /navbar -->     
<br> <br> <br>
<!-- Login -->   
<div class="main">
  	<div class="container">
		<div class="bloque_blanco bloque_b span6" style="margin-left: 500px;">
			<form class="form-horizontal" name="form" action="<?= base_url(); ?>admin/login" enctype="multipart/form-data" method="post">
				<fieldset>
					<legend style="text-align: center">Administraci&oacuten de Locales</legend>
					
					<form class="form-horizontal" method="post" >
						  <div class="control-group">
						    <label class="control-label" for="inputRut">Email</label>
						    <div class="controls">
						      <input type="email"name='inputEmail' id="inputEmail" placeholder="integrante@foodland.cl" required>
						    </div>
						  </div>

						  <div class="control-group">
						    <label class="control-label" for="inputPassword">Contraseña</label>
						    <div class="controls">
						      <input type="password" maxlength='20' name='inputPassword' id="inputPassword" placeholder="Contraseña" required>
						    </div>
						  </div>

						  <div class="control-group" style="margin-right: 60px;">
						    <div class="controls">
						      <button type="submit" class="btn btn-large btn-block btn-warning">Entrar</button>
						    </div>
						  </div>
						  <div class="control-group">
						  	<p><a href="">¿Olvidaste tu contraseña?</a></p>
						    <p> <a href="../registro_local.php">Quieres ser parte de foodland.cl, registrate ya!</a></p>
						   
						  </div>

						
					</form>
				
				</fieldset>
			</form>
		</di
</div>
<!-- Fin login -->
<br> <br> <br>




