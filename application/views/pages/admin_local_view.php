<div class="main">
    <div class="container">
      <div class="row">     	
      	<div class="offset1 span10">     		
			<div class="widget stacked widget-table action-table">				
				<div class="widget-header">
					<i class="icon-th-list"></i>
					<h3>Locales</h3>
				</div>				
				<div class="widget-content">					
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Dirección</th>
								<th>Ciudad</th>
								<th>Teléfono</th>
								<th>Email</th>
								<th>Borrar</th>
								<th>Editar</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Metpizza Placeres</td>
								<td>Av Placeres 396</td>	
								<td>Valparaíso</td>										
								<td>11111111</td>
								<td>contacto@metpizza.cl</td>
								<td> <a href class="btn btn-danger">Borrar</a></td>
								<td> <a href class="btn btn-success">Editar</a></td>
							</tr>
							<tr>
								<td>Met</td>
								<td>Av San martin 233</td>
								<td>Valparaíso</td>										
								<td>11111111</td>
								<td>contacto@met.cl</td>
								<td> <a href class="btn btn-danger">Borrar</a></td>
								<td> <a href class="btn btn-success">Editar</a></td>
							</tr>
							<tr>
								<td>Xl Express</td>
								<td>Av matta 232</td>
								<td>Valparaíso</td>
								<td>11111111</td>
								<td>contacto@xl.cl</td>
								<td> <a href class="btn btn-danger">Borrar</a></td>
								<td> <a href class="btn btn-success">Editar</a></td>
							</tr>
							<tr>
								<td>Met-Valpo</td>
								<td>Av Pedro Montt 4332</td>
								<td>Valparaíso</td>
								<td>11111111</td>
								<td>contacto@met-valpo.cl</td>
								<td> <a href class="btn btn-danger">Borrar</a></td>
								<td> <a href class="btn btn-success">Editar</a></td>
							</tr>
							</tbody>
						</table>					
				</div> <!-- /widget-content -->
			</div> <!-- /widget -->	
	    </div> <!-- /span6 -->

     <div class="row">	<!-- row2 -->
		<div class="span6">      	<!-- agregar local -->
	    	<div class="widget stacked">					
				<div class="widget-header">
				<i class="icon-th-list"></i>
					<h3>Agregar Local</h3>
				</div>				
				<div class="widget-content">
					<fieldset>					
					<form class="form-horizontal">
						
						<div class="control-group">
						    <label class="control-label" for="inputEmail">Nombre</label>
						    <div class="controls">
							<select>
  								<option>MetPizza</option>
 								<option>Xl</option>
 								<option>etc...</option>  <!-- ASOCIAR A LA BD!! -->
							</select>
						    </div>
						  </div>						 
						  <div class="control-group">
						    <label class="control-label" for="inputEmail">Direccion</label>
						    <div class="controls">
						      <input type="text" id="inputEmail" placeholder="ej : direccion #111">
						    </div>
						  </div>						 

						  <div class="control-group">
						    <label class="control-label" for="inputEmail">Ciudad</label>
						    <div class="controls">
						      <input type="text" id="inputEmail" placeholder="ej: Valparaiso">
						    </div>
						  </div>
						  
						  <div class="control-group">
						    <label class="control-label" for="inputEmail">Teléfono</label>
						    <div class="controls">
						      <input type="text" id="inputEmail" placeholder="ej:032 8657983">						    
						    </div>
						  </div>

						   <div class="control-group">
						    <label class="control-label" for="inputEmail">Email</label>
						    <div class="controls">
						      <input type="text" id="inputEmail" placeholder="ej: ejemplo@ejemplo.cl">
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

		<!-- sectores de locales -->
		<div class="span6">
	    	<div class="widget stacked">
					
				<div class="widget-header">
				<i class="icon-th-list"></i>
					<h3>Por sector</h3>
				</div>
				<div class="widget-content">
					<label class="checkbox inline">
  					<input type="checkbox">
  					Placeres
					</label>	<br>
					<label class="checkbox inline">
  					<input type="checkbox">
  					Plan 
					</label>	<br>
					<label class="checkbox inline">
  					<input type="checkbox">
  					Viña del mar
					</label>	<br>
					<label class="checkbox inline">
  					<input type="checkbox">
  					Reñaca
					</label>	<br>
					<label class="checkbox inline">
  					<input type="checkbox">
  					Con Con
					</label>	<br>
					<label class="checkbox inline">
  					<input type="checkbox">
  					Quilpué
  					</label>	<br>
					<label class="checkbox inline">
  					<input type="checkbox">
  					El Belloto
					</label>  	<br>	
					<label class="checkbox inline">
  					<input type="checkbox">
  					Villa Alemana
  					</label>	<br>								
				</div> 
			</div>
		</div> <!--sectores de locales -->
	</div> <!-- row2 -->

	<div class="span6">      	<!-- editar local -->
	    	<div class="widget stacked">					
				<div class="widget-header">
				<i class="icon-th-list"></i>
					<h3>Agregar Local</h3>
				</div>				
				<div class="widget-content">
					<fieldset>					
					<form class="form-horizontal">
						
						<div class="control-group">
						    <label class="control-label" for="inputEmail">Nombre</label>
						    <div class="controls">
						      <input type="text" id="inputEmail" placeholder="ej : XL Express">
						    
						    </div>
						  </div>						 
						  <div class="control-group">
						    <label class="control-label" for="inputEmail">Direccion</label>
						    <div class="controls">
						      <input type="text" id="inputEmail" placeholder="ej : direccion #111">
						    </div>
						  </div>						 

						  <div class="control-group">
						    <label class="control-label" for="inputEmail">Ciudad</label>
						    <div class="controls">
						      <input type="text" id="inputEmail" placeholder="ej: Valparaiso">
						    </div>
						  </div>
						  
						  <div class="control-group">
						    <label class="control-label" for="inputEmail">Teléfono</label>
						    <div class="controls">
						      <input type="text" id="inputEmail" placeholder="ej:032 8657983">						    
						    </div>
						  </div>

						   <div class="control-group">
						    <label class="control-label" for="inputEmail">Email</label>
						    <div class="controls">
						      <input type="text" id="inputEmail" placeholder="ej: ejemplo@ejemplo.cl">
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
	    </div> <!-- editar local -->

    </div> <!-- /row -->
	</div> <!-- /container -->   
</div> <!-- /main -->
    
<br> <br> <br>

