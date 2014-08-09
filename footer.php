		</section>

		<footer class="site">
			<p>
				robb.wtf by <a href="http://robblewis.me">Robb Lewis</a> | 
				WTF Theme: <a href="http://github.com/rmlewisuk/wtf-wp-theme">Fork on Github</a>
			</p>

			<?php echo get_post_format_link('image'); ?>
		</footer>

	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.colorbox-min.js"></script>
		<script type="text/javascript">
			var galleryList = $(".rig").map(function() {
				return $(this).data("gallery");
			}).get();

			for (var i = galleryList.length - 1; i >= 0; i--) {
				$('.gallery-'+galleryList[i]).colorbox({
					rel: 'group-'+galleryList[i],
					maxWidth: '100%',
					maxHeight: '90%'

				});
			};
		</script>

	</body>

</html>