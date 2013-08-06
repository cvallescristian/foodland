<div class="container">
	<div class="row">
		 <div class="span12">
		 	<h1>Sectores</h1>
		 	<a href="<?= base_url();?>admin_sector_reparto/nuevo_sector"class="btn btn-success btn-large">Agregar nuevo Sector</a>
		 	<br><br><br>

		 </div>
		 		 <div class="span6 ">     	<!-- lista sectores -->  		
      		<div class="widget stacked widget-table action-table">				
				<div class="widget-header">
					<i class="icon-th-list"></i>
					<h3>Sectores Padre</h3>
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
								<td> <a href="<?= base_url()?>admin_sector_reparto/borrar_sector?id=<?= $s->id_sector_entrega?>&tip=1" class="btn btn-danger">Borrar</a></td>
								<td><a href="<?= base_url()?>admin_sector_reparto/editar_sector?id=<?= $s->id_sector_entrega?>&tip=1" class="btn btn-info">Editar</a></td>
							</tr>
						<?php	
						} ?>
						
						</tbody>
					</table>					
				</div> <!-- /widget-content -->
			</div> <!-- /widget -->	
	    </div> <!-- Termino lista sectores-->

	    <div class="span6">
	    	<div class="widget stacked widget-table action-table">				
				<div class="widget-header">
					<i class="icon-th-list"></i>
					<h3>Sub-Sectores</h3>
				</div>				
				<div class="widget-content">					
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Sector Padre</th>
								<th>Nombre</th>
								<th>Borrar</th>
								<th>Editar</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						$i=0; 
						foreach ($subsectores as $sb) {
						?>
							<tr>
								<td><?= $sector_padre[$i];  ?></td>
								<td><?= $sb->nombre_subsector_entrega  ?></td>
								<td><a href="<?= base_url()?>admin_sector_reparto/borrar_sub_sector?id=<?= $sb->id_subsector_entrega?>&tip=2" class="btn btn-danger">Borrar</a></td>
								<td><a href="<?= base_url()?>admin_sector_reparto/editar_sector?id=<?= $sb->id_subsector_entrega?>&tip=2" class="btn btn-info">Editar</a></td>
							</tr>
						<?php	
						$i++;
						} ?>
						
						</tbody>
					</table>					
				</div> <!-- /widget-content -->
			</div> <!-- /widget -->	
	    </div>
	</div>
</div>