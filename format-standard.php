<article class="standard">
	<div class="date">
		<i class="fa fa-pencil"></i>
	</div>
	<h2><?php the_title(); ?></h2>
	
	<?php the_content(); ?>

	<div class="permalink">
		<a href="<?php the_permalink(); ?>">
			&infin; <?php the_time('jS F Y'); ?>
		</a>
	</div>
</article>