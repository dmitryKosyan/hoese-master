<?php
/*
Template Name:потолки
*/
 get_header();
 ?>
    <div class="wrapper">
        <main class="main">
            <section class="info">
                <div class="container__fluid">
                    <div class="info__block">
                        <div class="info__block-title">
                            <h1 class="info__title"><?php echo CFS()->get('main_title'); ?>
                            </h1>
                            <div class="info__img-block">
                                <img class="info__img" src="<?php bloginfo('template_url');?>/assets/images/remont/ferico-title.png" alt="">
                            </div>
                        </div>
                    </div>
            </section>
            <div class="block__one">
                <div class="container__fluid">
                    <div class="block__one-inner">
                        <h3 class="block__one-title">католог потолков</h3>
                        <img class="block__one-img" src="<?php bloginfo('template_url');?>/assets/images/remont/schema-cieling.svg" alt="">
                    </div>
                </div>
            </div>

            <section class="type">
                <div class="container__wrap">
                    <div class="type__wrapper">
                        <ul class="type__items">
                     <?php
                     $loop= CFS()->get('ceiling');
                         foreach ($loop as $row) {
                           
                         ?>

                            <li class="type__item" id='<?php echo $row['id']?>' ><?php echo $row['var_ceiling']?></li>

                         <?php
                            }
                         ?>       
                        </ul>

                             <?php
                     $fields= CFS()->get('ceilings_fielfs');
                         foreach ($fields as $row) {
                           
                             ?>
                       <div class="type__img-block <?php echo $row['active'] ?>" id="<?php echo $row['id'] ?>">
                            <div class="type__img-inner">
                                <img class="type__img-main" src="<?php echo $row['foto_main'] ?>" alt="">
                            </div>
                            <div class="type__descriptio-block">
                                <p class="type__description-text">
                                   <?php echo $row['description_ceiling'] ?>
                                </p>
                                <img class="type__description-img" src="<?php echo $row['foto_2'] ?>" alt="">
                            </div>
                        </div>
                         <?php
                            }
                         ?>   

                    </div>
                </div>
            </section>
            <div class="block__two">
                <div class="container__wrap">
                    <h3 class="block__two-title">стоимость потолков</h3>
                </div>
            </div>
            <section class="cost">
                <h3 class="cost__title">Калькулятор стоимости натяжных потолков с установкой</h3>
                <div class="container__wrap">
                    <div class="cost__wrap">
                    <div class="cost__items">
                        <div class="cost__item">
                            <h4 class="cost__title-item">материал</h4>
                            <div class="cost__list-inner">
                                <ul class="cost__list">
                                    <li class="cost__list-item">
                                        <label class="cost__input-lable">
                                            <input type="checkbox" class="cost__checkbox">
                                            <span class="cost__style"></span>
                                            <h4 class="cost__name">Матовый</h4>

                                        </label>
                                    </li>
                                    <li class="cost__list-item">
                                        <label class="cost__input-lable">
                                            <input type="checkbox" class="cost__checkbox">
                                            <span class="cost__style"></span>
                                            <h4 class="cost__name">Сатиновый</h4>

                                        </label>
                                    </li>
                                    <li class="cost__list-item">
                                        <label class="cost__input-lable">
                                            <input type="checkbox" class="cost__checkbox">
                                            <span class="cost__style"></span>
                                            <h4 class="cost__name">Глянцевый</h4>

                                        </label>
                                    </li>
                                </ul>
                                <p class="cost__text-info">Другие виды потолков рассчитываються индивидуально</p>
                            </div>
                        </div>
                        <div class="cost__item">
                            <h4 class="cost__title-item">помещение</h4>
                            <div class="cost__area-inner">
                                <div class="cost__area-block">
                                    <p class="cost__area-text">Площадь</p>
                                    <span class="cost__area-item">м кв</span>
                                </div>
                                <div class="cost__area-button">
                                    <div class="cost__button plus"></div>
                                    <span class="cost__area-count">0</span>
                                    <div class="cost__button minus"></div>
                                    <div class="cost__ceiling-price" style="display: none;"><?php echo CFS()->get('price'); ?></div>
                                </div>
                            </div>
                            <div class="cost__area-inner">
                                <div class="cost__area-block">
                                    <p class="cost__area-text">Кол-во углов</p>
                                    <span class="cost__area-item">шт</span>
                                </div>
                                <div class="cost__area-button">
                                    <div class="cost__button plus corner-plus"></div>
                                    <span class="cost__area-count corners">4</span>
                                    <div class="cost__button minus corner-minus"></div>
                                    <div class="cost__corners-price " style="display: none;"><?php echo CFS()->get('price_corner'); ?></div>
                                </div>
                            </div>
                            <p class="cost__text-info">
                                Площадь менее 5 м.кв. и сан.узлы рассчитываються индивидуально
                            </p>
                        </div>
                        <div class="cost__item">
                            <h4 class="cost__title-item">освещение</h4>
                            <div class="cost__area-inner">
                                <div class="cost__area-block">
                                    <p class="cost__area-text">Светильники</p>
                                    <span class="cost__area-item">шт</span>
                                </div>
                                <div class="cost__area-button">
                                    <div class="cost__button plus ligth-plus"></div>
                                    <span class="cost__area-count ligth">0</span>
                                    <div class="cost__button minus ligth-minus"></div>
                                    <div class="cost__ligth-prise" style="display: none;"><?php echo CFS()->get('price_light'); ?></div>
                                </div>
                            </div>
                            <div class="cost__area-inner">
                                <div class="cost__area-block">
                                    <p class="cost__area-text">Люстры</p>
                                    <span class="cost__area-item">шт</span>
                                </div>
                                <div class="cost__area-button">
                                    <div class="cost__button plus big__ligth-plus"></div>
                                    <span class="cost__area-count big__ligth">0</span>
                                    <div class="cost__button minus big__ligth-minus"></div>
                                    <div class="cost__bigligth-price" style="display: none;"><?php echo CFS()->get('price_big_light'); ?></div>
                                </div>
                            </div>
                            <div class="cost__area-inner">
                                <div class="cost__area-block">
                                    <p class="cost__area-text">Обвод трубы</p>
                                    <span class="cost__area-item">шт</span>
                                </div>
                                <div class="cost__area-button">
                                    <div class="cost__button plus pipe__plus"></div>
                                    <span class="cost__area-count pipe__count">0</span>
                                    <div class="cost__button minus pipe__minus"></div>
                                    <div class="cost__pipe-price" style="display: none;"><?php echo CFS()->get('price_pipe'); ?></div>
                                </div>
                            </div>
                            <p class="cost__text-info">
                                Другие дополнительные работы рассчитываются дополнительно
                            </p>
                        </div>
                    </div>
                    <div class="cost__total-block">
                        <div class="cost__total-inner">
                            <p class="cost__total-text">Стоимость потолка составляет:</p>
                            <span class="cost__total-price">0 </span><span class="cost__total-money">рублей</span>
                        </div>
                        <button class="cost__total-link">заказать</button>
                    </div>
                      
                        <div class="contacts__inner">
                          <div  class="contacts__form">
                            <?php echo do_shortcode('[contact-form-7 id="fe43472" title="контактная форма 2"]'); ?>
                        </div>
                        </div>
                       
                    </div>
                </div>
            </section>
            <section class="present">
                <div class="present__wrapp">
                    <img class="present__img" src="<?php echo CFS()->get('images_present'); ?>" alt="">
                    <p class="present__text"><?php echo CFS()->get('description_present'); ?></p>
                    <img class="present__img-small" src="<?php echo CFS()->get('present'); ?>" alt="">
                </div>
            </section>
            <section class="about">
                <div class="container__fluid">
                    <div class="about__wrapp" style="background-image:url(<?php echo CFS()->get('background_block'); ?>)">
                         
                        <div class="about__inner">
                            <div class="about__title-block">
                                <h3 class="about__title">Информация о компании</h3>
                                <img class="about__title-img" src="<?php echo CFS()->get('logo_company'); ?>" alt="">
                            </div>
                            <p class="about__text">
                                <?php echo CFS()->get('info_company'); ?>
                            </p>
                            <div class="about__link-block">
                                <p class="about__link-text">Подробнее о компании Ferico</p>
                            
                                    <?php echo CFS()->get('ref_company'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="block__one">
                <div class="container__fluid">
                    <div class="block__one-inner">
                        <h3 class="block__one-title">часто задаваемые вопросы</h3>
                        <img class="block__one-img" src="<?php bloginfo('template_url');?>/assets/images/remont/schema-cieling.svg" alt="">
                    </div>
                </div>
            </div>
            <section class="questions">
                <div class="container__wrap">
                    <div class="questions__block">
                        <ul class="questuins__list">
                                    <?php
                     $loop_questions= CFS()->get('question_block');
                         foreach ($loop_questions as $row) { 
                         ?>
                           <li class="questions__item">
                                <div class="qustions__inner">
                                    <h4 class="questions__title"><?php echo $row['question']?></h4>
                                    <p class="questions__text">
                                      <?php echo $row['ansver_question']?><
                                    </p>
                                </div>
                                <img class="questions__icon" src="<?php bloginfo('template_url');?>/assets/images/remont/arrow-2.svg" alt="">
                         </li>
                         <?php
                            }
                         ?> 
                        </ul>
                    </div>
                </div>
            </section>

        </main>
<?php get_footer();?>
   
</body>

</html>