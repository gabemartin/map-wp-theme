<div class="content">

	<div class="row">
	<?php while ( have_posts() ) : the_post(); ?>

		<div class="six columns">
			<div id="featured">
				<?php while(the_repeater_field('photos')): ?>
				<?php $image = wp_get_attachment_image_src(get_sub_field('photo'), 'thumbnail'); ?>
				<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
				<?php endwhile; ?>
			</div>
		</div>
		
		<div class="six columns notes">
		<h3 class="title"><?php the_title(); ?></h3>
			<strong class="heading">Artist</strong>

			<h4><?php the_field('artist_last_name'); ?><?php if (get_field('artist_first_name')) { ; ?>, <?php the_field('artist_first_name'); ?><?php } ;?> <?php if (get_field('artist_dates')) { ; ?><span>(<?php the_field('artist_dates'); ?>)</span><?php } ;?>
			</h4>

			<?php if (get_field('year')) { ; ?>
			<strong class="heading">Year</strong>
			<h4><?php the_field('year'); ?></h4>
			<?php } ;?>

			<?php the_field('description'); ?>

			<div id="tags">
			<?php the_tags(' ', ' ', ' '); ?>
			</div>

			<?php edit_post_link(); ?>
		</div>
	</div>
	<?php endwhile; wp_reset_query(); ?>
</div>