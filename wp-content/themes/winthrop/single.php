<?php get_header(); the_post(); ?>
<?php if(get_the_post_thumbnail()) { $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'inner-banner'); ?> 
<div class="inner-header" style="background: url(<?php echo $image[0]; ?>) no-repeat center center;">
<?php } else { $di = get_field('default_interior_banner','option'); ?> 
<div class="inner-header" style="background: url(<?php echo $di['sizes']['inner-banner']; ?>) no-repeat center center;">
<?php } ?>	
	    <div class="inner-header-wrap">
		 
		    <div class="title-wrap">
	        <h2 class="page-title">Our Blog</h2>
		    </div>
	    </div>
    </div>
    <section class="main blog clearfix">
	    <div class="social-icons">
		<a target="_blank" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>"><i class="social-twitter"></i></a>
		<a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="social-facebook"></i></a>
		<a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=<?php echo get_the_excerpt(); ?>&source=<?php the_permalink(); ?>"><i class="social-linkedin"></i></a>
		<a target="_blank" href="mailto:?subject=<?php the_title(); ?>">share</a>

		    <!-- <span class='st_twitter_large' displayText='Tweet'></span>
		    <span class='st_facebook_large' displayText='Facebook'></span>
			<span class='st_linkedin_large' displayText='LinkedIn'></span>
			<span class='st_sharethis_large' displayText='ShareThis'></span> -->
	    </div>
        <article>
        <div class="blog-title">
       <h1><?php the_title(); ?></h1>
       <?php echo get_the_category_list(', '); ?> | <time><?php echo get_the_date('F j');  echo'th, '; echo get_the_date('Y'); ?></time>
        </div>
		<?php the_content(); ?>
		
		<div class="social-mobile">
		<a class="btn-social twitter" target="_blank" href="https://twitter.com/intent/tweet?text=YOUR-TITLE&url=YOUR-URL&via=TWITTER-HANDLE">Share on Twitter</a>
<a class="btn-social facebook" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=YOUR-URL">Share on Facebook</a>
<a class="btn-social google" target="_blank" href="https://plus.google.com/share?url=YOUR-URL">Share on Google+</a>
<a class="btn-social linkedin" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=YOUR-URL&title=YOUR-TITLE&summary=YOUR-SUMMARY&source=YOUR-URL">Share on LinkedIn</a>
<a class="btn-social pinterest" target="_blank" href="http://pinterest.com/pin/create/button/?url=YOUR-URL&description=YOUR-DESCRIPTION&media=YOUR-IMAGE-SRC">Pin on Pinterest</a>
		<!-- 
		    <span class='st_twitter_large' displayText='Tweet'></span>
		    <span class='st_facebook_large' displayText='Facebook'></span>
			<span class='st_linkedin_large' displayText='LinkedIn'></span>
			<span class='st_sharethis_large' displayText='ShareThis'></span> -->
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