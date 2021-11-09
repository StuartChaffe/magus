<?php
/**
* The template used for displaying a testimonial.
*/
$quote = get_field('quote', false, false);
$author = get_field('author');
?>

<div class="container">
	<section class="testimonial">
		<?php if ( $quote ) { ?><p class="lead"><?php echo $quote; ?></p><?php } ?>
		<p class="testimonial--author"><?php if ( $author ) { ?><?php echo $author; ?><?php } ?></p>
	</section>
</div>