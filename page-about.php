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
        <h3 class="section-title">Profile</h3><!-- /.section-title -->
        <p class="section-title-ja">− 私について −</p><!-- /.section-title-ja -->
        <div class="section-content">
          <figure class="profile-img">
            <img src="<?php echo esc_url(get_theme_file_uri('images/about-pr.png')); ?>" alt="サイト製作者の顔写真">
          </figure><!-- /.profile-img -->
          <div class="profile-content">
            <!-- 投稿があればprofile-messageブロック以下を表示 -->
            <?php if(have_posts()) : ?>
              <?php while(have_posts()) : ?>
                <?php the_post(); ?>
                <p class="profile-message">
                  <?php the_content(); ?>
                </p><!-- /.profile-message -->
              <?php endwhile; ?>
            <?php endif; ?>
          </div><!-- /.profile-content -->
        </div><!-- /.section-content -->
      </div><!-- /.section-inner -->
    </section><!-- /.section -->

    <section class="section">
      <div class="section-inner">
        <div class="section-content">
          <div class="skills">
            <p class="skill-head">スキル</p>
            <ul class="skill-item">
              <li>HTML、CSS、SCSS、Bootstrap、</li>
              <li>JavaScript、jQuery、PHP、</li>
              <li>WordPress、<a href="https://github.com/totototosshii?tab=repositories/" target="_blank" rel="noopener noreferrer">GitHub</a>、SourceTree、</li>
              <li>Photoshop、XD、Figma</li>
            </ul><!-- /.skill-item -->
            <p class="qualification-head">資格</p>
            <ul class="qualification-item">
              <li>Microsoft Office Specialist Excel 365&2019</li>
              <li>Microsoft Office Specialist Word 2016</li>
            </ul><!-- /.qualification -->
          </div><!-- /.skills -->
          <div class="environment">
            <p class="environment-head">作業環境</p><!-- /.environment-head -->
            <dl class="environment-item">
              <dt class="environment-list">PC：</dt><!-- /.environment-list -->
              <dd class="environment-text">Mac OS</dd><!-- /.environment-text -->
              <dt class="environment-list">エディタ：</dt><!-- /.environment-list -->
              <dd class="environment-text">Visual Studio Code</dd><!-- /.environment-text -->
              <dt class="environment-list">コンパイル：</dt><!-- /.environment-list -->
              <dd class="environment-text">Live Sass Compiler</dd><!-- /.environment-text -->
              <dt class="environment-list">FTP：</dt><!-- /.environment-list -->
              <dd class="environment-text">FileZilla</dd><!-- /.environment-text -->
              <dt class="environment-list">デザイン：</dt><!-- /.environment-list -->
              <dd class="environment-text">XD / Figma</dd><!-- /.environment-text -->
              <dt class="environment-list">画像加工：</dt><!-- /.environment-list -->
              <dd class="environment-text">Photoshop</dd><!-- /.environment-text -->
              <dt class="environment-list">ローカル環境：</dt><!-- /.environment-list -->
              <dd class="environment-text">Local by Flywheel</dd>
            </dl><!-- /.environment-item -->
          </div><!-- /.environment -->
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
                <dd class="career-text">工業高校卒業後、地元の製造業に就職し工場勤務。<br>主に工作機械のオペレーター業務を担当し、空気圧制御機器の部品を加工。一時期は切削工具管理を兼務し書類作成業務を行う。<br>リーマンショック回復後からは３交代勤務で主力製品の生産に携わる。</dd><!-- /.career-text -->
                <dt class="career-list">2018年</dt><!-- /.career-list -->
                <dd class="career-text">体調が優れない事が多くなり、次第に今後の働き方を考えるようになる。<br>調べる過程でWeb制作に興味を持ち、まずはPCスキルを身につけるためにタイピング練習を開始。</dd><!-- /.career-text -->
                <dt class="career-list">2019年</dt><!-- /.career-list -->
                <dd class="career-text">交代勤務を続けながら平日は30分〜１時間、休日は３時間の独学。<br>HTML/CSSをProgate、ドットインストールで独学し、初めての言語に難しさを痛感した反面、思い通りの結果が表示させられた時の喜びを実感。<br>学習環境と転職先を考慮し、仙台に拠点を移す事を決意。<br>10月に退職後、プログラミングスクールに通う。</dd><!-- /.career-text -->
                <dt class="career-list">2020年</dt><!-- /.career-list -->
                <dd class="career-text">プログラミングスクール以外にも学習の幅を広げる。<br><a href="https://www.jun-akiba.com/category/%e3%82%a4%e3%83%99%e3%83%b3%e3%83%88/" target="_blank" rel="noopener noreferrer">アロキャン</a>への参加、<a href="https://www.daily-trial.com/" target="_blank" rel="noopener noreferrer">デイトラ</a> 、<a href="https://crestadesign.org/" target="_blank" rel="noopener noreferrer">クリ★スタ</a>、<a href="https://ninjacode.work/practice/" target="_blank" rel="noopener noreferrer">忍者CODE</a>などの教材に取り組みながらポートフォリオの作成に取り掛かりました。</dd><!-- /.career-text -->
                <dt class="career-list">現在</dt><!-- /.career-list -->
                <dd class="career-text">ポートフォリオ作成と並行して転職活動中。<br><span>一緒に働かせて頂けるWeb制作会社を探しております！！</span></dd><!-- /.career-text -->
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
              現在はコーディングがメインですが、デザインのスキルも徐々に伸ばして行き、更に仕事の幅を広げたいと考えております。
            </p><!-- /.future-message -->
          </div><!-- /.future-->
        </div><!-- /.section-content -->
      </div><!-- /.section-inner -->
    </section><!-- /.section -->

    <!-- contact -->
    <?php get_template_part('template-parts/contact-section'); ?>
  </main>

<?php get_footer(); ?>
