<?php get_header(); ?>

	<div class="row thumbnails">
		
		<ul class="block-grid four-up mobile-two-up">
	
		<?php query_posts(array('post_type'=>'artwork', 'category_name'=>'downtown' )); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail'); } ?></a><h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5></li>

		<?php endwhile; endif; wp_reset_query(); ?>

		</ul>
		
	</div>
	
<?php get_footer(); ?>
