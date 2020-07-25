<?php get_header(); ?>

    <main>
      <!-- メインコンテンツ -->
      <section class="section">
        <!-- 投稿があればsection-innerブロック以下を表示 -->
        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : ?>
            <?php the_post(); ?>
            <div class="section-inner">
              <?php the_content(); ?>
            </div><!-- /.section-inner -->
          <?php endwhile; ?>
        <?php endif; ?>
      </section><!-- /.section -->

      <!-- contact -->
      <?php get_template_part('template-parts/contact-section'); ?>
    </main>

<?php get_footer(); ?>
