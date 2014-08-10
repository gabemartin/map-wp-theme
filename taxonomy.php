<?php get_header(); ?>

	<div class="row content thumbnails">
		
		<div class="breadcrumbs"><?php if(function_exists('bcn_display')) { bcn_display(); }?></div>

		<ul class="block-grid four-up mobile-two-up">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail'); } ?></a><h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5></li>

		<?php endwhile; endif; ?>

		</ul>
		
	</div>
	
<?php get_footer(); ?>