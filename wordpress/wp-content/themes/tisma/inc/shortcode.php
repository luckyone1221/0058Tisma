<?php

/*
* *****************************************************
*/
add_shortcode('servises', 'servises_func');
function servises_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  $tel = get_field('телефон', 'option');
  $tel_str = str_replace(" ", "", $tel);
  ?>
  <?php $tel = get_field('телефон', 'option');
  $tel_str = str_replace(" ", "", $tel);
  ?>
  <!-- start sTopCards-->
  <div class="sTopCards section" id="sTopCards">
    <div class="container">
      <div class="sTopCards__row row">
        <?php if (have_rows('карточки')): while (have_rows('карточки')) : the_row(); ?>
          <?php
          $image = get_sub_field("изображение");
          $size = 'medium';
          $sizeSm = 'full';
          ?>
          <div class="sTopCards__col col-xl-6 wow  animate__fadeInUp">
            <div class="sTopCards__card-cont">
              <div class="sTopCards__bg-cont">
                <!-- picture-->
                <picture class="sTopCards__bg">
                  <?php
                  if ($image) {
                    echo wp_get_attachment_image($image, $size);
                  }
                  ?>
                </picture>
                <!-- /picture-->
              </div>
              <div class="sTopCards__txt">
                <h5><?php echo the_sub_field('название'); ?></h5>
                <p><?php echo the_sub_field('краткое_описание'); ?></p><a class="sTopCards__detail-link link-modal"
                                                                          href="#modal-case">
                  <div class="txt">Подробнее</div>
                  <svg class="icon icon-chevron-down ">
                    <use
                      xlink:href="<?php echo $get_template_directory_uri ?>/public/img/svg/sprite.svg#chevron-down"></use>
                  </svg>
                </a>
              </div>
              <div class="sTopCards__pic-cont d-none d-sm-block">
                <!-- picture-->
                <picture class="sTopCards__picture">
                  <?php
                  if ($image) {
                    echo wp_get_attachment_image($image, $sizeSm);
                  }
                  ?>
                </picture>
                <!-- /picture-->
              </div>
              <div class="d-none for-model-content">
                <div class="modal-win__caption">
                  <div class="modal-win__row row">
                    <h5><?php echo the_sub_field('название'); ?></h5>
                    <?php echo the_sub_field('полное_описание'); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <?php endwhile; else : endif; ?>

      </div>
    </div>
  </div>
  <!-- end sTopCards-->
  <?php
  return ob_get_clean();

}

/*
* *****************************************************
*/
add_shortcode('about', 'about_func');
function about_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  $tel = get_field('телефон', 'option');
  $tel_str = str_replace(" ", "", $tel);
  ?>
  <?php $tel = get_field('телефон', 'option');
  $tel_str = str_replace(" ", "", $tel);
  ?>
  <?php
  $image = get_field("фото");
  $size = 'full';
  ?>
  <!-- start sAbout-->
  <section class="sAbout section" id="sAbout">
    <div class="sAbout__red-block">
    </div>
    <div class="sAbout__left-rain"><img loading="lazy"
                                        src="<?php echo $get_template_directory_uri ?>/public/img/svg/sAbout-left-rain.svg"
                                        alt=""/>
    </div>
    <div class="sAbout__right-rain"><img loading="lazy"
                                         src="<?php echo $get_template_directory_uri ?>/public/img/svg/sAbout-right-rain.svg"
                                         alt=""/>
    </div>
    <div class="container">
      <div class="sAbout__row row  wow  animate__fadeInUp">
        <div class="sAbout__descr-col col-lg-7">
          <div class="sAbout__txt-cont">
            <div class="sAbout__left-col-bg"><img loading="lazy"
                                                  src="<?php echo $get_template_directory_uri ?>/public/img/@2x/sAbout-left-col-bg.jpg"
                                                  alt=""/>
            </div>
            <div class="sAbout__company-descr">
              <h2><?php echo the_field('заголовок_02'); ?></h2>
            </div>
            <?php echo the_field('текстовое_поле'); ?>
            <a class="sAbout__video-link" href="<?php echo the_field('видео'); ?>" data-fancybox="video"><span>Смотреть видео</span><span>о компании</span></a>
          </div>
        </div>
        <div class="sAbout__president-col col-lg-5">
          <div class="sAbout__right-col-content">
            <div class="sAbout__trapezoid-bg">
            </div>
            <div class="sAbout__pres-title">
              <h4><?php echo the_field('заголовок_обращения'); ?></h4>
              <p><?php echo the_field('имя'); ?></p>
            </div>
            <div class="sAbout__pres-descr">
              <p><?php echo the_field('текст__обращения'); ?></p>
            </div>
            <div class="sAbout__pres-portrait">
              <?php
              if ($image) {
                echo wp_get_attachment_image($image, $size);
              }
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="sAbout__convince-row row">
        <?php if (have_rows('список')): while (have_rows('список')) : the_row(); ?>
          <div class="col-lg-4 col-sm-6  wow  animate__fadeInUp">
            <div class="sAbout__convince-txt"><?php echo the_sub_field('текст'); ?></div>
          </div>
        <?php endwhile; else : endif; ?>
      </div>
    </div>
  </section>
  <!-- end sAbout-->

  <?php
  return ob_get_clean();

}

