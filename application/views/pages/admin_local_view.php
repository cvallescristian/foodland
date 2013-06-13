<div class="main">
    <div class="container">
      <div class="row">
      	
      	<div class="span9 offset1">     	<!-- lista locales -->
      		<h1>Local</h1>
      		<a class="btn btn-success">Agregar nuevo Local</a>  		
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
								<th>Teléfono</th>
								<th>Email</th>
								<th>Borrar</th>
								<th>Editar</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($locales as $l) {
						?>
							<tr>
								<td><?= $l->nombre_local  ?></td>
								<td><?= $l->direccion_local?></td>	
								<td><?= $l->telefono_local ?></td>
								<td><?= $l->email  ?></td>
								<td> <a href="" class="btn btn-danger">Borrar</a></td>
								<td><a href="" class="btn btn-info">Editar</a></td>
							</tr>
						<?php	
						} ?>
						
						</tbody>
					</table>					
				</div> <!-- /widget-content -->
			</div> <!-- /widget -->	
	    </div> <!-- Termino lista locales -->
   
      	<div class="span9 offset1">     	<!-- lista sectores -->  		
      		<h1>Sectores</h1>
      			<a class="btn btn-success">Agregar nuevo Sector</a>
      		<div class="widget stacked widget-table action-table">				
				<div class="widget-header">
					<i class="icon-th-list"></i>
					<h3>Sectores</h3>
				</div>				
				<div class="widget-content">					
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Nombre</th>
								
								<th>Borrar</th>
								<th>Editar</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($locales as $l) {
						?>
							<tr>
								<td><?= $l->nombre_local  ?></td>
								<td> <a href="" class="btn btn-danger">Borrar</a></td>
								<td><a href="" class="btn btn-info">Editar</a></td>
							</tr>
						<?php	
						} ?>
						
						</tbody>
					</table>					
				</div> <!-- /widget-content -->
			</div> <!-- /widget -->	
	    </div> <!-- Termino lista sectores-->

	    <div class="span5">      	<!-- agregar local -->
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
						    <label class="control-label" for="inputEmail">Dirección</label>
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
	<div class="row">
		

	     <!-- sectores de locales -->
		<div class="span2">
	    	<div class="widget stacked">
					
				<div class="widget-header">
				<i class="icon-th-list"></i>
					<h3>Sector de reparto de local</h3>
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
	</div> <!--row2 -->
    </div> <!-- /row -->
	</div> <!-- /container -->   
</div> <!-- /main -->