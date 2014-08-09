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

	$prev = get_previous_posts_link();
	$next = get_next_posts_link();

	if ($prev || $next)
	{
		echo '<div class="pagination">';
		echo $prev;

		echo '<span style="float:right">'.$next.'</span>';

		echo '</div>';
	}

	get_footer();

?>