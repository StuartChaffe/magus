<!-- Back to top button -->
<?php 
$logo = get_field('footer_logo', 'options');
$copyright = get_field('footer_copyright', 'options');
$rqlogo = get_field('footer_rq_logo', 'options');
$iframelogo = get_field('footer_iframe', 'options');
$popup = get_field('show_popup');
$links = get_field('show_links');
$popupcontent = get_field('modal_content', 'options');
?>
<?php if ( $links  == '0' ) { ?><div class="hide"><?php } ?>
<a href="/contact-us" id="cta-button" class="cta-button"><img src="<?php echo get_template_directory_uri(); ?>/src/images/logo-icon-white.png" alt="Magus icon" /> <p>Get in touch</p></a>
<a href="/free-consultation" id="cta-button-2" class="consultation-button"> <p>Book my <strong>FREE</strong> consultation</p></a>
<?php if ( $links  == '0' ) { ?></div><?php } ?>
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
		<?php if(get_field('linkedin', 'options')): ?>
			<li class="social-links__item"><a href="<?php the_field('linkedin', 'options'); ?>" class="social-links__link"><?php echo get_icon('linkedin'); ?></a></li>
		<?php endif; ?>
		
		</ul>

		<div class="global-footer--logos">
			<?php if ( $rqlogo ) { ?><img src="<?php echo $rqlogo['url']; ?>" alt="<?php echo $rqlogo['alt']; ?>" /><?php } ?>
			<?php if ( $iframelogo ) { ?><?php echo $iframelogo ?><?php } ?>
		</div>

		<div class="global-footer--foot">
			<p>Copyright &copy; <?php echo date('Y'); ?> Magus Private Wealth Ltd. All rights reserved.</p>

			<?php if ( $copyright ) { ?><?php echo $copyright ?><?php } ?>

			<nav class="global-footer--nav">
				<?php wp_nav_menu( array('theme_location' => 'privacy') ); ?>
			</nav>
			<a href="https://www.financial-ombudsman.org.uk/" target="_blank">The Financial Ombudsman Service</a>

		</div>
	</div>
</footer>
<?php if ( $popup  == '1' ) { ?>
	<div class="modal consultation">
		<div class="modal--inner">
			<button class="modal--close" aria-label="Close">✕</button>
			<img class="logo" src="<?php echo get_template_directory_uri(); ?>/src/images/logo.png" alt="Magus logo" />
			<?php echo $popupcontent ?>
		</div>
	</div>
<?php } ?>