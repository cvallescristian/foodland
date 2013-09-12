
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
					<form class="form-horizontal" method="post" action="<?= base_url()?>admin_sector_reparto/editar_sector_agregar?id=<?=$_GET['id'];?>" >
						
						<div class="control-group">
						    <label class="control-label" for="inputNombre">Nombre del sector</label>
						    <div class="controls">
						      <input type="text" id="inputNombreSector" name="inputNombre" placeholder="ej : XL Express" value="<?php if($sector!="" and $_GET['tip'] == 1){ echo $sector->nombre_sector_entrega; } ?><?=$subsectores->nombre_subsector_entrega;?>" required>
						    </div>
						  </div>
						  <div class="control-group">
						    <label class="control-label" for="inputSectorPadre">Sector Padre</label>
						    <div class="controls">
						    <select name="inputSectorPadre" id="">

						    	<?php foreach ($sectores as $s ) {
						    		
						    		if($_GET['tip'] == 2 && $subsectores->id_sector_entrega == $s->id_sector_entrega){
						    		 	break;
						    		}
						    	}
						    	?>
									<option value="<?= $s->id_sector_entrega?>" ><?= $s->nombre_sector_entrega ?></option>

						    	<?php foreach ($sectores as $s ) {
						    	?>
									<option value="<?= $s->id_sector_entrega?>"><?= $s->nombre_sector_entrega ?></option>
						    	<?php 
						    	} ?>
						    </select>
						    </div>
						  </div>						 
						  <div class="control-group" style="margin-right: 60px;">
						    <div class="controls">
						      <button type="submit" class="btn btn-small btn-block btn-warning" style="width:100px"><?php if($sector==""){echo "Agregar";}else{echo "Editar";} ?></button>
						    </div>
						  </div>
					</form>				
				</fieldset>					
				</div> 
			</div>
	    </div> <!-- agregar nuevo sector -->
	</div>
</div>