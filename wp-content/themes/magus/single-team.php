<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php
	$image = get_field('team_banner_image');
	$imagemobile = get_field('team_mobile_banner_image');
	$profileimage = get_field('team_image', get_the_ID());
	$job = get_field('job_title');
	$bio = get_field('team_bio');
	$contact = get_field('contact');
?>
<?php if ($image) { ?>

<section class="banner">
	<!-- <div class="banner--image" style="background-image: url('<?php echo $image['url']; ?>')"> -->
	<div class="banner--image banner--image__single banner--image__team" style="background-image: url('<?php echo $image['url']; ?>')">
		<img loading="lazy" class="hidemobile" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<?php if ( $imagemobile ) { ?><img loading="lazy" class="hidedesktop" src="<?php echo $imagemobile['url']; ?>" alt="<?php echo $imagemobile['alt']; ?>" />
		<?php } else { ?>
			<img loading="lazy" src="<?php echo $profileimage['url']; ?>" alt="<?php echo $profileimage['alt']; ?>" />
		<?php } ?>
	</div>
	<div class="container">
		<div class="banner--title">
			<h1 class="heading-2"><?php the_title(); ?></h1>
			<h3><?php echo $job; ?></h3>
		</div>
	</div>
</section>

<?php } ?>
<section class="content mb-0">
	<a href="/about-us/the-team/" class="btn btn--secondary alignright">Back to team</a>
</section>

<section class="content">
	<?php echo $bio; ?>

	<h3><?php echo $contact['title']; ?></h3>

	<div class="team-contact">

		<div class="team-contact--image">
			<img loading="lazy" src="<?php echo $profileimage['url']; ?>" alt="<?php echo $profileimage['alt']; ?>" />
		</div>
		
		<div class="team-contact--text">
			
			<ul class="social-links">
				<?php if ( $contact['email'] ) { ?>
					<li class="social-links__item"><a href="mailto:<?php echo $contact['email']; ?>" class="social-links__link"><span class="icon-item"><?php echo get_icon('email'); ?></span> <?php echo $contact['email']; ?></a></li>
				<?php } ?>
				<?php if ( $contact['linkedin'] ) { ?>
					<li class="social-links__item"><a href="<?php echo $contact['linkedin']; ?>" class="social-links__link"><span class="icon-item"><?php echo get_icon('linkedin'); ?></span> View on Linkedin</a></li>
				<?php } ?>
				<?php if ( $contact['telephone'] ) { ?>
					<li class="social-links__item"><a href="tel:<?php echo $contact['telephone']; ?>" class="social-links__link"><span class="icon-item"><?php echo get_icon('telephone'); ?></span> <?php echo $contact['telephone']; ?></a></li>
				<?php } ?>
			</ul>
		</div>

	</div>


	<?php
		$image = get_field('link-image');
		$link = $image['link-link'];
		$title = get_sub_field('title');
	?>

	<?php if ( $link['link'] ) { ?>
	<div class="link-image">
		<div class="link-image--text">
			<span>
				<h3><?php echo $link['title']; ?></h3>
				<p><?php echo $link['excert']; ?></p>
			</span>
			
			<?php if ( $link['link'] ) { ?><a class="btn btn--secondary" target="<?php echo $link['link']['target']; ?>" href="<?php echo $link['link']['url']; ?>"><?php echo $link['link']['title']; ?></a><?php } ?>
		</div>
		<div class="link-image--image">
			<img loading="lazy" src="<?php echo $image['link_image']['url']; ?>" alt="<?php echo $image['link_image']['alt']; ?>" />
		</div>
		<?php } ?>

</section>

<?php the_content(); ?>

	
<?php endwhile; ?>

<?php get_footer(); ?>