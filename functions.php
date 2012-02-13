<?php // カスタムメニューを追加
if (function_exists('register_nav_menus')) {
	register_nav_menus(array(
		'Primary' => 'Global',
		'Secondary' => 'Sub'
	));
}
?>

<?php // カスタムヘッダ機能を追加
define('HEADER_TEXTCOLOR', 'ffffff');
define('HEADER_IMAGE', '%s/images/default_header.jpg');
define('HEADER_IMAGE_WIDTH', 830);
define('HEADER_IMAGE_HEIGHT', 200);
define( 'NO_HEADER_TEXT', true );		// ヘッダーテキスト機能をOFFにする

add_custom_image_header();
?>

<?php // サイドバーにウィジェットを追加
if ( function_exists('register_sidebar') )
    register_sidebar();
?>

<?php		// アイキャッチ画像に対応させる
function action_post_thumbnail_setup() {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 150, 150, true);
}
add_action( 'after_setup_theme', 'action_post_thumbnail_setup' );
?>
