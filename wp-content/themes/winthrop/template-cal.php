<?php /*Template Name: Financial Cal */ get_header(); the_post(); ?>
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
		<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js' type='text/javascript'></script><script type='text/javascript' src='http://www.calcxml.com/scripts/tipped/comboTipped.js' type='text/javascript'></script><script type='text/javascript' src='http://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.2/jquery.xdomainrequest.min.js'></script><script type='text/javascript' src='http://www.calcxml.com/scripts/loadCalc.js?headerBackgroundColor=%23ffffff&headerFontColor=%23566C0F&submitButtonColor=%23ffffff&submitButtonFontColor=%23566C0F&editButtonColor=%23897966&editButtonFontColor=%230c0c0c&calcTarget=bud01&skn=62'></script><div id='calc' style='padding-top: 10px;'></div>
		
		   </article>
		<?php get_sidebar(); ?>
    </section>
<?php get_footer(); ?>
<?php get_footer(); ?>