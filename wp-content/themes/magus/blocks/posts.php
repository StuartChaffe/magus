<?php
/**
* The template used for displaying all posts.
*/
$title = get_field('posts_title');
$intro = get_field('posts_intro');

?>
<?php
	$posts = new WP_Query( array(
		'post_type' => 'post',
		'posts_per_page' => -1,
		'orderby' => 'date',
		'order' => 'DESC',
	));
?>

<?php if ($posts->have_posts()) : ?>
<div class="container">
	<section class="posts">
	<?php if ( $title ) { ?>
		<h1><?php echo $title ?></h1>
	<?php } ?>
	<?php if ( $intro ) { ?>
		<div class="link-list--intro">
			<?php echo $intro ?>
		</div>
	<?php } ?>
		<div class="link-list">
			<?php while($posts->have_posts()) : $posts->the_post(); ?>

				<?php
					$banner = get_field('banner_image', get_the_ID());
					$image = get_field('square_image', get_the_ID());
				?>
				<div class="link-list-item">
					<a href="<?php esc_url( the_permalink() ); ?>" class="link-list-item--link" title="Article: <?php the_title(); ?>">
						<div class="link-list-item--image">
							<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						</div>
						<div class="link-list-item--content">
							<div class="link-list-item--content-title">
								<p><?php the_title(); ?></p>
							</div>
						</div>
					</a>
				</div>
				
			<?php endwhile; wp_reset_query(); ?>
		</div>
	</section>
</div>
<?php endif; ?>