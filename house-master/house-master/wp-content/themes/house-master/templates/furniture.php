<?php
/*
Template Name:мебель
*/
 get_header();
 ?>
    <div class="wrapper">
        <main class="main">
            <section class="info">
                <div class="container__fluid">
                    <div class="info__block">
                        <div class="info__block-title">

                            <h1 class="info__title">так<span class="info__subtitle">идея</span>станет<span
                                    class="info__subtitle-next">шкафом</span>
                            </h1>
                            <img class="info__block-img" src="<?php bloginfo('template_url');?>/assets/images/remont/pencil.svg" alt="">
                        </div>
                    </div>


            </section>
            <section class="title">
                <div class="container__fluid">
                    <div class="title__wrapper">
                        <div class="title__inner">
                            <h3 class="title__block">шкафы-купе</h3>
                            <img class="title__img" src="<?php bloginfo('template_url');?>/assets/images/remont/shkaf.svg" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <section class="type-board">
                <div class="container__fluid-box">
                    <div class="container__wrapper">
                        <div class="type-board__wrapper">
                            <ul class="type-board__list">
                                  <?php
                     $loop= CFS()->get('types_shkaf');
                         foreach ($loop as $row) {
                           
                         ?>

                            <li class="type-board__item" id='<?php echo $row['id']?>' ><?php echo $row['inner_types']?></li>

                         <?php
                            }
                         ?>   
                              
                            </ul>
                                        <?php
                     $types= CFS()->get('types');
                         foreach ($types as $row) {
                           
                         ?>
<div class="type-board__img-block <?php echo $row['active']?>" id="<?php echo $row['id']?>">
                                <img class="type-board__img" src="<?php echo $row['foto_bigg']?>" alt="">
                                <div class="type-board__img-inner">
                                    <p class="type-board__text">
                                      <?php echo $row['about']?>

                                    </p>
                                    <img class="type-board__img-small" src="<?php echo $row['foto_litle']?>"
                                        alt="">
                                </div>
                            </div>
                         

                         <?php
                            }
                         ?>   
                           
                        </div>
                    </div>
                </div>
            </section>
            <section class="title-left">
                <div class="container__fluid">
                    <div class="title-left__wrapper">
                        <div class="title-left__inner">
                            <img class="title-left__img" src="<?php bloginfo('template_url');?>/assets/images/remont/shkaf-left.svg" alt="">
                            <h3 class="title-left__block">стоимость</h3>
                        </div>
                    </div>
                </div>
            </section>
            <section class="cost">
                <div class="container__fluid">
                    <div class="cost__inner">
                        <h3 class="cost__title">Таблица размеров и стоимость шкафа-купе</h3>
                        <div class="cost__list">
                            <div class="cost__item">
                                <div class="cost__item-block">
                                    <h4 class="cost__item-title">Шкаф-купе двухдверный</h4>
                                    <div class="cost__table-head ">
                                        <div class="cost__head-left">
                                            <div class="cost__head-inner">
                                                <h4 class="cost__head-title">Ширина м.п.</h4>
                                                <div class="cost__colum-size">
                                                    <ul class="cost__colum-list">
                                                              <?php
                                                        $loop= CFS()->get('sizes');
                                                            foreach ($loop as $row) {
                                                            ?>
                                                                <li class="cost__colum-item"><?php echo $row['long_size']?></li>
                                                            <?php
                                                                }
                                                            ?> 
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="cost__head-inner">
                                                <h4 class="cost__head-title">Встроеный</h4>
                                                <div class="cost__colum-price">
                                                    <ul class="cost__colum-list">
                                                            <?php
                                                        $loop= CFS()->get('inner');
                                                            foreach ($loop as $row) {
                                                            ?>
                                                                <li class="cost__colum-item"><?php echo $row['price']?><span class="cost__colum-lable">у.е.</span></li>
                                                            <?php
                                                                }
                                                            ?>  
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cost__head-right">
                                            <div class="cost__head-inner">
                                                <h4 class="cost__head-title">Полувстроеный</h4>
                                                <div class="cost__colum-price">
                                                    <ul class="cost__colum-list">
                                                                     <?php
                                                        $loop= CFS()->get('half_inner');
                                                            foreach ($loop as $row) {
                                                            ?>
                                                                <li class="cost__colum-item"><?php echo $row['half_inner_price']?><span class="cost__colum-lable">у.е.</span></li>
                                                            <?php
                                                                }
                                                            ?>  
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="cost__head-inner">
                                                <h4 class="cost__head-title">Корпусной</h4>
                                                <div class="cost__colum-price">
                                                    <ul class="cost__colum-list">
                                                           <?php
                                                        $looper= CFS()->get('corpusnoy');
                                                     
                                                             foreach ($looper as $row) {
                                                                 
                                                             ?>
                                                                 <li class="cost__colum-item"><?php echo $row['price_core']?><span class="cost__colum-lable">у.е.</span></li>
                                                             <?php
                                                            }
                                                            ?>  
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img class="cost__item-img" src="<?php bloginfo('template_url');?>/assets/images/remont/arrow-black.svg" alt="">
                            </div>
                            <div class="cost__item">
                                <div class="cost__item-block">
                                    <h4 class="cost__item-title">Шкаф-купе трехдверный</h4>
                                    <div class="cost__table-head">
                                        <div class="cost__head-left">
                                            <div class="cost__head-inner">
                                                <h4 class="cost__head-title">Ширина м.п.</h4>
                                                <div class="cost__colum-size">
                                                    <ul class="cost__colum-list">
                                                                     <?php
                                                        $loop= CFS()->get('size_core_three');
                                                            foreach ($loop as $row) {
                                                            ?>
                                                                <li class="cost__colum-item"><?php echo $row['long_size']?></li>
                                                            <?php
                                                                }
                                                            ?>  
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="cost__head-inner">
                                                <h4 class="cost__head-title">Встроеный</h4>
                                                <div class="cost__colum-price">
                                                    <ul class="cost__colum-list">
                                                      	             <?php
                                                        $loop= CFS()->get('inner_free');
                                                            foreach ($loop as $row) {
                                                            ?>
                                                                <li class="cost__colum-item"><?php echo $row['price_free']?><span class="cost__colum-lable">у.е.</span></li>
                                                            <?php
                                                                }
                                                            ?>  
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cost__head-right">
                                            <div class="cost__head-inner">
                                                <h4 class="cost__head-title">Полувстроеный</h4>
                                                <div class="cost__colum-price">
                                                    <ul class="cost__colum-list">
                                                                <?php
                                                        $loop= CFS()->get('half_inner_three');
                                                            foreach ($loop as $row) {
                                                            ?>
                                                                <li class="cost__colum-item"><?php echo $row['half_inner_price']?><span class="cost__colum-lable">у.е.</span></li>
                                                            <?php
                                                                }
                                                            ?>  
                                                    </ul>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="cost__head-inner">
                                                <h4 class="cost__head-title">Корпусной</h4>
                                                <div class="cost__colum-price">
                                                    <ul class="cost__colum-list">
                                                              <?php
                                                        $loop= CFS()->get('core_three');
                                                            foreach ($loop as $row) {
                                                            ?>
                                                                <li class="cost__colum-item"><?php echo $row['price_core_three']?><span class="cost__colum-lable">у.е.</span></li>
                                                            <?php
                                                                }
                                                            ?> 
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img class="cost__item-img" src="<?php bloginfo('template_url');?>/assets/images/remont/arrow-black.svg" alt="">
                            </div>
                            <div class="cost__item">
                                <div class="cost__item-block">
                                    <h4 class="cost__item-title">Шкаф-купе четырехдверный</h4>
                                    <div class="cost__table-head">
                                        <div class="cost__head-left">
                                            <div class="cost__head-inner">
                                                <h4 class="cost__head-title">Ширина м.п.</h4>
                                                <div class="cost__colum-size">
                                                    <ul class="cost__colum-list">
                                                        <?php
                                                        $loop= CFS()->get('size_long_four');
                                                            foreach ($loop as $row) {
                                                            ?>
                                                                <li class="cost__colum-item"><?php echo $row['long_size']?></li>
                                                            <?php
                                                                }
                                                            ?>  
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="cost__head-inner">
                                                <h4 class="cost__head-title">Встроеный</h4>
                                                <div class="cost__colum-price">
                                                    <ul class="cost__colum-list">
                                                         <?php
                                                        $loop= CFS()->get('inner_four');
                                                            foreach ($loop as $row) {
                                                            ?>
                                                                <li class="cost__colum-item"><?php echo $row['price_inner_four']?><span class="cost__colum-lable">у.е.</span></li>
                                                            <?php
                                                                }
                                                            ?>  
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cost__head-right">
                                            <div class="cost__head-inner">
                                                <h4 class="cost__head-title">Полувстроеный</h4>
                                                <div class="cost__colum-price">
                                                    <ul class="cost__colum-list">
                                                           <?php
                                                        $loop= CFS()->get('half_inner_four');
                                                            foreach ($loop as $row) {
                                                            ?>
                                                                <li class="cost__colum-item"><?php echo $row['price_inner_four']?><span class="cost__colum-lable">у.е.</span></li>
                                                            <?php
                                                                }
                                                            ?>  
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="cost__head-inner">
                                                <h4 class="cost__head-title">Корпусной</h4>
                                                <div class="cost__colum-price">
                                                    <ul class="cost__colum-list">
                                                          <?php
                                                        $loop= CFS()->get('core_four');
                                                            foreach ($loop as $row) {
                                                            ?>
                                                                <li class="cost__colum-item"><?php echo $row['price_core_four']?><span class="cost__colum-lable">у.е.</span></li>
                                                            <?php
                                                                }
                                                            ?>  
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img class="cost__item-img" src="<?php bloginfo('template_url');?>/assets/images/remont/arrow-black.svg" alt="">
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