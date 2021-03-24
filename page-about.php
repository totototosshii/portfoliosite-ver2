<!--
Template Name: プロフィール
-->
<?php get_header(); ?>

  <!-- ファーストビュー -->
  <div class="fv">
    <div class="fv-title-wrapper">
      <h2 class="site-title">Toshiki Portfolio</h2><!-- /.site-title -->
      <p class="sub-title">- Profile -</p><!-- /.sub-title -->
    </div><!-- /.fv-title-wrapper -->
  </div><!-- /.fv -->

  <!-- メインコンテンツ -->
  <main>
    <section class="section">
      <div class="section-inner">
        <!-- パンくずリスト -->
        <p class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <!-- Breadcrumb NavXT のパンくずを表示するための記述 -->
          <?php if(function_exists('bcn_display')){
              bcn_display();
            }
          ?>
        </p><!-- /.breadcrumbs -->
        <h3 class="section-title">Profile</h3><!-- /.section-title -->
        <p class="section-title-ja">− 私について −</p><!-- /.section-title-ja -->
        <div class="section-content">
          <figure class="profile-img">
            <img src="<?php echo esc_url(get_theme_file_uri('images/about-pr.png')); ?>" alt="サイト製作者の顔写真">
          </figure><!-- /.profile-img -->
          <div class="profile-content">
            <!-- 投稿があればprofile-messageブロック以下を表示 -->
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
              <p class="profile-message">
                <?php the_content(); ?>
              </p><!-- /.profile-message -->
            <?php endwhile; endif; ?>
          </div><!-- /.profile-content -->
        </div><!-- /.section-content -->
      </div><!-- /.section-inner -->
    </section><!-- /.section -->

    <section class="section">
      <div class="section-inner">
        <div class="section-content">
          <div class="environment">
            <h4 class="environment-head">作業環境</h4><!-- /.environment-head -->
            <dl class="environment-item">
              <dt class="environment-list">PC：</dt><!-- /.environment-list -->
              <dd class="environment-text">Mac OS</dd><!-- /.environment-text -->
              <dt class="environment-list">エディタ：</dt><!-- /.environment-list -->
              <dd class="environment-text">Visual Studio Code</dd><!-- /.environment-text -->
              <dt class="environment-list">コンパイル：</dt><!-- /.environment-list -->
              <dd class="environment-text">Live Sass Compiler</dd><!-- /.environment-text -->
              <dt class="environment-list">FTP：</dt><!-- /.environment-list -->
              <dd class="environment-text">FileZilla / Cyberduck</dd><!-- /.environment-text -->
              <dt class="environment-list">デザイン：</dt><!-- /.environment-list -->
              <dd class="environment-text">Xd / Figma</dd><!-- /.environment-text -->
              <dt class="environment-list">画像編集：</dt><!-- /.environment-list -->
              <dd class="environment-text">Photoshop</dd><!-- /.environment-text -->
              <dt class="environment-list">開発環境：</dt><!-- /.environment-list -->
              <dd class="environment-text">Local by Flywheel</dd><!-- /.environment-text -->
            </dl><!-- /.environment-item -->
          </div><!-- /.environment -->
          <div class="qualification">
            <h4 class="qualification-head">資格</h4><!-- /.qualification-head -->
            <ul class="qualification-item">
              <li>Microsoft Office Specialist Excel 365&2019</li>
              <li>Microsoft Office Specialist Word 2016</li>
            </ul><!-- /.qualification -->
          </div><!-- /.qualification -->
        </div><!-- /.section-content -->
        <div class="section-content">
          <div class="skills">
            <h4 class="skill-head">スキル</h4><!-- /.skill-head -->
            <ul class="skill-items">
              <li class="skill-item">
                <figure class="skill-icon">
                  <img src="<?php echo esc_url(get_theme_file_uri('images/icons8-html-5.svg')); ?>" alt="html5のアイコン">
                </figure><!-- /.skill-icon -->
                <p class="skill-name">
                  HTML
                </p><!-- /.skill-name -->
                <div class="rateoya">
                  <div class="rate"></div>
                </div>
              </li><!-- /.skill-item -->
              <li class="skill-item">
                <figure class="skill-icon">
                  <img src="<?php echo esc_url(get_theme_file_uri('images/icons8-css3.svg')); ?>" alt="CSSのアイコン">
                </figure><!-- /.skill-icon -->
                <p class="skill-name">
                  CSS
                </p><!-- /.skill-name -->
                <div class="rateoya">
                  <div class="rate"></div>
                </div>
              </li><!-- /.skill-item -->
              <li class="skill-item">
                <figure class="skill-icon">
                  <img src="<?php echo esc_url(get_theme_file_uri('images/icons8-sass.svg')); ?>" alt="Sassのアイコン">
                </figure><!-- /.skill-icon -->
                <p class="skill-name">
                  Sass(SCSS)
                </p><!-- /.skill-name -->
                <div class="rateoya">
                  <div class="rate"></div>
                </div>
              </li><!-- /.skill-item -->
              <li class="skill-item">
                <figure class="skill-icon">
                  <img src="<?php echo esc_url(get_theme_file_uri('images/icons8-bootstrap.svg')); ?>" alt="Bootstrapのアイコン">
                </figure><!-- /.skill-icon -->
                <p class="skill-name">
                  Bootstrap
                </p><!-- /.skill-name -->
                <div class="rateoya">
                  <div class="rate"></div>
                </div>
              </li><!-- /.skill-item -->
              <li class="skill-item">
                <figure class="skill-icon">
                  <img src="<?php echo esc_url(get_theme_file_uri('images/icons8-javascript.svg')); ?>" alt="JavaScriptのアイコン">
                </figure><!-- /.skill-icon -->
                <p class="skill-name">
                  JavaScript
                </p><!-- /.skill-name -->
                <div class="rateoya">
                  <div class="rate"></div>
                </div>
              </li><!-- /.skill-item -->
              <li class="skill-item">
                <figure class="skill-icon">
                  <img src="<?php echo esc_url(get_theme_file_uri('images/icons8-jquery.svg')); ?>" alt="jQueryのアイコン">
                </figure><!-- /.skill-icon -->
                <p class="skill-name">
                  jQuery
                </p><!-- /.skill-name -->
                <div class="rateoya">
                  <div class="rate"></div>
                </div>
              </li><!-- /.skill-item -->
              <li class="skill-item">
                <figure class="skill-icon">
                  <img src="<?php echo esc_url(get_theme_file_uri('images/icons8-php.svg')); ?>" alt="PHPのアイコン">
                </figure><!-- /.skill-icon -->
                <p class="skill-name">
                  PHP
                </p><!-- /.skill-name -->
                <div class="rateoya">
                  <div class="rate"></div>
                </div>
              </li><!-- /.skill-item -->
              <li class="skill-item">
                <figure class="skill-icon">
                  <img src="<?php echo esc_url(get_theme_file_uri('images/icons8-mysql.svg')); ?>" alt="MySQLのアイコン">
                </figure><!-- /.skill-icon -->
                <p class="skill-name">
                  MySQL
                </p><!-- /.skill-name -->
                <div class="rateoya">
                  <div class="rate"></div>
                </div>
              </li><!-- /.skill-item -->
              <li class="skill-item">
                <figure class="skill-icon">
                  <img src="<?php echo esc_url(get_theme_file_uri('images/icons8-wordpress.svg')); ?>" alt="WordPressのアイコン">
                </figure><!-- /.skill-icon -->
                <p class="skill-name">
                  WordPress
                </p><!-- /.skill-name -->
                <div class="rateoya">
                  <div class="rate"></div>
                </div>
              </li><!-- /.skill-item -->
              <li class="skill-item">
                <figure class="skill-icon">
                  <img src="<?php echo esc_url(get_theme_file_uri('images/icons8-github.svg')); ?>" alt="GitHubのアイコン">
                </figure><!-- /.skill-icon -->
                <p class="skill-name">
                  <a href="https://github.com/totototosshii?tab=repositories/" target="_blank" rel="noopener noreferrer">GitHub</a>
                </p><!-- /.skill-name -->
                <div class="rateoya">
                  <div class="rate"></div>
                </div>
              </li><!-- /.skill-item -->
              <li class="skill-item">
                <figure class="skill-icon">
                  <img src="<?php echo esc_url(get_theme_file_uri('images/icons8-sourcetree.svg')); ?>" alt="SourceTreeのアイコン">
                </figure><!-- /.skill-icon -->
                <p class="skill-name">
                  Sourcetree
                </p><!-- /.skill-name -->
                <div class="rateoya">
                  <div class="rate"></div>
                </div>
              </li><!-- /.skill-item -->
              <li class="skill-item">
                <figure class="skill-icon">
                  <img src="<?php echo esc_url(get_theme_file_uri('images/icons8-adobe-photoshop.svg')); ?>" alt="Photoshopのアイコン">
                </figure><!-- /.skill-icon -->
                <p class="skill-name">
                  Photoshop
                </p><!-- /.skill-name -->
                <div class="rateoya">
                  <div class="rate"></div>
                </div>
              </li><!-- /.skill-item -->
              <li class="skill-item">
                <figure class="skill-icon">
                  <img src="<?php echo esc_url(get_theme_file_uri('images/icons8-adobe-xd.svg')); ?>" alt="Xdのアイコン">
                </figure><!-- /.skill-icon -->
                <p class="skill-name">
                  Xd
                </p><!-- /.skill-name -->
                <div class="rateoya">
                  <div class="rate"></div>
                </div>
              </li><!-- /.skill-item -->
              <li class="skill-item">
                <figure class="skill-icon">
                  <img src="<?php echo esc_url(get_theme_file_uri('images/icons8-figma.svg')); ?>" alt="Figmaのアイコン">
                </figure><!-- /.skill-icon -->
                <p class="skill-name">
                  Figma
                </p><!-- /.skill-name -->
                <div class="rateoya">
                  <div class="rate"></div>
                </div>
              </li><!-- /.skill-item -->
              <li class="skill-item">
                <figure class="skill-icon">
                  <img src="<?php echo esc_url(get_theme_file_uri('images/icons8-word.svg')); ?>" alt="Wordのアイコン">
                </figure><!-- /.skill-icon -->
                <p class="skill-name">
                  Word
                </p><!-- /.skill-name -->
                <div class="rateoya">
                  <div class="rate"></div>
                </div>
              </li><!-- /.skill-item -->
              <li class="skill-item">
                <figure class="skill-icon">
                  <img src="<?php echo esc_url(get_theme_file_uri('images/icons8-excel.svg')); ?>" alt="Excelのアイコン">
                </figure><!-- /.skill-icon -->
                <p class="skill-name">
                  Excel
                </p><!-- /.skill-name -->
                <div class="rateoya">
                  <div class="rate"></div>
                </div>
              </li><!-- /.skill-item -->
            </ul><!-- /.skill-items -->
          </div><!-- /.skills -->
        </div><!-- /.section-content -->
      </div><!-- /.section-inner -->
    </section><!-- /.section -->

    <section class="section">
      <div class="section-inner">
        <div class="section-content">
          <div class="career">
            <p class="career-head">経歴</p><!-- /.career-head -->
            <dl class="career-item">
              <dt class="career-list">2008年</dt><!-- /.career-list -->
              <dd class="career-text">工業高校卒業後、地元の製造業に就職して工場勤務。<br>工作機械のオペレーター業務で機械部品を加工。<br>リーマンショック回復後からは３交代勤務で主力製品の生産に携わる。</dd><!-- /.career-text -->
              <dt class="career-list">2018年</dt><!-- /.career-list -->
              <dd class="career-text">体調不良を機に今後の働き方を考えるようになる。<br>年齢的な不安はあるものの、興味のある分野に挑戦したい気持ちが強かったため<br>Web制作の道を進む事に💨
            </dd><!-- /.career-text -->
              <dt class="career-list">2019年</dt><!-- /.career-list -->
              <dd class="career-text">交代勤務を続けながら平日は30分〜１時間、休日は３時間の学習✏️<br>10月に前職を退職後、仙台に拠点を移してプログラミングスクールに通う。</dd><!-- /.career-text -->
              <dt class="career-list">2020年</dt><!-- /.career-list -->
              <dd class="career-text">スクール以外にも学習の幅を広げる。<br>アロキャンへの参加、デイトラ、クリ★スタ、忍者CODEなどの教材に取り組みながらポートフォリオ作成。<br><br>７月：ポートフォリオ作成と並行して転職活動開始。<br>９月：ココナラで初のコーディング案件(LP)を獲得。<br><br><span class="emphasis">一緒に働かせて頂ける仙台のWeb制作会社を探しております！！</span><br><span class="emphasis">転職先決まりました！！</span><br><br>11月：仙台のWeb制作会社にエンジニアとして就業開始。</dd><!-- /.career-text -->
              <dt class="career-list">2021年</dt><!-- /.career-list -->
              <dd class="career-text">更新業務と並行しながら、静的サイトからWordPressサイトまでコーディング中💻</dd><!-- /.career-text -->
            </dl><!-- /.career-item -->
          </div><!-- /.career -->
        </div><!-- /.section-content -->
      </div><!-- /.section-inner -->
    </section><!-- /.section -->

    <section class="section">
      <div class="section-inner">
        <div class="section-content">
          <div class="future-title">これからの事</div><!-- /.future-title -->
          <div class="future">
            <p class="future-message">
              <!-- ACFの投稿 -->
              <?php the_field('future_message'); ?>
            </p><!-- /.future-message -->
          </div><!-- /.future-->
        </div><!-- /.section-content -->
      </div><!-- /.section-inner -->
    </section><!-- /.section -->

    <!-- contact -->
    <?php get_template_part('template-parts/contact-section'); ?>
  </main>

<?php get_footer(); ?>
