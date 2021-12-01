<?php
/**
* The template used for displaying platforms.
*/

?>
<div class="container">
	<section class="platforms">
	<?php while( have_rows('platforms') ): the_row();
		$link = get_sub_field('platform_link');
		$image = get_sub_field('platform_image');
	?>
		<a target="<?php echo $link['target']; ?>" href="<?php echo $link['url']; ?>" class="platforms-item">
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		</a>
	<?php endwhile; ?>
	</section>
</div>