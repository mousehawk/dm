<?php get_header(); ?>


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div class="row main-content">
			<div class="columns small-12 main-content-column">
				<div class="title-row">
					<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
				</div>
				
				<div class="maincont-row">
				<?php the_content();
				
					wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
					) );
				?>
				
				<?php edit_post_link(); ?>
				
				</div>
			</div>
		</div>
			
		
	<?php endwhile; endif; ?>


	</div> <!-- end #maincont -->
</div> <!-- end outer row -->

<?php get_footer(); ?>
