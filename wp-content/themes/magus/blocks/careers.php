<?php
/**
* The template used for displaying all team members.
*/
?>
<?php
	$career = new WP_Query( array(
		'post_type' => 'careers',
		'posts_per_page' => -1,
		'orderby' => 'date',
		'order' => 'DESC'
	));
?>
<div class="container">
	<section class="careers">
			<?php while($career->have_posts()) : $career->the_post(); ?>

			<?php
				$position = get_field('job_position', get_the_ID());
				$location = get_field('job_location', get_the_ID());
				$description = get_field('job_description', get_the_ID());
			?>
			<div class="careers-item">
				<h2><?php the_title(); ?></h2>
				<p><span>Position:</span><?php echo $position; ?></p>
				<p><span>Location:</span><?php echo $location; ?></p>
				<p><span>Description:</span><?php echo $description; ?></p>

				<a class="btn" href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>">View Job Specifications</a>
			</div>

			<?php endwhile; wp_reset_query(); ?>
	</section>
</div>