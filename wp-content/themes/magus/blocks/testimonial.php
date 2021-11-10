<?php
/**
* The template used for displaying a testimonial.
*/
$quote = get_field('quote', false, false);
$author = get_field('author');
$button = get_field('button');
?>

<section class="testimonial">
	<div class="testimonial--inner">
		<?php if ( $quote ) { ?><p class="lead"><?php echo $quote; ?></p><?php } ?>
		<p class="testimonial--author"><?php if ( $author ) { ?><?php echo $author; ?><?php } ?></p>
	</div>
	<?php if ( $button ) { ?><a class="btn btn--primary" target="<?php echo $button['target']; ?>" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a><?php } ?>
</section>