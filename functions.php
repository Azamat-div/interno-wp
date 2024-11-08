<?php

define( 'INTERNO_THEME_ROOT', get_template_directory_uri() );
define( 'INTERNO_IMG_DIR', INTERNO_THEME_ROOT . '/img' );

// правильный способ подключить стили и скрипты темы
add_action( 'wp_enqueue_scripts', 'theme_add_scripts' );
function theme_add_scripts() {
	// подключаем файл стилей темы
   wp_enqueue_style( 'style-swiper', get_template_directory_uri() .'/css/swiper-bundle.min.css');
   wp_enqueue_style( 'style-main', get_template_directory_uri() .'/css/style.css');

	// подключаем js файл темы
   wp_enqueue_script( 'script-swiper', get_template_directory_uri() .'/script/swiper-bundle.min.js', array(), '1.0' );
	wp_enqueue_script( 'script-main', get_template_directory_uri() .'/script/script.js', array(), '1.0' );
	wp_enqueue_script( 'script-custom-swiper', get_template_directory_uri() .'/script/custom-swiper.js', array(), '1.0', true );
}

add_action( 'init', 'register_post_types' );

function register_post_types(){

	register_post_type( 'feedback', [
		'labels' => [
			'name'               => 'Отзывы', // основное название для типа записи
			'singular_name'      => 'Отзывы', // название для одной записи этого типа
			'add_new'            => 'Добавить отзыв', // для добавления новой записи
			'add_new_item'       => 'Добавление отзыва', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование отзыва', // для редактирования типа записи
			'new_item'           => 'Новый отзыв', // текст новой записи
			'view_item'          => 'Смотреть отзыв', // для просмотра записи этого типа.
			'search_items'       => 'Искать отзыв', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Отзывы', // название меню
		],
		'public'                 => false,
		'show_ui'             => true, // зависит от public
		'menu_icon'           => 'dashicons-admin-customizer',
		'supports'            => [ 'title', 'editor' ], // 'title','editor','author',
	] );

}

function getFeedback() {

$args = array(
	'orderby'     => 'date',
	'order'       => 'ASC',
	'post_type'   => 'feedback',
);

return get_posts($args);
}

add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){

	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>
	';

}

add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){

	register_sidebar( array(
		'name'          => 'Blog Sidebar',
		'id'            => 'blog-sidebar',
		'description'   => 'Description',
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h4 class="widget__title">',
		'after_title'   => "</h4>\n",
		'before_sidebar' => '', // WP 5.6
		'after_sidebar'  => '', // WP 5.6
	) );

	register_sidebar( array(
		'name'          => 'Social Network',
		'id'            => 'social-network',
		'description'   => 'Description',
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="post__social %2$s">',
		'after_widget'  => "</div>\n",
		'before_sidebar' => '', // WP 5.6
		'after_sidebar'  => '', // WP 5.6
	) );
}

add_filter( 'get_search_form', 'my_search_form' );
function my_search_form( $form ) {

	$form = '
	<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
		<label class="screen-reader-text" for="s">Search query:</label>
		<input class="modal-search__input" type="text" value="' . get_search_query() . '" name="s" id="s" />
		<button class="modal-search__btn" type="submit" id="searchsubmit" />
	</form>';

	return $form;
}

// ID user

function true_user_id_column( $columns ) {
	$columns['user_id'] = 'ID';
	return $columns;
}
add_filter('manage_users_columns', 'true_user_id_column');

function true_user_id_column_content($value, $column_name, $user_id) {
	if ( 'user_id' == $column_name )
		return $user_id;
	return $value;
}
add_action('manage_users_custom_column',  'true_user_id_column_content', 10, 3);

function true_user_id_column_style(){
	echo '<style>.column-user_id{width: 5%}</style>';
}
add_action('admin_head-users.php',  'true_user_id_column_style');

add_action( 'after_setup_theme', 'main_menu' );

function main_menu() {
	register_nav_menu( 'primary', 'Main Menu' );
}

add_action( 'after_setup_theme', 'mobile_menu' );

function mobile_menu() {
	register_nav_menu( 'mob', 'Mobile Menu' );
}