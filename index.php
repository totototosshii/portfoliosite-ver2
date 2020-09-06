<?php get_header(); ?>

  <!-- ファーストビュー -->
  <div class="fv">
    <div class="fv-title-wrapper">
      <h2 class="site-title">Toshiki Portfolio</h2><!-- /.site-title -->
      <p class="sub-title">- Web Production -</p><!-- /.sub-title -->
    </div><!-- /.fv-title-wrapper -->
    <div class="arrows">
      <div class="arrow arrowfirst"></div><!-- /.arrow -->
      <div class="arrow arrowsecond"></div><!-- /.arrow -->
    </div><!-- /.arrows -->
  </div><!-- /.fv -->

  <main>
    <!-- メインコンテンツ -->
    <section class="section">
      <div class="section-inner">
        <h3 class="section-title">About</h3><!-- /.section-title -->
        <p class="section-title-ja">− 私について −</p><!-- /.section-title-ja -->
        <div class="section-content">
          <figure class="about-img">
            <img src="<?php echo esc_url(get_theme_file_uri('images/pr.png')); ?>" alt="サイトの制作者が森の中で立っている">
          </figure><!-- /.about-img -->
          <div class="about-content">
            <p class="about-message">
              <!-- ACFの投稿 -->
              <?php the_field('home_message'); ?>
            </p><!-- /.about-message -->
            <a href="<?php echo home_url('/about'); ?>" class="el_linkBtn">
              <i class="fas fa-arrow-right"></i>
                プロフィールを見る
            </a><!-- /.el_linkBtn -->
          </div><!-- /.about-content -->
        </div><!-- /.section-content -->
      </div><!-- /.section-inner -->
    </section><!-- /.section -->

    <section class="section">
      <div class="section-inner">
        <h3 class="section-title">Works</h3><!-- /.section-title -->
        <p class="section-title-ja">− 制作実績 −</p><!-- /.section-title-ja -->
        <div class="section-content">
          <ul class="works-items">
            <!-- pickup -->
            <?php get_template_part('template-parts/pickup-tag'); ?>
          </ul><!-- /.works-items -->
          <a href="<?php echo home_url('/category/all'); ?>" class="el_linkBtn">
            <i class="fas fa-arrow-right"></i>
            制作実績一覧
          </a><!-- /.el_linkBtn -->
        </div><!-- /.section-content -->
      </div><!-- /.section-inner -->
    </section><!-- /.section -->

    <section class="section">
      <div class="section-inner">
        <h3 class="section-title">Service</h3><!-- /.section-title -->
        <p class="section-title-ja">− 私に出来ること −</p><!-- /.section-title-ja -->
        <div class="section-content">
          <div class="service-menu">
            <figure class="service-menu-icon">
              <img src="<?php echo esc_url(get_theme_file_uri('images/design.png')); ?>" alt="デザインのアイコン">
            </figure><!-- /.service-menu-icon -->
            <h3 class="service-title">Design</h3><!-- /.service-title -->
            <p class="service-text">
              <!-- ACFの投稿 -->
              <?php the_field('home_design'); ?>
            </p><!-- /.service-text -->
          </div><!-- /.service-menu -->
          <div class="service-menu">
            <figure class="service-menu-icon">
              <img src="<?php echo esc_url(get_theme_file_uri('images/code.png')); ?>" alt="コーディングアイコン">
            </figure><!-- /.service-menu-icon -->
            <h3 class="service-title">Coding</h3><!-- /.section-title -->
            <p class="service-text">
              <!-- ACFの投稿 -->
              <?php the_field('home_coding'); ?>
            </p><!-- /.service-text -->
          </div><!-- /.service-menu -->
          <div class="service-menu">
            <figure class="service-menu-icon">
              <img src="<?php echo esc_url(get_theme_file_uri('images/wordpress.png')); ?>" alt="WordPressのロゴ">
            </figure><!-- /.service-menu-icon -->
            <h3 class="service-title">WordPress</h3><!-- /.section-title -->
            <p class="service-text">
              <!-- ACFの投稿 -->
              <?php the_field('home_wordpress'); ?>
            </p><!-- /.service-text -->
          </div><!-- /.service-menu -->
        </div><!-- /.section-content -->
      </div><!-- /.section-inner -->
    </section><!-- /.section -->

    <!-- contact -->
    <?php get_template_part('template-parts/contact-section'); ?>
  </main>

<?php get_footer(); ?>
