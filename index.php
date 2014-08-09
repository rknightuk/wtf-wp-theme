<?php
	
	get_header();
	
	if (have_posts()) :
		while (have_posts()) : the_post();
			if ( ! get_post_format()) {
				get_template_part('format', 'standard');
			}
			else {
				get_template_part('format', get_post_format());
			}
		endwhile;
	endif;

	echo '<div class="pagination">';
	$prev = get_previous_posts_link();
	echo $prev;

	$next = get_next_posts_link();
	echo '<span style="float:right">'.$next.'</span>';

	echo '</div>';

	get_footer();

?>