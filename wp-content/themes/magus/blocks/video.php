<?php
/**
* The template used for displaying a video-block.
*/
$video = get_field('video_url');
?>

<section class="video">
	<iframe width="100%" height="680" src="<?php echo $video; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</section>