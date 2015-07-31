<?php /* Template Name: Resource Landing */ get_header(); the_post(); ?>
<?php if(get_the_post_thumbnail()) { $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'inner-banner'); ?>
<div class="inner-header" style="background: url(<?php echo $image[0]; ?>) no-repeat center center;">
<?php } else { $di = get_field('default_interior_banner','option'); ?>
<div class="inner-header" style="background: url(<?php echo $di['sizes']['inner-banner']; ?>) no-repeat center center;">
<?php } ?>
	<div class="inner-header-wrap">
		    <div class="title-wrap">
	       	 <h1 class="page-title"><?php the_title(); ?></h1>
		    </div>
	    </div>
    </div>
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
			    	<a href="<?php echo $link; ?>" class="link white">Learn More</a>
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