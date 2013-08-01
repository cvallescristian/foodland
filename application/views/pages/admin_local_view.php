<div class="main">
    <div class="container">
      <div class="row">
      	
      	<div class="span10 offset1">     	<!-- lista locales -->
      		<h1>Local</h1>
      		<a class="btn btn-success" href="<?= base_url();?>admin_local/nuevo_local">Agregar nuevo Local</a>  		
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
								<th>Ver Local</th>
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
								<td> <a href="<?= base_url();?>admin_local/borrar_local?id=<?= $l->id_local; ?>" class="btn btn-danger">Borrar</a></td>
								<td><a href="<?= base_url();?>admin_local/editar_local?id=<?= $l->id_local; ?>" class="btn btn-info">Editar</a></td>
								<td><a href="<?= base_url()?>admin_detalle_local?id=<?= $l->id_local; ?>" class="btn btn-warning">Ver</a></td>
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
      			<a href="<?= base_url();?>admin_local/nuevo_sector"class="btn btn-success">Agregar nuevo Sector</a>
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
						<?php foreach ($sectores as $s) {
						?>
							<tr>
								<td><?= $s->nombre_sector_entrega  ?></td>
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