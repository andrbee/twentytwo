<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TwentyTwo
 */

?>
<main class="main">
    <div  class="main__top">
        <div class="main__top-services">
			<?php $rows = get_field('site_types');
			if($rows) {
				foreach($rows as $row) {?>
                    <div class="main__top-services__item">
                        <img src="<?php echo $row['site_type_icon']; ?>" alt="" class="main__top-services__item-img">
                        <span class="main__top-services__item-img-caption"><?php echo $row['site_type_name']; ?></span>
                    </div>
				<?php }
			}?>
        </div>
        <div class="main__top-content">
            <div class="main__top-content-left">
                        <span class="main__top-content-left__text-top"><?php echo get_field('site_blockquote', $postid);?></span>
                <span class="opacity-text-one"><?php echo get_field('site_count_agencies', $postid);?>+</span>
                <span class="main__top-content-left__text-bottom"><?php echo get_field('site_agencies_desc', $postid);?></span>
            </div>
            <div class="figure"></div>
            <div class="main__top-content-right">
                <p class="main__top-content-right-text"><?php echo get_field('site_blockquote_desc', $postid);?>
                    <img src="<?php bloginfo('template_url'); ?>/images/f3.png" class="f3">
                </p>
            </div>
        </div>
    </div>
    <div class="main__middle">
        <div class="main__middle-content__part-1">
            <div class="main__middle-content__part-1__left">
                <div class="main__middle-content__part-1__left__content-top">
					<?php $rows = get_field('how_work_stages');
					if($rows) {
						foreach($rows as $row) {?>
                            <div class="main__middle-content__part-1__left__content-top-item">
                                <img src="<?php echo $row['how_work_stage_icon']; ?>" alt="" class="main__middle-content__part-1__left__content-top-img">
                                <span class="main__middle-content__part-1__left__content-top-img-caption"><?php echo $row['how_work_stage_title']; ?></span>
                            </div>
						<?php }
					}?>
                </div>
                <div class="main__middle-content__part-1__left__content-bottom">
                            <span class="main__middle-content__part-1__left__content-bottom-text"><?php echo get_field('how_work_more', $postid);?></span>
                    <span class="text70"><?php echo get_field('how_work_more_procent', $postid);?>%</span>
                </div>
            </div>
            <div class="main__middle-content__part-1__right">
                <h3 class="main__middle-content__part-1__right__h3"><?php echo get_field('how_work_emphasis_title', $postid);?></h3>
                <p class="main__middle-content__part-1__right__p"><?php echo get_field('how_work_emphasis_desc', $postid);?></p>
                <img src="<?php bloginfo('template_url'); ?>/images/illustration3.png" class="" alt="">
            </div>
        </div>
        <div class="main__middle-content__part-1__left__content-bottom main__middle-content__part-1__left__content-bottom-media">
                            <span class="main__middle-content__part-1__left__content-bottom-text"><?php echo get_field('how_work_more', $postid);?></span>
            <span class="text70"><?php echo get_field('how_work_more_procent', $postid);?>%</span>
        </div>
        <div id="aboutStudio" class="main__middle-content__part-2">
            <span class="about-studio"><?php echo get_field('about_title', $postid);?></span>
            <span class="who-are-we"><?php echo get_field('about_sub_title', $postid);?></span>
            <p class="main__middle-content__part-2__text"><?php echo get_field('about_desc', $postid);?></p>
            <div class="figure-2"></div>
            <div class="we">
                <?php $rows = get_field('about_team');
                    if($rows) {
	                    foreach($rows as $row) {?>
                <div class="we__item">
                    <img src="<?php echo $row['about_team_photo']; ?>" alt="" class="we__item-img">
                    <span class="fio"><?php echo $row['about_team_fio']; ?></span>
                    <span class="we__item-position"><?php echo $row['about_team_position']; ?></span>
                </div>
                <?php }
                    }?>
            </div>
            <div class="main__middle-content__part-2__bottom-block">
                <img src="<?php bloginfo('template_url'); ?>/images/illustration4.png" alt="" class="main__middle-content__part-2__img">
                <div class="wrapper-main__middle-content__part-2__content">
                    <div class="main__middle-content__part-2__content">
                            <span class="main__middle-content__part-2__content__text-top"><?php echo get_field('goal_title', $postid);?></span>
                        <span class="main__middle-content__part-2__content__text-bottom"><?php echo get_field('goal_order_title', $postid);?></span>
                        <span class="main__middle-content__part-2__content__text-absolute"><?php echo get_field('goal_bit_blockquote', $postid);?></span>
                    </div>
                    <img src="<?php bloginfo('template_url'); ?>/images/arrow.png" alt="" class="arrow">
                    <a id="project-application-button" href="" class="button-more"><?php echo get_field('goal_order_button', $postid);?></a>
                </div>
            </div>
        </div>
    </div>
    <div  class="main__bottom">
        <div id="mainBottom" class="main__bottom__wrapper-portfolio">
            <div id="portfolioContent" class="main__bottom__wrapper-portfolio-content">
				<?php
				$images = get_field('portfolio');
				if( $images ): ?>
						<?php foreach( $images as $image ): ?>
                        <div class="main__bottom__wrapper-portfolio-content__item">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="main__bottom__wrapper-portfolio-content__item-img">
                            <button data-name="<?php echo $image['title']; ?>" data-text-about="<?php echo $image['description']; ?>" data-href-image="<?php echo $image['url']; ?>" class="main__bottom__wrapper-portfolio-content__item-href"><?php echo $image['title']; ?></button>
                        </div>
						<?php endforeach; ?>
				<?php endif; ?>
            </div>
            <span class="i-text">Понимать бизнес и рынок для которого мы разрабатываем проекты - наш приоритет.</span>
            <button id="showAll" class="show-all">Все работы</button>
        </div>
    </div>
</main>