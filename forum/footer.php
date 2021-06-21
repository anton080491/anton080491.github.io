
 <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
                <div class="footer-border">
                    <span>TOP FORUM</span>
                    <?php
                        wp_nav_menu( [
                            'menu'            => 'footer-menu', 
                            'container'       => null,
                            'menu_class'      => 'footer-menu'
                        ] );
                    ?> 
                    
                </div>
            </div>
            <div class="col-xl-3 col-lg-5 col-md-5 col-sm-6 col-6">
                <span>CONTACT</span><br>
                Top Forum Group<br>
                Trnavska cesta 82, 821 02 Bratislava, Slovakia<br><br>
                
                +421 221 025 322<br>
                <a class="mail" href="info@top forum .com">info@top forum .com</a>
            </div>
            <div class="col-xl-2 offset-xl-5 col-lg-2 offset-lg-3 col-md-2 offset-md-3 col-sm-2 offset-sm-1 col-3 offset-1">
                <a href="#"><span>FOLLOW US</span></a>
            </div>
        </div>
        <!-- <hr> -->
        <div class="row footer-border_1" >
            <div class="col-6">
                © 2014 Top Forum Group. All rights reserved. 
            </div>
            <div class="col-xl-3 offset-xl-3 col-lg-4 offset-lg-2 col-md-5 offset-md-1 col-sm-5 offset-sm-1 col-6">
                © 2014 Top Forum Group. All rights reserved. <br>
                Website development: Anton Irklii
            </div>

        </div>
    </div>
</footer>
<div class="overflow">
    <div class="subscribe">
        <div class="title title_subscribe">SUBSCRIBE</div>
        <div class="subscribe__desk">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
        
        <form action="#" class="subscribe__form">
        <?php echo do_shortcode('[contact-form-7 id="7" title="Подписка"]');  ?>
            <!-- <input type="text" placeholder="Name and surname ">
            <input type="text" placeholder="Company name ">
            <input type="text" placeholder="E-mail">
            <button class="button button_subscribe">SUBSCRIBE</button> -->
        </form>
        <div class="subscribe__close">&#10006</div>
    </div>
</div>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script> -->
    
    <?php 
    wp_footer();
    ?>
</body>
</html>