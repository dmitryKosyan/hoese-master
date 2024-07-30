<?php
/*
Template Name:ремонт
*/
 get_header();
 ?>


    <div class="wrapper">
        <main class="main">
            <section class="info">
                <div class="container__fluid">
                    <div class="info__wrapper"style="background-image:url(<?php echo CFS()->get('first_screen'); ?>)" >
                        <div class="info__title-block">
                            <h1 class="info__title"><?php echo CFS()->get('main_title'); ?>
                            </h1>
                            <p class="info__text"><?php echo CFS()->get('main_subtitle'); ?></p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="works">
                <div class="container__fluid">
                    <div class="works__wrapper">
                        <div class="works__info">
                            <div class="works__info-block">
                                <h3 class="works__title-info">от<span class="works__info-text"><?php echo CFS()->get('info_about_price'); ?></span>рублей за м кв
                                </h3>
                                <a class="works__phone" href="tel:<?php echo CFS()->get('phone-number'); ?>" ><?php echo CFS()->get('phone-number'); ?></a>
                            </div>
                        </div>
                        <div class="works__galary">
                            <div class="works__galary-wrapp">
                                <?php
                             $loop= CFS()->get('gallery_works');
                             foreach ($loop as $row) {
                             $loop_list=$row['list_job'];
                                ?>
                                    <div class="works__card">
                                     <img class="works__card-img" src="<?php echo $row['foto_card']?>" alt="">
                                      <h4 class="works__card-title"><?php echo $row['adress_work']?></h4>
                                         <div class="works__list-inner">
                                           <ul class="works__card-list">
                                             
                                 <?php     
                                 foreach ($loop_list as $row_l) {
                                 ?> 
                                 <li class="works__card-item"><?php echo $row_l['service']?></li>
                                <?php
                                 }
                                 ?> 
                                          
                                          </ul>
                                        <div class="works__price"><?php echo $row['price_service']?><span class="works__currency">руб.</span></div>
                                    </div>
                                </div>
                                <?php
                                 }
                                ?> 
                            </div>
                            <div class="works__button-wrapp">
                                <button class="works__link">заказать</button>
                            </div>
                             <div class="contacts">
                             <div  class="contacts__form">
                      
                        <?php echo do_shortcode('[contact-form-7 id="fe43472" title="контактная форма 2"]'); ?>
                    </div>
                        </div>

                        </div>
                    </div>
                </div>
            </section>
            <section class="stages">
                <div class="container__fluid">
                    <div class="stages__wrapper">
                        <h3 class="stages__title">Этапы работ</h3>
                    </div>
                    <div class="stages__block">
                        <div class="stages__block-inner">
                            <div class="stages__item">
                                <p class="stages__number">1<span class="stages__text">день</span></p>
                                <div class="stages__img-block">
                                    <img class="stages__img" src="<?php bloginfo('template_url');?>/assets/images/renovation/ceiling.svg" alt="">
                                    <p class="stages__img-text">монтаж натяжного<br> потолка</p>
                                </div>
                            </div>
                            <div class="stages__item">
                                <p class="stages__number">2<span class="stages__text">день</span></p>
                                <div class="stages__img-block">
                                    <img class="stages__img" src="<?php bloginfo('template_url');?>/assets/images/renovation/wallpaper.svg" alt="">
                                    <p class="stages__img-text">поклейка обоев</p>
                                </div>
                            </div>
                            <div class="stages__item">
                                <p class="stages__number">3<span class="stages__text">день</span></p>
                                <div class="stages__img-block">
                                    <img class="stages__img" src="<?php bloginfo('template_url');?>/assets/images/renovation/laminate.svg" alt="">
                                    <p class="stages__img-text">укладка ламината</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="cost">
                <div class="container__fluid">
                    <div class="cost__wrapper">
                        <h3 class="cost__title">Стоимость</h3>
                    </div>
                    <div class="cost__block">
                        <h3 class="cost__block-title">Калькулятор стоимости ремонтных работ</h3>
                        <div class="cost__inner">
                            <div class="cost__culc-left">
                                <h4 class="cost__culc-title">виды работ</h4>
                                <ul class="cost__culc-list">
                                         <?php
                             $loop_n= CFS()->get('type_services');
                             foreach ($loop_n as $row_n) {
                              
                                ?>
                                    <li class="cost__list-item">
                                        <label class="cost__input-lable">
                                            <input type="checkbox" class="cost__checkbox" value="<?php echo $row_n['price_service']?>">
                                            <span class="cost__style"></span>
                                            <h4 class="cost__name"><?php echo $row_n['title_service']?></h4>
                                        </label>
                                    </li>
                                <?php
                                }
                                ?>
                                </ul>
                                <h4 class="cost__culc-title">дополнительные работы</h4>
                                <ul class="cost__culc-list">
                              <?php
                             $loop= CFS()->get("dop_services");
                         
                             foreach ($loop as $row) {
                             ?>
                           
                                
                                
                                    <li class="cost__list-item">
                                        <label class="cost__input-lable">
                                            <input type="checkbox" class="cost__checkbox" value="<?php echo $row["dop_price"]?>">
                                            <span class="cost__style"></span>
                                            <h4 class="cost__name"><?php echo $row["dop_title"]?></h4>
                                        </label>
                                    </li>
                                <?php
                             }
                                ?>
                                   
                                </ul>
                            </div>
                            <div class="cost__culc-right">
                                <h4 class="cost__culc-title">площадь м кв</h4>
                                <div class="cost__area-inner">
                                    <div class="cost__area-button">
                                        <div class="cost__plus"></div>
                                        <span class="cost__area-count">0</span>
                                        <div class="cost__minus"></div>
                                    </div>
                                    <p class="cost__total-price">Стоимость:<span
                                            class="cost__total-number">0</span>рублей</p>
                                     <div class="works__button-wrapp">
                                <button class="cost__link">заказать</button>
                            </div>
                              <div class="contacts__two-form">
                               
                              <?php echo do_shortcode('[contact-form-7 id="30493af" title="форма-2 ремонт"]'); ?>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
    </div>
    <?php get_footer();?>
</body>

</html>