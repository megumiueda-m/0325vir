<?php get_header(); ?>

<main>
    <section class="top__hero">
      <div class="container">
          <div class="slider-area">
              <div class="slider-item">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fv-hero1.webp">
              </div>
              <div class="slider-item">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fv-hero2.png">
              </div>
              <div class="slider-item">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fv-hero3.png">
              </div>
          </div>
      </div>
      <div class="mb_container">
          <div class="slider-area">
              <div class="slider-item">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fv-hero1.webp">
              </div>
              <div class="slider-item">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fv-hero2.png">
              </div>
              <div class="slider-item">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fv-hero3.png">
              </div>
          </div>
      </div>
      <div class="top__hero__title">
        <h1>誠実に、未来をつくる。</h1>
        <p>あなたの暮らしと資産に、<br class="mb_br">最良の選択を。</p>
      </div>

      <div class="scroll">
        <span>Scroll</span>
      </div>
    </section>

  <section class="top__concept" id="Concept">
    <div class="top__concept__wrapper">
      <div class="top__concept__title">
        <p>Concept</p>
        <h2>あなたの暮らしと資産に、<br class="mb_br">最良の選択を。</h2>
      </div>
      <div class="top__concept__text fade-in">
        <p>私たちは、常に“人”を中心に考える不動産会社です。</p>
        <p>誠実な対応と柔軟な発想で、お客様一人ひとりに<br class="mb_br">最適なご提案を行っています。</p>
        <p>不動産の売買・賃貸から、収益物件の<br class="mb_br">運用や設計・リフォームまで。</p>
        <p>豊かな暮らしと資産づくりを支える<br class="mb_br">「総合不動産パートナー」として、<br>
          長く信頼されるサービスを提供します。</p>
      </div>
      <!-- <a href="" class="view_btn">View more</a> -->
    </div>
  </section>

  <section class="top__service">
    <div class="top__service__wrapper">
      <div class="top__service__title">
        <p>Our Service</p>
        <h2>事業内容</h2>
      </div>
      <div class="top__service__contents fade-in">
      <a href="<?php echo esc_url(home_url('/')); ?>/planning">
        <div class="top__service__item one_item">
          <div class="top__service__item__inner">
            <p>Planning & Design</p>
            <h3>新築企画</h3>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/btnicon.png" class="icon_btn" alt="">
          </div>
        </div>
      </a>
        <div class="top__service__item two_item">
          <a href="<?php echo esc_url(home_url('/')); ?>/archive-renovation">
          <div class="top__service__item__inner">
          <p>Renovation Works</p>
          <h3>施工事例</h3>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/btnicon.png" class="icon_btn" alt="">
          </div>
          </a>
        </div>
      </div>
      <div class="top__service__contents sub__service__contents fade-in">
        <div class="top__service__item three_item">
          <p>Property Management</p>
          <h3>賃貸管理</h3>
          <!-- <a href="" class="icon_btn"><img src="img/btnicon.png" alt=""></a> -->
        </div>
        <div class="top__service__item four_item">
          <p>Sales & Leasing</p>
          <h3>売買・賃貸仲介</h3>
          <!-- <a href="" class="icon_btn"><img src="img/btnicon.png" alt=""></a> -->
        </div>
        <div class="top__service__item five_item">
          <p>Investment Consulting</p>
          <h3>収益不動産コンサルティング</h3>
          <!-- <a href="" class="icon_btn"><img src="img/btnicon.png" alt=""></a> -->
        </div>
      </div>
    </div>
  </section>

  <section class="top__projects">
    <div class="top__projects__wrapper">
      <div class="top__projects__title fade-in">
        <p>Latest Projects</p>
        <h2>最新情報</h2>
      </div>
      <div class="top__projects__contents">
        <button class="slider-btn prev">‹</button>
        <div class="top__projects__viewport">
        <ul class="top__projects__box">
          <li class="top__projects__item"><a href="<?php echo esc_url(home_url('/')); ?>/single-renovation">
            <div class="top__projects__img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/project1.webp" alt="">
            </div>
            <h3 class="top__projects__name">札幌市西区 1LDK 18世帯</h3>
            <p class="top__projects__more">【築年月】令和6年1月</p>
            <p class="top__projects__more">【交通】地下鉄東西線『発寒南』駅</p>
            <p class="top__projects__more">【構造】 鉄筋4階建...</p>
          </a></li>
          <li class="top__projects__item"><a href="<?php echo esc_url(home_url('/')); ?>/single-renovation">
            <div class="top__projects__img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/project2.webp" alt="">
            </div>
            <h3 class="top__projects__name">札幌市西区 1LDK 18世帯</h3>
            <p class="top__projects__more">【築年月】令和6年1月</p>
            <p class="top__projects__more">【交通】地下鉄東西線『発寒南』駅</p>
            <p class="top__projects__more">【構造】 鉄筋4階建...</p>
          </a></li>
          <li class="top__projects__item"><a href="<?php echo esc_url(home_url('/')); ?>/single-renovation">
            <div class="top__projects__img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/project1.webp" alt="">
            </div>
            <h3 class="top__projects__name">札幌市西区 1LDK 18世帯</h3>
            <p class="top__projects__more">【築年月】令和6年1月</p>
            <p class="top__projects__more">【交通】地下鉄東西線『発寒南』駅</p>
            <p class="top__projects__more">【構造】 鉄筋4階建...</p>
          </a></li>
          <li class="top__projects__item"><a href="<?php echo esc_url(home_url('/')); ?>/single-renovation">
            <div class="top__projects__img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/project2.webp" alt="">
            </div>
            <h3 class="top__projects__name">札幌市西区 1LDK 18世帯</h3>
            <p class="top__projects__more">【築年月】令和6年1月</p>
            <p class="top__projects__more">【交通】地下鉄東西線『発寒南』駅</p>
            <p class="top__projects__more">【構造】 鉄筋4階建...</p>
          </a></li>
          <li class="top__projects__item"><a href="<?php echo esc_url(home_url('/')); ?>/single-renovation">
            <div class="top__projects__img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/project2.webp" alt="">
            </div>
            <h3 class="top__projects__name">札幌市西区 1LDK 18世帯</h3>
            <p class="top__projects__more">【築年月】令和6年1月</p>
            <p class="top__projects__more">【交通】地下鉄東西線『発寒南』駅</p>
            <p class="top__projects__more">【構造】 鉄筋4階建...</p>
          </a></li>
          <li class="top__projects__item"><a href="<?php echo esc_url(home_url('/')); ?>/single-renovation">
            <div class="top__projects__img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/project2.webp" alt="">
            </div>
            <h3 class="top__projects__name">札幌市西区 1LDK 18世帯</h3>
            <p class="top__projects__more">【築年月】令和6年1月</p>
            <p class="top__projects__more">【交通】地下鉄東西線『発寒南』駅</p>
            <p class="top__projects__more">【構造】 鉄筋4階建...</p>
          </a></li>
          <li class="top__projects__item"><a href="<?php echo esc_url(home_url('/')); ?>/single-renovation">
            <div class="top__projects__img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/project2.webp" alt="">
            </div>
            <h3 class="top__projects__name">札幌市西区 1LDK 18世帯</h3>
            <p class="top__projects__more">【築年月】令和6年1月</p>
            <p class="top__projects__more">【交通】地下鉄東西線『発寒南』駅</p>
            <p class="top__projects__more">【構造】 鉄筋4階建...</p>
          </a></li>
          <li class="top__projects__item"><a href="<?php echo esc_url(home_url('/')); ?>/single-renovation">
            <div class="top__projects__img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/project2.webp" alt="">
            </div>
            <h3 class="top__projects__name">札幌市西区 1LDK 18世帯</h3>
            <p class="top__projects__more">【築年月】令和6年1月</p>
            <p class="top__projects__more">【交通】地下鉄東西線『発寒南』駅</p>
            <p class="top__projects__more">【構造】 鉄筋4階建...</p>
          </a></li>
        </ul>
      </div>
      <button class="slider-btn next">›</button>
      </div>
      <div class="top__projects__morebtn">
        <a href="/archive-renovation.html" class="view_btn">View more</a>
      </div>
    </div>
  </section>

  <section class="top__company">
    <div class="top__company__wrapper">
      <div class="top__company__img">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company-info.webp" alt="">
      </div>
      <div class="top__company__contents fade-in">
        <div class="top__company__title">
          <p>Information</p>
          <h2>会社概要</h2>
        </div>
        <p class="top__company__text">私たちは、常に“人”を中心に<br class="mb_br">考える不動産会社です。</p>
        <p class="top__company__text"> 誠実な対応と柔軟な発想で、<br class="mb_br">お客様一人ひとりに<br>
          最適なご提案を行っています。</p>
      <div class="top__company__morebtn">
        <a href="<?php echo esc_url(home_url('/')); ?>/infomation" class="view_btn">View more</a>
      </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
