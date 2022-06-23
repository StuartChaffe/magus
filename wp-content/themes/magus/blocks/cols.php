<?php
/**
* The template used for displaying a column block.
*/
?>

<div class="container">
	<section class="cols">
	<?php while( have_rows('cols') ): the_row();
		$icon = get_sub_field('cols_icon');
		$content = get_sub_field('cols_content');
	?>
		<div class="cols-item">
			<?php if ( $icon ) { ?>
				<div class="cols-item--image">
					<img loading="lazy" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
				</div>
			<?php } ?>
			<div class="cols-item--content">
				<?php echo $content; ?>
			</div>
		</div>
	<?php endwhile; ?>
	</section>
</div>