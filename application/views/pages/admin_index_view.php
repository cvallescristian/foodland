<br><br><br>
<!-- Login -->   
<div class="main">
  	<div class="container">
		<div class="bloque_blanco span5">
			<form class="form-horizontal"  method="post" action="<?= base_url(); ?>admin/login">
			<fieldset>
			<div class="widget stacked widget-table action-table">				
				<div class="widget-header">
					<h4> Administración de Locales </h4>
				</div>				
				<div class="widget-content">					
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
				</div> <!-- /widget-content -->  
				</fieldset>
			</form>
		</div>
	</div>
</div> <!-- Fin login -->