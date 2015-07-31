<?php 
	/*Template Name: Blog Search */ 
	
	$cat = '';
		if(isset($_GET['cat'])){
			if($_GET['cat'] != 'All'){
				$cat = $_GET['cat'];
			}
		}
		$keyword = false;
			if(isset($_GET['search_keyword'])){
		    $keyword = $_GET['search_keyword'];
		}
	get_header(); 
	
	?>
   <main class="blog">
<?php if(get_the_post_thumbnail()) { $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'inner-banner'); ?>
<div class="inner-header" style="background: url(<?php echo $image[0]; ?>) no-repeat center center;">
<?php } else { $di = get_field('default_interior_banner','option'); ?>
<div class="inner-header" style="background: url(<?php echo $di['sizes']['inner-banner']; ?>) no-repeat center center;">
<?php } ?>
	    <div class="inner-header-wrap">
		 
		    <div class="title-wrap">
	        <h2 class="page-title"><?php  echo esc_html( get_search_query( false ) ); ?></h2>
		    </div>
	    </div>
    </div>
	
	   <?php get_template_part('inc-blogsearch'); ?>
	    
	    <?php $i = 1; $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
	      
	    <?php
		    	$args = array('post_type'=> 'post', 'posts_per_page'=> 6, 'order_by' => 'date', 'paged' => $paged, 'category_name' => $cat, 's' => $keyword );
		    	$the_query = new WP_Query($args); ?>
		    	<?php //echo '<pre>'; print_r($the_query); echo '</pre>'; ?>
		    	<?php 
		    	if($the_query->have_posts()): $count = 1; ?>
	    <ul class="clearfix query-results">
	    <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
			
		    <li <?php // if($i % 2) { echo'class="even"'; } else { echo 'class="odd"'; } ?>>
		    <?php $img_id = get_post_thumbnail_id($post->ID);
						$image = wp_get_attachment_image_src($img_id, 'blog-size'); 
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
		 <section class="main clearfix">
		Sorry, no posts matching your description. 
		 </section>
		   <?php endif; wp_reset_query(); ?>
	    
	</main>
<?php get_footer(); ?>