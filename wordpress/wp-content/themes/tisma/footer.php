<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tisma
 */
?>
<?php
  $get_template_directory_uri=get_template_directory_uri();
?>
      <footer class="footer">
    <div class="footer__top">
      <div class="container">
        <div class="footer__main-row row gy-4">
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="footer__logo">
              <img loading="lazy" src="<?php echo the_field('логотип00', 'option'); ?>" alt=""/>
            </div>
            <div class="footer__logo-txt">
              <?php echo the_field('текст_при_логотипе00', 'option'); ?>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 text-sm-end text-lg-start">
            <?php
            $tel = get_field('телефон00', 'option');
            $tel_str = preg_replace("/[^0-9]/", "", $tel);
            ?>
            <a class="footer__number" href="tel:+<?php echo $tel_str;?>">
              <?php echo $tel;?>
            </a>
            <div class="footer__shedule">
              <?php echo the_field('график_роботы00', 'option'); ?>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="footer__plate">
              <div class="footer__p-row row gy-3 align-items-center">
                <div class="col-auto">
                  <div class="footer__ball">
                    <svg class="icon icon-f-mail ">
                      <use xlink:href="<?php echo $get_template_directory_uri;?>/public/img/svg/sprite.svg#f-mail"></use>
                    </svg>
                  </div>
                </div>
                <div class="col">
                  <a class="footer__mail" href="mailto:<?php echo the_field('email', 'option'); ?>">
                    <?php echo the_field('email', 'option'); ?>
                  </a>
                </div>
              </div>
            </div>
            <div class="footer__plate">
              <div class="footer__p-row row gy-3 align-items-center">
                <div class="col-auto">
                  <div class="footer__ball">
                    <svg class="icon icon-f-location ">
                      <use xlink:href="<?php echo $get_template_directory_uri;?>/public/img/svg/sprite.svg#f-location"></use>
                    </svg>
                  </div>
                </div>
                <div class="col">
                  <div class="footer__address-txt">
                    <?php echo the_field('адресс00', 'option'); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-12 col-xl-3">
            <div class="footer__soc-parent-row row">
              <div class="col-sm-12 col-lg col-xl-12">
                <div class="footer__soc-row row gy-3 justify-content-sm-end justify-content-lg-start justify-content-xl-end">
                  <?php if (have_rows('соц_ссилки_футер00', 'option')): while (have_rows('соц_ссилки_футер00', 'option')) : the_row(); ?>
                    <div class="col-auto">
                      <a class="footer__soc-link" href="<?php echo the_sub_field('ссылка00'); ?>" target="_blank">
                        <img loading="lazy" src="<?php echo the_sub_field('иконка00'); ?>" alt=""/>
                      </a>
                    </div>
                  <?php endwhile; else : endif; ?>
                </div>
              </div>
              <div class="col-sm-12 col-lg-auto col-xl-12">
                <div class="footer__dev-row row">
                  <div class="col-auto col-sm">
                    <div class="footer__d-txt">Разработка и<br/>продвижение сайта
                    </div>
                  </div>
                  <div class="col col-sm-auto">
                    <a class="footer__dev-logo" href="#">
                      <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/svg/developers-logo.svg" alt=""/>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__bot">
      <div class="container">
        <div class="footer__b-row row gy-3">
          <div class="col-auto">
            <a class="footer__b-link" href="#">Политика конфиденциальности</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
    </div>
    <div class="modal-win" id="modal-call" style="display: none">
    <div class="form-wrap">
      <form>
        <div class="form-wrap__title">Как вам удобно получить консультацию и материалы?
        </div>
        <div class="tabs">
          <div class="tabs__caption row gy-2">
            <div class="col-sm-4">
              <div class="form-wrap__tab-btn tabs__btn active">
                <div class="form-wrap__t-icon"><img loading="lazy" src="img/svg/tabs-tell.svg" alt=""/>
                </div>
                <div class="form-wrap__t-txt">По телефону
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-wrap__tab-btn tabs__btn">
                <div class="form-wrap__t-icon"><img loading="lazy" src="img/svg/tabs-wa.svg" alt=""/>
                </div>
                <div class="form-wrap__t-txt">WhatsApp
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-wrap__tab-btn tabs__btn">
                <div class="form-wrap__t-icon"><img loading="lazy" src="img/svg/tabs-vb.svg" alt=""/>
                </div>
                <div class="form-wrap__t-txt">Viber
                </div>
              </div>
            </div>
          </div>
          <div class="tabs__wrap">
            <div class="tabs__content active">
              <div class="form-wrap__input-wrap form-group"><input class="form-wrap__input form-control" name="" type="text" placeholder="Введите Ваше имя"/>
                <div class="form-wrap__icon"><img loading="lazy" src="img/name-inp-icon2.png" alt=""/>
                </div>
              </div>
              <div class="form-wrap__input-wrap form-group mb-32"><input class="form-wrap__input form-control" name="" type="tel" placeholder="+7 (900) 000-00-00"/>
                <div class="form-wrap__icon"><img loading="lazy" src="img/svg/inp-flag2.svg" alt=""/>
                </div>
              </div>
            </div>
            <div class="tabs__content">
              <div class="form-wrap__input-wrap form-group"><input class="form-wrap__input form-control" name="" type="text" placeholder="Введите Ваше имя"/>
                <div class="form-wrap__icon"><img loading="lazy" src="img/name-inp-icon2.png" alt=""/>
                </div>
              </div>
              <div class="form-wrap__input-wrap form-group mb-32"><input class="form-wrap__input form-control" name="" type="tell" placeholder="+7 (900) 000-00-00"/>
                <div class="form-wrap__icon"><img loading="lazy" src="img/svg/tabs-wa.svg" alt=""/>
                </div>
              </div>
            </div>
            <div class="tabs__content">
              <div class="form-wrap__input-wrap form-group"><input class="form-wrap__input form-control" name="" type="text" placeholder="Введите Ваше имя"/>
                <div class="form-wrap__icon"><img loading="lazy" src="img/name-inp-icon2.png" alt=""/>
                </div>
              </div>
              <div class="form-wrap__input-wrap form-group mb-32"><input class="form-wrap__input form-control" name="" type="tell" placeholder="+7 (900) 000-00-00"/>
                <div class="form-wrap__icon"><img loading="lazy" src="img/svg/tabs-vb.svg" alt=""/>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="form-wrap__btn-cont text-center">
          <button class="form-wrap__btn" type="submit">отправить заявку
          </button>
          <div class="form-wrap__polite">
            Нажимая на кнопку, вы даете согласие на
            <br/>обработку
            <a href="#">персональных данных.</a>
          </div>
        </div>
      </form>
    </div>
  </div>
    <?php wp_footer(); ?>
  </body>
</html>
