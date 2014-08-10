<div id="list">
	<div class="row">
		<div class="six columns centered show-for-touch">
			<h5 class="neighborhood">Artwork by neighborhood</h5>
		</div>
	</div>
	<div class="row">
		<div class="three columns">
			<ul>
				<li><a class="downtown" href="/category/downtown/"><strong>Downtown</strong></a></li>
		<?php query_posts(array('post_type'=>'artwork', 'cat'=>'9' )); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; endif; wp_reset_query(); ?>
			</ul>
		</div>
		<div class="three columns">
			<ul>
				<li><a class="midtown" href="/category/midtown/"><strong>Midtown</strong></a></li>
		<?php query_posts(array('post_type'=>'artwork', 'cat'=>'11' )); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; endif; wp_reset_query(); ?>
			</ul>
		</div>
		<div class="three columns">
			<ul>
				<li><a class="east" href="/category/east/"><strong>East Memphis</strong></a></li>
		<?php query_posts(array('post_type'=>'artwork', 'cat'=>'10' )); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; endif; wp_reset_query(); ?>
			</ul>
		</div>
		<div class="three columns">
			<ul>
				<li><a class="south" href="/category/south/"><strong>South Memphis</strong></a></li>
		<?php query_posts(array('post_type'=>'artwork', 'cat'=>'19' )); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; endif; wp_reset_query(); ?>
			</ul>
		</div>
	</div>
</div>