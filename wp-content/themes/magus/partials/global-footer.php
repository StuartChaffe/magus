<footer class="global-footer">
	<div class="global-footer--inner">
		<nav class="global-footer--nav">
			<?php wp_nav_menu( array('theme_location' => 'footer') ); ?>
		</nav>


		<p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

		<ul class="social-links">
		<?php if(get_field('twitter', 'options')): ?>
			<li class="social-links__item"><a href="<?php the_field('twitter', 'options'); ?>" class="social-links__link"><?php echo get_icon('twitter'); ?></a></li>
		<?php endif; ?>
		<?php if(get_field('facebook', 'options')): ?>
			<li class="social-links__item"><a href="<?php the_field('facebook', 'options'); ?>" class="social-links__link"><?php echo get_icon('facebook'); ?></a></li>
		<?php endif; ?>
		<?php if(get_field('instagram', 'options')): ?>
			<li class="social-links__item"><a href="<?php the_field('instagram', 'options'); ?>" class="social-links__link"><?php echo get_icon('instagram'); ?></a></li>
		<?php endif; ?>
		<?php if(get_field('youtube', 'options')): ?>
			<li class="social-links__item"><a href="<?php the_field('youtube', 'options'); ?>" class="social-links__link"><?php echo get_icon('youtube'); ?></a></li>
		<?php endif; ?>
		</ul>
	</div>
</footer>
