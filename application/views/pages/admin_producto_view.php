<div class="main">
    <div class="container">	
		<div class="span9 offset1">     <!-- lista productos -->		
			<h1>Producto</h1>
      		<a class="btn btn-success" href="<?= base_url();?>admin_producto/nuevo_producto">Agregar nuevo Producto</a> 
			<div class="widget stacked widget-table action-table">				
				<div class="widget-header">
					<i class="icon-th-list"></i>
					<h3>Productos</h3>
				</div>				
				<div class="widget-content">					
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Título</th>
								<th>Local Asociado</th>
								<th>Precio</th>
								<th>Descripción</th>
								<th>Borrar</th>
								<th>Editar</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>3 Completos</td>
								<td>XL</td>
								<td>1000</td>										
								<td>bla bla bla bla bla</td>
								<td> <a href class="btn btn-danger">Borrar</a></td>
								<td> <a href class="btn btn-info">Editar</a></td>
							</tr>
							<tr>
								<td>Pizza Napolitana Grande</td>
								<td>MetPizza</td>
								<td>8000</td>										
								<td>bla bla bla bla bla bla</td>
								<td> <a href class="btn btn-danger">Borrar</a></td>
								<td> <a href class="btn btn-info">Editar</a></td>
							</tr>
							<tr>
								<td>Sushi</td>
								<td>....</td>
								<td>6000</td>										
								<td>bla bla bla bla bla</td>
								<td> <a href class="btn btn-danger">Borrar</a></td>
								<td> <a href class="btn btn-info">Editar</a></td>
							</tr>
							</tbody>
						</table>					
				</div> <!-- /widget-content -->
			</div> <!-- /widget -->	
	    </div> <!-- Termino lista productos -->	

<!-- editar Producto
	<div class="row">
		<div class="span5">
	    	<div class="widget stacked">					
				<div class="widget-header">
				<i class="icon-th-list"></i>
					<h3>Editar Producto</h3>
				</div>				
				<div class="widget-content">
					<fieldset>					
					<form class="form-horizontal">
						
						<div class="control-group">
						    <label class="control-label" for="inputEmail">Nombre</label>
						    <div class="controls">
							<select>
  								<option>Completo</option>
 								<option>Pizza</option>
 								<option>etc...</option>
							</select>
						    </div>
						 </div>						 
						  <div class="control-group">
						    <label class="control-label" for="inputEmail">Local Asociado</label>
						    <div class="controls">
						      <input type="text" id="inputEmail" value="asociar a bd" name="direccion">
						    </div>
						  </div>						 

						  <div class="control-group">
						    <label class="control-label" for="inputEmail">Precio</label>
						    <div class="controls">
						      <input type="text" id="inputEmail" value="asociar a bd" name="ciudad">
						    </div>
						  </div>
						  
						  <div class="control-group">
						    <label class="control-label" for="inputEmail">Descripción</label>
						    <div class="controls">
						      <textarea rows="3" type="text" value="asociar a bd"></textarea>					    
						    </div>
						  </div>

						  <div class="control-group" style="margin-right: 60px;">
						    <div class="controls">
						      <button type="submit" class="btn btn-small btn-block btn-success" style="width:200px">Guardar Cambios</button>
						    </div>
						  </div>
					</form>				
				</fieldset>					
				</div> 
			</div>
	    </div>  
	</div> Termino editar producto -->

	</div> <!-- /container -->   
</div> <!-- /main -->