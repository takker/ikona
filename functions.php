<?php
function action_navigation_menu_setup() {
	register_nav_menus( array(
		'primary' => 'グローバルナビゲーション',
		'secondary' => 'サブナビゲーション'
	));
}
add_action('after_setup_theme', 'action_navigation_menu_setuup');
?>

<?php // サイドバーにウィジェットを追加
if ( function_exists('register_sidebar') )
    register_sidebar();
?>
