<?php
/**
* The template used for displaying a banner.
*/
$image = get_field('banner_image');
$title = get_field('banner_title', false, false);
?>

<section class="banner">
	<div class="banner--image" style="background-image: url('<?php echo $image['url']; ?>')">
		<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	</div>
	<div class="container">
		<div class="banner--title">
			<?php if ( $title ) { ?><h1><?php echo $title ?></h1><?php } ?>
		</div>
	</div>
</section>