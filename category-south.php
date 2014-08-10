<?php get_header(); ?>

	<div class="row content thumbnails">

		<div class="breadcrumbs"><?php if(function_exists('bcn_display')) { bcn_display(); }?></div>

		<ul class="block-grid four-up mobile-two-up">
	
		<?php query_posts(array('post_type'=>'artwork', 'category_name'=>'south' )); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'loop-category'); ?>

		<?php endwhile; endif; wp_reset_query(); ?>

		</ul>
		
	</div>

<?php get_footer(); ?>