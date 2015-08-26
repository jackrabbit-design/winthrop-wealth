<?php /* Template Name: Resource Landing */ get_header(); the_post(); ?>
<?php echo get_template_part('inc/inc', 'banner'); ?>
    <main class="landing">
	     <section class="intro">
			    <div class="intro-wrap">
				    <?php the_content(); ?>
			    </div>
	    </section>
	    <?php if(have_rows('main_row')) : ?>
	    <section class="tools">
		    <ul>
			<?php while(have_rows('main_row')) : the_row(); 
				$title = get_sub_field('title');
				$content = get_sub_field('content');
				$link = get_sub_field('link');
				
				//image
				$img = get_sub_field('icon');
			?>
			    <li>
			    	<img src="<?php echo $img['sizes']['resource-icon']; ?>" alt="<?php echo $img['alt']; ?>"/>
			    	<h4><?php echo $title; ?></h4>
			    	<p><?php echo $content; ?></p>
			    	<?php if(get_sub_field('riskbutton')){ ?>
						<script src="https://riskalyze.com/hosted/b5fffa4bb6a6a6ec73f0/rq/It/sm/btn.js" type="text/javascript" data-logo="1" data-button-title="What's Your Risk Number?"></script>
			    	<?php } else { ?> 
			    	<a href="<?php echo $link; ?>" <?php if(get_sub_field('new_tab')) { echo 'target="_blank"'; } ?>class="link white">Learn More</a>
			    	<?php } ?>
			    </li>	    
			    <?php endwhile; ?>
		    </ul>
		    <?php endif; ?>
	    </section>
	    <section class="video-list clearfix">
		    <div class="wrapper">
			   <?php the_field('video_content'); ?>
		    </div>
		    <div class="clearfix">
		    <?php $video = 1; query_posts(array('post_type'=> 'video', 'posts_per_page' => 2)); if(have_posts()) : while(have_posts()) : the_post(); ?>
		    
		    <article class="video <?php if($video % 2 ) { echo 'odd'; } else { echo 'even'; } ?>">
				<a href="<?php the_field('video_url'); ?>?rel=0&amp;showinfo=0" class="video-thumb" style="background: url('http://img.youtube.com/vi/<?php the_field('video_id'); ?>/hqdefault.jpg') no-repeat center center;">
				    <span class="play"></span>
			    </a>
			    <div class="video-excerpt">
			   	 	<h4><?php the_title(); ?></h4>
			   	 		<span class="categories"><?php echo get_the_term_list($post->ID, 'video-type', '', ', '); ?></span>
			   	 	<?php the_content(); ?>
			    </div>
		    </article>
		    <?php $video++; endwhile; endif; wp_reset_query(); ?>
		    </div>
		   <div class="wrapper">
		   	 <a href="<?php the_field('video_link'); ?>" class="btn green">More Videos</a>
		    </div>
	    </section>
	    
    </main>
<?php get_footer(); ?>