  <div id="projectwrap">
            <header class="clearfix">
                <div class="container">
                    <div class="span5 offset3">
                        <div class="boxcolor">
                        <h1><font><font><?=$productos->titulo_producto;?></font></font></h1>
                        </div>
                    </div><!-- span12 -->
                </div><!-- container -->
            </header>
</div><!-- projectwrap -->



  <div id="caja"class="container" style="position:relative; top:30px;">
    
    
    <div class="row">
        <div class="span12 white-panel no-padding">
            <ul class="nav nav-tabs" style="height:25px;">
                <li class="active"><a href="#home" data-toggle="tab"> <img src="<?= base_url();?>img/producto/pizza.png" width="40" ><font><font>Producto</font></font></a></li>
                <li><a href="#profile" data-toggle="tab"> <img src="<?= base_url();?>img/producto/local.png" ><font><font>Detalles del Local</font></font></a></li>
                            </ul> <!-- End tabs -->

            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <div class="span5">
                        <div class="span5 offset1">
                          <h2><font><font><font><?= $productos->titulo_producto; ?></font></font></font></h2>
                        </div>
                        <ul class="green-checks">
                            <li><font><font>Descripci&oacuten: <?= $productos->descrip_producto?></font></font></li>
                            <li><font><font>Precio: $<?= $productos->precio ?></font></font></li>
                             <li><font><font>Sectores de entrega: <?php 
                                foreach ($sector_entregas_particular as $s) {
                                 echo   $s->nombre_sector_entrega." " ; 
                                }
                              
                              ?></font></font></li>
                           
                        </ul>

                        <a href="#test_modal" data-toggle="modal" class="btn btn-warning btn-large offset1"><font><font>Ver Telefono</font></font></a>

                    
                    </div>
                    <div class="span5  pull-right">
                        <img src="<?= base_url();?>img/locales/<?= $productos->id_producto?>.png" class="img-tilt">
                        <p class="small-text pull-right"><font><font>Imagen Real del local</font></font></p>
                    </div>
                </div>

                <div class="tab-pane" id="profile">
                    <div class="span5">
                         <img src="<?= base_url();?>img/locales/34.'_logo.png'" class="img-tilt">

                    </div>
                    <div class="span5 pull-right">
                        <h2><font><font><?= $detalle_locales->nombre_local;?></font></font></h2>

                        <ul class="green-checks">
                        
                            <li><font><font>Direccion: <?= $detalle_locales->direccion_local;?></font></font></li>
                            <li><font><font>E-mail: <?= $detalle_locales->email  ?></font></font></li>
                            <li><font><font>Sectores de Entrega: <?php foreach ($sector_entregas_particular as $s) {
                                 echo   $s->nombre_sector_entrega." " ; 
                                } ?></font></font></li>
                            
                        </ul>

                        <a href="#test_modal"  data-toggle="modal" class="btn btn-warning btn-large offset1"><font><font>Ver Telefono</font></font></a>

                     </div>
                </div>

            </div> <!-- End .tab-content -->
        </div>




    </div>


</div>


<div class="modal fade" id="test_modal">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h3>Muchas gracias por visitar Foodland</h3>
  </div>
  <br><br>
  <div class="modal-body">
     <div class="span3 offset1" style="font-size: 15px;">
        Puedes decirle al local que vienes de parte de FOODLAND, así nos ayudarás a difundir mejor este servicio
        <br>
        <br>
        Comparte este producto con tus amigos para que sepan lo que estas pidiendo
      </div>
      <div class="span2 offset1">
        <h4>El teléfono es:  </h4> 
        <h3><?= $detalle_locales->telefono_local;  ?></h3>
      </div>
  </div>
  <br><br>
  <div class="modal-footer">
    <a class="btn btn-facebook"href="https://www.facebook.com/sharer/sharer.php?u=<?= base_url().'Producto?id='.$productos->id_producto ?>" target="_blank">
  <i class="icon-facebook"></i> Compartir en Facebook 
</a>
   <!-- <a href="#" class="btn btn-warning" data-dismiss="modal"> Ce</a> -->
  </div>
</div>



 <!-- Scripts producto Pop - -->



<script type="text/javascript">
    $(document).ready(function(){
        $('#test_modal').modal('show');
    });
</script>

<script type="text/javascript">
$('#test_modal').modal('hide')
</script>

<script type="text/javascript">
   $('#test_modal').modal({
        backdrop: true,
        keyboard: true,
        show: false \\remove this if you dont want it to show straight away
    }).css({
        width: 'auto',
        'margin-left': function () {
            return -($(this).width() / 2);
        }
    });

</script>

