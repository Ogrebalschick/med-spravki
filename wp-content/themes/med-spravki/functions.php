<?php 

add_action( 'wp_enqueue_scripts', function() {

	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/style/style.css');
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com');
    wp_enqueue_style( 'fonts-2', 'https://fonts.gstatic.com');
    wp_enqueue_style( 'fonts-3', 'https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap');
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/style/slick.css');

    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');

	wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/script/slick.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/script/script.js', array('jquery'), 'null', true );
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');


register_nav_menu( 'header-nav', 'меню в шапке (десктоп)' );
register_nav_menu( 'header-mobile-nav', 'меню в шапке (мобайл)' );

register_nav_menus(
	array(
		'header-nav' => 'меню в шапке (десктоп)', // id области => Название области
		'header-mobile-nav' => 'меню в шапке (мобайл)',
        'footer-nav' => 'меню в футере',
        'show_in_nav_menus' => true,
	)
);


function cat_list_737863() {
    global $cat;

    $current_cat = $cat; // ID текущей категории
    if ( '' === $cat ) {
        // На странице поста
        $current_cat = get_the_category( get_the_ID() )[0]->cat_ID;
    }
    $cat_top = $current_cat; // ID самой верхней родительской категории
    while ( get_category( $cat_top )->category_parent ) {
        $cat_top = get_category( $cat_top )->category_parent;
    }
    echo '<ul class="children">';
    echo '<li class="cat-item cat-tem-' . intval( $cat_top ) . '">';
    echo '<a href="' . get_category_link($cat_top) . '">' . get_cat_name($cat_top) . '</a>';
    echo '<ul class="children">';
    wp_list_categories( 'hide_empty=0&title_li=&show_count=0&child_of=' . $cat_top );
    echo '</ul>';
    echo '</li>';
    echo '</ul>';
}
?>

