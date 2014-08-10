<div class="row">
<form action="/" method="get">
	<div class="ten columns">
		<input type="text" name="s" id="search" value="Search for something here... or click on the tags below." />
	</div>
	<div class="two columns">
		<input type="submit" value="Search" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" />
	</div>
</form>
</div>
<div id="tags">
	<?php wp_tag_cloud(' ', ' ', ' '); ?>
</div>