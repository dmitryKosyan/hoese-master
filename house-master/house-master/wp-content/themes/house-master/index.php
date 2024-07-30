<?php
/*
Template Name:главная
*/
 get_header();
 ?>
    <div class="wrapper">
        <main class="main">
            <section class="top__page" >
                <div class="container__fluid">
                <div class="top__page-wrapper"  style="background-image:url(<?php echo CFS()->get('backgraund'); ?>)" >
                    <div class="top__page-inner">
                      <h1 class="top__page-title"><?php echo CFS()->get('main-title'); ?></h1>
                    <p class="top__page-text">всегда буду рад Вам помочь</p>
                    </div>
                </div>
                </div>
            </section>
            <section class="services">
                <div class="block__title-inner">
                    <div class="container__rm">
                        <div class="block__title">
                            <h2 class="block__title-str">
                                виды услуг
                            </h2>
                            <div class="block__line"></div>
                        </div>
                    </div>
                </div>
                <div class="container__rm">

                    <div class="services__inner">
                        <div class="services__block">
                            <div class="services__description red ">
                                <h4 class="services__title"><?php echo CFS()->get('services-wallpapper'); ?></h4>
                                <ul class="services__list">
                                    <li class="services__item"><?php echo CFS()->get('field_wall-1'); ?></li>
                                    <li class="services__item"><?php echo CFS()->get('field_wall-2'); ?></li>
                                    <li class="services__item"> <?php echo CFS()->get('field_wall-3'); ?></li>
                                </ul>
                               
                                 <?php echo CFS()->get('ref_wall'); ?>
                            </div>
                            <img class="services__img "src="<?php echo CFS()->get('image_wallpappers'); ?>" alt="поклейка обоев">
                        </div>
                        <div class="services__block">
                            <div class="services__description blue">
                                <h4 class="services__title"><?php echo CFS()->get('service-title1'); ?></h4>
                                <ul class="services__list">
                                    <li class="services__item logo"><?php echo CFS()->get('field_12'); ?><br>компании </li>
                                    <li class="services__item"><?php echo CFS()->get('field_22'); ?></li>
                                    <li class="services__item"><?php echo CFS()->get('field_32'); ?></li>
                                </ul>
                                 <?php echo CFS()->get('ref_ceiling'); ?>
                            </div>
                            <img class="services__img" src="<?php echo CFS()->get('image_service'); ?>" alt="">
                        </div>
                        <div class="services__block">
                            <div class="services__description yellow ">
                                <h4 class="services__title color"><?php echo CFS()->get('furniture-title'); ?></h4>
                                <ul class="services__list ">
                                    <li class="services__item color"><?php echo CFS()->get('furniture_item-1'); ?></li>
                                    <li class="services__item color"><?php echo CFS()->get('furniture_item-2'); ?></li>
                                    <li class="services__item color"><?php echo CFS()->get('furniture_item-3'); ?></li>
                                </ul>
                                  <?php echo CFS()->get('ref_furniture'); ?>
                            </div>
                            <img class="services__img"
                                src="<?php echo CFS()->get('furniture_image'); ?>" alt=""
                                alt="">
                        </div>
                        <div class="services__block">
                            <div class="services__description purple">
                                <h4 class="services__title"><?php echo CFS()->get('remont_title'); ?></h4>
                                <ul class="services__list">
                                    <li class="services__item"><?php echo CFS()->get('remont_item-1'); ?></li>
                                    <li class="services__item"><?php echo CFS()->get('remont_item-2'); ?></li>
                                    <li class="services__item"><?php echo CFS()->get('remont_item-3'); ?></li>
                                </ul>
                                <?php echo CFS()->get('ref_remont'); ?>
                            </div>
                            <img class="services__img" src="<?php echo CFS()->get('remont_image'); ?>" alt="">
                        </div>
                        
                       
                    </div>
                </div>
            </section>
            <div class="block__title-inner">
                <div class="container__rm">
                    <div class="block__title">
                        <h2 class="block__title-str">
                            примеры работ
                        </h2>
                        <div class="block__line"></div>
                    </div>
                </div>
            </div>
            <section class="slider">
                <div class="container__slider">
                    <div class="slider__block">
                            <?php
                            global $post;
                            $myposts = get_posts([
                             'numberposts' => -1,
                            'category_name' => 'slider',   
                            ]);
                            if( $myposts ){
                                foreach( $myposts as $post ){
                                    setup_postdata( $post );
                                    ?>
                        <div class="slider__item">
                            <div class="slider__item-wrapp">
                                <?php the_post_thumbnail(
                                    array(800,350),
                                array( 'class' => "slider__img")
                                ); ?>
                            <div class="slider__item-description">
                                <h3 class="slider__item-title"><?php the_title(); ?></h3>
                                <?php
                                    echo '<div class="slider__item-text">';
                                    the_content();
                                    echo '</div>';
                                ?>
                            </div>
                        </div>
                        </div>
                        <?php
                        }
                        }
                        wp_reset_postdata();
                        ?>
                     </div>
                     <div class="slider__nav" style="transform: none !important;">
                         <?php
                            global $post;
                            $myposts = get_posts([
                             'numberposts' => -1,
                            'category_name' => 'slider',   
                            ]);
                            if( $myposts ){
                                foreach( $myposts as $post ){
                                    setup_postdata( $post );
                                    ?>
                                <?php the_post_thumbnail(
                                    array(244,150),
                                array( 'class' => "slider__img-nav")
                                ); ?>
                        <?php
                        }
                        }
                        wp_reset_postdata(); 
                        ?>   
                    </div> 
                </div>
            </section>
            <div class="block__title-inner">
                <div class="container__rm">
                    <div class="block__title">
                        <h2 class="block__title-str">
                            этапы сотрудничества
                        </h2>
                        <div class="block__line"></div>
                    </div>
                </div>
            </div>
            <section class="stages__work">

                <div class="stages__work-inner"style="background-image:url(<?php echo CFS()->get('background-stages'); ?>)" >
                    <div class="stages__work-block">
                        <div class="stages__work-item">
                            <img class="stages__work-img" src="<?php bloginfo('template_url');?>/assets/images/remont/stages-phone.svg" alt="">
                            <span class="stages__work-number">01</span>
                        </div>
                        <p class="stages__work-description">
                            Вы оставляете заявку на сайте или звоните
                        </p>
                    </div>
                    <div class="stages__work-block">
                        <div class="stages__work-item">
                            <img class="stages__work-img" src="<?php bloginfo('template_url');?>/assets/images/remont/stages-mesure.svg" alt="">
                            <span class="stages__work-number">02</span>
                        </div>
                        <p class="stages__work-description">Приезжаю,делаю замер.Выбираем потолок.</p>
                    </div>
                    <div class="stages__work-block">
                        <div class="stages__work-item">
                            <img class="stages__work-img" src="<?php bloginfo('template_url');?>/assets/images/remont/document.svg" alt="">
                            <span class="stages__work-number">03</span>
                        </div>
                        <p class="stages__work-description">Обсуждаем сроки,заключаем договор.</p>
                    </div>
                    <div class="stages__work-block">
                        <div class="stages__work-item">
                            <img class="stages__work-img" src="<?php bloginfo('template_url');?>/assets/images/remont/stages-tools.svg" alt="">
                            <span class="stages__work-number">04</span>
                        </div>
                        <p class="stages__work-description">
                            Монтаж выбранной Вами услуги
                        </p>
                    </div>
                    <div class="stages__work-block">
                        <div class="stages__work-item">
                            <img class="stages__work-img" src="<?php bloginfo('template_url');?>/assets/images/remont/stages-money.svg" alt="">
                            <span class="stages__work-number">05</span>
                        </div>
                        <p class="stages__work-description">Оплата.Гарантия.</p>
                    </div>
                </div>

            </section>
            <div class="block__title-inner">
                <div class="container__rm">
                    <div class="block__title">
                        <h2 class="block__title-str">
                            связаться со мной
                        </h2>
                        <div class="block__line"></div>
                    </div>
                </div>
            </div>
            <section class="contacts">
                <div class="contacts__wrapper">
                    <div action="" class="contacts__form">
                      
                        <?php echo do_shortcode('[contact-form-7 id="fe43472" title="контактная форма 2"]'); ?>
                    </div>

                </div>
            </section>

    </div>
<?php get_footer();?>