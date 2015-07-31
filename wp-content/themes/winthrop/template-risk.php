<?php /*Template Name: Riskalyze*/ get_header(); the_post(); ?>
<?php if(get_the_post_thumbnail()) { $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'inner-banner'); ?>
<div class="inner-header" style="background: url(<?php echo $image[0]; ?>) no-repeat center center;">
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
        <article id="info">
            <?php the_content(); ?>
           
            <script src="https://riskalyze.com/hosted/b5fffa4bb6a6a6ec73f0/rq/It/sm/btn.js" type="text/javascript" data-logo="1" data-button-title="What's Your Risk Number?"></script>
        </article>
		<?php get_sidebar(); ?>
    </section>
<?php get_footer(); ?>