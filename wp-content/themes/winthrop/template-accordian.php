<?php /*Template Name: Accordian*/ get_header(); the_post(); ?>
<?php if(get_the_post_thumbnail()) { $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'inner-banner'); ?> 
<div class="inner-header" style="background: url(<?php $image[0]; ?>) no-repeat center center;">
<?php } else { $di = get_field('default_interior_banner','option'); ?> 
<div class="inner-header" style="background: url(<?php echo $di['sizes']['inner-banner']; ?>) no-repeat center center;">
<?php } ?>	
	    <div class="inner-header-wrap">
		 
		    <div class="title-wrap">
	        <h2 class="page-title"><?php the_title(); ?></h2>
		    </div>
	    </div>
    </div>

    <section class="main clearfix">
        <article>
        <?php the_content(); ?>
		<?php if(have_rows('accordians')) : ?>
		
		<dl class="accordion">
		
			<?php while(have_rows('accordians')) : the_row(); ?>
				<dt><a href=""><?php the_sub_field('accordion_title'); ?></a></dt>
				<dd><?php the_sub_field('accordion_content'); ?></dd>
			<?php endwhile; ?>
			
		</dl>
         <?php endif; ?>
        <?php the_field('bottom_content'); ?>
        
        </article>
		<?php get_sidebar(); ?>
	</section>

<?php get_footer(); ?>