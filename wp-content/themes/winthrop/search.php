<?php get_header(); the_post(); ?>
   <main class="search">
<?php $di = get_field('default_interior_banner','option'); ?> 
<div class="inner-header" style="background: url(<?php echo $di['sizes']['inner-banner']; ?>) no-repeat center center;">

	    <div class="inner-header-wrap">
		 
		    <div class="title-wrap">
	        <h2 class="page-title">Search Results for <strong><?php echo get_search_query(); ?></h2>
		    </div>
	    </div>
    </div>


<section class="search-page clearfix">
<div class="results">
	<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
	<?php 
		
		if(have_posts()) : $count = 1; ?>
	    <ul class="clearfix query-results">
	    <?php while(have_posts()) : the_post(); ?>
	 
	  
		    <li>
		    	
		    	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		    	<?php if(get_the_category()){ the_category(', '); ?> | <?php } ?> <?php if(get_post_type()== 'post') { ?><time><?php echo get_the_date('F j');  echo'th, '; echo get_the_date('Y'); ?> </time><?php } ?>
			     <?php if($ec = get_the_excerpt()) { ?><p><?php  $trimEx = wp_trim_words($ec, 30); echo $trimEx; ?></p> <?php } ?>
				<a href="<?php the_permalink(); ?>" class="readmore">READ MORE</a>
		    </li>
		    <?php endwhile; ?>
	    </ul>
	    
	    
	    
	    	    <div class="loadmore">
			<?php next_posts_link( 'Loan More' ); ?>
		</div>
		<?php else : ?>
		<h3>Sorry we couldn't find anything.</h3>
		<?php endif; wp_reset_query(); ?>
</div>

<aside>
<?php query_posts(array('post_type'=> 'post', 'posts_per_page' => 1)); $pcount = 1; if(have_posts()) : while(have_posts()) : the_post(); ?>
	        <div class="side-blog">
		        <h3>Recent Post</h3>
		        <div class="blog-post">
		        <?php if(has_post_thumbnail()) { ?> 
			        <?php echo get_the_post_thumbnail($post->ID, 'side-blog')?>
			        <?php } ?>
			        <h4><?php the_title(); ?></h4>
			        <?php the_category(', '); ?> <?php if(get_the_category()){ echo '|'; } ?> <time><?php echo get_the_date('F j');  echo'th, '; echo get_the_date('Y'); ?> </time>
			        <p><?php $ec = get_the_excerpt(); $trimEx = wp_trim_words($ec, 17); echo $trimEx; ?></p>
			        <a href="<?php the_permalink(); ?>" class="readmore">READ MORE</a>
		        </div>
	        </div>
	        <?php endwhile; endif; wp_reset_query(); ?>

</aside>
</section>
	</main>
<?php get_footer(); ?>