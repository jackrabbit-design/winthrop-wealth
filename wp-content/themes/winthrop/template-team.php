<?php /*Template Name: Team Page*/ get_header(); the_post(); ?>
<?php if(get_the_post_thumbnail()) { $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'inner-banner'); ?>
<div class="inner-header" style="background: url(<?php echo $image[0]; ?>) no-repeat center center;">
<?php } else { $di = get_field('default_interior_banner','option'); ?>
<div class="inner-header" style="background: url(<?php echo $di['sizes']['inner-banner']; ?>) no-repeat center center;">
<?php } ?>
	<div class="title-wrap">
		<h2 class="page-title"><?php the_title(); ?></h2>
	</div>
</div>

<main class="team">
	    <section class="intro">
		    <div class="intro-wrap">
			    <?php the_content(); ?>
		    </div>
	    </section>
	    <section class="full-bio"></section>
		<?php 
			query_posts(array('post_type' => 'team-member', 'post_per_page' => -1)); 
			if(have_posts()) :
		?>
		<ul>
		<?php while(have_posts()) : the_post(); ?>
			<li data-url="<?php echo $post->post_name;?>" >
			<?php $img = get_field('headshot'); ?>
			<img src="<?php echo $img['sizes']['head-shot']; ?>" />
			
			<div class="info">
				<h3><?php the_title(); ?> <small><?php the_field('job_title'); ?></small></h3>
				<?php if($link = get_field('linkedin')) { ?><a href="<?php echo $link; ?>" class="social"><i class="social-linkedin"></i></a><?php } ?>
			</div>
			<div class="mobile-bio">
				<?php the_content(); ?>
			</div>
			</li>
			<?php endwhile; ?>
		</ul>	    
		<?php endif; wp_reset_query(); ?>
</main>
<?php get_footer(); ?>