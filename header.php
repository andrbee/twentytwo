<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TwentyTwo
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="<?php bloginfo('template_url'); ?>/style/common.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/style/fonts.css" rel="stylesheet">
<!--	--><?php //wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php $postid = 9; // Home page ?>
<div id="wrapper" class="wrapper">
    <header class="header">
        <div id="headerTop" class="header__top">
            <img id="gamburger" src="<?php bloginfo('template_url'); ?>/images/menu.png" alt="" class="menu-mobile-img">
            <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="" class="logo">
            <nav id="nav" class="nav">
                <ul class="nav__ul">
                    <li class="nav__ul-li">
                        <a id="buttonAboutStudioNav" href="#aboutStudio"><?php echo get_field('header_link_about', $postid);?></a>
                    </li>
                    <li class="nav__ul-li">
                        <a id="mainBottomNav" href="#mainBottom"><?php echo get_field('header_link_portfolio', $postid);?></a>
                    </li>
                    <li class="nav__ul-li">
                        <a id="footerContentNav" href="#footerContentNav"><?php echo get_field('header_link_contacts', $postid);?></a>
                    </li>
                </ul>
            </nav>
        </div>
        <span class="watermark"><?php echo get_field('header_mini_blockquote', $postid);?></span>
        <div class="header__bottom">
            <img src="<?php bloginfo('template_url'); ?>/images/illustration1.png" alt="" class="illustration-one">
            <div class="header__content">
                <h3 class="header__h3 header__h3-complex">
                        <span>
                            <?php echo strip_tags(get_the_title($postid));?>
                        </span>
                </h3>
                <span class="header__content-text">
                        <?php
                            $content_post = get_post($postid);
                            $content = $content_post->post_content;
                            $content = apply_filters('the_content', $content);
                            $content = str_replace(']]>', ']]&gt;', $content);
						    echo strip_tags($content);
                        ?>
                    </span>
                <a  id="buttonOrder" class="button-more _m-b-x modif-more"><?php echo get_field('header_button', $postid);?></a>
            </div>
            <img src="<?php bloginfo('template_url'); ?>/images/illustration2.png" alt="" class="illustration-two">
        </div>
    </header>

