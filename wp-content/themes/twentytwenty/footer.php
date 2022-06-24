<footer>

<div class="footer_inner">
    <div class="container">
        <section class="logo">
            <div class="logo-left">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/footer-logo.png" alt=""></a>
            </div>
            <div class="logo-right">
                <div class="logo_title-footer">
                    Медицинский центр
                </div>
                <div class="logo_text-footer">
                    Справки с доставкой по Москве
                </div>
            </div>
        </section>
        <section class="topnav-footer">
            <div class="navbar-footer">
            <?php 
                $args = array(
                    'menu'	=> 24
                );
                wp_nav_menu( $args );
                
                ?>
            </div>
        </section>
        <section class="footer_contacts">
            <div class="footer_contacts-locate fc">
                <p><?php the_field('locate', 31); ?></p>
            </div>

            <div class="footer_contacts-times fc">
                <p><?php the_field('time-work', 31); ?> <br><?php the_field('time-holiday', 31); ?> </p>
            </div>
            <div class="footer_contacts-phone">
                <div class="footer_phone-left fc">
                    <div class="number">
                    <a href="tel:<?php the_field('phone-number', 31); ?>"><?php the_field('phone', 31); ?></a>
                    </div>
                    <div class="mail">
                        <a href="mailto:<?php the_field('mail', 31); ?>"><?php the_field('mail', 31); ?></a>
                    </div>
                </div>
                <div class="footer_phone-right">
                    <a href="<?php the_field('whatsapp', 31); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/footer-whatsapp.png" alt=""></a>
                </div>
            </div>

        </section>
    </div>
</div>
<section class="footer_down">
    <div class="container">
        <p><?php the_field('rules', 31); ?></p>
    </div>
</section>
</footer>
<?php wp_footer(); ?>
</body>

</html>