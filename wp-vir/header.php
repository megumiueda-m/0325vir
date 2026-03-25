<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>株式会社ヴィル</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Asap+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel='stylesheet' href='https://unpkg.com/ress/dist/ress.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
</head>
<body>
<header>
  <div class="slide_nav">

    <!-- ▼ 下層ページ用：ロゴ＋PCメニュー -->
    <div class="pc_header">
      <div class="header_logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/VIR-logo.webp" alt="">
        </a>
      </div>

      <nav class="header_pc_nav">
        <ul class="header_pc_list">
          <li class="header_pc_item"><a href="tel:0117386677">Phone</a></li>
          <li class="header_pc_item"><a href="<?php echo esc_url(home_url('/')); ?>/contact">Contact form</a></li>
        </ul>
      </nav>
    </div>

    <!-- ▼ 共通：ハンバーガーメニュー -->
    <div class="header__container">
      <div class="hamburger">
        <span></span>
      </div>

      <nav class="hamburger_nav">
        <div class="hamburger_nav_wrapper">
          <div class="hamburger_nav_inner">
            <div class="hamburger_nav_contents">
              <ul class="hamburger_nav_item">
                <li class="hamburger_nav_child"><a href="<?php echo esc_url(home_url('/')); ?>">
                  <span class="menu_en">Home</span>
                  <span class="menu_ja">サイトトップ</span>
                </a></li>
                <li class="hamburger_nav_child"><a href="<?php echo esc_url(home_url('/')); ?>/#Concept">
                  <span class="menu_en">Concept</span>
                  <span class="menu_ja">コンセプト</span>
                </a></li>
                <li class="hamburger_nav_child"><a href="<?php echo esc_url(home_url('/')); ?>/infomation">
                  <span class="menu_en">Information</span>
                  <span class="menu_ja">会社概要</span>
                </a></li>
                <li class="hamburger_nav_child"><a href="<?php echo esc_url(home_url('/')); ?>/contact">
                  <span class="menu_en">Contact form</span>
                  <span class="menu_ja">お問い合わせ</span>
                </a></li>
              </ul>
              <ul class="hamburger_nav_item">
                <li class="hamburger_nav_child">
                  <span class="menu_en">Our Service</span>
                  <a href="<?php echo esc_url(home_url('/')); ?>/planning"><span class="menu_ja">新築企画</span></a>
                  <a href="<?php echo esc_url(home_url('/')); ?>/archive-renovation"><span class="menu_ja">施工事例</span></a>
                  <span class="menu_ja">賃貸管理</span>
                  <span class="menu_ja">売買・賃貸仲介</span>
                  <span class="menu_ja">収益不動産<br>コンサルティング</span>
                </li>
                <li class="hamburger_nav_child"><a href="<?php echo esc_url(home_url('/')); ?>/privacy">
                  <span class="menu_en">Privacy policy</span>
                  <span class="menu_ja">個人情報保護方針</span>
                </a></li>
              </ul>
            </div>
            <ul class="hamburger_nav_banner">
                <li><a href="https://www.kenbiya.com/kaisha/vir/" target="_blank" >
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner1.webp" alt="">
                </a></li>
                <li><a target="_blank" href="https://fudosanlist.cbiz.ne.jp/list/sale/?area=sapporo&prop=3&sup=1240">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner3.webp" alt="">
                </a></li>
                <li><a target="_blank" href="https://www.rakumachi.jp/syuuekibukken/area/prefecture/dimAll/?realtor_id=1820&area=&line=&st=&limit=20&keyword=&newly=&price_from=&price_to=&gross_from=&gross_to=&year=&b_area_from=&b_area_to=&houses_ge=&houses_le=&min=&l_area_from=&l_area_to=&ex_real_search=">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner2.webp" alt="">
                </a></li>
                <li><a target="_blank" href="https://suumo.jp/hokkaido/">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner4.webp" alt="">
                </a></li>
            </ul>
          </div>
          <div class="humburger_nav_img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu.webp" alt="">
          </div>
        </div>
      </nav>
    </div>
  </div>
</header>
