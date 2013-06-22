<br> <br> <br> <br> <br> <br>
<!-- Login -->   
<div class="main">
  	<div class="container">
		<div class="bloque_blanco bloque_b offset6 span5">
			<form class="form-horizontal"  method="post" action="<?= base_url(); ?>admin/login">
				<fieldset>
								<div class="widget stacked widget-table action-table">				
				<div class="widget-header">
					<i class="icon-eye-open"></i>
					<h3>Administración de Locales</h3>
				</div>				
				<div class="widget-content">					
					<table class="table table-striped table-bordered">
						<div class="control-group">
							<br>
						    <label class="control-label" for="inputEmail">Email</label>
						    <div class="controls">
						      <input type="email" name='inputEmail' id="inputEmail" placeholder="integrante@foodland.cl" required>
						    </div>
						  </div>

						  <div class="control-group">
						    <label class="control-label" for="inputPassword">Contraseña</label>
						    <div class="controls">
						      <input type="password" maxlength='20' name='inputPassword' id="inputPassword" placeholder="Contraseña" required>
						    </div>
						  </div>

						  <div class="control-group">
						    <div class="controls">
						      <button type="submit" class="btn btn-warning">Entrar</button>
						    </div>
						  </div>						 								
					</table>					
				</div> <!-- /widget-content -->  
				</fieldset>
			</form>
		</div>
	</div>
</div> <!-- Fin login -->