<?php
get_header();
query_posts(array('post_type'=>'artwork', 'orderby'=>'rand' ));
echo '
<div class="thumbnails">
  <ul class="block-grid six-up mobile-two-up">
';
if (have_posts()) :
  while (have_posts()) :
                //
                //    What does the_post(); do?
                //    - "I iterate the post index in The Loop!"
    the_post(); //    - "I retrieve the next post!"
                //    - "I set up the post!"
                //    - "I set the 'in the loop' property to true!"
                //
//  Set up variables:
    $title = get_the_title();
    $link  = get_the_permalink();
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' )['0'];

//  Now start The Loop:
    if(has_post_thumbnail()) : echo "
      <li>
        <a href='$link' title='$title'>
          <figure>
            <img src='$thumb' class='responsive' alt='$title'>
            <figcaption><h5>$title</h5></figcaption>
          </figure>
        </a>
      </li>
    "; endif;

  endwhile;
endif;
echo '
  </ul>
</div>
';
wp_reset_query();
get_footer();
?>