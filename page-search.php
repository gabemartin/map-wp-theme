<?php get_header(); ?>
	<div class="thumbnails">
		<ul class="block-grid twelve-up mobile">
		<?php query_posts(array('post_type'=>'artwork', 'showposts'=>'12', 'orderby'=>'rand' )); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail', array('class' => 'responsive')); } ?></a></li>
		<?php endwhile; endif; wp_reset_query(); ?>
		</ul>
	</div>
<div class="row content">
	<div class="ten columns centered search-page">
		<?php get_search_form(); ?>     
	</div>
</div>
<?php get_template_part('list'); ?>
<?php get_footer(); ?> 