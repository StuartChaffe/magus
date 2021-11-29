<?php
/**
* The template used for displaying a carousel.
*/
$items = get_field('carousel');
$title = get_field('carousel_title');
?>

<div class="container">
	<section class="carousel">
		<?php if ( $title ) { ?>
			<h2><?php echo $title ?></h2>
		<?php } ?>

		<div class="carousel--slider">
		<?php if( have_rows('carousel') ): ?>

			<?php while( have_rows('carousel') ): the_row();
				$image = get_sub_field('carousel_image');
				$content = get_sub_field('carousel_content');
			?>
			<div class="carousel--slider-item">
				<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
				<div class="carousel--slider-item--content"><p><?php echo $content ?></p></div>
			</div>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</section>
</div>