/*
* *****************************************************
*/
add_shortcode('sCases', 'sCases_func');
function sCases_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  $tel = get_field('телефон', 'option');
  $tel_str = str_replace(" ", "", $tel);
  ?>
  <?php $tel = get_field('телефон', 'option');
  $tel_str = str_replace(" ", "", $tel);
  ?>


  <!-- start sCases-->
  <section class="sCases section" id="sCases">
    <div class="sCases__container container">
      <div class="sCases__header  wow  animate__fadeInUp">
        <h2><?php echo the_field('заголовок_03'); ?></h2>
        <a class="sCases__watch-all" href="#"><span>Смотреть все</span>
          <svg class="icon icon-chevron-right ">
            <use xlink:href="<?php echo $get_template_directory_uri ?>/public/img/svg/sprite.svg#chevron-right"></use>
          </svg>
        </a>
        <div class="sCases__slider-nav">
          <div class="sCases__prev cases-prev-js">
            <svg class="icon icon-arrow-left ">
              <use xlink:href="<?php echo $get_template_directory_uri ?>/public/img/svg/sprite.svg#arrow-left"></use>
            </svg>
          </div>
          <div class="sCases__next cases-next-js">
            <svg class="icon icon-arrow-right ">
              <use xlink:href="<?php echo $get_template_directory_uri ?>/public/img/svg/sprite.svg#arrow-right"></use>
            </svg>
          </div>
        </div>
      </div>
      <div class="sCases__slider  wow  animate__fadeInUp">
        <div class="swiper-container cases-slider-js">
          <div class="swiper-wrapper">
            <?php if (have_rows('блоки_03')): while (have_rows('блоки_03')) : the_row(); ?>
              <?php
              $image = get_sub_field("фон");
              $image2 = get_sub_field("лого");
              $image3 = get_sub_field("лого");
              $image4 = get_sub_field("слайдер");
              $size = 'large';
              $sizeMd = 'card-image';
              $sizeSm = 'full';
              ?>
              <div class="swiper-slide">
                <a href="#modal-case" class="d-block text-white link-modal sCases__slide-content">
                  <div class="sCases__bg">
                    <?php
                    if (!empty($image)): ?>
                      <img class="swiper-lazy" src="#" data-src="<?php echo esc_url($image['url']); ?>"
                           alt="<?php echo esc_attr($image['alt']); ?>"/>
                    <?php endif; ?>

                  </div>
                  <div class="sCases__inner">
                    <div class="sCases__top-line">
                      <div class="sCases__logoes-cont">
                        <?php foreach ($image2 as $image2) {
                          // var_dump($images7)
                          ?>
                          <div class="sCases__logo">
                            <?php
                            if (!empty($image2)): ?>
                              <img class="swiper-lazy" src="#" data-src="<?php echo esc_url($image2['url']); ?>"
                                   alt="<?php echo esc_attr($image2['alt']); ?>"/>
                            <?php endif; ?>

                          </div>
                        <?php } ?>
                      </div>
                      <div class="sCases__headline"><?php echo the_sub_field('заголовок'); ?></div>
                    </div>
                    <div class="sCases__lower-txt">
                      <div class="sCases__top-content">
                        <div class="sCases__title"><?php echo the_sub_field('текст'); ?></div>
                        <div class="sCases__list"><?php echo the_sub_field('список'); ?></div>
                      </div>
                      <div class="sCases__footer">
                        <div class="sCases__date">
                          <span>Период проведения:</span><span><?php echo the_sub_field('дата'); ?></span>
                        </div>
                        <div class="sCases__role"><span>Роль:</span><span><?php echo the_sub_field('роль'); ?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-none for-model-content">
                    <div class="modal-win__caption">
                      <div class="sCases__logoes-cont">
                        <?php foreach ($image3 as $image3) {
                          // var_dump($images7)
                          ?>
                          <div class="sCases__logo">
                            <?php
                            if (!empty($image3)): ?>
                              <img class="swiper-lazy" src="#" data-src="<?php echo esc_url($image3['url']); ?>"
                                   alt="<?php echo esc_attr($image3['alt']); ?>"/>
                            <?php endif; ?>

                          </div>
                        <?php } ?>
                      </div>
                      <div class="modal-win__row row">
                        <div class="modal-win__col col-auto">Название мероприятия:</div>
                        <div class="col"><?php echo the_sub_field('заголовок'); ?></div>
                      </div>
                      <div class="modal-win__row row">
                        <div class="modal-win__col col-auto">Дата проведения:</div>
                        <div class="col-lg"><?php echo the_sub_field('дата'); ?></div>
                      </div>
                      <div class="modal-win__row row">
                        <div class="modal-win__col col-auto">Заказчик:</div>
                        <div class="col-lg"><?php echo the_sub_field('заказчик'); ?></div>
                      </div>
                      <div class="modal-win__row row">
                        <div class="modal-win__col col-auto">Роль:</div>
                        <div class="col-lg"><?php echo the_sub_field('роль'); ?></div>
                      </div>
                      <div class="modal-win__row row">
                        <div class="modal-win__col col-auto">Описание :</div>
                        <div class="col-lg"><?php echo the_sub_field('описание'); ?> </div>
                      </div>
                      <?php if (!empty($image4)): ?>
                        <div class="modal-win__slider modal-win__slider--js swiper-container">
                          <div class="swiper-button-hand swiper-button-hand-prev swiper-button-prev"></div>
                          <div class="swiper-button-hand swiper-button-hand-next swiper-button-next"></div>
                          <div class="swiper-wrapper">
                            <?php foreach ($image4 as $image4) {
                              // var_dump($images7)
                              ?>

                              <?php
                              if (!empty($image4)): ?>
                                <div class="modal-win__slide swiper-slide">
                                  <img class="swiper-lazy" src="#" data-src="<?php echo esc_url($image4['url']); ?>"
                                       alt="<?php echo esc_attr($image4['alt']); ?>"/>
                                </div>
                              <?php endif; ?>


                            <?php } ?>
                          </div>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                </a>
              </div>
            <?php endwhile; else : endif; ?>
          </div>
        </div>
        <div class="sCases__pugin cases-pugin-js">
        </div>
      </div>
    </div>
  </section>
  <!-- end sCases-->

  <?php
  return ob_get_clean();

}


