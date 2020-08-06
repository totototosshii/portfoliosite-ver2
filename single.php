<?php get_header(); ?>

  <!-- ファーストビュー -->
  <div class="fv">
    <div class="fv-title-wrapper">
      <h2 class="site-title">Toshiki Portfolio</h2><!-- /.site-title -->
      <p class="sub-title">- Product -</p><!-- /.sub-title -->
    </div><!-- /.fv-title-wrapper -->
  </div><!-- /.fv -->

  <main>
    <!-- メインコンテンツ -->
    <section class="section">
      <!-- 投稿があればsection-innerブロック以下を表示 -->
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : ?>
          <?php the_post(); ?>
          <div class="section-inner">
            <h2 class="section-title"><?php the_title(); ?></h2><!-- /.section-title -->
            <?php the_content(); ?>
          </div><!-- /.section-inner -->
        <?php endwhile; ?>
      <?php endif; ?>
    </section><!-- /.section -->

    <!-- contact -->
    <?php get_template_part('template-parts/contact-section'); ?>
  </main>

<?php get_footer(); ?>
