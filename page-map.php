<?php get_header(); ?>



<div id='map' style="position: fixed; top: 99px; left: 0; bottom: 0; right: 0; z-index: 1"></div>
<script>
L.mapbox.accessToken = 'pk.eyJ1IjoiZ2FiZW1hcnRpbiIsImEiOiJiV1IzWjBnIn0.7DJxAsMFhYEn2LJQ516sCQ';
var geojson = [

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
?>

];

L.mapbox.map('map', 'gabemartin.jck0373c')
  .setView([35.1446, -90.0089], 13)
  .featureLayer.setGeoJSON(geojson);
</script>

<?php get_footer(); ?>