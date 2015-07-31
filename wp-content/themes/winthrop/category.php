<?php 
	get_header(); 

	?>
   <main class="blog">
<?php $di = get_field('default_interior_banner','option'); ?> 
<div class="inner-header" style="background: url(<?php echo $di['sizes']['inner-banner']; ?>) no-repeat center center;">

	    <div class="inner-header-wrap">
		 
		    <div class="title-wrap">
	        <h2 class="page-title"><?php single_cat_title( '', true ); ?></h2>
		    </div>
	    </div>
    </div>
	
	   <?php get_template_part('inc-blogsearch'); ?>
	    
	    <?php 
		    	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		    	$args = array( 'posts_per_page' => 6, 'paged' => $paged );
				$args = array_merge( $args, $wp_query->query );
				query_posts( $args );
		    	if(have_posts()): ?>
		    	
			    <ul class="clearfix query-results">
			    <?php while(have_posts()) : the_post(); ?>
	 
	  
		    <li>
		    <?php $img_id = get_post_thumbnail_id($post->ID); $image = wp_get_attachment_image_src($img_id, 'blog-size');
$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true); ?>
		    	<img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>"/>
		    	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		    	<?php the_category(', '); ?> | <time><?php echo get_the_date('F j');  echo'th, '; echo get_the_date('Y'); ?></time>
			    <p><?php $ec = get_the_excerpt(); $trimEx = wp_trim_words($ec, 17); echo $trimEx; ?></p>
				<a href="<?php the_permalink(); ?>" class="readmore">READ MORE</a>
		    </li>
		    <?php endwhile; ?>
	    </ul>
	    
	    <div class="loadmore">
			<?php next_posts_link( 'Loan More' ); ?>
		</div>
		<?php else: ?>
		
		<?php endif; wp_reset_query(); ?>
	    
	</main>
<?php get_footer(); ?>