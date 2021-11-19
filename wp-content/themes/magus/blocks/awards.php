<?php
/**
* The template used for displaying awards.
*/
$title = get_field('awards_title');
$intro = get_field('awards_intro');
$button = get_field('button');
?>

<div class="container">
	<section class="awards">
	<?php if ( $title ) { ?>
		<h2><?php echo $title ?></h2>
	<?php } ?>
	<?php if ( $intro ) { ?>
		<div class="awards--intro">
			<?php echo $intro ?>
		</div>
	<?php } ?>
	<div class="awards--images">
	<?php while( have_rows('images') ): the_row();
		$image = get_sub_field('image');
	?>
		<div class="awards--images-item">
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		</div>
	<?php endwhile; ?>
	</div>

	<?php if ( $button ) { ?><a class="btn" target="<?php echo $button['target']; ?>" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a><?php } ?>
	</section>
</div>