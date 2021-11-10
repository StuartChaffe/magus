<?php
/**
* The template used for displaying a content block.
*/
$content = get_field('content');
?>
<div class="container">
	<section class="content">
		<?php echo $content; ?>
	</section>
</div>