<div class="container">
	<div class="row">
		  <div class="span5 offset3">      	<!-- editar local -->
	    	<div class="widget stacked">					
				<div class="widget-header">
				<i class="icon-th-list"></i>
					<h3>Editar Local</h3>
				</div>				
				<div class="widget-content">
					<fieldset>					
					<form class="form-horizontal" method="post" action="<?= base_url();?>admin_local/editar_local_agregar?id=<?= $_GET['id']; ?>"  enctype="multipart/form-data" >
						
						<div class="control-group">
							<?php foreach ($locales as $l) {
								if($l->id_local == $_GET['id']){
									break;
								}
							}
						    	?>
						    <label class="control-label" for="inputNombre">Nombre</label>
						    <div class="controls">
						      <input type="text" id="inputNombre" name="inputNombre"  value='<?= $l->nombre_local  ?>' required>
						    
						    </div>
						  </div>						 
						  <div class="control-group">
						    <label class="control-label" for="inputDireccion">Dirección</label>
						    <div class="controls">
						      <input type="text" id="inputdireccion" name="inputDireccion" value="<?= $l->direccion_local  ?>">
						    </div>
						  </div>						 
 						  <div class="control-group">
						    <label class="control-label" for="inputFono">Teléfono</label>
						    <div class="controls">
						      <input type="number" id="inputFono" name="inputFono" value="<?= $l->telefono_local  ?>" required>						    
						    </div>
						  </div>

						   <div class="control-group">
						    <label class="control-label" for="inputEmail">Email</label>
						    <div class="controls">
						      <input type="email" id="inputEmail" name="inputEmail" value="<?= $l->email  ?>" required>
						    </div>
						  </div>
						  <div class="control-group">
						    <label class="control-label" for="inputLogo">Logo</label>
						    <div class="controls">
						      <input type="file" id="inputLogo" name="userfile" style="width:250px;">
						    </div>
						  </div>
						  <div class="control-group">
						    <label class="control-label" for="inputLogo">Sectores de Reparto</label>
						    <div class="controls">
						    <?php foreach ($sector_repartos as $s) {
							    	foreach ($sector_entrega as $se) {
								    		$check = "";
								    		if($s->id_sector_entrega == $se->id_sector_entrega){
								    			$check="checked";
								    			break;
								    		}
							    		}
						    	?>
						    	 <label class="checkbox inline">
				  					<input type="checkbox" name="check[]" value="<?= $s->id_sector_entrega?>" <?= $check  ?>>
				  					<?= $s->nombre_sector_entrega  ?>
								</label>	<br>
						    	<?php 
						    			}
						    		 
						    	?>
						    </div>
						  </div>

						  <div class="control-group" style="margin-right: 60px;">
						    <div class="controls">
						      <button type="submit" class="btn btn-small btn-block btn-warning" style="width:100px">Aceptar</button>
						    </div>
						  </div>
					</form>				
				</fieldset>					
				</div> 
			</div>
	    </div> <!-- editar local -->
	</div>
</div>