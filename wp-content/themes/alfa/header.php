<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alfa
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
          <!-- Favicon -->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <?php wp_head(); ?>
 
</head>

<body <?php body_class(); ?>>
    <div class="page">
        <header class="header">
            <div class="container-for-nav"><a class="wrapper-logo" href="<?php is_front_page() ? print '#' : print esc_url( home_url('/') ); ?>"><img src="<?php echo get_field('field_5df3983865ffc', 15); ?>"
                        alt=""></a>
                <div class="wrapper-nav-and-call-us">
                    <nav class="nav-header">
                        <p>Выбирите страницу</p>
                        <div class="burger">
                            <div class="icon-bar-b"></div>
                            <div class="icon-bar-b"></div>
                            <div class="icon-bar-b"></div>
                        </div>
                        <?php 
                            wp_nav_menu( [
                                'theme_location'  => '',
                                'menu'            => 'Меню', 
                                'container'       => '', 
                                'container_class' => '', 
                                'container_id'    => '',
                                'menu_class'      => '', 
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth'           => 0,
                                'walker'          => '',
                            ] );
                        ?>
                    </nav>
                    <div class="wrapper-call-us">
                        <?php
                            $telephoneHead = get_field('field_5df38e4d704b1', 15);
                            $telephoneRepHead = preg_replace('/[^0-9]/', '', $telephoneHead);
                        ?>
                        <p>Звоните нам</p><a href="tel:+<?php echo $telephoneRepHead; ?>"><?php echo $telephoneHead; ?></a>
                    </div>
                </div>
            </div>
        </header>
        <div class="page__content">