/*
* *****************************************************
*/
add_shortcode('sFormAlt', 'sFormAlt_func');
function sFormAlt_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  $tel = get_field('телефон', 'option');
  $tel_str = str_replace(" ", "", $tel);
  ?>
  <?php $tel = get_field('телефон', 'option');
  $tel_str = str_replace(" ", "", $tel);
  ?>
  <?php
  $image = get_field("фотка_04");
  $size = 'full';
  ?>

  <!-- start sFormAlt-->
  <div class="sFormAlt section" id="sFormAlt">
    <div class="sFormAlt__bg"><img loading="lazy"
                                   src="<?php echo $get_template_directory_uri ?>/public/img/svg/sForm-rain.svg"
                                   alt=""/>
    </div>
    <div class="sFormAlt__container container  wow  animate__fadeInUp">
      <div class="form-wrap">

        <div class="form-wrap__man d-none d-md-block">
          <?php
          if ($image) {
            echo wp_get_attachment_image($image, $size);
          }
          ?>
        </div>
        <div class="form-wrap__form-content">
          <div class="form-wrap__bg"><img loading="lazy"
                                          src="<?php echo $get_template_directory_uri ?>/public/img/svg/form-rain-inner.svg"
                                          alt=""/>
          </div>
          <div class="form-wrap__txt-block">
            <?php echo the_field('текст_04'); ?>
          </div>

          <div class="form-wrap__inputs-block">
            <?php echo do_shortcode('[contact-form-7 id="168" title="Форма"]'); ?>
            <div class="form-wrap__polite"><span>
											Согласен на обработку
											</span><a href="<?php echo the_field('ссылка_04'); ?>" target="_blank">персональных данных</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- end sFormAlt-->

  <?php
  return ob_get_clean();

}

/*
* *****************************************************
*/
add_shortcode('sTeam', 'sTeam_func');
function sTeam_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  $tel = get_field('телефон', 'option');
  $tel_str = str_replace(" ", "", $tel);
  ?>
  <?php $tel = get_field('телефон', 'option');
  $tel_str = str_replace(" ", "", $tel);
  ?>
  <?php
  $image = get_field("фотка_04");
  $size = 'full';
  ?>

  <!-- start sTeam-->
  <section class="sTeam section" id="sTeam">
    <div class="sTeam__container container">
      <div class="section-title  wow  animate__fadeInUp">
        <h2><?php echo the_field('заголовок_05'); ?></h2>
      </div>
      <div class="sTeam__slider  wow  animate__fadeInUp">
        <div class="swiper-container partners-slider-js">
          <div class="swiper-wrapper">
            <?php if (have_rows('блоки')): while (have_rows('блоки')) : the_row(); ?>
              <?php
              $image = get_sub_field("лого");
              $image2 = get_sub_field("фон");
              $size = 'medium';
              $sizeSm = 'full';
              ?>
              <div class="swiper-slide"><a href="" class="sTeam__inner-link"><span class="sTeam__top-logo">
										<?php if (!empty($image)): ?>
                      <img class="swiper-lazy" src="<?php echo the_sub_field('ссылка'); ?>"
                           data-src="<?php echo esc_url($image['url']); ?>"
                           alt="<?php echo esc_attr($image['alt']); ?>"/>
                    <?php endif; ?>
								</span><span class="sTeam__bg">
										<?php if (!empty($image2)): ?>
                      <img class="swiper-lazy" src="#" data-src="<?php echo esc_url($image2['url']); ?>"
                           alt="<?php echo esc_attr($image2['alt']); ?>"/>
                    <?php endif; ?>
									</span></a>
              </div>
            <?php endwhile; else : endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end sTeam-->

  <?php
  return ob_get_clean();

}

