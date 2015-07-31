<?php /*Template Name: Services Landing*/ get_header(); the_post(); ?>
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
    <main class="services-landing">
	    <section class="intro">
		    <div class="intro-wrap">
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