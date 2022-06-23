<?php
/**
* The template used for displaying a featured list.
*/
$title = get_field( 'list_title' );
$intro = get_field('list_intro');
$button = get_field('button');
$stack = get_field('list_items_stack');
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

		<div class="link-list<?php if ( $stack  == 'true' ) { ?> link-list__stack<?php } ?>">
		<?php while( have_rows('list_items') ): the_row();
			$image = get_sub_field('image');
			$content = get_sub_field('content');
			$link = get_sub_field('link');
			$width = get_sub_field('list_item_full');
			$border = get_sub_field('link_border');
		?>

			<div class="link-list-item<?php if ( $width  == 'true' ) { ?> link-list-item__full<?php } ?>">
				<?php if ( $link ) { ?>
					<a href="<?php echo $link['url']; ?>" class="link-list-item--link" title="<?php echo $link['title']; ?>">
				<?php } else { ?>
					<div class="link-list-item--link">
				<?php } ?>
					<div class="link-list-item--image" style="background-image: url('<?php echo $image['url']; ?>')">
						<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					</div>
					<div class="link-list-item--content">
						<div class="link-list-item--content-title <?php echo $border; ?>">
							<?php echo $content; ?>
						</div>
					</div>
				<?php if ( $link ) { ?>
					</a>
				<?php } else { ?>
					</div>
				<?php } ?>
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