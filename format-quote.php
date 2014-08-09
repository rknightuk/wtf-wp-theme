<article class="quote">
	<div class="date">
		<a href="http://wp.dev/?post_format=quote">
			<i class="fa fa-quote-left"></i></div>
		</a>
	<blockquote>
		<?php the_content(); ?>
		<footer>
			<a href="<?php echo wtf_field('link', $post); ?>">
				- <?php echo wtf_field('source', $post) ?>
			</a>
		</footer>
	</blockquote>

	<div class="permalink">
		<a href="<?php the_permalink(); ?>">
			&infin; <?php the_time('jS F Y'); ?>
		</a>
	</div>
</article>