<div class="main">
    <div class="container">	
		<div class="span9 offset1">     <!-- lista miembros -->		
			<h1>Miembros</h1>
      		<a class="btn btn-success" href="<?= base_url();?>admin_member/nuevo_member">Agregar nuevo Miembro</a> 
			<div class="widget stacked widget-table action-table">				
				<div class="widget-header">
					<i class="icon-th-list"></i>
					<h3>Miembros</h3>
				</div>				
				<div class="widget-content">					
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Email</th>
								<th>Borrar</th>
								<th>Editar</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($members as $m ) {
							?>
							<tr>										
								<td><?= $m->email?></td>
								<td> <a href="<?= base_url()."admin_member/borrar_miembro?id=$m->id_members"?>" class="btn btn-danger">Borrar</a></td>
								<td> <a href="" class="btn btn-info">Editar</a></td>
							</tr>
							<?php
							} 
							?>
							</tbody>
						</table>					
				</div> <!-- /widget-content -->
			</div> <!-- /widget -->	
	    </div> <!-- Termino lista member -->	

	</div> <!-- /container -->   
</div> <!-- /main -->