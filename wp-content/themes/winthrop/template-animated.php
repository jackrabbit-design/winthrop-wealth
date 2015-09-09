<?php 
	/* Template Name: Animated */ 
	get_header(); the_post(); ?>
<?php echo get_template_part('inc/inc', 'banner'); ?>
  <section class="top-content wrapper">
	<div class="top-wrap">
		<?php the_content(); ?>
	</div>
</section>
      <section class="main clearfix">
       <section class="animated">
           <div class="loader"></div>
           <?php if(have_rows('animated_infographic')) : ?>
       	<div class="animated-row one">
       	<?php while(have_rows('animated_infographic')) : the_row(); 
	       	$headline = get_sub_field('headline');
	       	$content = get_sub_field('content');
	       	$img = get_sub_field('icon'); 
       	?>
       		<div class="block">
       			<div class="top-animation">
       				<img src="<?php echo $img['sizes']['thumbnail']; ?>" class="icon" alt="<?php echo $img['alt']; ?>" width="75" width="75"/>
       				<div class="gray-arrow">
	       				<span><?php echo $headline; ?></span>
       				</div>
       			</div>
       			<div class="animated-text">
       				<?php echo $content; ?>
       			</div>
       		</div>
<?php endwhile; ?>
       	 </div>	
       	 <?php endif; ?>
       </section>	
   
    </section>
<?php get_footer(); ?>  