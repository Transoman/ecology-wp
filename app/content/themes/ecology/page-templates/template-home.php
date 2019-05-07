<?php
  /**
   * Template Name: Главная
   */
  get_header(); ?>

<?php

  // check if the flexible content field has rows of data
  if( have_rows('home_layout') ):

    // loop through the rows of data
    while ( have_rows('home_layout') ) : the_row();

      if( get_row_layout() == 'hero' ): ?>

        <section class="hero" style="background-image: url(<?php echo THEME_URL; ?>/images/general/hero.jpg);">
          <div class="container">
            <div class="hero__content">
              <?php the_sub_field('content'); ?>

              <div class="hero__video">
                <img src="<?php echo THEME_URL; ?>/images/general/hero-video.png" alt="">
                <a href="<?php echo esc_url(get_sub_field('link_video')); ?>" class="hero__video-btn" data-fancybox>
                  <?php hv_the_icon('play', 'hero__video-btn-icon'); ?>
                  <span>Узнать все за 120 сек.</span>
                </a>
              </div>

              <div class="btn-wrap">
                <a href="#" class="btn">Узнать больше</a>
                <span class="btn-descr">Нажмите кнопку, <br>чтобы узнать больше</span>
              </div>

            </div>
            <span class="hero-scroll">Листайте вниз</span>
          </div>
        </section>


      <?php elseif( get_row_layout() == 'download' ):

        $file = get_sub_field('file');

      endif;

    endwhile;

  else :

    // no layouts found

  endif;

?>

<?php get_footer(); ?>
