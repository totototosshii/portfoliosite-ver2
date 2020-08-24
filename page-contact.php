<!--
Template Name: お問い合わせ
-->
<?php get_header(); ?>
  <!-- ファーストビュー -->
  <div class="fv">
    <div class="fv-title-wrapper">
      <h2 class="site-title">Toshiki Portfolio</h2><!-- /.site-title -->
      <p class="sub-title">- Contact -</p><!-- /.sub-title -->
    </div><!-- /.fv-title-wrapper -->
  </div><!-- /.fv -->

  <main>
    <section class="section">
      <div class="section-inner">
        <h3 class="section-title">Contact</h3><!-- /.section-title -->
        <p class="section-title-ja">− お問い合わせ −</p><!-- /.section-title-ja -->
        <div class="section-content">
          <p class="contact-read">
            制作のご依頼やご相談(無料)など、お気軽にご連絡ください。
          </p><!-- /.contact-read -->
          <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : ?>
              <?php the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div><!-- /.section-content -->
      </div><!-- /.section-inner -->
    </section><!-- /.section -->
  </main>

<?php get_footer(); ?>
