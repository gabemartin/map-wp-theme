<?php get_header(); ?>

		<div class="row thumbnails">
		<p class="results"><?php printf( __( 'Search Results for... %s', 'map' ), '<span>' . get_search_query() . '</span>' ); ?></p>
		<ul class="block-grid four-up mobile-two-up">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail'); } ?></a><h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5></li>
		<?php endwhile; ?>
		</ul>
		
		</div>
	
		<?php else : ?>


		<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentytwelve' ); ?></p>

		<?php get_search_form(); ?>
				

		<?php endif; ?>

	
<?php get_footer(); ?>