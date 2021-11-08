<header class="global-header">
	<div class="global-header--inner">
	<h1 class="global-header--logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/src/images/logo.png" alt="Magus logo" /></a></h1>
		<nav class="global-header--nav">
			<?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
		</nav>

		<button class="global-header--nav-btn" type="button">
			<span class="global-header--nav-box">
				<span class="global-header--nav-inner"><span>Show menu</span></span>
			</span>
		</button>
		<nav class="global-header--nav global-header--nav__mobile">
			<?php wp_nav_menu( array('theme_location' => 'mobile') ); ?>
		</nav>
	</div>
</header>