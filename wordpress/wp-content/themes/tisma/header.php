<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tisma
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="profile" href="https://gmpg.org/xfn/11">

  <link type="image/ico" href="img/favicon.ico" rel="shortcut icon"><meta name="format-detection" content="telephone=no"> <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

  <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
  $get_template_directory_uri=get_template_directory_uri();

  //
  $menu_args = array(
    'menu' => 'main_menu',
    'theme_location' => '',
    'menu_class' => 'navMenu',
    'add_li_class'  => 'navMenu__item',

    'depth'	=> 1,
    'fallback_cb' => false
  );

  //
  $tel = get_field('телефон00', 'option');
  $tel_str = preg_replace("/[^0-9]/", "", $tel);
?>
<div class="main-wrapper">
  <div class="menu-mobile menu-mobile--js d-xl-none">
    <div class="toggle-menu-mobile toggle-menu-mobile--js"><span></span>
    </div>
    <div class="menu-mobile__inner">
      <a class="menu-mobile__logo" href="#">
        <img loading="lazy" src="<?php echo the_field('логотип00', 'option'); ?>" alt=""/>
      </a>
      <?php
        wp_nav_menu($menu_args);
      ?>
      <a class="menu-mobile__tell mt-auto" href="tel:+<?php echo $tel_str;?>">
        <?php echo $tel;?>
      </a>
      <div class="menu-mobile__shedule">
        <?php echo the_field('график_роботы00', 'option'); ?>
      </div>
    </div>
  </div>
  <!-- start top-nav-->
  <div class="top-nav block-with-lazy" style="top: 35px">
    <div class="top-nav__container container">
      <div class="top-nav__row row align-items-center">
        <div class="col col-md-auto">
          <a class="top-nav__logo" href="#">
            <img loading="lazy" src="<?php echo the_field('логотип00', 'option'); ?>" alt=""/>
          </a>
        </div>
        <div class="col col-xl-auto d-none d-md-block">
          <div class="top-nav__txt-box">
            <?php echo the_field('текст_при_логотипе00', 'option'); ?>
          </div>
        </div>
        <div class="col d-none d-xl-block">
          <?php
            wp_nav_menu($menu_args);
          ?>
        </div>
        <div class="col-auto d-none d-sm-block">
          <a class="top-nav__tell" href="tel:+<?php echo $tel_str;?>">
            <?php echo $tel;?>
          </a>
          <div class="top-nav__shedule">
            <?php echo the_field('график_роботы00', 'option'); ?>
          </div>
        </div>
        <div class="col-auto">
          <div class="top-nav__btn tn-contact-btn-js">
            <svg class="icon icon-circle-icon ">
              <use xlink:href="<?php echo $get_template_directory_uri;?>/public/img/svg/sprite.svg#circle-icon"></use>
            </svg>
          </div>
        </div>
        <div class="col-auto d-xl-none">
          <div class="toggle-menu-mobile toggle-menu-mobile--js"><span></span>
          </div>
        </div>
      </div>
      <div class="top-nav__btns-cont tn-contacts-js">
        <div class="top-nav__b-row row">
          <div class="col-auto">
            <a class="top-nav__b-btn" href="#">
              <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/svg/top-nav-tell.svg" alt=""/>
            </a>
          </div>
          <div class="col-auto">
            <a class="top-nav__b-btn" href="#">
              <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/svg/tabs-wa.svg" alt=""/>
            </a>
          </div>
          <div class="col-auto">
            <a class="top-nav__b-btn" href="#">
              <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/svg/tabs-vb.svg" alt=""/>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end top-nav-->