<div class="container">
	<div class="row">
		<div class="span11 offset1">
			<a class="btn btn-info btn-large" href="javascript:history.back(1)">Volver a menu del local </a>
			<br><br>
		</div>
		  <div class="span7 offset1">      	<!-- editar local -->
	    	<div class="widget stacked">					
				<div class="widget-header">
				<i class="icon-th-list"></i>
					<h3>Editar Local</h3>
				</div>				
				<div class="widget-content">
					<fieldset>					
					<form class="form-horizontal" method="post" action="<?= base_url();?>admin_detalle_local/editar_local_agregar?id=<?= $_GET['id']; ?>"  enctype="multipart/form-data" >
						
						<div class="control-group">
							<?php foreach ($locales as $l) {
								if($l->id_local == $_GET['id']){
									break;
								}
							}
						    	?>
						    <label class="control-label" for="inputNombre">Nombre</label>
						    <div class="controls">
						      <input type="text" id="inputNombre" name="inputNombre"  value='<?= $l->nombre_local  ?>' required>
						    
						    </div>
						  </div>						 
						  <div class="control-group">
						    <label class="control-label" for="inputDireccion">Dirección</label>
						    <div class="controls">
						      <input type="text" id="inputdireccion" name="inputDireccion" value="<?= $l->direccion_local  ?>">
						    </div>
						  </div>						 
 						  <div class="control-group">
						    <label class="control-label" for="inputFono">Teléfono</label>
						    <div class="controls">
						      <input type="number" id="inputFono" name="inputFono" value="<?= $l->telefono_local  ?>" required>						    
						    </div>
						  </div>

						   <div class="control-group">
						    <label class="control-label" for="inputEmail">Email</label>
						    <div class="controls">
						      <input type="email" id="inputEmail" name="inputEmail" value="<?= $l->email  ?>" required>
						    </div>
						  </div>
						   <div class="control-group">
						    <label class="control-label" for="inputSitioWeb">Sitio Web</label>
						    <div class="controls">
						      <input type="text" id="inputSitioWeb" name="inputSitioWeb" value="<?= substr($l->sitio_referencia, 7);  ?>" required>
						    </div>
						  </div>
						  <div class="control-group">
						    <label class="control-label" for="inputLogo">Logo</label>
						    <div class="controls">
						      <input type="file" id="inputLogo" name="userfile" style="width:250px;">
						    </div>
						  </div>
						  <div class="control-group">
						    <label class="control-label" for="inputLogo">Sectores de Reparto</label>
						    <div class="controls">
						    <?php foreach ($sector_repartos as $s) {
							    	foreach ($sector_entrega as $se) {
								    		$check = "";
								    		if($s->id_sector_entrega == $se->id_sector_entrega){
								    			$check="checked";
								    			break;
								    		}
							    		}
						    	?>
						    	 <label class="checkbox inline">
				  					<input type="checkbox" name="check[]" value="<?= $s->id_sector_entrega?>" <?= $check  ?>>
				  					<?= $s->nombre_sector_entrega  ?>
								</label>	<br>
						    	<?php 
						    			}
						    		 
						    	?>
						    </div>
						  </div>
						  <div class="control-group">
							    <label class="control-label" for="inputHorarioEntrada">Horario de Atención Entrada</label>
							    <div class="controls">
							    	<select name="inputHorarioEntrada">
							    	<?php 

								    	for($a=0;$a<=23;$a++){
								    		$cero = Null;
								    	if($a<10)
								    	{
								    		$cero = 0;
								    	}	
							    		$option1 = '';
							    		$option2='';
							        	if($cero.$a.':00:00' == strval($l->horario_entrada) ){
									    		$option1 = 'selected';
									    		
									    	}
									    	if($cero.$a.':30:00' == strval($l->horario_entrada)){
									    		
									    		$option2 = 'selected';
									    		
									   		}
								   		

							    	?>
										<option value="<?= $a.':00:00'?>"
										<?php echo set_select('inputHorarioEntrada', '$a'.':00:00'); ?> <?= $option1 ?>><?= $a ?>:00:00
										</option>
										<option value="<?= $a.':30:00'?>"
										<?php echo set_select('inputHorarioEntrada', '$a'.':30:00'); ?> <?= $option2 ?>><?= $a ?>:30:00
										</option>
															    	<?php 
							    		} 
							    	?>
							    	</select>
							    </div>
							  </div>
						  <div class="control-group">
							    <label class="control-label" for="inputHorarioSalida">Horario de Atención Salida</label>
							    <div class="controls">
							    	<select name="inputHorarioSalida">
							    	<?php 


								    	for($a=0;$a<=23;$a++){
								    		$cero = Null;
								    	if($a<10)
								    	{
								    		$cero = 0;
								    	}	
							    		$option1 = '';
							    		$option2='';
							        	if($cero.$a.':00:00' == strval($l->horario_salida) ){
									    		$option1 = 'selected';
									    		
									    	}
									    	if($cero.$a.':30:00' == strval($l->horario_salida)){
									    		
									    		$option2 = 'selected';
									    		
									   		}
								   		

							    	?>
										<option value="<?= $a.':00:00'?>"
										<?php echo set_select('inputHorarioSalida', '$a'.':00:00'); ?> <?= $option1 ?>><?= $a ?>:00:00
										</option>
										<option value="<?= $a.':30:00'?>"
										<?php echo set_select('inputHorarioSalida', '$a'.':30:00'); ?> <?= $option2 ?>><?= $a ?>:30:00
										</option>
															    	<?php 
							    		} 
							    	?>
							    	</select>
							    </div>
							  </div>
						  <div class="control-group">
							    <label class="control-label" for="inputHorarioEntradaFds">Horario de Atención Entrada Fin De Semana</label>
							    <div class="controls">
							    	<select name="inputHorarioEntradaFds">
							    	<?php 


								    	for($a=0;$a<=23;$a++){
								    		$cero = Null;
								    	if($a<10)
								    	{
								    		$cero = 0;
								    	}	
							    		$option1 = '';
							    		$option2='';
							        	if($cero.$a.':00:00' == strval($l->horario_entrada_fds) ){
									    		$option1 = 'selected';
									    		
									    	}
									    	if($cero.$a.':30:00' == strval($l->horario_entrada_fds)){
									    		
									    		$option2 = 'selected';
									    		
									   		}

							    	?>
										<option value="<?= $a.':00:00'?>"
										<?php echo set_select('inputHorarioEntradaFds', '$a'.':00:00'); ?> <?= $option1 ?>><?= $a ?>:00:00
										</option>
										<option value="<?= $a.':30:00'?>"
										<?php echo set_select('inputHorarioEntradaFds', '$a'.':30:00'); ?> <?= $option2 ?>><?= $a ?>:30:00
										</option>
															    	<?php 
							    		} 
							    	?>
							    	</select>
							    </div>
							  </div>
						  <div class="control-group">
							    <label class="control-label" for="inputHorarioSalidaFds">Horario de Atención Salida Fin de Semana</label>
							    <div class="controls">
							    	<select name="inputHorarioSalidaFds">
							    	<?php 


								    	for($a=0;$a<=23;$a++){
								    		$cero = Null;
								    	if($a<10)
								    	{
								    		$cero = 0;
								    	}	
							    		$option1 = '';
							    		$option2='';
							        	if($cero.$a.':00:00' == strval($l->horario_salida_fds) ){
									    		$option1 = 'selected';
									    		
									    	}
									    	if($cero.$a.':30:00' == strval($l->horario_salida_fds)){
									    		
									    		$option2 = 'selected';
									    		
									   		}
								   		

							    	?>
										<option value="<?= $a.':00:00'?>"
										<?php echo set_select('inputHorarioSalidaFds', '$a'.':00:00'); ?> <?= $option1 ?>><?= $a ?>:00:00
										</option>
										<option value="<?= $a.':30:00'?>"
										<?php echo set_select('inputHorarioSalidaFds', '$a'.':30:00'); ?> <?= $option2 ?>><?= $a ?>:30:00
										</option>
															    	<?php 
							    		} 
							    	?>
							    	</select>
							    </div>
							  </div>
						  <div class="control-group" style="margin-right: 60px;">
						    <div class="controls">
						      <button type="submit" class="btn btn-small btn-block btn-warning" style="width:100px">Aceptar</button>
						    </div>
						  </div>
					</form>				
				</fieldset>					
				</div> 
			</div>
	    </div> <!-- editar local -->
	</div>
</div>