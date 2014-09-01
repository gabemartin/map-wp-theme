<?php
query_posts(array('post_type'=>'artwork', 'orderby'=>'rand' ));
$data = '
{
   "features":[
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
    $first = get_field( "artist_first_name" );
    $lastname = get_field( "artist_last_name" );
    $description = get_field( "description" );
    $latitude = get_field( "latitude" );
    $longitude = get_field( "longitude" );
    $postid = get_the_ID();
//  Now start The Loop:
    if($latitude != "") : $data .= '
      {
         "geometry":{
            "coordinates":[
               '.$longitude.',
               '.$latitude.'
            ],
            "type":"Point"
         },
         "properties":{
            "description":'.json_encode('<img src=' . $thumb . ' width=150 height=150><br>' . $first . ' ' . $lastname . ' - ' . $description).',
            "id":"marker-'.$postid.'",
            "marker-color":"#1087bf",
            "marker-size":"medium",
            "marker-symbol":"",
            "title":"'.$title.'"
         },
         "type":"Feature"
      },'; endif;

  endwhile;
endif;
$data .= '], "id":"gabemartin.jck0373c", "type":"FeatureCollection"
}
';
$trail = '},],';
$cleantrail = '}],';
$data = str_replace($trail, $cleantrail, $data);
echo $data;
// $data = preg_replace("/\s+/", " ", $data);
// wp_reset_query();
// header('Content-Type: application/json');
// echo json_encode($data);
?>
