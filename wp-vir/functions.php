<?php

// -----------------------------
// 管理画面の余白ズレ防止（php_error対策）
// -----------------------------
add_action('admin_head', function () {
    echo '<style>
        #adminmenuback,
        #adminmenuwrap {
            margin-top: 0 !important;
        }
    </style>';
});


// -----------------------------
// 施工例カスタム投稿（renovation）
// -----------------------------
function create_renovation_post_type() {

    register_post_type('renovation', array(
        'labels' => array(
            'name'          => '施工例',
            'singular_name' => '施工例'
        ),
        'public'        => true,
        'has_archive'   => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-admin-home',
        'supports'      => array('title', 'editor', 'thumbnail'),
        'rewrite'       => array('slug' => 'renovation'),
        'show_in_rest'  => true
    ));

}
add_action('init', 'create_renovation_post_type');


// -----------------------------
// エリア分類（札幌・小樽など）
// -----------------------------
function create_renovation_taxonomy() {

    register_taxonomy(
        'renovation_area',
        'renovation',
        array(
            'label'             => 'エリア',
            'hierarchical'      => true,
            'public'            => true,
            'show_admin_column' => true,
            'show_in_rest'      => true,
            'rewrite'           => array('slug' => 'renovation-area')
        )
    );

}
add_action('init', 'create_renovation_taxonomy');


// ------------------------------------
// 施工例一覧 表示件数変更（1ページ12件）
// ------------------------------------
function change_posts_per_page($query) {

    if (
        !is_admin() &&
        $query->is_main_query() &&
        is_post_type_archive('renovation')
    ) {
        $query->set('posts_per_page', 12);
    }

}
add_action('pre_get_posts', 'change_posts_per_page');


// ------------------------------------
// エリア絞り込み（URL ?area=sapporo など）
// ------------------------------------
function add_area_filter($query) {

    if (
        !is_admin() &&
        $query->is_main_query() &&
        is_post_type_archive('renovation')
    ) {

        if (isset($_GET['area']) && $_GET['area'] !== '') {

            $query->set('tax_query', array(
                array(
                    'taxonomy' => 'renovation_area',
                    'field'    => 'slug',
                    'terms'    => $_GET['area']
                )
            ));

        }
    }

}
add_action('pre_get_posts', 'add_area_filter');

add_theme_support('post-thumbnails', array('renovation'));

//archive
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

    <section class="page_list">
        <div class="page_list_inner">
            <div class="listing_filter">

<?php
$terms = get_terms(array(
    'taxonomy' => 'renovation_area',
    'hide_empty' => false
));

foreach ($terms as $term) :
?>
<a href="<?php echo add_query_arg('area', $term->slug, get_post_type_archive_link('renovation')); ?>">
<button class="filter-btn"><?php echo $term->name; ?></button>
</a>
<?php endforeach; ?>

<a href="<?php echo get_post_type_archive_link('renovation'); ?>">
<button class="filter-btn">ALL</button>
</a>

            </div>
        </div>
    </section>

    <section class="list_box">
        <div class="list_box_inner">
        <ul class="listing-list">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <li class="listing-item fade-in">
            <a href="<?php the_permalink(); ?>">
            <div class="item-img list-item-img">

<?php if (has_post_thumbnail()) : ?>
<?php the_post_thumbnail('medium'); ?>
<?php else : ?>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/noimg.jpg" alt="">
<?php endif; ?>

            </div>

            <div class="listing-item-text">
                <h2><?php the_title(); ?></h2>
				<?php
				// 本文取得
				$content = get_the_content();

				// mastersliderショートコード削除
				$content = preg_replace('/\[masterslider.*?\]/', '', $content);

				// HTMLタグ除去（改行だけ残す）
				$content = wp_strip_all_tags($content);

				// 文字数制限（例：120文字）
				$limit = 100;
				if(mb_strlen($content) > $limit){
					$content = mb_substr($content, 0, $limit) . '…';
				}

				// 改行をbr変換
				echo nl2br($content);
				?>
            </div>
            </a>
        </li>

<?php endwhile; endif; ?>

        </ul>

        <div class="listiong-item-btn">
            <div class="lidtiong-item-icon">
<?php previous_posts_link('<img src="'.get_stylesheet_directory_uri().'/img/listing-left.png">'); ?>
            </div>
            <div class="lidtiong-item-icon">
<?php next_posts_link('<img src="'.get_stylesheet_directory_uri().'/img/listing-right.png">'); ?>
            </div>
        </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>



