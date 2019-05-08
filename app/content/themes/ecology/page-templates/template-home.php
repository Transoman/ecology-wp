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


      <?php endif;

    endwhile;

  else :

    // no layouts found

  endif;

?>

<section class="client">
  <div class="container">
    <h2 class="section-title">Для кого мы работаем</h2>
    <div class="client__wrap">
      <div class="row">
        <div class="col-lg-6">
          <div class="client__item">
            <img src="<?php echo THEME_URL; ?>/images/content/client-1.png" alt="">
            <div class="client__item-content">
              <p class="client__item-title">Рудные</p>
              <span class="client__item-subtitle">месторождения</span>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="client__item">
            <img src="<?php echo THEME_URL; ?>/images/content/client-2.png" alt="">
            <div class="client__item-content">
              <p class="client__item-title">Россыпные</p>
              <span class="client__item-subtitle">месторождения</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container -->
</section>
<!-- /.client -->

<?php get_footer(); ?>
