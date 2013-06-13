<div class="container">
	<div class="row">
		  <div class="span5 offset3">      	<!-- agregar miembro -->
	    	<div class="widget stacked">					
				<div class="widget-header">
				<i class="icon-th-list"></i>
					<h3>Agregar Miembro</h3>
				</div>				
				<div class="widget-content">
					<fieldset>					
					<form class="form-horizontal" method="post" action="<?= base_url()?>admin_member/nuevo_miembro_agregar"  enctype="multipart/form-data" >
										 
						  <div class="control-group">
						    <label class="control-label" for="inputDireccion">Email</label>
						    <div class="controls">
						      <input type="text" id="inputEmail" name="inputEmail"placeholder="ej : Juanito Pérez" autocomplete="off" required>
						    </div>
 						  <div class="control-group">
						    <label class="control-label" for="inputFono">Pass</label>
						    <div class="controls">
						      <input type="text" id="inputPass" name="inputPass" autocomplete="off" required>						    
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
	    </div> <!-- Termino agregar member -->
	</div>
</div>