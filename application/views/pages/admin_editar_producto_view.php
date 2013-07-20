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
					<form class="form-horizontal" method="post" action="<?= base_url()?>admin_producto/editar_producto_agregar?id=<?= $_GET['id']; ?>" enctype="multipart/form-data" >
						
						<div class="control-group">
						<?php foreach ($productos as $prod) {
								if($prod->id_producto == $_GET['id']){
									break;
								}
							}
						    	?>
						    <label class="control-label" for="inputNombre">Título</label>
						    <div class="controls">
						      <input type="text" id="inputTitulo" name="inputTitulo" value='<?= $prod->titulo_producto ?>' placeholder="ej : Pizza Familiar" autocomplete="off" required>
						    </div>
						</div>						 
						  <div class="control-group">
						    <label class="control-label" for="inputLocal">Local Asociado</label>
						    <div class="controls">
						      <select name='inputLocal'>
  								<?php foreach ($productos as $pro){
  									if($pro->id_producto == $_GET['id']){
										break;
									}
								}
								foreach ($locales as $loc){
									  if($loc->id_local == $pro->id_local){
										break;
									}
								}
  								?>
  								<option value="<?= $loc->id_local ?>"><?= $loc->nombre_local ?> </option>
  								
  								<?php foreach ($locales as $pro){

  								?>
  								<option value="<?= $pro->id_local ?>"><?= $pro->nombre_local ?> </option>
  								<?php } ?>
							</select>
						    </div>
						  </div>
						  <div class="control-group">
						    <label class="control-label" for="inputLocal">Tipo Producto</label>
						    <div class="controls">
						      <select name='inputProducto'>
  								<?php foreach ($productos as $pro){
  									if($pro->id_producto == $_GET['id']){
										break;
									}
								}
								foreach ($producto as $loc){
									  if($loc->id_tipo_producto == $pro->id_tipo_producto){
										break;
									}
								}
  								?>
  								<option value="<?= $loc->id_tipo_producto ?>"><?= $loc->nombre_tipo_producto ?> </option>
  								
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
						      <input type="number" id="inputPrecio" name="inputPrecio" value='<?= $prod->precio ?>' placeholder="$$$$" autocomplete="off" required>						    
						    </div>
						  </div>
						  <div class="control-group">
						    <label class="control-label" for="inputFoto">Logo</label>
						    <div class="controls">
						      <input type="file" id="inputFoto" name="userfile" style="width:250px;">
						    </div>
						  </div>
						  <div class="control-group">
						    <label class="control-label" for="inputDescripcion">Descripción</label>
						    <div class="controls">
						      <textarea name='inputDescripcion' rows="3" required><?= $prod->descrip_producto ?></textarea>					    
						    </div>
						  </div> 

						  <div class="control-group" style="margin-right: 60px;">
						    <div class="controls">
						      <button type="submit" class="btn btn-small btn-block btn-warning" style="width:100px">Editar</button>
						    </div>
						  </div>
					</form>				
				</fieldset>					
				</div> 
			</div>
	    </div> <!-- Termino agregar local -->
	</div>
</div>