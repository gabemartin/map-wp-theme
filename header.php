<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
		<meta name="viewport" content="width=device-width" />
		<title><?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' ); $site_description = get_bloginfo( 'description', 'display' ); if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description"; ?></title>

  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/foundation.css">
  -->

  <!-- Included CSS Files (Compressed) -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/global.css">

  <!-- Typekit -->
  <script type="text/javascript" src="//use.typekit.net/jol8icc.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/modernizr.foundation.js"></script>

  <!--[if IE 8]>
  <style type="text/css">
	/* css for IE 8 */
  </style>
  <![endif]-->

	</head>
	<body <?php body_class(); ?>>
    	<?php get_template_part('navigation'); ?>