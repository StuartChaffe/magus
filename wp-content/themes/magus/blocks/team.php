<?php
/**
* The template used for displaying all team members.
*/
$title = get_field('teams_title');
$intro = get_field('teams_intro');

?>
<?php
	$team = new WP_Query( array(
		'post_type' => 'team',
		'posts_per_page' => -1,
		'orderby' => 'date',
		'order' => 'DESC'
	));
?>

<div class="container">
	<section class="team">
	<?php if ( $title ) { ?>
		<h1><?php echo $title ?></h1>
	<?php } ?>
	<?php if ( $intro ) { ?>
		<div class="link-list--intro">
			<?php echo $intro ?>
		</div>
	<?php } ?>
		<div class="link-list">
			<?php while($team->have_posts()) : $team->the_post(); ?>

			<?php
				// $images = get_field('images', get_the_ID());
				$image = get_field('team_image', get_the_ID());
				$categories = get_field('job_title', get_the_ID());
				$job = get_field('job_title', get_the_ID());
				// $categories = get_filter_classes( 'maguscategories' );
			?>
			<div class="mix <?php echo $categories; ?> link-list-item" data-title="<?php the_title(); ?>">
				<div class="link-list-item--image">
					<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				</div>
				<div class="link-list-item--content">
					<div class="link-list-item--content-title">
						<p><strong><?php the_title(); ?></strong></p>
						<p><?php echo $job; ?></p>
					</div>
				</div>
			</div>

			<?php endwhile; wp_reset_query(); ?>
		</div>
	</section>
</div>