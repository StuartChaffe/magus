<?php
/**
* The template used for displaying a download block.
*/
$title = get_field('download_title');
$image = get_field('download_image');
$form = get_field('download_form');
?>

<div class="container">
	<section class="download">
		<?php if ( $title ) { ?>
			<h2><?php echo $title ?></h2>
		<?php } ?>

		<div class="link-list-item link-list-item__full">
			<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<div class="link-list-item--content">
				<div class="link-list-item--content-title">
					<?php echo $form; ?>
				</div>
			</div>
		</div>
	</section>
</div>