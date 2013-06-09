


<div class="container" style="position:relative; top:100px;">
    <div class="row">
        <div class="span white-panel better-manage">
            <div class="container">
                <div class="row cf">
                    <div class="span5">
                        <div class="padding-large">
                            <h1> </h1>

                            <ul class="green-checks">
                                <li>Precio: $ </li>
                                <li>Local Abierto</li>
                                <li>Pedido Telefonico y online</li>
                                <li>Despacho Gratis!</li>
                            </ul>

                            
                            <a href="#login-box"  id="comprar" class="btn btn-warning btn-large"> </a>

                        </div>
                    </div>
                    <div class="span8 slider-container">
                        <ul class="slider pull-right">
                            <li>
                                <img style="border:1px solid #808080"src="" alt="logoset-1" width="624" height="449" />
                            </li>
                        </ul>
                    </div>
            </div>
            </div>
        </div>
    </div>
   


<div class="row question-list">
        <div class="span12 white-panel">
            <div class="padding-large">
                <div class="span10">
                    <img src="" style="position:absolute; left:800px; width:130px; height:130px;">
                </div>
                <div class="span10">
                    <h1>Detalles de compra</h1>

                </div>
                <div class="span5">
                    <br>
                    <h2>Ingredientes</h2>
                    <h4><p></p>
                    </h4> 
                    <h2>Descripcion</h2>
                    <h4>
                    <p>Poducto disponible solo para placeres, baron, recreo </p>
                    </h4>

                    

                </div>

                <div class="span5 pull-right">
                    <br>

                    <h2>Sobre el Local</h2>
                    <h4>
                        <p> <b>Nombre del local:</b> 
            </br>
            </br>
            <b>Direccion: </b>
            </br>
            </br>
          
            </br></br></p>
                    </h4>
                    
                   
                </div>
            </div>
        </div>
    </div>



<div class="row question-list">
        <div class="span12 white-panel">
                <div class="span10">
                    <h2>Mapa</h2>
                </div>
               <iframe width="940" height="270" frameborder="0" style="position:relative; margin-left:30px; box-shadow: black 0.1em 0.1em 0.2em;" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.cl/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=valparaiso&amp;aq=&amp;sll=-30.120931,-89.723148&amp;sspn=11.920597,19.753418&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=Valpara%C3%ADso,+Provincia+de+Valpara%C3%ADso,+Regi%C3%B3n+de+Valpara%C3%ADso&amp;ll=-33.045646,-71.620361&amp;spn=0.022591,0.038581&amp;z=14&amp;output=embed"></iframe><br /><small></small>
        </div>
</div>



 

