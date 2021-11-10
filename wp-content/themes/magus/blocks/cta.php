<?php
/**
* The template used for displaying a cta block.
*/
$content = get_field('cta_content');
$button = get_field('cta_button');
?>

<div class="container">
	<?php if ( $content ) { ?>
	<section class="cta">
		<?php echo $content ?>
		<?php if ( $button ) { ?><a class="btn" target="<?php echo $button['target']; ?>" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a><?php } ?>
	</section>
	<?php } else { ?>
	<section class="cta--button">
		<?php if ( $button ) { ?><a class="btn btn--primary" target="<?php echo $button['target']; ?>" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a><?php } ?>
	</section>
	<?php } ?>
</div>