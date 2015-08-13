<?php /*Template Name: Contact */ get_header(); the_post(); ?>

<?php echo get_template_part('inc/inc', 'banner'); ?>

<section class="top-content wrapper">
	<div class="top-wrap">
		<?php the_content(); ?>
	</div>
</section>

<section class="main clearfix">

<?php if(have_rows('locations')) : while(have_rows('locations')) : the_row(); ?>
	<div class="location-row clearfix">
		
		<div class="location-column">
			<h2><?php the_sub_field('location_name'); ?></h2>
			<?php the_sub_field('column_one'); ?>
		</div>
		<div class="location-column">
			<?php the_sub_field('column_two'); ?>
		</div>
	</div>
<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>