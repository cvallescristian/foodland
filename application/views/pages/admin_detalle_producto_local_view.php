<div class="main">
	<div class="container">
		<div class="row">
				<div class="span10 offset1">     <!-- lista productos -->		
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
								<th>Id</th>
								<th>Título</th>
								<th>Local Asociado</th>
								<th>Precio</th>
								<th>Descripción</th>
								<th>Borrar</th>
								<th>Editar</th>
								
							</tr>
						</thead>
						<tbody>
						<?php foreach ($producto as $l) {
						?>
							<tr>
								<td><?= $l->id_producto ?></td>
								<td><?= $l->titulo_producto  ?></td>
								<?php foreach ($locales as $lo) {
									if($lo->id_local == $l->id_local)
									{
										?>
											<td><?= $lo->nombre_local?></td>
											<?php
									}
								}
								?>
								
								<td><?= $l->precio ?></td>
								<td><?= $l->descrip_producto  ?></td>
								<td> <a href="<?= base_url();?>admin_producto/borrar_producto?id=<?= $l->id_producto; ?>" class="btn btn-danger">Borrar</a></td>
								<td><a href="<?= base_url();?>admin_producto/editar_producto?id=<?= $l->id_producto; ?>" class="btn btn-info">Editar</a></td>
							</tr>
						<?php	
						} ?>
						
							</tbody>
						</table>					
				</div> <!-- /widget-content -->
			</div> <!-- /widget -->	
	    </div> <!-- Termino lista productos -->
		</div>
	</div>
</div>