<div class="top-bar-background">
<nav id="top-bar">
	<ul>
		<li class="name"><h1><a href="<?php echo home_url(); ?>"><img class="logo" src="/wp-content/themes/map/images/map_logo.png" alt="Memphis Art Project" /></a></h1></li>
		<li class="toggle-topbar"><a href="#"></a></li>
	</ul>
	<section id="menu">
    <a href="#" class="menu-toggle"><span>Menu</span></a>
		<?php wp_nav_menu( 'menu=Navigation&menu_id=nav&menu_class=right&container=false' ); ?>
	</section>
</nav>
</div>