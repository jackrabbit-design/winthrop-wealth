<?php get_header(); the_post(); $di = get_field('404_image','option'); ?>
<div class="inner-header" style="background: url(<?php echo $di['sizes']['inner-banner']; ?>) no-repeat center center;">
	    <div class="inner-header-wrap">
		    <div class="title-wrap">
	        <h2 class="page-title">404: Page Not Found</h2>
		    </div>
	    </div>
    </div>
    <section class="main clearfix">
        <article id="info">
            <h2>Oops..</h2>
			<p>We're sorry, the page you're looking for couldn't be found.</p>
        </article>
		<?php get_sidebar(); ?>
    </section>
<?php get_footer(); ?>