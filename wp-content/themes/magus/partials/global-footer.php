<!-- Back to top button -->
<?php 
$logo = get_field('footer_logo', 'options');
$copyright = get_field('footer_copyright', 'options');
$rqlogo = get_field('footer_rq_logo', 'options');
?>
<a id="button"><svg class="icon icon--arrow"><use xlink:href="#arrow"></use></svg> <p>Back to the top</p></a>
<footer class="global-footer">
	<div class="global-footer--inner">
		<div class="global-footer--logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" /></a></div>
		<nav class="global-footer--nav">
			<?php wp_nav_menu( array('theme_location' => 'footer') ); ?>
		</nav>

		<ul class="social-links">
		<?php if(get_field('youtube', 'options')): ?>
			<li class="social-links__item"><a href="<?php the_field('youtube', 'options'); ?>" class="social-links__link"><?php echo get_icon('youtube'); ?></a></li>
		<?php endif; ?>
		<?php if(get_field('facebook', 'options')): ?>
			<li class="social-links__item"><a href="<?php the_field('facebook', 'options'); ?>" class="social-links__link"><?php echo get_icon('facebook'); ?></a></li>
		<?php endif; ?>
		<?php if(get_field('instagram', 'options')): ?>
			<li class="social-links__item"><a href="<?php the_field('instagram', 'options'); ?>" class="social-links__link"><?php echo get_icon('instagram'); ?></a></li>
		<?php endif; ?>
		<?php if(get_field('twitter', 'options')): ?>
			<li class="social-links__item"><a href="<?php the_field('twitter', 'options'); ?>" class="social-links__link"><?php echo get_icon('twitter'); ?></a></li>
		<?php endif; ?>
		
		</ul>

		<?php if ( $rqlogo ) { ?><img src="<?php echo $rqlogo['url']; ?>" alt="<?php echo $rqlogo['alt']; ?>" /><?php } ?>

		<div class="global-footer--foot">
			<p>Copyright &copy; <?php echo date('Y'); ?> Magus Wealth Limited. All rights reserved.</p>

			<?php if ( $copyright ) { ?><?php echo $copyright ?><?php } ?>

			<nav class="global-footer--nav">
				<?php wp_nav_menu( array('theme_location' => 'privacy') ); ?>
			</nav>
			<a href="https://www.financial-ombudsman.org.uk/" target="_blank">The Financial Ombudsman Service</a>

		</div>
	</div>
</footer>
