<article class="image">
	<div class="date">
		<a href="http://wp.dev/?post_format=gallery">
			<i class="fa fa-picture-o"></i>
		</a>
	</div>

	<h2><?php the_title(); ?></h2>

	<ul class="rig" data-gallery="<?php echo $post->ID; ?>">
		<?php
			$gallery = get_post_gallery($post->ID, false );
	        $ids = explode(',', $gallery['ids']);

	        foreach( $gallery['src'] as $key => $src)
	        {
	        	$fullSrc = wp_get_attachment_image_src($ids[$key], 'full');
	         ?>
	            
		        <li>
		        	<a class="gallery-<?php echo $post->ID; ?>" href="<?php echo $fullSrc[0]; ?>">
		        		<img src="<?php echo $src; ?>" class="my-custom-class" alt="Gallery image" />
		        	</a>
		        </li>
	        
	        <?php } ?>
	</ul>

	<div class="permalink">
		<a href="<?php the_permalink(); ?>">
			&infin; <?php the_time('jS F Y'); ?>
		</a>
	</div>
</article>