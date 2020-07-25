<?php get_header(); ?>

  <!-- ファーストビュー -->
  <div class="fv">
    <div class="fv-title-wrapper">
      <h2 class="site-title">Toshiki Portfolio</h2><!-- /.site-title -->
      <p class="sub-title">- Web Production -</p><!-- /.sub-title -->
    </div><!-- /.fv-title-wrapper -->
    <div class="arrows">
      <div class="arrow arrowfirst"></div>
      <div class="arrow arrowsecond"></div>
    </div><!-- /.arrows -->
  </div><!-- /.fv -->

  <main>
    <!-- About -->
    <section class="section">
      <div class="section-inner">
        <h3 class="section-title">About</h3><!-- /.section-title -->
        <p class="section-title-ja">− 私について −</p><!-- /.section-title-ja -->
        <div class="section-content">
          <figure class="about-img">
            <img src="<?php echo esc_url(get_theme_file_uri('images/pr.png')); ?>" alt="サイトの制作者が森の中で立っている">
          </figure><!-- /.about-img -->
          <div class="about-content">
            <p class="about-message">こんにちは、Web制作をしているToshikiです。<br>当サイトにお越し頂きありがとうございます。<br>仕事ではお客様に寄り添った丁寧なコミュニケーションを心掛けております。<br><br>｢サイトが欲しいけど、何をどうすれば良いの？｣<br>｢制作案件が多くて手が回らない｡｣<br>こんな事にお困りではありませんか？<br><br>それらの悩みをサポートするのが私の仕事ですので、是非ご相談ください。<br>一緒にサイトを作り上げて行きましょう！
            </p><!-- /.about-message -->
            <button class="link-btn">
              <a href="<?php echo home_url('/about'); ?>">
                <i class="fas fa-arrow-right"></i>
                プロフィールを見る
              </a>
            </button><!-- /.link-btn -->
          </div><!-- /.about-content -->
        </div><!-- /.section-content -->
      </div><!-- /.section-inner -->
    </section><!-- /.section -->

    <!-- Works -->
    <section class="section">
      <div class="section-inner">
        <h3 class="section-title">Works</h3><!-- /.section-title -->
        <p class="section-title-ja">− 制作実績 −</p><!-- /.section-title-ja -->
        <div class="section-content">
          <ul class="works-items">
            <li class="works-item">
              <figure class="works-item-img">
                <a href="single.html">
                  <img src="<?php echo esc_url(get_theme_file_uri('images/cresta-jyo-kyu.jpg')); ?>" alt="">
                </a>
              </figure><!-- /.works-item-img -->
            </li><!-- /.works-item -->
            <li class="works-item">
              <figure class="works-item-img">
                <a href="">
                  <img src="images/salon-de-beaute.jpg" alt="">
                </a>
              </figure><!-- /.works-item-img -->
            </li><!-- /.works-item -->
            <li class="works-item">
              <figure class="works-item-img">
                <a href="">
                  <img src="images/30daytrial.jpg" alt="">
                </a>
              </figure><!-- /.works-item-img -->
            </li><!-- /.works-item -->
            <li class="works-item">
              <figure class="works-item-img">
                <a href="">
                  <img src="images/sobolon.jpg" alt="">
                </a>
              </figure><!-- /.works-item-img -->
            </li><!-- /.works-item -->
            <li class="works-item">
              <figure class="works-item-img">
                <a href="">
                  <img src="images/ARROWSSS.jpg" alt="">
                </a>
              </figure><!-- /.works-item-img -->
            </li><!-- /.works-item -->
            <li class="works-item">
              <figure class="works-item-img">
                <a href="">
                  <img src="images/cafe-saryo.jpg" alt="">
                </a>
              </figure><!-- /.works-item-img -->
            </li><!-- /.works-item -->
          </ul><!-- /.works-items -->
          <button class="link-btn">
            <a href="<?php echo home_url('/works-list'); ?>">
              <i class="fas fa-arrow-right"></i>
              制作実績一覧
            </a>
          </button><!-- /.link-btn -->
        </div><!-- /.section-content -->
      </div><!-- /.section-inner -->
    </section><!-- /.section -->

    <!-- Service -->
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
              ヒアリングに基づいたイメージに沿って､デザインをご提案致します。<br>Photoshopが扱えますので､画像の修正などもご相談下さい。
            </p><!-- /.service-text -->
          </div><!-- /.service-menu -->
          <div class="service-menu">
            <figure class="service-menu-icon">
              <img src="<?php echo esc_url(get_theme_file_uri('images/code.png')); ?>" alt="コーディングアイコン">
            </figure><!-- /.service-menu-icon -->
            <h3 class="service-title">Coding</h3><!-- /.section-title -->
            <p class="service-text">
              お預かりしたXdなどのデザインデータを元にコーディング致します。
            </p><!-- /.service-text -->
            <p class="service-text">
              JavaScriptやCSSを使ったアニメーションで､サイトに動きを加える事もできます。<br>サイトの一部修正や､レスポンシブ化への対応も可能です。
            </p><!-- /.service-text -->
          </div><!-- /.service-menu -->
          <div class="service-menu">
            <figure class="service-menu-icon">
              <img src="<?php echo esc_url(get_theme_file_uri('images/wordpress.png')); ?>" alt="WordPressのロゴ">
            </figure><!-- /.service-menu-icon -->
            <h3 class="service-title">WordPress</h3><!-- /.section-title -->
            <p class="service-text">
              自作テーマや既存テーマ(「SnowMonkey」や「Lightning」)を使用したサイト制作が可能です。<br>コンテンツの追加や編集など､ページの更新頻度が高いサイトにはWordPressをお勧めします。
            </p><!-- /.service-text -->
          </div><!-- /.service-menu -->
        </div><!-- /.section-content -->
      </div><!-- /.section-inner -->
    </section><!-- /.section -->

    <!-- contact -->
    <?php get_template_part('template-parts/contact-section'); ?>
  </main>

<?php get_footer(); ?>
