<article class="image">
	<div class="date">
		<a href="<?php echo get_post_format_link('image'); ?>">
			<i class="fa fa-picture-o"></i>
		</a>
	</div>

	<?php the_content(); ?>

	<div class="permalink">
		<a href="<?php the_permalink(); ?>">
			&infin; <?php the_time('jS F Y'); ?>
		</a>
	</div>

	<div class="permalink">
		<a href="<?php the_permalink(); ?>">
			&infin; <?php the_time('jS F Y'); ?>
		</a>
	</div>
</article>