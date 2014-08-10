<?php get_header(); ?>
<div class="row content">
	<div class="breadcrumbs"><?php if(function_exists('bcn_display')) { bcn_display(); }?></div>
	<?php while ( have_posts() ) : the_post(); ?>
	
	
	<?php endwhile; wp_reset_query(); ?>
</div>
<?php get_footer(); ?> 