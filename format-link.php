<article class="link">
	<div class="date">
		<a href="<?php echo get_post_format_link('link'); ?>">
			<i class="fa fa-link"></i></div>
		</a>
	<h2>
		<a href="<?php echo wtf_field('link', $post); ?>">
			<?php the_title(); ?> <i class="fa fa-angle-double-right"></i>
		</a>
	</h2>

	<div class="permalink">
		<a href="<?php the_permalink(); ?>">
			&infin; <?php the_time('jS F Y'); ?>
		</a>
	</div>
</article>