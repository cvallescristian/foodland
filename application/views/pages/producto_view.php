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



  <div class="container" style="position:relative; top:30px;">
    
    <div class="row">
        <div class="span12 white-panel no-padding">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab" class="gc-icon agency-icon"><font><font>Producto</font></font></a></li>
                <li><a href="#profile" data-toggle="tab" class="gc-icon enterprise-icon"><font><font>Detalle</font></font></a></li>
                            </ul> <!-- End tabs -->

            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <div class="span5">
                        <h2><font><font>Pizza Española</font><font></font></font></h2>

                        <ul class="green-checks">
                            <li><font><font>Colabore con su equipo y clientes</font></font></li>
                            <li><font><font>Mantenga contenido estructurado, en un lugar centralizado</font></font></li>
                            <li><font><font>Control de cambios, y ver quién ha hecho qué</font></font></li>
                           
                        </ul>

                        <a href="#test_modal" data-toggle="modal" class="btn btn-warning btn-large"><font><font>Ver Telefono</font></font></a>

                    
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
                        <h2><font><font>Detalles del Local</font></font></h2>

                        <ul class="green-checks">
                            <li><font><font>Colaborar y brindar orientación</font></font></li>
                            <li><font><font>Mantenga contenido estructurado, en un lugar centralizado</font></font></li>
                            <li><font><font>Control de cambios, y ver quién ha hecho qué</font></font></li>
                            <li><font><font>Enviar automáticamente recordatorios de plazos</font></font></li>
                            <li><font><font>Ahorrar enormes cantidades de tiempo y dinero</font></font></li>
                        </ul>

                        <a href="#test_modal"  data-toggle="modal" class="btn btn-warning btn-large"><font><font>Ver Telefono</font></font></a>

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
  <div class="modal-body">
     <button class="btn btn-facebook"><i class="icon-facebook"></i> | Connect with Facebook</button> 
  </div>
  <div class="modal-footer">
    <a href="#" class="btn" data-dismiss="modal">Close</a>
    <a href="#" class="btn btn-primary">Save Changes</a>
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

