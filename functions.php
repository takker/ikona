<?php // カスタムメニューを追加
if (function_exists('register_nav_menus')) {
	register_nav_menus(array(
		'Primary' => 'Global',
		'Secondary' => 'Sub'
	));
}
?>

<?php // サイドバーにウィジェットを追加
if ( function_exists('register_sidebar') )
    register_sidebar();
?>
