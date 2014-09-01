<div id="map">
	<div class="gmap hide-for-touch">
		<?php  if ( is_home() ) { ?>
		<figure>
			<?php
			query_posts(array('category_name'=>'map, generic' ));
			if (have_posts()) : while (have_posts()) : the_post();
			the_content(); endwhile; endif; wp_reset_query();
			?>
		</figure>
		<?php  } elseif ( is_page() ) { ?>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus dolor blanditiis fugiat voluptatum, est sed explicabo, officia iste laudantium eos nam expedita porro non harum dolores, mollitia dolorum perspiciatis officiis.
		<figure>
			<?php
			query_posts(array('category_name'=>'map, generic' ));
			if (have_posts()) : while (have_posts()) : the_post();
			the_content(); endwhile; endif; wp_reset_query();
			?>
		<?php  } elseif ( is_category('downtown') ) { ?>
		<figure>
			<?php
			query_posts(array('category_name'=>'map, downtown' ));
			if (have_posts()) : while (have_posts()) : the_post();
			the_content(); endwhile; endif; wp_reset_query();
			?>
		</figure>
		<?php  } elseif ( is_category('midtown') ) { ?>
		<figure>
			<?php
			query_posts(array('category_name'=>'map, midtown' ));
			if (have_posts()) : while (have_posts()) : the_post();
			the_content(); endwhile; endif; wp_reset_query();
			?>
		</figure>
		<?php  } elseif ( is_category('east') ) { ?>
		<figure>
			<?php
			query_posts(array('category_name'=>'map, east' ));
			if (have_posts()) : while (have_posts()) : the_post();
			the_content(); endwhile; endif; wp_reset_query();
			?>
		</figure>
		<?php  } else { ?>
		<figure>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_field('google_map'); ?>
		<?php endwhile; wp_reset_query(); ?>
		</figure>
		<?php  } ?>
	</div>
</div>