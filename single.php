<?php get_header(); ?> 
	
<div class="page-content">
	<div class="inner-content">


		<div class="blog">
			<?php if( have_posts() ) : while(have_posts() ) : the_post(); ?>
				<div class="author">
					Posted by
					<a href="<?php echo get_author_posts_url(get_the_author_meta( "ID" )); ?>">
						<?php the_author() ?>
					</a>
					on the <?php the_time("F j, Y"); ?>

				</div>
				<div class="page-title">
					<h1><?php the_title(); ?></h1>
				</div>

				<?php the_post_thumbnail('banner-image'); ?>
				<p><?php the_content(); ?></p>
				
			<?php endwhile; else: ?>
				No Posts Found.
			<?php endif; ?>
			
		</div>
	</div>
</div>
<?php get_footer(); ?>