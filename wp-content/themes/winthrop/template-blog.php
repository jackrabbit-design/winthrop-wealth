<?php /*Template Name: Blog Landing */ get_header(); the_post(); ?>
   <main class="blog">
    <?php $p = 1; query_posts(array('post_type'=> 'post', 'posts_per_page'=> 1, 'order_by' => 'date')); if(have_posts()): while(have_posts()) : the_post(); ?>
<?php if(get_the_post_thumbnail()) { $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'inner-banner'); ?>
<div class="inner-header" style="background: url(<?php echo $image[0]; ?>) no-repeat center center;">
<?php } else { $di = get_field('default_interior_banner','option'); ?>
<div class="inner-header" style="background: url(<?php echo $di['sizes']['inner-banner']; ?>) no-repeat center center;">
<?php } ?>
	    <div class="inner-header-wrap">
		 
		    <div class="title-wrap">
	        <h2 class="page-title">The Blog</h2>
		    </div>
	    </div>
    </div>
		
		<section class="intro">
		
		    <div class="intro-wrap">
			     <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			    <p class="blog-meta"><?php the_category(', '); ?> <span>|</span> <strong><?php echo get_the_date('F j');  echo'th, '; echo get_the_date('Y'); ?></strong></p>
			    <p><?php $ec = get_the_excerpt(); $trimEx = wp_trim_words($ec, 25); echo $trimEx; ?></p>
			    <a href="<?php the_permalink(); ?>" class="btn green">Learn More</a>
		    </div>
		    <?php endwhile; endif; wp_reset_query(); ?>
	    </section>
	    
	   <?php get_template_part('inc-blogsearch'); ?>
	    
	    <?php $i = 1; $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;   query_posts(array('post_type'=> 'post', 'posts_per_page'=> 6, 'order_by' => 'date', 'paged' => $paged, 'offset' => 1)); if(have_posts()): $count = 1; ?>
	    <ul class="clearfix query-results">
	    <?php while(have_posts()) : the_post(); ?>
	 
	  
		    <li <?php // if($i % 2) { echo'class="even"'; } else { echo 'class="odd"'; } ?>>
		    <?php $img_id = get_post_thumbnail_id($post->ID); // This gets just the ID of the img
$image = wp_get_attachment_image_src($img_id, 'blog-size'); // Get URL of the image, and size can be set here too (same as with get_the_post_thumbnail, I think)
$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true); ?>
		    	<img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>"/>
		    	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		    	<?php the_category(', '); ?> | <time><?php echo get_the_date('F j');  echo'th, '; echo get_the_date('Y'); ?></time>
			    <p><?php $ec = get_the_excerpt(); $trimEx = wp_trim_words($ec, 17); echo $trimEx; ?></p>
				<a href="<?php the_permalink(); ?>" class="readmore">READ MORE</a>
		    </li>
		    <?php $i++; endwhile; ?>
	    </ul>
	    
	    <div class="loadmore">
			<?php next_posts_link( 'Loan More' ); ?>
		</div>
		<?php else: ?>
		
		<?php endif; wp_reset_query(); ?>
	    
	</main>
<?php get_footer(); ?>