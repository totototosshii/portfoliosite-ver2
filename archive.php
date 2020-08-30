<?php get_header(); ?>

  <main>
    <!-- メインコンテンツ -->
    <div class="l-section">
      <!-- 絞り込みナビゲーション -->
      <nav class="left-nav">
        <ul class="left-nav-list">
          <li class="left-nav-item"><i class="fas fa-check"></i><a href="<?php echo home_url('/category/all'); ?>">All</a></li><!-- /.left-nav-item -->
          <li class="left-nav-item"><a href="<?php echo home_url('/website'); ?>">WebSite</a></li><!-- /.left-nav-item -->
          <li class="left-nav-item"><a href="<?php echo home_url('/wordpress'); ?>">WordPress</a></li><!-- /.left-nav-item -->
          <li class="left-nav-item"><a href="<?php echo home_url('/other'); ?>">Other</a></li><!-- /.left-nav-item -->
        </ul><!-- /.left-nav-list -->
      </nav><!-- /.left-nav -->

      <section class="section">
        <div class="section-inner">
          <!-- パンくずリスト -->
          <p class="breadcrumbs">
            <a href="<?php echo home_url('/home'); ?>">ホーム</a><i class="fas fa-chevron-right fa-xs"></i>制作実績
          </p>
          <h2 class="section-title">Works</h2><!-- /.section-title -->
          <p class="section-title-ja">− 制作実績一覧 −</p><!-- /.section-title-ja -->
          <div class="section-content">
            <ul class="works-items">
            <?php
              $paged = (int) get_query_var('paged');
              $args = array(
                  'posts_per_page' => 0,
                  'paged' => $paged,
                  'orderby' => 'post_date',
                  'order' => 'DESC',
                  'post_type' => 'post',
                  'post_status' => 'publish'
                );
              $the_query = new WP_Query($args);
              if ( $the_query->have_posts() ) :
                  while ( $the_query->have_posts() ) : $the_query->the_post();
                    get_template_part( 'template-parts/works-list', get_post_format() );
                  endwhile;
              endif;
              wp_reset_postdata();
            ?>
            </ul><!-- /.works-items -->
          </div><!-- /.section-content -->
        </div><!-- /.section-inner -->
      </section><!-- /.section -->
    </div><!-- /.l-section -->

    <!-- contact -->
    <?php get_template_part('template-parts/contact-section'); ?>
  </main>

<?php get_footer(); ?>