//delete top
/*
* *****************************************************
*/
add_shortcode('headerBlock', 'headerBlock_func');
function headerBlock_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
  <div class="headerBlock section" id="headerBlock">
    <div class="headerBlock__bot-bg">
    </div>
    <div class="container">
      <div class="headerBlock__row row">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <div class="section-title">
            <?php echo the_field('текст01'); ?>
            <a class="section-title__btn" href="#">Рассчитайте кухню</a>
          </div>
        </div>
      </div>
      <div class="headerBlock__img-cont d-none d-md-block">
        <?php if (get_field('текст_на_банере01')) {?>
          <div class="headerBlock__white-txt headerBlock__white-txt--1 d-none d-md-block">
            <?php echo the_field('текст_на_банере01'); ?>
          </div>
        <?php }?>
        <?php if (get_field('текст_на_банере02')) {?>
          <div class="headerBlock__white-txt headerBlock__white-txt--2 d-none d-md-block">
            <?php echo the_field('текст_на_банере02'); ?>
          </div>
        <?php }?>
        <!-- picture-->
        <picture class="headerBlock__img">
          <img src="<?php echo the_field('изображения01'); ?>" alt="" loading="lazy"/>
        </picture>
        <!-- /picture-->
      </div>
      <div class="headerBlock__f-row row">
        <?php if (have_rows('карточки01')): while (have_rows('карточки01')) : the_row(); ?>
          <?php
            $image = get_sub_field("карточки01_изображение");
          ?>
        <div class="col-md-6 col-lg-3">
          <div class="headerBlock__item">
            <div class="headerBlock__i-row row gy-3">
              <div class='headerBlock__col headerBlock__col--<?php echo get_row_index('карточки01');?> col-auto'>
                <?php if (!$image) {?>
                  <div class="headerBlock__ball">
                    <div class="headerBlock__number">
                      <?php echo the_sub_field('карточки01_число'); ?>
                    </div>
                  </div>
                <?php } else {?>
                  <div class="headerBlock__ball-img">
                    <img loading="lazy" src="<?php echo the_sub_field('карточки01_изображение'); ?>" alt=""/>
                  </div>
                <?php } ?>
              </div>
              <div class="col">
                <?php echo the_sub_field('карточки01_текст'); ?>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; else : endif; ?>
      </div>
    </div>
  </div>
  <?php
  return ob_get_clean();

}
/*
* *****************************************************
*/
add_shortcode('sInterier', 'sInterier_func');
function sInterier_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
  <section class="sInterier section" id="sInterier">
    <div class="section-title-alt">
      <div class="container">
        <div class="section-title-alt__row row align-items-center gy-3">
          <div class="section-title-alt__title-col col-lg-7 col-xl-8 col-xxl-auto">
            <h2>
              <?php echo the_field('заголовок02'); ?>
            </h2>
          </div>
          <div class="col-md-8 col-lg">
            <div class="section-title-alt__descr">
              <?php echo the_field('осписание02'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="sInterier__row row">
        <?php if (have_rows('карточки02')): while (have_rows('карточки02')) : the_row(); ?>
          <?php
            $cardType = get_sub_field("большая_карточка02");
          ?>
          <?php if ($cardType == 'Большая карточка') {?>
            <div class="col-md-8 col-lg-6">
              <div class="sInterier__item sInterier__item--big">
                <!-- picture-->
                <picture class="sInterier__pic">
                  <img src="<?php the_sub_field("картинка02");?>" alt="" loading="lazy"/>
                </picture>
                <!-- /picture-->
                <div class="sInterier__content">
                  <a class="sInterier__ball" href="#">
                    <span class="sInterier__name">
                      <?php the_sub_field("текст_ссилки02");?>
                    </span>
                  </a>
                  <a class="sInterier__calc-btn" href="#">
                    Рассчитать стоимость
                  </a>
                </div>
              </div>
            </div>
          <?php } else {?>
            <div class="sInterier__col sInterier__col--sm col-lg-3 col-sm-6 <?php the_sub_field("доп_класи_сетки02");?>">
              <div class="sInterier__item">
                <!-- picture-->
                <picture class="sInterier__pic">
                  <img src="<?php the_sub_field("картинка02");?>" alt="" loading="lazy"/>
                </picture>
                <!-- /picture-->
                <div class="sInterier__content">
                  <a class="sInterier__ball" href="#">
                    <span class="sInterier__name">
                      <?php the_sub_field("текст_ссилки02");?>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          <?php } ?>
        <?php endwhile; else : endif; ?>
      </div>
    </div>
  </section>
  <?php
  return ob_get_clean();

}
/*
* *****************************************************
*/
add_shortcode('sFeedBack', 'sFeedBack_func');
function sFeedBack_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
  <section class="sFeedBack section" id="sFeedBack">
    <div class="sFeedBack__container container">
      <div class="sFeedBack__brackets d-sm-block d-none"><img loading="lazy" src="img/svg/brackets.svg" alt=""/>
      </div>
      <div class="sFeedBack__row row gy-4">
        <div class="sFeedBack__txt-col col-xl-5 col-xxl-auto">
          <div class="section-title">
            <?php echo the_field('заголовок04'); ?>
          </div>
          <div class="sFeedBack__sub-row row">
            <div class="col">
              <div class="sFeedBack__a-row row pb-3 pb-sm-0">
                <div class="col col-sm-12">
                  <div class="sFeedBack__amount-cont">
                      <div class="sFeedBack__amount">
                        <?php echo the_field('количество_клиентов04'); ?>
                      </div>
                      <div class="sFeedBack__amount-txt">
                        клиентов с 2010 года.
                      </div>
                  </div>
                </div>
                <div class="col-auto col-sm-12">
                  <div class="sFeedBack__rate">
                    <img loading="lazy" src="<?php echo the_field('изображение_рейтинга04'); ?>" alt=""/>
                  </div>
                </div>
              </div>
            </div>
            <div class="sFeedBack__arrow-col col-sm-auto">
              <div class="sFeedBack__arrow sFeedBack-prev-js mb-sm-12">
                <div class="sFeedBack__icon mb-2">
                  <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/svg/arrow-left.svg" alt=""/>
                </div>
                <div class="sFeedBack__a-txt">Предыдущий
                </div>
              </div>
              <div class="sFeedBack__arrow sFeedBack-next-js">
                <div class="sFeedBack__a-txt mb-2">Следующий
                </div>
                <div class="sFeedBack__icon">
                  <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/svg/arrow-right.svg" alt=""/>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="sFeedBack__slider-col col-xl-7 col-xxl">
          <div class="sFeedBack__slider-wrap">
            <div class="swiper-container sFeedBack-slider-js">
              <div class="swiper-wrapper">
                <?php if (have_rows('слайдер_откликов04')): while (have_rows('слайдер_откликов04')) : the_row(); ?>
                  <div class="swiper-slide">
                    <div class="sFeedBack__card">
                      <div class="sFeedBack__card-row row gy-4">
                        <div class="sFeedBack__c-data-col col-sm-auto">
                          <div class="sFeedBack__name-row row">
                            <div class="col-auto">
                              <div class="sFeedBack__portrait">
                                <img loading="lazy" src="<?php the_sub_field("фото_рецензента04");?>" alt=""/>
                              </div>
                            </div>
                            <div class="col">
                              <div class="sFeedBack__name">
                                <?php the_sub_field("имя_рецензента04");?>
                              </div>
                              <div class="sFeedBack__date">
                                <?php the_sub_field("дата04");?>
                              </div>
                            </div>
                          </div>
                          <a class="sFeedBack__video-link" href="<?php the_sub_field("ссилка_на_видео04");?>" data-fancybox="video">
                            <span class="sFeedBack__ball">
                              <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/video-link.png" alt=""/>
                            </span>
                            <span class="sFeedBack__v-txt">Посмотреть<br/>видео отзыв</span>
                          </a>
                          <div class="sFeedBack__pic-cont">
                            <!-- picture-->
                            <picture class="sFeedBack__picture">
                              <img src="<?php the_sub_field("фото_роботы04");?>" alt="" loading="lazy"/>
                            </picture>
                            <!-- /picture-->
                          </div>
                        </div>
                        <div class="sFeedBack__c-txt-col col-sm">
                          <?php the_sub_field("текст_отзыва04");?>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endwhile; else : endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  return ob_get_clean();

}
/*
* *****************************************************
*/
add_shortcode('sMaterial', 'sMaterial_func');
function sMaterial_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
  <div class="sMaterial section" id="sMaterial">
    <div class="container">
      <div class="sMaterial__title">
        <?php echo the_field('заголовок05'); ?>
      </div>
      <div class="sMaterial__slider-wrap">
        <div class="swiper-container sMaterial-slider-js">
          <div class="swiper-wrapper">
            <?php if (have_rows('слайдер_материалов05')): while (have_rows('слайдер_материалов05')) : the_row(); ?>
              <div class="swiper-slide">
                <div class="sMaterial__img">
                  <img loading="lazy" src="<?php the_sub_field("изображение05");?>" alt=""/>
                </div>
              </div>
            <?php endwhile; else : endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  return ob_get_clean();
}
/*
* *****************************************************
*/
add_shortcode('sRecent', 'sRecent_func');
function sRecent_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
  <section class="sRecent section" id="sRecent">
    <div class="container">
      <div class="section-title d-xl-none">
        <?php echo the_field('заголовок06'); ?>
        <h2>Наши крайние проекты</h2>
        <p>Самое свежее, мы публикуем в наших соцсетях</p>
      </div>
      <div class="sRecent__main-row row">
        <div class="sRecent__col sRecent__col--title col-sm-6 col-lg-3">
          <div class="section-title d-none d-xl-block">
            <?php echo the_field('заголовок06'); ?>
          </div>
          <div class="sRecent__links-box">
            <div class="sRecent__l-row row align-items-center gy-3">
              <div class="col-auto">
                <div class="sRecent__ball-logo">
                  <img loading="lazy" src="<?php echo the_field('логотип06'); ?>" alt=""/>
                </div>
              </div>
              <div class="col-auto">
                <div class="sRecent__soc-links">
                  <?php if (have_rows('соц_ссылки06')): while (have_rows('соц_ссылки06')) : the_row(); ?>
                    <a class="sRecent__link" href="<?php the_sub_field("ссылка06");?>" target="_blank">
                      <span class="sRecent__icon">
                        <img loading="lazy" src="<?php the_sub_field("соц_иконка06");?>" alt=""/>
                      </span>
                      <span class="sRecent__txt">
                        <?php the_sub_field("текст_ссылки06");?>
                      </span>
                    </a>
                  <?php endwhile; else : endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php if (have_rows('недавние_роботи06')): while (have_rows('недавние_роботи06')) : the_row(); ?>
          <div class="sRecent__col col-sm-6 col-lg-3">
            <picture class="sRecent__work-link">
              <img src="<?php the_sub_field("изображение_недавние06");?>" alt="" loading="lazy"/>
            </picture>
          </div>
        <?php endwhile; else : endif; ?>
      </div>
    </div>
  </section>

  <?php
  return ob_get_clean();
}
/*
* *****************************************************
*/
add_shortcode('sFAQ', 'sFAQ_func');
function sFAQ_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
  <section class="sFAQ section" id="sFAQ">
    <div class="sFAQ__container container">
      <div class="sFAQ__q-sign d-none d-md-block"><img loading="lazy" src="img/svg/sFaq-q-sing.svg" alt=""/>
      </div>
      <div class="section-title">
        <?php echo the_field('заголовок07'); ?>
      </div>
      <div class="sFAQ__row row">
        <?php if (have_rows('вопросы07')): while (have_rows('вопросы07')) : the_row(); ?>
          <?php
            $openQuestion = get_sub_field("вопрос_открыт07");
          ?>

          <div class="sFAQ__col col-xl-4">
            <div class="sFAQ__item faq-item-js">
              <div class="sFAQ__ques-bl">
                <!-- picture-->
                <picture class="sFAQ__pic">
                  <img src="<?php the_sub_field("фоновое_изображение07");?>" alt="" loading="lazy"/>
                </picture>
                <!-- /picture-->
                <div class="sFAQ__question faq-question-js">
                  <?php the_sub_field("вопрос07");?>
                  Кухня у меня уже есть, мне нужно еще пару шкафчиков, вы это делаете?
                </div>
                <div class="sFAQ__show-btn faq-btn-js <?php if (get_sub_field("вопрос_открыт07") === 'Нет') {echo 'active';}?>">
                  Посмотреть ответ
                </div>
              </div>
              <div class="sFAQ__reply faq-reply-js <?php if (get_sub_field("вопрос_открыт07") === 'Да') {echo 'active';}?>">
                <?php the_sub_field("ответ07");?>
              </div>
            </div>
          </div>
        <?php endwhile; else : endif; ?>
      </div>
    </div>
  </section>

  <?php
  return ob_get_clean();
}
/*
* *****************************************************
*/
add_shortcode('sForm', 'sForm_func');
function sForm_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
  <section class="sForm section" id="sForm">
    <div class="container">
      <div class="sForm__main-row row gy-4">
        <div class="col-md-6">
          <div class="section-title">
            <?php echo the_field('заголовок08'); ?>
          </div>
          <div class="sForm__name-row row align-items-center gy-3">
            <div class="col-auto">
              <!-- picture-->
              <picture class="sForm__man">
                <img src="<?php echo the_field('картинка_менеджера08'); ?>" alt="" loading="lazy"/>
              </picture>
              <!-- /picture-->
            </div>
            <div class="col">
              <div class="sForm__name">
                <?php echo the_field('имя_менеджера08'); ?>
              </div>
              <div class="sForm__duty">
                <?php echo the_field('должность08'); ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-wrap">
            <form>
              <div class="form-wrap__input-wrap form-group">
                <input class="form-wrap__input form-control" name="" type="text" placeholder="Введите Ваше имя"/>
                <div class="form-wrap__icon">
                  <img loading="lazy" src="img/name-inp-icon2.png" alt=""/>
                </div>
              </div>
              <div class="form-wrap__input-wrap form-group mb-32">
                <input class="form-wrap__input form-control" name="" type="tell" placeholder="+7 (900) 000-00-00"/>
                <div class="form-wrap__icon">
                  <img loading="lazy" src="img/svg/inp-flag2.svg" alt=""/>
                </div>
              </div>
              <button class="form-wrap__btn" type="submit">отправить заявку
              </button>
              <div class="form-wrap__polite">
                Нажимая на кнопку, вы даете согласие на обработку
                <a href="#">персональных данных.</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  return ob_get_clean();
}

