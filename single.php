<?php get_header(); ?> 
	
<div class="page-content">
	<div class="inner-content">


		<div class="blog">
			<?php if( have_posts() ) : while(have_posts() ) : the_post(); ?>
				<div class="author author-single">
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
			<div id="disqus_thread"></div>
				<script>
				/**
				* RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
				* LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
				*/
				/*
				var disqus_config = function () {
				this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
				this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
				};
				*/
				(function() { // DON'T EDIT BELOW THIS LINE
				var d = document, s = d.createElement('script');

				s.src = '//jansentheme.disqus.com/embed.js';

				s.setAttribute('data-timestamp', +new Date());
				(d.head || d.body).appendChild(s);
				})();
				</script>
				<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>	
		</div>
	</div>
</div>
<?php get_footer(); ?>