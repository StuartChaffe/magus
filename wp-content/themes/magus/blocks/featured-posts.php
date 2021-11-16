<?php
/**
* The template used for displaying featured posts.
*/
$featuredposts = get_field( 'select_posts' );
$size = get_field( 'posts_size' );
$title = get_field( 'posts_title' );
$button = get_field('button_text');
$intro = get_field('posts_intro');
?>

<?php if( $featuredposts ) { ?>
<div class="container">
	<section class="posts">
	<?php if ( $title ) { ?>
		<h2><?php echo $title ?></h2>
	<?php } ?>
	<?php if ( $intro ) { ?>
		<div class="link-list--intro">
			<?php echo $intro ?>
		</div>
	<?php } ?>
		<div class="link-list <?php if ( $size  == 'posts-large' ) { ?>link-list--featured<?php } ?> ">
			<?php foreach( $featuredposts as $featuredpost ):
				$title = get_the_title($featuredpost);
				$desc = get_field( 'event_desc', $featuredpost);
				$image = get_field('square_image', $featuredpost);
			?>
			<div class="link-list<?php if ( $size  == 'posts-large' ) { ?>--featured<?php } ?>-item">
				<a href="<?php the_permalink($featuredpost); ?>" class="link-list-item--link" title="Permalink to <?php echo $title; ?>">
					<div class="link-list<?php if ( $size  == 'posts-large' ) { ?>--featured<?php } ?>-item--image">
						<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					</div>
					<div class="link-list<?php if ( $size  == 'posts-large' ) { ?>--featured<?php } ?>-item--content">
						<div class="link-list<?php if ( $size  == 'posts-large' ) { ?>--featured<?php } ?>-item--content-title">
							<p><?php echo $title; ?></p>
						</div>
					</div>
				</a>
			</div>
		<?php endforeach; ?>
		</div>
		<div class="link-list--button">
			<a href="/magus-thinking" class="btn btn--primary"><?php if ($button) { ?><?php echo $button ?><?php } else { ?>View More<?php } ?></a>
		</div>
	</section>
</div>
<?php } else { ?>
<?php
	$the_query = new WP_Query( array(
		'post_type' => 'post',
		'posts_per_page' => 3,
		'orderby' => 'date',
		'order' => 'DESC',
	));
?>
<div class="container">
	<section class="posts">
	<?php if ( $title ) { ?>
		<h2><?php echo $title ?></h2>
	<?php } ?>
	<?php if ( $intro ) { ?>
		<div class="link-list--intro">
			<?php echo $intro ?>
		</div>
	<?php } ?>
		<div class="link-list">

		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
			<?php
				$images = get_field('images', get_the_ID());
				$image = get_field('square_image', get_the_ID());
			?>
			<div class="link-list-item">
				<a href="<?php esc_url( the_permalink() ); ?>" class="link-list-item--link" title="Permalink to <?php the_title(); ?>">
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
		<?php endwhile;?>
		</div>
		<div class="link-list--button">
			<a href="/magus-thinking" class="btn btn--primary"><?php if ($button) { ?><?php echo $button ?><?php } else { ?>View More<?php } ?></a>
		</div>
	</section>
</div>

<?php } ?>