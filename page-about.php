<?php get_header(); ?>
	<div class="thumbnails">
		<ul class="block-grid twelve-up mobile-six-up">
		<?php query_posts(array('post_type'=>'artwork', 'showposts'=>'12', 'orderby'=>'rand' )); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail', array('class' => 'responsive')); } ?></a></li>
		<?php endwhile; endif; wp_reset_query(); ?>
		</ul>
	</div>
<div class="row content">
	<div class="ten columns centered">
		<?php while ( have_posts() ) : the_post(); ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title('<h3>', '</h3>'); ?></a>
			<?php the_content(); ?>         
		
		<?php endwhile; ?>
	</div>
</div>
<div class="row">
	<div class="ten columns centered">
		<ul class="block-grid six-up mobile">
			<li><a href="http://www.rhodes.edu/"><img src="http://www.memphisart.org/wp-content/uploads/2013/05/logo-rhodes.jpg" /></a>
			</li>
			<li><a href="http://www.rhodes.edu/campuslife/1117.asp"><img src="http://www.memphisart.org/wp-content/uploads/2013/05/logo-coda.jpg" /></a>
			</li>
			<li><a href="http://www.musicartsstudio.com/"><img src="http://www.memphisart.org/wp-content/uploads/2013/05/logo-music-and-arts-studio.jpg" /></a>
			</li>
		</ul>
	</div>
</div>
<?php get_footer(); ?> 