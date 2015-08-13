<?php /*Template Name: Video*/ get_header(); ?>
<?php echo get_template_part('inc/inc', 'banner'); ?>

<main class="video">
    <section class="intro">
			    <div class="intro-wrap">
				    <?php the_content(); ?>
			    </div>
	    </section>
 <section class="video-list clearfix full-list">

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
	

		
	    </section>
</main>
<?php get_footer(); ?>