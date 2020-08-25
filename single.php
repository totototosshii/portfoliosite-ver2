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
      <div class="section-inner">
        <h2 class="section-title"><?php the_title(); ?></h2><!-- /.section-title -->
        <!-- ACFの投稿 -->
        <?php
          $img = get_field('repeat_img');
          $alt= $img['alt'];
          $size = 'large'; // (thumbnail, medium, large, fullもしくは追加したサイズ)
          $thumb = $img['sizes'][ $size ];
          if ($img):
        ?>
          <div class="mock-up">
            <img src="<?php echo $thumb; ?>" alt="<?php echo $alt ?>">
          </div><!-- /.mock-up -->
        <?php endif; ?>
        <dl class="section-explanation">
          <dt class="explanation-list">経緯</dt><!-- /.explanation-list -->
          <dd class="explanation-text"><?php the_field('repeat_happened'); ?>
          </dd><!-- /.explanation-text -->
          <dt class="explanation-list">担当範囲</dt><!-- /.explanation-list -->
          <dd class="explanation-text"><?php the_field('repeat_responsibility'); ?></dd><!-- /.explanation-text -->
          <dt class="explanation-list">ページ数</dt><!-- /.explanation-list -->
          <dd class="explanation-text"><?php the_field('repeat_pages'); ?></dd><!-- /.explanation-text -->
          <dt class="explanation-list">レスポンシブ</dt><!-- /.explanation-list -->
          <dd class="explanation-text"><?php the_field('repeat_responsive'); ?></dd><!-- /.explanation-text -->
          <dt class="explanation-list">制作期間</dt><!-- /.explanation-list -->
          <dd class="explanation-text"><?php the_field('repeat_period'); ?></dd><!-- /.explanation-text -->
          <dt class="explanation-list">使用ツール</dt><!-- /.explanation-list -->
          <dd class="explanation-text"><?php the_field('repeat_tools'); ?></dd><!-- /.explanation-text -->
          <dt class="explanation-list">使用言語</dt><!-- /.explanation-list -->
          <dd class="explanation-text"><?php the_field('repeat_language'); ?></dd><!-- /.explanation-text -->
          <dt class="explanation-list">ソースコード</dt><!-- /.explanation-list -->
          <?php
            $code = get_field('repeat_code');
            if($code) :
          ?>
            <dd class="explanation-text"><a href="<?php the_field('repeat_code'); ?>" target="_blank" rel="noopener noreferrer">GitHub<i class="fab fa-github"></i></a></dd><!-- /.explanation-text --></i>
          <?php else : ?>
            <dd class="explanation-text">非公開</dd><!-- /.explanation-text --></i>
          <?php endif; ?>
          <dt class="explanation-list">サイト</dt><!-- /.explanation-list -->
          <?php
            $site = get_field('repeat_site');
            if($site) :
          ?>
            <dd class="explanation-text"><a href="<?php the_field('repeat_site'); ?>" target="_blank" rel="noopener noreferrer">公開中</a></dd><!-- /.explanation-text -->
          <?php else : ?>
            <dd class="explanation-text">非公開</dd><!-- /.explanation-text -->
          <?php endif; ?>
        </dl><!-- /.section-explanation -->
        
        <!-- 通常の投稿 -->
        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : ?>
            <?php the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div><!-- /.section-inner -->
    </section><!-- /.section -->

    <!-- contact -->
    <?php get_template_part('template-parts/contact-section'); ?>
  </main>

<?php get_footer(); ?>
