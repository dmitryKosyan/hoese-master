

<?php

add_action( 'wp_enqueue_scripts', 'script_name' );
add_action( 'wp_enqueue_scripts', 'script_anothe_style' );
add_action( 'after_setup_theme', 'add_features' );
add_action( 'after_setup_theme', 'add_menu' );

function script_name() {
	
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com');
    wp_enqueue_style( 'fonts-gstatic', 'https://fonts.gstatic.com');
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap');
	  wp_enqueue_style( 'fonts-roboto', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
	wp_enqueue_style( 'style', get_stylesheet_uri());
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/index.bundle.js',null,null,true);
}
function script_anothe_style(){
	if( is_page(15) ){
	
	wp_enqueue_style( 'ceiling', get_template_directory_uri() . '/assets/css/ceiling.css');
	wp_enqueue_script( 'script_ceiling', get_template_directory_uri() . '/assets/js/ceiling.bundle.js',null,null,true);
}
		if( is_page(17) ){
	
	wp_enqueue_style( 'furnitere', get_template_directory_uri() . '/assets/css/furniture.css');
	wp_enqueue_script( 'script_furniture', get_template_directory_uri() . '/assets/js/furniture.bundle.js',null,null,true);
}

		if( is_page(19) ){
	
	wp_enqueue_style( 'wallpaper_style', get_template_directory_uri() . '/assets/css/wallpapers.css');
	wp_enqueue_script( 'script_wallpapers', get_template_directory_uri() . '/assets/js/wallpapers.bundle.js',null,null,true);
}
		if( is_page(21) ){
	
	wp_enqueue_style( 'renovation_style', get_template_directory_uri() . '/assets/css/renovation.css');
	wp_enqueue_script( 'script_renovation', get_template_directory_uri() . '/assets/js/renovation.bundle.js',null,null,true);
}
}

function add_features(){
	add_theme_support( 'custom-logo', [
	'height'      => 70,
	'width'       => 129,
	'flex-width'  => false,
	'flex-height' => false,
	'header-text' => '',
	'unlink-homepage-logo' => false, // WP 5.5
] );
}
function add_menu(){
	register_nav_menu('top','главная меню сайта');
	register_nav_menu('bottom','меню футера');
	register_nav_menu('burger','бургер меню');

}

add_theme_support('post-thumbnails');
add_theme_support('title-tag');

?>
