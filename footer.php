<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TwentyTwo
 */

?>
<footer class="footer">
    <div  class="footer__content">
        <div class="footer__content__left">
            <div class="footer__content__left__block-top">
                <img src="<?php bloginfo('template_url'); ?>/images/illustration5.png" alt="" class="footer__content__left__img">
                <p class="footer__content__left__text">
                        <span class="footer__content__left__span">
                            Как с нами связаться
                        </span>
                    <span class="footer__content__left__absolute-text">
                            КОНТАКТЫ
                        </span>
                </p>
            </div>
        </div>
        <div class="footer__content-right">
            <div class="wrapper-phone">
                <img src="<?php bloginfo('template_url'); ?>/images/telephone.png" alt="" class="phone-img">
                <span class="number">
                            +375 000 00 00 00
                        </span>
            </div>
            <div class="wrapeer-email">
                <img src="<?php bloginfo('template_url'); ?>/images/email.png" alt="" class="email-img">
                <span class="email">
                            email@gmail.com
                        </span>
            </div>
        </div>
    </div>
    <div class="footer__content-block" id="footerContent">
        <div class="footer__content-block__left">
            <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="" class="logo">
        </div>
        <div class="footer__content-block__right">
            <a id="write-us-button" href="" class="button-more">
                Написать нам
            </a>
            <ul class="social-ul">
                <li><a href="" class="vk-icon"></a></li>
                <li><a href="" class="facebook-icon"></a></li>
                <li><a href="" class="inst-icon"></a></li>
            </ul>
        </div>
    </div>
</footer>
<div id='popupPortfolio' class="main__bottom__wrapper-portfolio-content__item__popup none">
    <div class="popup__header">
                                    <span id="jobTitle" class="name__portfolio">
                                        Название работы
                                    </span>
        <span id="jobText" class="popup__about__portfolio"></span>
        <img id="closePopup" src="<?php bloginfo('template_url'); ?>/images/close.png" class="close__popup">
    </div>
    <img id="jobImg" src="<?php bloginfo('template_url'); ?>/images/popup.png" class="image__portfolio">
</div>
<div id="write-us" class="write-us none">
    <img id="closePopup-write-us" src="<?php bloginfo('template_url'); ?>/images/close.png" class="close__popup">
    <h3 class="write-us-h3">
        Напиши нам
    </h3>
    <span class="explanation">
                Отправьте нам сообщение и наш менеджер
                свяжеться с Вами в ближайшее время!
            </span>
    <form action="" class="form-write-us">
        <div class="wrapper-name">
            <img src="<?php bloginfo('template_url'); ?>/images/avatar-inside-a-circle.png" alt="">
            <input type="text" class="input-style" placeholder="Ваше имя">
        </div>
        <div class="wrapper-telephone">
            <img src="<?php bloginfo('template_url'); ?>/images/telephone2.png" alt="">
            <input type="text" class="input-style" placeholder="Телефон">
        </div>
        <div class="wrapper-email">
            <img src="<?php bloginfo('template_url'); ?>/images/email1.png" alt="">
            <input type="text" class="input-style" placeholder="Email">
        </div>
        <div class="wrapper-textarea">
            <img src="<?php bloginfo('template_url'); ?>/images/edit.png" alt="">
            <textarea name="" id="" cols="60" rows="5" placeholder="Ваше сообщение" class="textarea-input">

                    </textarea>
        </div>
        <input type="submit" class="button-more" value="Обсудить проект">
        <div class="figure_4"></div>
        <img src="<?php bloginfo('template_url'); ?>/images/illustration88.png" alt="" class="illustration88">
    </form>
</div>
<div id="project-application" class="write-us none">
    <img id="close-project-application" src="<?php bloginfo('template_url'); ?>/images/close.png" class="close__popup">
    <h3 class="write-us-h3">
        Оставьте заявку на проект!
    </h3>
    <form action="" class="form-write-us">
        <div class="wrapper-name">
            <img src="<?php bloginfo('template_url'); ?>/images/avatar-inside-a-circle.png" alt="">
            <input type="text" class="input-style" placeholder="Ваше имя">
        </div>
        <div class="wrapper-telephone">
            <img src="<?php bloginfo('template_url'); ?>/images/telephone2.png" alt="">
            <input type="text" class="input-style" placeholder="Телефон">
        </div>
        <div class="wrapper-email">
            <img src="<?php bloginfo('template_url'); ?>/images/email1.png" alt="">
            <input type="text" class="input-style" placeholder="Email">
        </div>
        <div class="wrapper-textarea">
            <img src="<?php bloginfo('template_url'); ?>/images/edit.png" alt="">
            <textarea name=""  cols="60" rows="5" placeholder="Ваше сообщение" class="textarea-input">

                    </textarea>
        </div>
        <input type="submit" class="button-more" value="Обсудить проект">
        <div class="figure_4"></div>
        <img src="<?php bloginfo('template_url'); ?>/images/illustration66.png" alt="" class="illustration88">
    </form>
</div>
<div id="overlay" class="overlay none" ></div>
</div>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/common.js"></script>
</body>
</html>
