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
					<form class="form-horizontal" method="post" action="<?= base_url()?>admin_producto/nuevo_producto_agregar" enctype="multipart/form-data" >
						
						<div class="control-group">
						    <label class="control-label" for="inputNombre">Título</label>
						    <div class="controls">
						      <input type="text" id="inputTitulo" name="inputTitulo"placeholder="ej : Pizza Familiar" autocomplete="off" required>
						    </div>
						</div>						 
						  <div class="control-group">
						    <label class="control-label" for="inputLocal">Local Asociado</label>
						    <div class="controls">
						      <select name='inputLocal'>
  								<?php foreach ($locales as $pro){ 	
  								?>
  								<option value="<?= $pro->id_local ?>"><?= $pro->nombre_local ?> </option>
  								<?php } ?>
							</select>
						    </div>
						  </div>
						  						  <div class="control-group">
							    <label class="control-label" for="inputHorarioEntrada">Promoción</label>
							    <div class="controls">
							    	<select name="inputPromocion">
										<option value="0"
										>No es Promoción
										</option>
										<option value="1"
										>Promoción
										</option>

							    	</select>
							    </div>
							  </div>
						  <div class="control-group">
						    <label class="control-label" for="inputLocal">Tipo Producto</label>
						    <div class="controls">
						      <select name='inputProducto'>
  								<?php foreach ($producto as $pro){ 	
  								?>
  								<option value="<?= $pro->id_tipo_producto ?>"><?= $pro->nombre_tipo_producto ?> </option>
  								<?php } ?>
							</select>
						    </div>
						  </div>						 
 						  <div class="control-group">
						    <label class="control-label" for="inputPrecio">Precio</label>
						    <div class="controls">
						      <input type="number" id="inputPrecio" name="inputPrecio" placeholder="$$$$" autocomplete="off" required>						    
						    </div>
						  </div>
						  <div class="control-group">
						    <label class="control-label" for="inputFoto">Logo</label>
						    <div class="controls">
						      <input type="file" id="inputFoto" name="userfile" style="width:250px;"required>
						    </div>
						  </div>
						  <div class="control-group">
						    <label class="control-label" for="inputDescripcion">Descripción</label>
						    <div class="controls">
						      <textarea name='inputDescripcion' rows="3" required></textarea>					    
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