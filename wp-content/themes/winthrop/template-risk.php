<?php /*Template Name: Riskalyze*/ get_header(); the_post(); ?>
<?php echo get_template_part('inc/inc', 'banner'); ?>
    <section class="main clearfix">
        <article id="info">
            <?php the_content(); ?>
           
            <script src="https://riskalyze.com/hosted/b5fffa4bb6a6a6ec73f0/rq/It/sm/btn.js" type="text/javascript" data-logo="1" data-button-title="What's Your Risk Number?"></script>
        </article>
		<?php get_sidebar(); ?>
    </section>
<?php get_footer(); ?>