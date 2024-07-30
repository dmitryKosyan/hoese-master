<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
 <?php wp_head();?>
    <title>House master</title>
</head>

<body>
    <header class="header">
        <div class="container__fluid">
            <div class="header__wrapper" >
                <div class="header__menu-popup">
                     <?php wp_nav_menu( array( 'theme_location' => 'burger', 
                        'container_class' => 'header__popup-list' ) ); 
                         ?>
                  
                     <a class="header__burger-phone" href="tel:<?php echo CFS()->get('phone-number'); ?>"><?php echo CFS()->get('phone-number'); ?></a>
                   
                        
                </div>
              
                <div class="header__menu-block">
                    <nav class="header__menu">
                        <a class="header__logo-link" href="<?= home_url();?>">
                           <?php the_custom_logo();?>
                        </a>
                      <?php wp_nav_menu( array( 'theme_location' => 'top', 
                        'container_class' => 'header__list' ) ); 
                       ?>
                        <a href="tel:<?php echo CFS()->get('phone-number'); ?>" class="header__link phone"><?php echo CFS()->get('phone-number'); ?></a>
                        <div class="header__burger-block">
                            <div class="header__burger-inner ">
                                <div class="header__burger"></div>
                                <div class="header__burger"></div>
                                <div class="header__burger"></div>
                            </div>
                            <div class="header__burger-close ">
                                <img src="<?php bloginfo('template_url');?>/assets/images/remont/close.svg" alt="">
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>