<?php
get_header();
$this_link = get_the_permalink();
query_posts(array('post_type'=>'artwork', 'showposts'=>'12', 'orderby'=>'rand' ));
echo "
<div class='thumbnails'>
  <ul class='block-grid twelve-up hide-for-small'>
";
// Start loop:
if (have_posts()) : while (have_posts()) : the_post();
  // Set variables:
  $active_link = get_the_permalink();
  $title = get_the_title();
  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' )['0'];
  // Create active class
  if($active_link == $this_link) {
    $active_link_class = " class='active'";
  } else {
    $active_link_class = "";
  }
  // Render LI:
  echo "
    <li$active_link_class>
      <a href='$active_link'>
        <img src='$thumb' class='responsive' alt='$title'>
      </a>
    </li>
  ";
endwhile; endif; wp_reset_query();
echo "
  </ul>
</div>
";
get_template_part( 'loop');
get_template_part('maps');
get_template_part('list');
get_footer();

?>