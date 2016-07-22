<?php get_header() ?>
	<p id="sidebar_icon">Blog Archive</p>
	<ul class="updates">
		<?php if ( have_posts() ) {
			while ( have_posts() ) { ?>
				<li>
					<?php the_post(); ?>
					<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
					<?php the_content(); ?>
				</li>
			<?php } // end while
			} // end if
		?>
	</ul>
</div>

<div id="sidebar_cont">
	<?php get_sidebar() ?>
	<div id="moreposts"><?php posts_nav_link('  ','Previous posts','More posts'); ?></div>
</div>

<?php get_footer() ?>