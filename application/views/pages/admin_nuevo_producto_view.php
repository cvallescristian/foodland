<div class="container">
	<div class="row">
		  <div class="span5 offset3">      	<!-- agregar local -->
	    	<div class="widget stacked">					
				<div class="widget-header">
				<i class="icon-th-list"></i>
					<h3>Agregar Producto</h3>
				</div>				
				<div class="widget-content">
					<fieldset>					
					<form class="form-horizontal" method="post" action="<?= base_url()?>admin_local/nuevo_local_agregar"  enctype="multipart/form-data" >
						
						<div class="control-group">
						    <label class="control-label" for="inputNombre">Título</label>
						    <div class="controls">
						      <input type="text" id="inputTitulo" name="inputTitulo"placeholder="ej : Pizza Familiar" autocomplete="off" required>
						    </div>
						</div>						 
						  <div class="control-group">
						    <label class="control-label" for="inputDireccion">Local Asociado</label>
						    <div class="controls">
						      <select>
  								<option>MetPizza</option>
  								<option>XL</option>
  								<option>etc...</option>
							</select>
						    </div>
						  </div>						 
 						  <div class="control-group">
						    <label class="control-label" for="inputFono">Precio</label>
						    <div class="controls">
						      <input type="text" id="inputPrecio" name="inputPrecio" placeholder="$$$$" autocomplete="off" required>						    
						    </div>
						  </div>

						  <div class="control-group">
						    <label class="control-label" for="inputEmail">Descripción</label>
						    <div class="controls">
						      <textarea rows="3" required></textarea>					    
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
	    </div> <!-- Termino agregar local -->
	</div>
</div>