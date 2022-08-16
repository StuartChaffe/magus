<?php
/**
* The template used for displaying featured team.
*/
$featuredposts = get_field( 'select_posts' );
$title = get_field( 'posts_title' );
$button = get_field('button_text');
$intro = get_field('posts_intro');
?>

<?php if( $featuredposts ) { ?>
<div class="container">
	<section class="team">
	<?php if ( $title ) { ?>
		<h2><?php echo $title ?></h2>
	<?php } ?>
	<?php if ( $intro ) { ?>
		<div class="link-list--intro">
			<?php echo $intro ?>
		</div>
	<?php } ?>
		<div class="link-list">
			<?php foreach( $featuredposts as $featuredpost ):
				$title = get_the_title($featuredpost);
				$job = get_field('job_title', $featuredpost);
				$image = get_field('team_image', $featuredpost);
			?>
			<div class="link-list-item">
				<div class="link-list-item--image" style="background-image: url('<?php echo $image['url']; ?>')">
					<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				</div>
				<div class="link-list-item--content">
					<div class="link-list-item--content-title">
					<p><strong><?php echo $title; ?></strong></p>
						<p><?php echo $job; ?></p>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
		</div>
		<div class="link-list--button">
			<a href="/about-us/the-team" class="btn btn--primary"><?php if ($button) { ?><?php echo $button ?><?php } else { ?>Meet the team<?php } ?></a>
		</div>
	</section>
</div>
<?php } ?>