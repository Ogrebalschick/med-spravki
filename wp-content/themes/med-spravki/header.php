<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<?php wp_head(); ?>




</head>

<body class="main">


    <header>
        <div class="header_container">
            <div class="header-inner">
                <section class="logo">
                    <div class="logo-left">
                       <?php the_custom_logo(); ?>
                    </div>
                    <div class="logo-right">
                        <div class="logo_title">
                      <a href="/"><?php $blog_title = get_bloginfo(); ?>
                        <?php echo $blog_title ?></a>  
                        </div>
                        <div class="logo_text text">
                        <?php echo get_bloginfo('description', 'display');  ?>
                        </div>
                    </div>
                </section>
                <section class="topnav">
                    <div class="navbar" id="myTopnav">
                      
                        <div class="dropdown">
                            <!-- <button class="dropbtn">Каталог 
                              <i class="fa fa-caret-down"></i>
                            </button> -->
                            <div class="dropdown-content">
                                <div class="dropdown-content-inner">
                                    <?php echo do_shortcode('[TABS_R id=174]'); ?>
                                </div>
                            </div>
                        </div>
                        <?php 
                $args = array(
                    'menu'	=> 19
                );
                wp_nav_menu( $args );
                
                ?>
                    </div>
                </section>
                <section class="contacts">
                    <div class="contacts-left">
                        <div class="phone">
                            <a href="tel:<?php the_field('phone-number', 31); ?>"><?php the_field('phone', 31); ?></a>
                        </div>
                        <div class="contact-text text">
                            Звонок бесплатный
                        </div>
                        <div class="phone_icon">
                            <a href="<?php the_field('phone-number', 31); ?>"><img src="<?php bloginfo('template_url',); ?>/assets/img/phone-icon.png" alt=""></a>
                        </div>
                    </div>
                    <div class="contacts-right">
                        <a href="<?php the_field('whatsapp', 31); ?>"><img src="<?php bloginfo('template_url',); ?>/assets/img/whatsapp.png" alt=""></a>
                    </div>
                    <div class="mobile_menu" id="mobile_menu">
                        <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/menu.png" alt=""></a>
                    </div>

                </section>

            </div>
            <div class="menu_mobile" id="menu">
                <ul>
                <?php 
                $args = array(
                    'menu'	=> 23
                );
                wp_nav_menu( $args );
                
                ?>
                </ul>
                <div class="menu_text">


                    <div class="footer_contacts-locate pb">
                    <?php the_field('locate', 31); ?>
                    </div>

                    <div class="footer_contacts-times pb">
                        <p><?php the_field('time-work', 31); ?> <br><?php the_field('time-holiday', 31); ?></p>
                    </div>
                    <div class="footer_contacts-phone pb">
                        <div class="footer_phone-left">
                            <div class="number">
                                <a href="<?php the_field('phone-number', 31); ?>"><?php the_field('phone', 31); ?></a>
                            </div>
                            <div class="mail">
                                <a href="mailto:<?php the_field('mail', 31); ?>"><?php the_field('mail', 31); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>