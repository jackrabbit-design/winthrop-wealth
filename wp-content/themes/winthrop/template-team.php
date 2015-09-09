<?php /*Template Name: Team Page*/ get_header(); the_post(); ?>
<?php echo get_template_part('inc/inc', 'banner'); ?>

<main class="team">
	    <section class="intro">
		    <div class="intro-wrap">
			    <?php the_content(); ?>
		    </div>
	    </section>
	 	<div class="loading"></div>
	 	<?php $c = 1; $cb = 1;
			query_posts(array('post_type' => 'team-member', 'post_per_page' => -1)); 
			if(have_posts()) :
		?>
			<?php while(have_posts()) : the_post(); ?>
			 <section id="team-bio-<?php echo $c; ?>" class="full-bio">
			 	<button class="close-bio">Close Bio</button>
	            <article class="biography">
	           
	                <?php if(get_field('linkedin')) { ?><a href="<?php the_field('linkedin'); ?>" class="social"><i class="social-linkedin"></i></a> <?php } ?>
	                <h3><?php the_title(); ?></h3>
	               <?php if(get_field('job_title')){ ?> <h4><?php the_field('job_title'); ?></h4> <?php } if(get_the_content()) { ?> <?php the_content(); ?>

	                <?php } ?>
	                <?php if(get_field('email')) { ?>
						<a href="mailto:<?php the_field('email'); ?>" class="btn green">Email <?php the_title(); ?></a>
	                <?php } ?>
	            </article>
	            <?php $img = get_field('full_bio'); ?>
	            <div class="bio-image" style="background-image: url('<?php echo $img['sizes']['team-full']; ?>');"></div>
	            	<!-- <img src="<?php echo $img['sizes']['team-full']; ?>" alt="<?php $img['alt']; ?>"> -->
			 </section>

			<?php $c++; endwhile; ?>

	    <?php //<section id="team-bio" class="full-bio"></section> ?>
	
		<ul>
		<?php while(have_posts()) : the_post(); ?>
			<li data-url="#team-bio-<?php echo $cb; //echo $post->post_name; ?>" >
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
			<?php $cb++; endwhile; ?>
		</ul>	    
		<?php endif; wp_reset_query(); ?>
</main>
<?php get_footer(); ?>