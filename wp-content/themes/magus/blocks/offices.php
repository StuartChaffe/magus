<?php
/**
* The template used for displaying offices.
*/

?>
<div class="container">
	<section class="office-list">
		<div class="link-list">
		<?php while( have_rows('offices') ): the_row();
			$image = get_sub_field('office_image');
			$content = get_sub_field('office_content');
		?>
			<div class="link-list-item">
				<div class="link-list-item--image" style="background-image: url('<?php echo $image['url']; ?>')">
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				</div>
				<div class="link-list-item--content">
					<?php echo $content; ?>
				</div>
			</div>
		<?php endwhile; ?>
		</div>
	</section>
</div>