</div> <!-- page-content-wrapper -->
    
  
   <div id='login-box' class='login-popup'>
        <div class="row">
        <div class="span12 white-panel no-padding">
            <ul class="nav nav-tabs">
                <li> <h1><img src="images/facebook.png" width="50px" height="50px">   Para ver el Telefono debes postear en Facebook </h1></li>

            </ul> <!-- End tabs -->

            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <div class="span5">
                        <h2></h2>

                        <ul class="green-checks">
                            <li>Valor-compra:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </li>
                            <li>Tu Direccion:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  </li>
                            <li>Nombre local:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </li>
                            <li> Publicaremos en Facebook!</li>
                        </ul>

                        <a onclick='postear()' id='continuar' class="btn btn-danger btn-large">Postear en Facebook</a>

                    </div>
                    <div class="span5  pull-right">
                        <img src="" class="img-tilt" />
                        <p class="small-text pull-right">Foodland todos los derechos reservados</p>
                    </div>
                </div>

           

                
            </div> <!-- End .tab-content -->
        </div>




    </div>

  
        
         <div id='login-box' class='login-popup'>

        <div class="row">
        <div class="span12 white-panel no-padding">
            <ul class="nav nav-tabs">
                <li><h1>Detalle Compra Online</h1></li>


            </ul> <!-- End tabs -->

            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <div class="span5">
                        <h2></h2>
                        <form  name='form' action='guardarcompra.php' method='post'>
                        <ul class="green-checks">
                            <li>Valor-compra:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $ </li>
                            <li><p>Direccion: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type='text' style='width:250px; height:25px;' name='direccion' id='direccion' placeholder='Escriba acá su dirección..'></p></li>
                            <li>Tu Telefono: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type='text' style='width:250px; height:25px;' name='telefono' id='telefono' placeholder='Escriba acá su teléfono de contacto..'></li>
                            <li><img src="https://graph.facebook.com//picture" width='30px' height='30px'> Publicaremos en Facebook!</li>
                            <input type='text' style='width:0px;visibility:hidden;height:0px;' name='producto' id='producto'>
                            <input type='text' style='width:0px;visibility:hidden;height:0px;' name='precio' id='precio'>
                            <input type='text' style='width:0px;visibility:hidden;height:0px;' name='instrucciones' id='instrucciones'>
                            <input type='hidden' style='width:0px;height:0px;' name='idlocal' id='idlocal'>

                        </form>   
                          
                        </ul>

                        <a onclick='validacion()' class="btn btn-danger btn-large">Terminar Pedido</a>

                    </div>
                    <div class="span5  pull-right">
                        <img src="" class="img-tilt" />
                        <p class="small-text pull-right">Foodland todos los derechos reservados</p>
                    </div>
                </div>

           

                
              </div> <!-- End .tab-content -->
          </div>
        </div>
        
      <input type="hidden" id="mensaje" value="
     
       ">
      
      
      
      
               
         <script>
        //NO HACER ESTO, NO TIENE NINGUN TIPO DE SEGURIDAD, EL ACCESS_TOKEN NUNCA DEBERÍA SER MOSTRADO EN EL CODIGO FUENTE
        function postear(){
 
          $.post('https://graph.facebook.com/me/feed',{access_token:'<?php echo $facebook->getAccessToken() ?>',message:$('#mensaje').val(),link:"<?= $url ?>",picture:"http://www.asof.cl/organizaciones/images/stories/comida_chatarra.jpg", name:"Ver Producto"},function(data){
            alert('Gracias por compartir tu compra en Foodland');
          });
        }       
      </script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://gathercontent.com/assets/js/global/selectivizr.js"></script>
    <script>window.jQuery || document.write('<script src="https://gathercontent.com/assets/js/global/jquery-1.7.1.min.js"><\/script>')</script>

    <script type="text/javascript" src="https://gathercontent.com/assets/js/global/_dynamic.php?v=1366935456"></script>
<script type="text/javascript" src="https://gathercontent.com/assets/js/homepage/_dynamic.php?v=1366935456"></script>

        
        <!-- begin hittail code -->
        <script type="text/javascript">
            (function(){ var ht = document.createElement('script');ht.async = true;
              ht.type='text/javascript';ht.src = '//103767.hittail.com/mlt.js';
              var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ht, s);})();
        </script>
        <!-- end hittail code -->

        <!-- begin qualaroo code -->
        <script type="text/javascript">var _kiq = _kiq || [];</script>
        <script type="text/javascript" src="//s3.amazonaws.com/ki.js/22223/4o7.js" async="true"></script>
        <!-- end qualaroo code -->

    <script type="text/javascript">if(!NREUMQ.f){NREUMQ.f=function(){NREUMQ.push(["load",new Date().getTime()]);var e=document.createElement("script");e.type="text/javascript";e.src=(("http:"===document.location.protocol)?"http:":"https:")+"//"+"d1ros97qkrwjf5.cloudfront.net/42/eum/rum.js";document.body.appendChild(e);if(NREUMQ.a)NREUMQ.a();};NREUMQ.a=window.onload;window.onload=NREUMQ.f;};NREUMQ.push(["nrfj","beacon-4.newrelic.com","0460cc54b3","1376563","M1dTYhADW0NTW0BYDgodZEQLTVxeVl1MHxEMQg==",0,1,new Date().getTime(),"","","","",""]);</script>


