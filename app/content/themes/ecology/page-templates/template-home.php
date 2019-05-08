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

<?php

  // check if the flexible content field has rows of data
  if( have_rows('home_layout') ):

    // loop through the rows of data
    while ( have_rows('home_layout') ) : the_row();

      if( get_row_layout() == 'services' ): ?>

        <section class="services">
          <div class="container">
            <div class="section-head">
              <h2 class="section-title"><?php the_sub_field('title'); ?></h2>
              <p><?php the_sub_field('descr'); ?></p>
            </div>

            <?php if (have_rows('list')): ?>
              <div class="services-tabs">
                <ul class="services-tabs__list">
                  <?php $i = 0; while (have_rows('list')): the_row(); ?>
                    <li>
                      <a href="#services-<?php echo $i++; ?>"><?php the_sub_field('title'); ?></a>
                    </li>
                  <?php endwhile; ?>
                </ul>
                <?php $j = 0; while (have_rows('list')): the_row(); ?>
                  <div class="services-tabs__item" id="services-<?php echo $j++; ?>">
                    <?php if (have_rows('list_item')): ?>
                      <div class="row">
                        <?php while (have_rows('list_item')): the_row(); ?>
                          <div class="col-md-6">
                            <div class="services-tabs__wrap">
                              <?php echo wp_get_attachment_image(get_sub_field('icon'), 'thumbnail', false, array('class' => 'services-tabs__icon')); ?>
                              <p><?php the_sub_field('text'); ?></p>
                            </div>
                          </div>
                        <?php endwhile; ?>
                      </div>
                    <?php endif; ?>
                  </div>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>

            <div class="btn-wrap">
              <a href="#" class="btn">Узнать больше</a>
              <span class="btn-descr">Нажмите кнопку, <br>чтобы узнать больше</span>
            </div>

          </div>
          <!-- /.container -->
        </section>
        <!-- /.services -->


      <?php endif;

    endwhile;

  else :

    // no layouts found

  endif;

?>

<section class="s-advantages">
  <div class="container">
    <h2 class="section-title">Почему нам можно доверять?</h2>

    <div class="row">
      <div class="col-md-6 col-lg-4 col-xl-3 advantages">
        <div class="advantages__inner">
          <div class="advantages__icon-wrap">
            <?php hv_the_icon('credit-card', 'advantages__icon'); ?>
            <span class="advantages__number">01</span>
          </div>
          <h3 class="advantages__title">Начало работы без <br>предоплаты</h3>
          <p>Вы ничем не рискуете платите только после того как увидите первые результаты</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 col-xl-3 advantages">
        <div class="advantages__inner">
          <div class="advantages__icon-wrap">
            <?php hv_the_icon('architecture-and-city', 'advantages__icon'); ?>
            <span class="advantages__number">02</span>
          </div>
          <h3 class="advantages__title">Опыт работы с предприятиями горнодобывающего комплекса</h3>
          <p>В команде работают специалисты с опытом работы на крупнейшых горнодобывающих предприятиях</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 col-xl-3 advantages">
        <div class="advantages__inner">
          <div class="advantages__icon-wrap">
            <?php hv_the_icon('file', 'advantages__icon'); ?>
            <span class="advantages__number">03</span>
          </div>
          <h3 class="advantages__title">Справимся с любым объёмом работы</h3>
          <p>Компания имеет более 10 внештатных проектировщиков что помагает обработать большой поток заказов</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 col-xl-3 advantages">
        <div class="advantages__inner">
          <div class="advantages__icon-wrap">
            <?php hv_the_icon('auction', 'advantages__icon'); ?>
            <span class="advantages__number">04</span>
          </div>
          <h3 class="advantages__title">Оплатим ваши штрафы <br>за свой счет</h3>
          <p>Получили штраф по нашей недоработке, мы его оплатим.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
