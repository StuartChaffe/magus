<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php
	$image = get_field('banner_image', get_the_ID());
	$imagesquare = get_field('square_image', get_the_ID());
	$author = get_field('author', get_the_ID());
?>
<?php if ($image) { ?>

<section class="banner">
	<!-- <div class="banner--image" style="background-image: url('<?php echo $image['url']; ?>')"> -->
	<div class="banner--image">
		<img loading="lazy" class="hidemobile" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<img loading="lazy" class="hidedesktop" src="<?php echo $imagesquare['url']; ?>" alt="<?php echo $imagesquare['alt']; ?>" />
	</div>
	<div class="container">
		<div class="banner--title">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
</section>
<?php } ?>

<?php the_content(); ?>

	
<?php endwhile; ?>

<?php get_footer(); ?>