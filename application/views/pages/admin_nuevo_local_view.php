<div class="container">
	<div class="row">
		  <div class="span5 offset3">      	<!-- agregar local -->
	    	<div class="widget stacked">					
				<div class="widget-header">
				<i class="icon-th-list"></i>
					<h3>Agregar Local</h3>
				</div>				
				<div class="widget-content">
					<fieldset>					
					<form class="form-horizontal" method="post" action="<?= base_url()?>admin_local/nuevo_local_agregar"  enctype="multipart/form-data" >
						
						<div class="control-group">
						    <label class="control-label" for="inputNombre">Nombre</label>
						    <div class="controls">
						      <input type="text" id="inputNombre" name="inputNombre"placeholder="ej : XL Express" required>
						    
						    </div>
						  </div>						 
						  <div class="control-group">
						    <label class="control-label" for="inputDireccion">Dirección</label>
						    <div class="controls">
						      <input type="text" id="inputdireccion" name="inputDireccion" placeholder="ej : direccion #111">
						    </div>
						  </div>						 
 						  <div class="control-group">
						    <label class="control-label" for="inputFono">Teléfono</label>
						    <div class="controls">
						      <input type="number" id="inputFono" name="inputFono" placeholder="ej : 032 8657983" required>						    
						    </div>
						  </div>

						   <div class="control-group">
						    <label class="control-label" for="inputEmail">Email</label>
						    <div class="controls">
						      <input type="email" id="inputEmail" name="inputEmail" placeholder="ej: ejemplo@ejemplo.cl" required>
						    </div>
						  </div>
						  <div class="control-group">
						    <label class="control-label" for="inputLogo">Logo</label>
						    <div class="controls">
						      <input type="file" id="inputLogo" name="userfile" style="width:250px;"required>
						    </div>
						  </div>
						  <div class="control-group">
						    <label class="control-label" for="inputLogo">Sectores de Reparto</label>
						    <div class="controls">
						    <?php foreach ($sector_repartos as $s) {
						    	?>
						    	 <label class="checkbox inline">
				  					<input type="checkbox" name="check[]" value="<?= $s->id_sector_entrega?>" >
				  					<?= $s->nombre_sector_entrega  ?>
								</label>	<br>
						    	<?php 
						    		} 
						    	?>
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