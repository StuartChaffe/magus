<?php
/**
* The template used for displaying a cta block.
*/
$content = get_field('cta_content');
$button = get_field('cta_button');
?>

<div class="container">
	<section class="cta">
		<?php echo $content ?>
		<a class="btn" target="<?php echo $button['target']; ?>" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
	</section>
</div>