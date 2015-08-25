<?php /*Template Name: Riskalyze*/ get_header(); the_post(); ?>
<?php echo get_template_part('inc/inc', 'banner'); ?>
    <section class="main clearfix">
        <article id="info">
            <?php the_content(); ?>
           
           
        </article>
		<?php get_sidebar(); ?>
    </section>
<?php get_footer(); ?>