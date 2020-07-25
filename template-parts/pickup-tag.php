<!-- トップページのpickup部分を取得 -->
<?php
  $pickup_posts = get_posts(
    array(
      // 投稿タイプ.
      'post_type'      => 'post',
      // 6件取得.
      'posts_per_page' => 6,
      // pickupタグがついたもの.
      'tag'            => 'pickup',
      // 新しい順.
      'orderby'        => 'DESC',
    )
  );
?>
<?php foreach($pickup_posts as $post) : ?>
<?php setup_postdata($post); ?>
<li class="works-item" <?php post_class(); ?>>
  <figure class="works-item-img">
    <a href="<?php the_permalink(); ?>">
      <!-- アイキャッチ画像が設定されているなら -->
      <?php if(has_post_thumbnail()) : ?>
        <!-- アイキャッチ画像を大サイズで表示 -->
        <?php the_post_thumbnail( 'large' ); ?>
      <?php else : ?>
        <!-- noimage 画像を表示 -->
        <img src="<?php echo get_template_directory_uri(); ?>/images/no-img-pr.png" alt="NO IMAGEと灰色文字で記載された白背景画像">
      <?php endif; ?>
    </a>
  </figure><!-- /.works-item-img -->
</li><!-- /.works-item -->
<?php endforeach; ?>
<!-- グローバル変数を復元 -->
<?php wp_reset_postdata(); ?>
