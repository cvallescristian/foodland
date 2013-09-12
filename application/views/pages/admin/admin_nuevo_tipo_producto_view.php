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
					<form class="form-horizontal" method="post" action="<?= base_url()?>admin_producto/nuevo_tipo_producto_agregar"  enctype="multipart/form-data" >
						
						<div class="control-group">
						    <label class="control-label" for="inputNombre">Nombre</label>
						    <div class="controls">
						      <input type="text" id="inputNombre" name="inputNombre"placeholder="ej : Comida China" required>
						    
						    </div>
						  </div>						 
						 
						  <div class="control-group">
						    <label class="control-label" for="inputLogo">Foto</label>
						    <div class="controls">
						      <input type="file" id="inputLogo" name="userfile" style="width:250px;"required>
						    </div>
						  <br><br>
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