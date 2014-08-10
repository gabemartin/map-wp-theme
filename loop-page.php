<div class="content">
	<div class="row thumbnails">
		<div class="twelve columns">
			<h3>Overton Square Walking Tour</h3>
			<ul class="block-grid twelve-up mobile-three-up">
			<?php query_posts(array('post_type'=>'artwork', 'tag_id'=>'20' )); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail', array('class' => 'responsive')); } ?></a></li>
			<?php endwhile; endif; wp_reset_query(); ?>
		</ul>
		</div>
	</div>

	<div class="row thumbnails">
		<div class="twelve columns">
			<h3>Downtown Walking Tour</h3>
			<ul class="block-grid twelve-up mobile-three-up">
			<?php query_posts(array('post_type'=>'artwork', 'tag_id'=>'9' )); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail', array('class' => 'responsive')); } ?></a></li>
			<?php endwhile; endif; wp_reset_query(); ?>
		</ul>
		</div>
	</div>

	<div class="row thumbnails">
		<div class="twelve columns">
			<h3>Rhodes College Walking Tour</h3>
			<ul class="block-grid twelve-up mobile-three-up">
			<?php query_posts(array('post_type'=>'artwork', 'tag_id'=>'50' )); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail', array('class' => 'responsive')); } ?></a></li>
			<?php endwhile; endif; wp_reset_query(); ?>
		</ul>
		</div>
	</div>
</div>