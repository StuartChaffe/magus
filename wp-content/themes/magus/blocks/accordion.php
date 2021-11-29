<?php
/**
* The template used for displaying an accordion.
*/
// TITLE? $content = get_field( 'accordion_content');
?>
<div class="container">
	<section class="accordion">
		<?php if( have_rows('accordion') ): ?>
			<ul class="accordion">
			<?php while( have_rows('accordion') ): the_row();
				$title = get_sub_field('accordion_title', false, false);
				$content = get_sub_field('accordion_content');
				$image = get_sub_field('accordion_logo');
			?>
				<li>
					<button class="accordion--title" aria-expanded="false"><?php echo $title ?> <svg class="icon icon--open"><use xlink:href="#open"></use></svg><svg class="icon icon--close"><use xlink:href="#close"></use></svg></button>
					<div class="accordion--content">
					<?php if ( $image ) { ?>
						<div class="accordion--content-image">
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						</div>
					<?php } ?>
						<div class="accordion--content-text">
							<?php echo $content ?>
						</div>
					</div>
				</li>
			<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</section>
</div>