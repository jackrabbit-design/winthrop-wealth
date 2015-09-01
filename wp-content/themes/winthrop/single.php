<?php get_header(); the_post(); 

//Category Title 
$CatName = array();
$cats = get_the_category($post->ID);

	foreach($cats as $cat){
		$CatName = $cat->name; 
	}

if(get_field('hide_banner')) { ?>


    <div class="no-banner">
		
	        <h2 class="page-title"><?php echo $CatName; ?></h2>
		
	</div>

  <?php } else { ?>
	<?php if(get_the_post_thumbnail()) { $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'inner-banner'); ?> 
<div class="inner-header" style="background: url(<?php echo $image[0]; ?>) no-repeat center center;">
<?php } else { $di = get_field('default_interior_banner','option'); ?> 
<div class="inner-header" style="background: url(<?php echo $di['sizes']['inner-banner']; ?>) no-repeat center center;">
<?php } ?>	
	    <div class="inner-header-wrap">
		 
		    <div class="title-wrap">
	        <h2 class="page-title"><?php echo $CatName; ?></h2>
		    </div>
	    </div>
    </div>
  <?php } ?>
    <section class="main blog clearfix">
	    <div class="social-icons desktop">
			<a target="_blank" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>"><i class="social-twitter"></i></a>
			<a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="social-facebook"></i></a>
			<a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=<?php echo get_the_excerpt(); ?>&source=<?php the_permalink(); ?>"><i class="social-linkedin"></i></a>
			<a href="mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink(); ?>">share</a>
	    </div>
        <article>
        <div class="blog-title">
     	  <h1><?php the_title(); ?></h1>
     	 <?php if(get_field('hide_banner')) { ?>
			<?php if(get_the_post_thumbnail()) { $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'blog-size'); ?>
				<img src="<?php echo $image[0]; ?>" class="logo-banner"/>
			<?php } ?>
     	 <?php } ?>
       	<?php echo get_the_category_list(', '); ?> | <time><?php echo get_the_date('F j');  echo'th, '; echo get_the_date('Y'); ?></time>
        </div>
		<?php the_content(); ?>
		
		<div class="social-icons mobile">
			<a target="_blank" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>"><i class="social-twitter"></i></a>
			<a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="social-facebook"></i></a>
			<a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=<?php echo get_the_excerpt(); ?>&source=<?php the_permalink(); ?>"><i class="social-linkedin"></i></a>
			<a href="mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink(); ?>">share</a>
	    </div>
            
        </article>
		<div class="side-wrapper clearfix">
        <aside>
	        
	        <nav class="side">
		        <h3>Categories</h3>
<!--
		         
                    <li class="current-menu-item"><a href="interior.html">Investing</a></li>
                    <li class=""><a href="interior.html">Wealth Managment</a></li>
                    <li class=""><a href="interior.html">Life at Winthrop</a></li>
					<li class=""><a href="interior.html">Stock Market Trends</a></li>
		        </ul>
-->	<ul>
		        <?php wp_list_categories(array('title_li' => '','style' => 'list',) ); ?> 
</ul>
	        </nav>
	        <?php if($relatedPost = get_field('related_post')) { 
					$post = $relatedPost;
					setup_postdata( $post ); 
	        ?>
	        <div class="side-blog">
		        <h3>Related Post</h3>
		        <div class="blog-post">
		        <?php if(has_post_thumbnail()) { 
			        echo get_the_post_thumbnail( $post_id, 'full' ); 
		        ?> 
<!-- 			        <img src="http://placebear.com/290/150" alt=""/> -->
			        <?php } ?>
			        <h4><?php the_title(); ?></h4>
					<?php echo get_the_category_list(', '); ?> | <time><?php echo get_the_date('F j');  echo'th, '; echo get_the_date('Y'); ?></time>
			        <p><?php $ec = get_the_excerpt(); $trimEx = wp_trim_words($ec, 17); echo $trimEx; ?></p>
				 <a href="<?php the_permalink(); ?>" class="readmore">READ MORE</a>
		        </div>
	        </div>
	        <?php  wp_reset_postdata(); } ?>
        </aside>
		</div>
    </section>
<?php get_footer(); ?>