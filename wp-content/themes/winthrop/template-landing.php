<?php /*Template Name: Services Landing*/ get_header(); the_post(); ?>


<?php echo get_template_part('inc/inc', 'banner'); ?>


    <main class="services-landing">
<section class="top-content wrapper" style="border: none;">
	<div class="top-wrap">
		<?php the_content(); ?>
	</div>
</section>
	    <div id="tabs">
		    <ul>
			    <li><a href="#tab-1">Personal</a></li>
			     <li><a href="#tab-2">Business</a></li>
		    </ul>
		    <section id="tab-1" class="tab-content">
		    <?php if(have_rows('personal_services')) : while(have_rows('personal_services')) : the_row(); ?>
				<article class="service">
						<div class="wrapper">
							<?php if($imgSrc = get_sub_field('service_icon')) { ?>
							<img src="<?php echo $imgSrc['sizes']['service-icon']; ?>" alt="<?php echo $imgSrc['alt']; ?>"  />
							<?php } ?>
							<div class="content">
							<?php the_sub_field('service_content'); ?>
							<a href="<?php the_sub_field('service_link'); ?>" class="link green">Learn More</a></div>
						</div>
				</article>
				<?php endwhile; endif; ?>		
		    </section>
		    <section id="tab-2" class="tab-content">
		    <?php if(have_rows('business_services')) : while(have_rows('business_services')) : the_row(); ?>
				<article class="service">
						<div class="wrapper">
						<?php if($imgSrc = get_sub_field('service_icon')) { ?>
							<img src="<?php echo $imgSrc['sizes']['service-icon']; ?>" alt="<?php echo $imgSrc['alt']; ?>"  />
							<?php } ?>
							<div class="content">
							<?php the_sub_field('service_content'); ?>
							<a href="<?php the_sub_field('service_link'); ?>" class="link green">Learn More</a></div>
						</div>
				</article>
				<?php endwhile; endif; ?>   
		    </section>
	    </div>   
    </main>
<?php get_footer(); ?>