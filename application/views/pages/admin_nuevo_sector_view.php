<div class="container">
	<div class="row">
		  <div class="span5 offset3">      	<!-- agregar nuevo sector -->
	    	<div class="widget stacked">					
				<div class="widget-header">
				<i class="icon-th-list"></i>
					<h3>Agregar Sector</h3>
				</div>				
				<div class="widget-content">
					<fieldset>					
					<form class="form-horizontal" method="post" action="<?= base_url()?>admin_local/nuevo_local_agregar"  enctype="multipart/form-data" >
						
						<div class="control-group">
						    <label class="control-label" for="inputNombre">Nombre del sector</label>
						    <div class="controls">
						      <input type="text" id="inputNombreSector" name="inputNombreSector"placeholder="ej : XL Express" required>
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
	</div>
</div>