<link rel="stylesheet" href="<?= base_url()?>css/producto/buscar_view.css">

<section class="portfolio rev bloque_principal" id="sector_reparto">
    <div class="container">
        <div class="row">
            <div class="span12 center">
                <h1 class="big-heading"><font><font>Resultados de la Busqueda</font></font></h1>
                <h4 class="sub-heading"><font><font>Tu busqueda fue :<?= $busqueda?></font></font></h4>
           </div>
					<?php
					if($productos==""){
					?>
					<div class="span12 center">
						<div class="alert alert-error">
					 <h2>No se ha encontrado el resultado de la busqueda "<?= $busqueda?>"</h2>
					</div>
					</div>
					
					<?php
					}else{ 
                        foreach ($productos as $producto) {
                            $id= $producto->id_producto;
                            $id_local=$producto->id_local;
                       
                      ?>
                        <!-- Inicio Bloque Grande-->
                        <div class="span3 project bloque_producto" >
                            <!-- Imagen de fondo-->
                            <img src="<?= base_url();?>img/locales/<?=$id?>.jpeg"  class="img-rounded"> 
                            <!-- Logo del local-->
                            <span class="overlay"> 
                            </span>

                            <div class="cnt">
                                <!-- Titulo Del producto-->
                                <h3><font><font><?= $producto->titulo_producto ?></font></font></h3>
                                 <!-- Precio Del producto-->
                                 <h3><font><font> $<?=  $producto->precio  ?></font></font></h3>
                                <br><br>
                                <a href="<?= base_url() ?>producto?id=<?= $id ?>" class="btn btn-warning btn-large"><font><font>Ver detalles</font></font></a>
                            </div>
                        </div>
                        <!-- Termino Bloque Grande-->
                        <?php } }?>
 
        </div>
    </div>
</section>