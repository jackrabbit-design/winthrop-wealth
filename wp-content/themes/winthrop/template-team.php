<?php /*Template Name: Team Page*/ get_header(); the_post(); ?>
<?php echo get_template_part('inc/inc', 'banner'); ?>

<main class="team">
	    <section class="intro">
		    <div class="intro-wrap">
			    <?php the_content(); ?>
		    </div>
	    </section>
	    <?php //<img src="/ui/images/ring-alt.gif" class="loading" style="display: none;"/> ?>
	    <section id="team-bio" class="full-bio"></section>
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