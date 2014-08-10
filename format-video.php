<article class="video">
	<div class="date">
		<a href="<?php echo get_post_format_link('video'); ?>">
			<i class="fa fa-film"></i>
		</a>
	</div>
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