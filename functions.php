<?php

add_filter('show_admin_bar', '__return_false');

add_theme_support( 'post-formats', 
	array(
		'gallery',
		'link',
		'image',
		'quote',
		'video',
	) 
);

add_post_type_support( 'post', 'post-formats' );

function wtf_field($field, $post)
{
	return get_post_meta($post->ID, $field, true);
}