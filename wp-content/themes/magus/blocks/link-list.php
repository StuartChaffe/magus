<?php
/**
* The template used for displaying a link list.
*/

?>
<div class="container">
	<section class="link-list-color">
		<div class="link-list">
		<?php while( have_rows('links') ): the_row();
			$button = get_sub_field('link_button');
			$content = get_sub_field('link_content');
		?>
			<div class="link-list-item">
				<div class="link-list-item--content">
					<?php if ( $button ) { ?><a class="btn" target="<?php echo $button['target']; ?>" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a><?php } ?>
					<?php echo $content; ?>
				</div>
			</div>
		<?php endwhile; ?>
		</div>
	</section>
</div>