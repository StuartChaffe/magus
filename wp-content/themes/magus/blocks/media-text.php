<?php
/**
* The template used for displaying a media text block.
*/
$media = get_field('media_video');
$text = get_field('media_text');
$pos = get_field('media_position');
?>

<div class="container">
	<section class="media-text <?php if ( $pos  == 'media-text--media__right' ) { ?><?php echo $pos; ?><?php } ?>">
		<div class="media-text--media">
			<?php echo $media; ?>
		</div>
		<div class="media-text--text">
			<?php echo $text; ?>
		</div>
		
	</section>
</div>