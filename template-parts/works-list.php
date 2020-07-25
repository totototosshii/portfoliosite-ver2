<!-- worksページの成果物の投稿記事を取得 -->
<li class="works-item">
  <figure class="works-item-img">
    <a href="<?php the_permalink(); ?>">
      <!-- アイキャッチ画像が設定されているなら -->
      <?php if ( has_post_thumbnail() ) : ?>
        <!-- アイキャッチ画像を大サイズで表示 -->
        <?php the_post_thumbnail( 'large' ); ?>
      <?php else : ?>
        <!-- アイキャッチ画像が無ければnoimage 画像を表示 -->
        <img src="<?php echo get_template_directory_uri(); ?>/images/no-img-pr.png" alt="NO IMAGEと灰色文字で記載された白背景画像">
      <?php endif; ?>
    </a>
  </figure><!-- /.works-item-img -->
</li><!-- /.works-item -->
