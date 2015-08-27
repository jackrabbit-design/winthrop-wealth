<?php /*Template Name: Generic Landing Page*/ get_header(); the_post(); ?>
<?php echo get_template_part('inc/inc', 'banner'); ?>

    <main class="landing">
	     <section class="intro">
			    <div class="intro-wrap">
				    <?php the_content(); ?>
			    </div>
	    </section>
	    <?php $c=1; if(have_rows('landing_fields')) : ?>
	    <section class="generic-landing">
			<ul>
				<?php while(have_rows('landing_fields')) : the_row(); ?>
				<li>
			    	<h4><?php the_sub_field('title'); ?></h4>
			    	<p><?php the_sub_field('description'); ?></p>
			    	<a href="<?php the_sub_field('link'); ?>" target="_blank" class="link green"><?php if(get_sub_field('optional_link_text')) { ?><?php } else { ?>Learn More<?php } ?></a>
			    </li>
			    <?php if($c % 3 == 0) { ?>
						</ul><ul>
			    <?php } ?>
			<?php $c++; endwhile; ?>
			</ul>
		<?php endif; ?>
	    </section>

	</main>

<?php get_footer(); ?>