<?php get_header() ?>
	
	<?php if (is_page( 22 )) {
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); 
				the_content();
			} // end while
		} // end if
	}
	else { ?>
		<img class="arrow" src="<?php bloginfo('template_directory'); ?>/images/arrow.png"/>
		<div id="about_cont">
			<div id="about">
				<div id="about_restrict">	
					<?php 
						if ( have_posts() ) {
							while ( have_posts() ) {
								the_post(); 
								the_content();
							} // end while
						} // end if
					?>
				</div>
			</div>
		</div>
		<script src="<?php bloginfo('template_directory'); ?>/js/scrolling_script.js"></script>
		<?php } ?>
	</div>

<?php get_footer() ?>