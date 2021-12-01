<?php
/**
* The template used for displaying a featured list.
*/
$title = get_field( 'list_title' );
$intro = get_field('list_intro');
$button = get_field('button');
?>

<div class="container">
	<section class="featured-list">
	<?php if ( $title ) { ?>
		<h2><?php echo $title ?></h2>
	<?php } ?>
	<?php if ( $intro ) { ?>
		<div class="link-list--intro">
			<?php echo $intro ?>
		</div>
	<?php } ?>

		<div class="link-list">
		<?php while( have_rows('list_items') ): the_row();
			$image = get_sub_field('image');
			$content = get_sub_field('content');
			$link = get_sub_field('link');
			$width = get_sub_field('list_item_full');
		?>

			<div class="link-list-item<?php if ( $width  == 'true' ) { ?> link-list-item__full<?php } ?>">
				<a href="<?php echo $link['url']; ?>" class="link-list-item--link" title="<?php echo $link['title']; ?>">
					<div class="link-list-item--image">
						<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					</div>
					<div class="link-list-item--content">
						<div class="link-list-item--content-title">
							<?php echo $content; ?>
						</div>
					</div>
				</a>
			</div>
		<?php endwhile; ?>

		</div>
		<?php if ( $button ) { ?>
		<div class="link-list--button">
			<a href="<?php echo $button['url'] ?>" class="btn btn--primary"><?php echo $button['title'] ?></a>
		</div>
		<?php } ?>
	</section>
</div>