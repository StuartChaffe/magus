<?php
/**
* The template used for displaying a form block.
*/
$content = get_field('form_content', false, false);
?>

<section class="form">
	<div class="container">
		<?php echo $content ?>
	</div>
</section>