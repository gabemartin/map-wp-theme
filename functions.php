<?php 
add_theme_support( 'post-thumbnails' );

function wpse28145_add_custom_types( $query ) {
    if( is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {

        // this gets all post types:
        $post_types = get_post_types();

        // alternately, you can add just specific post types using this line instead of the above:
        // $post_types = array( 'post', 'your_custom_type' );


        $query->set( 'post_type', $post_types );
        return $query;
    }
}
add_filter( 'pre_get_posts', 'wpse28145_add_custom_types' );

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Navigation' ));
}
add_action( 'init', 'register_my_menu' );

?>