/*
* *****************************************************
*/
add_shortcode('sKnow', 'sKnow_func');
function sKnow_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
  <section class="sKnow section" id="sKnow">
    <div class="section-title-alt">
      <div class="container">
        <div class="section-title-alt__row row align-items-center gy-3">
          <div class="section-title-alt__title-col col-lg-7 col-xl-8 col-xxl-auto">
            <?php echo the_field('заголовок09'); ?>
          </div>
          <div class="col-md-8 col-lg">
            <div class="section-title-alt__descr">
              <?php echo the_field('описание09'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="sKnow__main-row row gy-3">
        <div class="sKnow__steps-col col-xl-auto">
          <div class="quize">
            <div class="quize__slider-wrap">
              <div class="swiper-container quize-steps-slider-js">
                <div class="swiper-wrapper">
                  <div class="swiper-slide quize-step-slide-js">
                    <div class="quize__step quize-step-btn-js">Стиль интерьера
                    </div>
                  </div>
                  <div class="swiper-slide quize-step-slide-js">
                    <div class="quize__step quize-step-btn-js">Тип кухни
                    </div>
                  </div>
                  <div class="swiper-slide quize-step-slide-js">
                    <div class="quize__step quize-step-btn-js">Площадь кухни
                    </div>
                  </div>
                  <div class="swiper-slide quize-step-slide-js">
                    <div class="quize__step quize-step-btn-js">Сроки
                    </div>
                  </div>
                  <div class="swiper-slide quize-step-slide-js">
                    <div class="quize__step quize-step-btn-js">Бюджет
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="quize__body">
              <div class="quize__card-wrap quize-card-wrap-js active">
                <div class="quize__card">
                  <div class="text-center">
                    <div class="quize__title">
                      <?php echo the_field('тест_шаг1_заголовок'); ?>
                    </div>
                  </div>
                  <div class="quize__content">
                    <div class="quize__content-row row gy-3">
                      <?php if (have_rows('тест_шаг1')): while (have_rows('тест_шаг1')) : the_row(); ?>
                        <div class="col-6 col-sm-4">
                          <label class="pic-chb small">
                            <input class="q-radio-choise-js invisible" type="radio" value="<?php echo the_sub_field('текст_варианта'); ?>" name="q-style"/>
                            <span class="item">
                            <span class="img-box">
                              <img loading="lazy" src="<?php echo the_sub_field('картинка_варианта'); ?>" alt=""/>
                              <span class="ball"></span>
                              <span class="ball ball--checked"></span>
                            </span>
                            <span class="text-center">
                              <span class="txt">
                                <?php echo the_sub_field('текст_варианта'); ?>
                              </span>
                            </span>
                          </span>
                          </label>
                        </div>
                      <?php endwhile; else : endif; ?>
                    </div>
                  </div>
                  <div class="quize__f-row row">
                    <div class="col-sm">
                      <label class="quize__hard-label">
                        <input class="q-radio-choise-js invisible" type="radio" value="Затрудняюсь с выбором" name="q-style"/>
                        <div class="hard-btn">Затрудняюсь с выбором</div>
                      </label>
                    </div>
                    <div class="col-sm-auto">
                      <button class="quize__forward-btn forward-btn-js" type="button">Следующий шаг
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!--step -->
              <div class="quize__card-wrap quize-card-wrap-js">
                <div class="quize__card">
                  <div class="text-center">
                    <div class="quize__title">
                      <?php echo the_field('тест_шаг2_заголовок'); ?>
                    </div>
                  </div>
                  <div class="quize__content">
                    <div class="quize__content-row row gy-3">
                      <?php if (have_rows('тест_шаг2')): while (have_rows('тест_шаг2')) : the_row(); ?>
                        <div class="col-6 col-md-3">
                          <label class="pic-chb img-contain">
                            <input class="q-radio-choise-js invisible" type="radio" value="<?php echo the_sub_field('текст_варианта'); ?>" name="q-type"/>
                            <span class="item"><span class="img-box">
                                <img loading="lazy" src="<?php echo the_sub_field('картинка_варианта'); ?>" alt=""/>
                                <span class="ball"></span>
                                <span class="ball ball--checked"></span>
                              </span>
																<span class="d-block text-center">
                                  <span class="txt">
                                    <?php echo the_sub_field('текст_варианта'); ?>
                                  </span>
                                </span>
                            </span>
                          </label>
                        </div>
                      <?php endwhile; else : endif; ?>
                    </div>
                  </div>
                  <div class="quize__f-row row">
                    <div class="col-sm">
                      <label class="quize__hard-label">
                        <input class="q-radio-choise-js invisible" type="radio" value="Затрудняюсь с выбором" name="q-type"/>
                        <div class="hard-btn">Затрудняюсь с выбором</div>
                      </label>
                    </div>
                    <div class="col-sm-auto">
                      <button class="quize__forward-btn forward-btn-js" type="button">Следующий шаг
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!--step -->
              <div class="quize__card-wrap quize-card-wrap-js">
                <div class="quize__card">
                  <div class="text-center">
                    <div class="quize__title">
                      <?php echo the_field('тест_шаг3_заголовок'); ?>
                    </div>
                  </div>
                  <div class="quize__content">
                    <div class="quize__content-row row gy-3">
                      <?php if (have_rows('тест_шаг3')): while (have_rows('тест_шаг3')) : the_row(); ?>
                        <div class="col-6 col-md-3">
                          <label class="pic-chb">
                            <input class="q-radio-choise-js invisible" type="radio" value="<?php echo the_sub_field('текст_варианта'); ?>" name="q-length"/>
                            <span class="item">
                              <span class="img-box">
                                <img loading="lazy" src="<?php echo the_sub_field('картинка_варианта'); ?>" alt=""/>
                                <span class="ball"></span>
                                <span class="ball ball--checked"></span>
                              </span>
																<span class="d-block text-center">
                                  <span class="txt">
                                    <?php echo the_sub_field('текст_варианта'); ?>
                                  </span>
                                </span>
                            </span>
                          </label>
                        </div>
                      <?php endwhile; else : endif; ?>
                    </div>
                  </div>
                  <div class="quize__f-row row">
                    <div class="col-sm">
                      <label class="quize__hard-label">
                        <input class="q-radio-choise-js invisible" type="radio" value="Затрудняюсь с выбором" name="q-length"/>
                        <div class="hard-btn">Затрудняюсь с выбором</div>
                      </label>
                    </div>
                    <div class="col-sm-auto">
                      <button class="quize__forward-btn forward-btn-js" type="button">Следующий шаг
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!--step -->
              <div class="quize__card-wrap quize-card-wrap-js">
                <div class="quize__card">
                  <div class="text-center">
                    <div class="quize__title">
                      <?php echo the_field('тест_шаг4_заголовок'); ?>
                    </div>
                  </div>
                  <div class="quize__content">
                    <div class="quize__content-row row gy-3">
                      <?php if (have_rows('тест_шаг4')): while (have_rows('тест_шаг4')) : the_row(); ?>
                        <div class="col-sm-6 col-md-4">
                          <label class="pic-chb pic-chb--ball">
                            <input class="q-radio-choise-js invisible" type="radio" value="<?php echo the_sub_field('текст_варианта'); ?>" name="q-time"/>
                            <span class="item">
                              <span class="img-box">
                                <span class="number">
                                  <?php echo the_sub_field('номер_варианта'); ?>
                                </span>
                                <span class="ball"></span>
                                <span class="ball ball--checked"></span>
                              </span>
																<span class="d-block text-center">
                                  <span class="txt txt--long">
                                    <?php echo the_sub_field('текст_варианта'); ?>
                                  </span>
																</span></span>
                          </label>
                        </div>
                      <?php endwhile; else : endif; ?>
                    </div>
                  </div>
                  <div class="quize__f-row row">
                    <div class="col-sm">
                      <label class="quize__hard-label">
                        <input class="q-radio-choise-js invisible" type="radio" value="Затрудняюсь с выбором" name="q-time"/>
                        <div class="hard-btn">Затрудняюсь с выбором</div>
                      </label>
                    </div>
                    <div class="col-sm-auto">
                      <button class="quize__forward-btn forward-btn-js" type="button">Следующий шаг
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!--step -->
              <div class="quize__card-wrap quize-card-wrap-js">
                <div class="quize__card">
                  <div class="text-center">
                    <div class="quize__title">
                      <?php echo the_field('тест_шаг5_заголовок'); ?>
                    </div>
                  </div>
                  <div class="quize__content">
                    <div class="quize__content-row row gy-3">
                      <?php if (have_rows('тест_шаг5')): while (have_rows('тест_шаг5')) : the_row(); ?>
                        <div class="col-sm-6 col-md-4">
                          <label class="pic-chb pic-chb--ball">
                            <input class="q-radio-choise-js invisible" type="radio" value="<?php echo the_sub_field('текст_варианта'); ?>" name="q-price"/>
                            <span class="item">
                              <span class="img-box">
                                <span class="number">
                                  <?php echo the_sub_field('номер_варианта'); ?>
                                </span>
                                <span class="ball"></span>
                                <span class="ball ball--checked"></span>
                              </span>
																<span class="text-center">
                                  <span class="txt txt--long">
                                    <?php echo the_sub_field('текст_варианта'); ?>
                                  </span>
																</span>
                            </span>
                          </label>
                        </div>
                      <?php endwhile; else : endif; ?>
                    </div>
                  </div>
                  <div class="quize__f-row row">
                    <div class="col-sm">
                      <label class="quize__hard-label">
                        <input class="q-radio-choise-js invisible" type="radio" value="Затрудняюсь с выбором" name="q-price"/>
                        <div class="hard-btn">Затрудняюсь с выбором</div>
                      </label>
                    </div>
                    <div class="col-sm-auto">
                      <button class="quize__forward-btn forward-btn-js" type="button">Следующий шаг
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!--last form-->
              <div class="quize__card-wrap quize-card-wrap-js">
                <div class="quize__card">
                  <div class="text-center">
                    <div class="quize__title">
                      Заполните форму, чтобы
                      <br class="d-none d-sm-block"/>получить результаты теста
                    </div>
                  </div>
                  <div class="card-form quize__content">
                    <div class="form-wrap">
                      <form>
                        <input class="quize-hidden-inp-js" type="hidden" value="" name="q-style"/>
                        <input class="quize-hidden-inp-js" type="hidden" value="" name="q-type"/>
                        <input class="quize-hidden-inp-js" type="hidden" value="" name="q-length"/>
                        <input class="quize-hidden-inp-js" type="hidden" value="" name="q-time"/>
                        <input class="quize-hidden-inp-js" type="hidden" value="" name="q-price"/>
                        <div class="form-wrap__input-wrap form-group">
                          <input class="form-wrap__input form-control" name="" type="text" placeholder="Введите Ваше имя"/>
                          <div class="form-wrap__icon">
                            <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/name-inp-icon.png" alt=""/>
                          </div>
                        </div>
                        <div class="form-wrap__input-wrap form-group">
                          <input class="form-wrap__input form-control" name="" type="tell" placeholder="+7 (900) 000-00-00"/>
                          <div class="form-wrap__icon">
                            <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/svg/inp-flag.svg" alt=""/>
                          </div>
                        </div>
                        <div class="form-wrap__txt">
                          Введите email, чтобы получить дизайн-проект
                        </div>
                        <div class="form-wrap__input-wrap form-group">
                          <input class="form-wrap__input form-control" name="" type="tell" placeholder="pochta@tismamebel.ru"/>
                          <div class="form-wrap__icon">
                            <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/mail-inp-icon.svg" alt=""/>
                          </div>
                        </div>
                        <div class="text-center">
                          <button class="form-wrap__btn" type="submit">получить результаты
                          </button>
                          <div class="form-wrap__policy">
                            Нажимая кнопку, вы подтверждаете что ознакомились
                            <br class="d-none d-sm-block"/><a href="#">с политикой конфиденциальности.</a>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="sKnow__baners-col col">
          <div class="sKnow__b-row row">
            <div class="col-sm-6 col-lg-3 col-xl-6">
              <div class="sKnow__card">
                <div class="sKnow__c-ball">
                  <!-- picture-->
                  <picture class="sKnow__c-img">
                    <source type="image/webp" srcset="img/@2x/webp/sKnow-card-img-1.webp"/><img src="img/@2x/sKnow-card-img-1.jpg" alt="" loading="lazy"/>
                  </picture>
                  <!-- /picture-->
                </div>
                <div class="sKnow__c-txt">
                  Расчет стоимости
                  <br class="d-none d-xxl-block"/>в 2х ценовых вариантах.
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 col-xl-6">
              <div class="sKnow__card">
                <div class="sKnow__c-ball">
                  <!-- picture-->
                  <picture class="sKnow__c-img">
                    <source type="image/webp" srcset="img/@2x/webp/sKnow-card-img-2.webp"/><img src="img/@2x/sKnow-card-img-2.jpg" alt="" loading="lazy"/>
                  </picture>
                  <!-- /picture-->
                </div>
                <div class="sKnow__c-txt">
                  Выезд замерщика
                  <br class="d-none d-xxl-block"/>и разработка проекта.
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-xl-12">
              <div class="sKnow__baner">
                <!-- picture-->
                <picture class="sKnow__b-img">
                  <source type="image/webp" srcset="img/@2x/webp/sKnow-baner-img.webp"/><img src="img/@2x/sKnow-baner-img.png" alt="" loading="lazy"/>
                </picture>
                <!-- /picture-->
                <div class="sKnow__b-content">
                  <div class="sKnow__b-ball">
                    <div class="sKnow__discont-txt">Ваша скидка
                    </div>
                    <div class="sKnow__discont-val">5%
                    </div>
                  </div>
                  <div class="sKnow__b-txt">С каждым отвеченным вопросом Вы экономите время специалистов, и получаете скидку.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  return ob_get_clean();
}