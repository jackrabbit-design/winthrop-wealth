<?php get_header();   $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );?>

<?php $di = get_field('default_interior_banner','option'); ?> 
<div class="inner-header" style="background: url(<?php echo $di['sizes']['inner-banner']; ?>) no-repeat center center;">

	<div class="inner-header-wrap">
		    <div class="title-wrap">
	       	 <h1 class="page-title"><?php echo $term->name; ?></h1>
		    </div>
	    </div>
    </div>
	    <section class="video-list clearfix taxpage">
		    <div class="clearfix">
		    <?php $video = 1; query_posts(array('posts_per_page' => -1,'video-type' => $term->slug)); if(have_posts()) : while(have_posts()) : the_post(); ?>
		    
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
		 
	    </section>
<?php get_footer(); ?>


