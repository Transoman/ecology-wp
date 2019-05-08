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


<?php

  // check if the flexible content field has rows of data
  if( have_rows('home_layout') ):

    // loop through the rows of data
    while ( have_rows('home_layout') ) : the_row();

      if( get_row_layout() == 'lab' ): ?>

        <section class="lab">
          <div class="container">
            <div class="section-head">
              <h2 class="section-title"><?php the_sub_field('title'); ?></h2>
              <?php the_sub_field('descr'); ?>
            </div>

            <div class="lab__wrap">
              <div class="lab__img lab__img--1">
                <a href="<?php echo wp_get_attachment_image_url(get_sub_field('img_1'), 'full'); ?>" data-fancybox="group">
                  <?php echo wp_get_attachment_image(get_sub_field('img_1'), 'large'); ?>
                </a>
              </div>
              <div class="lab__img">
                <a href="<?php echo wp_get_attachment_image_url(get_sub_field('img_2'), 'full'); ?>" data-fancybox="group">
                  <?php echo wp_get_attachment_image(get_sub_field('img_2'), 'large'); ?>
                </a>
              </div>
            </div>

          </div>
          <!-- /.container -->
        </section>
        <!-- /.lab -->


      <?php endif;

    endwhile;

  else :

    // no layouts found

  endif;

?>

<section class="stages" style="background-image: url(<?php echo THEME_URL; ?>/images/general/stages-bg.jpg);">
  <div class="container clearfix">
    <div class="stages__wrap">
      <h2 class="section-title">Этапы работы</h2>
      
      <div class="stages-tabs">
        <ul class="stages-tabs__list">
          <li><a href="#stage-1">1. 5 минут</a></li>
          <li><a href="#stage-2">2. Оценка объёмов работы</a></li>
          <li><a href="#stage-3">3. Коммерческое предложение</a></li>
          <li><a href="#stage-4">4. Договор</a></li>
          <li>
            <a href="#stage-5">5. Инвентаризация
              <span class="stages-tabs__list-label">Первый авансовый платеж
                <?php hv_the_icon('ruble'); ?>
              </span>
            </a>
          </li>
          <li><a href="#stage-6">6. Разработка Проекта</a></li>
          <li>
            <a href="#stage-7">7. Согласование Проекта <br>с заказчиком
              <span class="stages-tabs__list-label">Второй авансовый платеж
                <?php hv_the_icon('ruble'); ?>
              </span>
            </a>
          </li>
          <li><a href="#stage-8">8. Получаем разрешительный <br>документ</a></li>
        </ul>

        <div class="stages-tabs__item" id="stage-1">
          <div class="stages-tabs__img-wrap">
            <img src="<?php echo THEME_URL; ?>/images/content/stage-2.jpg" alt="">
            <div class="stages-tabs__icon-wrap">
              <?php hv_the_icon('checklist', 'stages-tabs__icon'); ?>
            </div>
          </div>
          <h3 class="stages-tabs__title">1. 5 минут</h3>
          <p>Оставите заявку и мы вам перезвоним.</p>
          <p>Либо звоните бесплатно по тел. <br><a href="tel:88002506774">8 (800) 250-67-74</a></p>
          <a href="#" class="btn callback_open">Заказать звонок</a>
        </div>

        <div class="stages-tabs__item" id="stage-2">
          <div class="stages-tabs__img-wrap">
            <img src="<?php echo THEME_URL; ?>/images/content/stage-2.jpg" alt="">
            <div class="stages-tabs__icon-wrap">
              <?php hv_the_icon('checklist', 'stages-tabs__icon'); ?>
            </div>
          </div>
          <h3 class="stages-tabs__title">2. Оценка объёмов работы</h3>
          <p>На этом этапе мы вышлем вам на электронную почту опросный лист для заполнения</p>
        </div>

        <div class="stages-tabs__item" id="stage-3">
          <div class="stages-tabs__img-wrap">
            <img src="<?php echo THEME_URL; ?>/images/content/stage-2.jpg" alt="">
            <div class="stages-tabs__icon-wrap">
              <?php hv_the_icon('checklist', 'stages-tabs__icon'); ?>
            </div>
          </div>
          <h3 class="stages-tabs__title">3. Коммерческое предложение</h3>
          <p>На этом этапе мы готовим КП и согласовываем с вами объёмы и условия работы</p>
        </div>

        <div class="stages-tabs__item" id="stage-4">
          <div class="stages-tabs__img-wrap">
            <img src="<?php echo THEME_URL; ?>/images/content/stage-2.jpg" alt="">
            <div class="stages-tabs__icon-wrap">
              <?php hv_the_icon('checklist', 'stages-tabs__icon'); ?>
            </div>
          </div>
          <h3 class="stages-tabs__title">4. Договор</h3>
          <p>Готовим договор и подписываем. Оригинал договора направляем курьером за наш счет.</p>
        </div>

        <div class="stages-tabs__item" id="stage-5">
          <div class="stages-tabs__img-wrap">
            <img src="<?php echo THEME_URL; ?>/images/content/stage-2.jpg" alt="">
            <div class="stages-tabs__icon-wrap">
              <?php hv_the_icon('checklist', 'stages-tabs__icon'); ?>
            </div>
          </div>
          <h3 class="stages-tabs__title">5. Инвентаризация</h3>
          <p>Готовим отчет по инвентаризации, согласовываем с вами.</p>
        </div>

        <div class="stages-tabs__item" id="stage-6">
          <div class="stages-tabs__img-wrap">
            <img src="<?php echo THEME_URL; ?>/images/content/stage-2.jpg" alt="">
            <div class="stages-tabs__icon-wrap">
              <?php hv_the_icon('checklist', 'stages-tabs__icon'); ?>
            </div>
          </div>
          <h3 class="stages-tabs__title">6. Разработка проекта</h3>
        </div>

        <div class="stages-tabs__item" id="stage-7">
          <div class="stages-tabs__img-wrap">
            <img src="<?php echo THEME_URL; ?>/images/content/stage-2.jpg" alt="">
            <div class="stages-tabs__icon-wrap">
              <?php hv_the_icon('checklist', 'stages-tabs__icon'); ?>
            </div>
          </div>
          <h3 class="stages-tabs__title">7. Согласование проекта с заказчиком</h3>
        </div>

        <div class="stages-tabs__item" id="stage-8">
          <div class="stages-tabs__img-wrap">
            <img src="<?php echo THEME_URL; ?>/images/content/stage-2.jpg" alt="">
            <div class="stages-tabs__icon-wrap">
              <?php hv_the_icon('checklist', 'stages-tabs__icon'); ?>
            </div>
          </div>
          <h3 class="stages-tabs__title">8. Получаем разрешительный документ</h3>
          <p>На этом этапе мы через портал гос.услуги либо лично направляем проект на согласование в соответствующие инстанции</p>
        </div>

      </div>
    </div>
  </div>
  <!-- /.container -->
</section>
<!-- /.stages -->

<?php get_footer(); ?>
