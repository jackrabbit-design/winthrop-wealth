<?php /*Template Name: Accordian*/ get_header(); the_post(); ?>
<?php echo get_template_part('inc/inc', 'banner'); ?>

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