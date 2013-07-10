<!--################ FOOTER START ################-->

     <footer id="footer" style="margin-top:0px;">
            <div class="container">
                <div class="row" style="color:white;">
                    <div class="span3 offset1">
                        <br><br>
                        
                        <img src="<?= base_url();?>img/logo2.png" width="250" height="40"> <sup style="color:white;">2.0</sup>

                        <div class="span3" style="font-size:12px; margin-left:0px;">
                        <p ><br><font><font>Foodland es una empresa emprendedora e innovadora, 
                            formada por un grupo de jóvenes universitarios el año 2012, cuya misión es 
                            mostrar, a través de esta plataforma, una gran gama de locales delivery de 
                            la quinta región (y próximamente en todo Chile) bajo nuestro catálogo, con 
                            el fin de conseguir que nuestros usuarios, de forma práctica y fácil, pidan 
                            los productos que ofrecen nuestros asociados, facilitando de esta forma, la 
                            conexión entre las personas y los locales.</font></font></p>
                        <p class="copyright"><font><font>
                            FoodLand.cl © 2013 
                        </font></font></p>
                        </div>
                    </div>
                    <div class="span3 offset1">

                        <br><br><br>
                        <h2><font><font>Enlaces </font></font></h2>
                        <ul class="unstyled footer-links">
                            <h4>
                            <li><a href="<?= base_url();?>" class="flink">Inicio</a></li>
                                <!--
                            <li><a href="" class="flink"><font><font>Quiénes somos</font></font></a></li>
                            <li><a href="" class="flink"><font><font>El equipo</font></font></a></li>
                            <li><a href="" class="flink"><font><font>Contacto</font></font></a></li>
                            <li><a href="" class="flink"><font><font>Política de privacidad</font></font></a></li>
                            <li><a href="" class="flink"><font><font>Términos de uso</font></font></a></li>
                                -->
                            <li><a href="<?= base_url()?>admin" class="flink"><font><font>Foodland admin</font></font></a></li>

                            
                            </h4>
                            
                        </ul>
                    </div>

                    <div class="span3 contact ">
                        <br><br><br>
                        <h3 class="center"><font>Contacto</font></h3>
                         <form action="<?= base_url() ?>home/contacto" method="post">
                            <input type="text" name="nombre" placeholder="Tu nombre" required>
                            <input type="email" name="email" placeholder="Tu Mail" required>
                            <textarea rows="3" name="mensaje" placeholder="Mensaje" required></textarea>
                             <input type="submit" value="Enviar">
                         </form>
                    </div>

                   
                </div>
                <div class="row credits">
                <div class="span12">
                    <div class="row social">
                        <div class="span12">
                            <a href="https://www.facebook.com/FoodLandValparaiso" class="facebook">
                                <span class="socialicons ico1"></span>
                                <span class="socialicons_h ico1h"></span>
                            </a>
                            <a href="https://twitter.com/FoodLand_Valpo" class="twitter">
                                <span class="socialicons ico2"></span>
                                <span class="socialicons_h ico2h"></span>
                            </a>
                            <a href="" class="gplus">
                                <span class="socialicons ico3"></span>
                                <span class="socialicons_h ico3h"></span>
                            </a>
                          
                        </div>
                    </div>
                    <div class="row copyright">
                        <div class="span12">
                            © 2013 Foodland.cl Todos los derechos reservados.
                        </div>
                    </div>
                </div>            
            </div>
            </div>
</footer>



        <!--################ FOOTER END ################-->


    <!-- Scripts De Menu-->
    <script src="<?= base_url();?>js/jquery-latest.js"></script>
    <script src="<?= base_url();?>js/bootstrap.js"></script>
        
 <!-- Scripts producto Pop - -->




</body></html>