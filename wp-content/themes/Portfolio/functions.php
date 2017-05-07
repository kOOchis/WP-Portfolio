<?php

/*require_once(ABSPATH.'wp-content/themes/theme_coopFem/types/presentations.php');*/

// Enable widgetable sidebar
// You may need to tweak your theme files, more info here - http://codex.wordpress.org/Widgetizing_Themes
if ( function_exists('register_sidebar') )
	register_sidebar(array(
	'id' => 'zone_widget',
	'name' => 'Colonne droite',
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
));

// Pour activer les images à la une dans le back office dans un article
add_theme_support('post-thumbnails' );
set_post_thumbnail_size(652,867,true );

function my_theme_add_editor_styles() {
  add_editor_style( 'style.css' );
}

add_action( 'after_setup_theme', 'my_theme_add_editor_styles' );
