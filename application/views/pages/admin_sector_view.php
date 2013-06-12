<div class="main">
    <div class="container">
      <div class="row">     	
      	<div class="span4">    <!-- Lista sectores -->
			<div class="widget stacked widget-table action-table">				
				<div class="widget-header">
					<i class="icon-th-list"></i>
					<h3>Lista Sectores</h3>
				</div>				
				<div class="widget-content">					
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Sector</th>
								<th>Borrar</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Placeres</td>										
								<td> <a href class="btn btn-danger">Borrar</a></td>
							</tr>
							<tr>
								<td>Plan</td>										
								<td> <a href class="btn btn-danger">Borrar</a></td>
							</tr>
							<tr>
								<td>Viña del Mar</td>										
								<td> <a href class="btn btn-danger">Borrar</a></td>
							</tr>
							<tr>
								<td>Reñaca</td>										
								<td> <a href class="btn btn-danger">Borrar</a></td>
							</tr>
							<tr>
								<td>Con Con</td>										
								<td> <a href class="btn btn-danger">Borrar</a></td>
							</tr>
							<tr>
								<td>Quilpué</td>										
								<td> <a href class="btn btn-danger">Borrar</a></td>
							</tr>
							<tr>
								<td>El Belloto</td>										
								<td> <a href class="btn btn-danger">Borrar</a></td>
							</tr>
							<tr>
								<td>Villa Alemana</td>										
								<td> <a href class="btn btn-danger">Borrar</a></td>
							</tr>
							</tbody>
						</table>					
				</div> <!-- /widget-content -->
			</div> <!-- /widget -->	
	    </div> <!-- /Lista sectores -->

				<div class="span3">    <!-- Lista locales por sector -->
			<div class="widget stacked widget-table action-table">				
				<div class="widget-header">
					<i class="icon-th-list"></i>
					<h3>Lista Locales por sector</h3>
				</div>				
				<div class="widget-content">					
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th><select>
  									<option>Placeres</option>
 									<option>Viña del Mar</option>
 									<option>etc...</option>  <!-- ASOCIAR A LA BD!! -->
 									</select>
								</tr>
						</thead>
						<tbody>
							<tr>
								<td>XL</td>										
							</tr>
							<tr>
								<td>Met</td>										
							</tr>
							<tr>
								<td>MetPizza</td>										
							</tr>
						</tbody>
					</table>					
				</div> <!-- /widget-content -->
			</div> <!-- /widget -->	
	    </div> <!-- /Lista sectores -->

		<div class="span5">      	<!-- agregar sector -->
	    	<div class="widget stacked">					
				<div class="widget-header">
				<i class="icon-th-list"></i>
					<h3>Agregar Sector</h3>
				</div>				
				<div class="widget-content">
					<fieldset>					
					<form class="form-horizontal">
						
						<div class="control-group">
						    <label class="control-label" for="inputEmail">Nombre del sector</label>
						    <div class="controls">
						      <input type="text" id="inputEmail" placeholder="ej : Santiago">
						    </div>
						</div>						 

						<div class="control-group">
						    <label class="control-label" for="inputEmail">Latitud Máxima izq</label>
						    <div class="controls">
						      <input type="text" id="inputEmail">
						    </div>
						</div>	

						<div class="control-group">
						    <label class="control-label" for="inputEmail">Latitud Máxima der</label>
						    <div class="controls">
						      <input type="text" id="inputEmail">
						    </div>
						</div>			
						
						<div class="control-group">
						    <label class="control-label" for="inputEmail">Latitud Mínima izq</label>
						    <div class="controls">
						      <input type="text" id="inputEmail">
						    </div>
						</div>																	
						 
						<div class="control-group">
						    <label class="control-label" for="inputEmail">Latitud Mínima der</label>
						    <div class="controls">
						      <input type="text" id="inputEmail">
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
	    </div> <!-- /agregar sector -->
    </div> <!-- /row -->

	</div> <!-- /container -->   
</div> <!-- /main -->