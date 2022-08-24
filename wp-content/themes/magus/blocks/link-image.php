<?php
/**
* The template used for displaying a link with image.
*/
$image = get_field('link_image');
$link = get_field('link-link');
?>

<div class="container">
	<section class="link-image">
		<div class="link-image--text">
			<span>
				<h3><?php echo $link['title']; ?></h3>
				<p><?php echo $link['excerpt']; ?></p>
			</span>
			
			<?php if ( $link['link'] ) { ?><a class="btn btn--secondary" target="<?php echo $link['link']['target']; ?>" href="<?php echo $link['link']['url']; ?>"><?php echo $link['link']['title']; ?></a><?php } ?>
		</div>
		<div class="link-image--image">
			<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		</div>
	</section>
</div>