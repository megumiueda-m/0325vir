<?php get_header(); ?>

<main>
    <section class="page_fv">
        <div class="page_fv_wrapper">
            <div class="page_fv_hero">
                <img src="img/fvimg/fv-Renovation.webp" alt="">
            </div>
            <div class="page_fv_title">
                <h1>Renovation</h1>
                <p>施工事例</p>
            </div>
        </div>
    </section>

    <section class="page_list">
        <div class="page_list_inner">
            <div class="listing_filter">
                <button class="filter-btn" data-category="">札幌市</button>
                <button class="filter-btn" data-category="">恵庭市</button>
                <button class="filter-btn" data-category="">千歳市</button>
                <button class="filter-btn" data-category="">北広島市</button>
                <button class="filter-btn" data-category="">岩見沢市</button>
                <button class="filter-btn" data-category="">江別市</button>
                <button class="filter-btn" data-category="">小樽市</button>
                <button class="filter-btn" data-category="">ALL</button>
            </div>
        </div>
    </section>

    <section class="detail_box">
        <div class="detail_box_inner">
        <div class="detail_box_card fade-in">
            <div class="image-gallery">
            <!-- メイン画像 -->
            <div class="main-image detail-item-img">
                <img id="mainImage" src="<?php echo get_stylesheet_directory_uri(); ?>/img/project1.webp" alt="">
            </div>
                <!-- サムネイル -->
                    <div class="thumbnail-list">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/project1.webp" class="thumb active">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/project2.webp" class="thumb">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/project1.webp" class="thumb">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/project2.webp" class="thumb">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/project1.webp" class="thumb">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/project2.webp" class="thumb">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/project1.webp" class="thumb">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/project2.webp" class="thumb">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/project1.webp" class="thumb">
                    </div>
                </div>
            <p class="listing-label">マンション</p>
            <div class="listing-item-text">
                <h2>札幌中央区 マンション</h2>
                <p>価格 1000万</p>
                <p>間取り 2LDK</p>
                <p>2025/06/13</p>
            </div>
        </div>
      <div class="detail-box-backbtn">
        <a href="<?php echo esc_url(home_url('/')); ?>/archive-renovation" class="view_btn">back</a>
      </div>
        </div>
    </section>

</main>


<?php get_footer(); ?>



<?php get_header(); ?>

<main>

<section class="page__fv">
    <div class="page__fv__wrapper">
        <div class="page__fv__title">
            <h1>施工事例</h1>
            <p>Renovation Works</p>
        </div>
        <div class="page__fv__hero">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-hero2.webp" alt="">
        </div>
    </div>
</section>

<section class="detail_box">
<div class="detail_box_inner">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="detail_box_card fade-in">

    <!-- アイキャッチ -->
    <?php if (has_post_thumbnail()) : ?>
    <div class="main-image detail-item-img">
        <?php the_post_thumbnail('large'); ?>
    </div>
    <?php endif; ?>

    <!-- タイトルなど -->
    <div class="listing-item-text">
        <h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
    </div>

</div>

<?php endwhile; endif; ?>

<!-- backボタン -->
<div class="detail-box-backbtn">
<a href="<?php echo get_post_type_archive_link('renovation'); ?>" class="view_btn">back</a>
</div>

</div>
</section>

</main>

<?php get_footer(); ?>
