  <div id="projectwrap">
            <header class="clearfix">
                <div class="container">
                    <div class="span12">
                        <div class="boxcolor">
                        <h1><font><font></font></font></h1>
                        </div>
                    </div><!-- span12 -->
                </div><!-- container -->
            </header>
</div><!-- projectwrap -->



  <div id="caja"class="container" style="position:relative; top:30px;">
    
    <div class="row">
        <div class="span12 white-panel no-padding">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab"> <img src="<?= base_url();?>img/producto/pizza.png" width="40" ><font><font>Producto</font></font></a></li>
                <li><a href="#profile" data-toggle="tab"> <img src="<?= base_url();?>img/producto/local.png" ><font><font>Detalles del Local</font></font></a></li>
                            </ul> <!-- End tabs -->

            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <div class="span5">
                        <h2><font><font><?= $productos->titulo_producto; ?></font><font></font></font></h2>

                        <ul class="green-checks">
                            <li><font><font>Descripci&oacuten: <?= $productos->descrip_producto?></font></font></li>
                            <li><font><font>Precio: <?= $productos->precio ?></font></font></li>
                             <li><font><font>Sectores de entrega: <?php 
                                foreach ($sector_entregas_particular as $s) {
                                 echo   $s->nombre_sector_entrega." " ; 
                                }
                              
                              ?></font></font></li>
                           
                        </ul>

                        <a href="#test_modal" data-toggle="modal" class="btn btn-warning btn-large offset1"><font><font>Ver Telefono</font></font></a>

                    
                    </div>
                    <div class="span5  pull-right">
                        <img src="<?= base_url();?>img/slider/3.jpg" class="img-tilt">
                        <p class="small-text pull-right"><font><font>Imagen Real del local</font></font></p>
                    </div>
                </div>

                <div class="tab-pane" id="profile">
                    <div class="span5">
                        <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.cl/maps?hl=es&amp;ie=UTF8&amp;ll=-33.037306,-71.590862&amp;spn=0.087639,0.154324&amp;t=m&amp;z=13&amp;output=embed"></iframe>

                    </div>
                    <div class="span5 pull-right">
                        <h2><font><font><?= $detalle_locales->nombre_local;  ?></font></font></h2>

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
    <h3>Comparte en Facebook para ver el Telefono</h3>
  </div>
  <br><br>
  <div class="modal-body">
     <div class="span3 offset1" style="font-size: 15px;">Para Ver el Telefono debes compartir en facebook para que tus amigos sepan que as pedido que 
      as pedido pizza</div>
      <div class="span2 offset1"> 
        <img src="<?= base_url();?>img/megusta.jpg" >
      </div>
  </div>
  <br><br>
  <div class="modal-footer">
    <a href="#" class="btn" data-dismiss="modal">Cancelar</a>
    <a href="#" class="btn btn-facebook"><i class="icon-facebook"></i> | Conectar con Facebook</a>
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

