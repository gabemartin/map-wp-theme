<?php get_header(); ?>

	<div class="thumbnails">

		<ul class="block-grid five-up mobile-two-up">
		<?php query_posts(array('post_type'=>'artwork' )); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php
            if ( has_post_thumbnail() ) {
              //the_post_thumbnail('thumbnail', array('class' => 'responsive'));
              $image = wp_get_attachment_image_src(get_sub_field('image'), 'full');
              echo $image[0];
            }

          ?></a><h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5></li>
		<?php endwhile; endif; wp_reset_query(); ?>
		</ul>
	</div>

<?php get_footer(); ?>