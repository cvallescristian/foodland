<div class="container">
	<div class="row">
		<div class="span12">
			<div class="span3">
				<a class="btn btn-info btn-large" href="javascript:history.back(1)">volver al menu de locales</a>
				<br>
				<br>
			</div>
		</div>
		<div class="span12">
      		
			<div class="widget stacked">
					
				<div class="widget-header">
					<i class="icon-bookmark"></i>
					<h3>Proiedades del local</h3>
				</div> <!-- /widget-header -->
				
				<div class="widget-content">
					
					<div class="shortcuts">
						<a href="<?= base_url()?>admin_detalle_local/detalle_producto?id=<?= $id?>" class="shortcut">
							<i class="shortcut-icon icon-list-alt"></i>
							<span class="shortcut-label">Productos del local</span>
						</a>
							<a href="<?= base_url()?>admin_detalle_local/detalle_producto?id=<?= $id?>" class="shortcut">
							<i class="shortcut-icon icon-th"></i>
							<span class="shortcut-label">Editar local</span>

							<a href="<?= base_url()?>admin_detalle_local/borrar_local?id=<?=$id?>" class="shortcut">
							<i class="shortcut-icon icon-remove"></i>
							<span class="shortcut-label">Borrar Local</span>
						</a>
					
					</div> <!-- /shortcuts -->	
					
				</div> <!-- /widget-content -->
				
			</div> <!-- /widget -->
      	</div>

      	<div class="span6">
      		
      		<div class="widget stacked">
					
				<div class="widget-header">
					<i class="icon-star"></i>
					<h3>Estadisticas del local</h3>
				</div> <!-- /widget-header -->
				
				<div class="widget-content">
					
					<div class="stats">
						
						<div class="stat">
							<span class="stat-value">12,386</span>									
							Cantidad totales de visita
						</div> <!-- /stat -->
						
						<div class="stat">
							<span class="stat-value">9,249</span>									
							Cantidad de visitas esta semana
						</div> <!-- /stat -->
						
						<div class="stat">
							<span class="stat-value">70%</span>									
							Porcentaje de aumento de visitas
						</div> <!-- /stat -->
						
					</div> <!-- /stats -->
				</div> <!-- /widget -->	
		</div>
	</div>
	  	<div class="span6" align="justify">
      		
      		<div class="widget stacked">
					
				<div class="widget-header">
					<i class="icon-th"></i>
					<h3>Datos del local</h3>
				</div> <!-- /widget-header -->
				
				<div class="widget-content">
							<div class="span4 offset1">
								<p>
						    		<strong>ID</strong>: 20 <br><br>
						    		<strong>Nombre</strong>: aka-sushi <br><br>
									<strong>Dirección</strong>: Palmira romano 117, Quilpué<br><br>
									<strong>Teléfono</strong>: 111111111 <br><br>
									<strong>Email</strong>: email@email.cl <br><br>
									<strong>Horario semana</strong>: de 10:00 a 23:00 hrs <br><br>
									<strong>Horario fin de semana</strong>: de 10:00a 23:00 hrs <br><br>
									<strong>Sectores de reparto</strong>: Con con, villa alemana, quilpue <br><br>
									<strong>Cond. adicionales reparto</strong>: de 1 a 15 norte <br><br>
									<strong>Sitio de referencia</strong>: <a href="">http://foodland.cl</a> <br><br>

						    	</p>
						    </div>
						    <div class="span3 offset2" ><a href="" class="btn btn-info btn-large">Editar</a></div>
									
				</div> <!-- /widget -->	
		</div>
	</div>


	
</div>
