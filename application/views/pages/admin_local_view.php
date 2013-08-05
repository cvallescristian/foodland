<div class="main">
    <div class="container">
      <div class="row">
      	<div class="<? if($alert!=""){ echo 'alert';}?> <? if($alert==1){echo 'alert-success';}elseif ($alert==3){echo 'alert-error';}?>">
			<?=$title?>
      	</div>
      	<div class="span6 offset1">     	<!-- lista locales -->
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
								<th>ID</th>
								<th>Nombre</th>
								<th>Ver Local</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($locales as $l) {
						?>
							<tr>
								<td><?= $l->id_local?></td>
								<td><?= $l->nombre_local  ?></td>
								<td><a href="<?= base_url()?>admin_detalle_local?id=<?= $l->id_local; ?>" class="btn btn-warning">Ver</a></td>
							</tr>
						<?php	
						} ?>
						
						</tbody>
					</table>					
				</div> <!-- /widget-content -->
			</div> <!-- /widget -->	
	    </div> <!-- Termino lista locales -->
   
