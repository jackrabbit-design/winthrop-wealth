<?php 
/*Template Name: About */
get_header(); the_post(); ?>
<?php echo get_template_part('inc/inc', 'banner'); ?>

<section class="top-content wrapper">
	<div class="top-wrap">
		<?php the_field('top_content'); ?>
	</div>
</section>

<section class="main clearfix">
	<div class="philosophy">
		<?php the_content(); ?>
	</div>
	<div class="cornerstones">
		<h3><?php the_field('accordion_title'); ?></h3>
		<?php if(have_rows('sidebar_accordions')) : ?>
		<ul>
			<?php while(have_rows('sidebar_accordions')) : the_row(); ?>
			<li class="clearfix">
				<div class="circle"></div>
				<div class="content">
					<h5><?php the_sub_field('title'); ?></h5>
					<div class="hidden">
						<?php the_sub_field('content'); ?>
					</div>
				</div>
			</li>
		<?php endwhile; ?>	
		</ul>
	<?php endif; ?>
	</div>
</section>
<section class="by-numbers">
	<div class="wrapper">
		<h3><?php the_field('by_numbers'); ?></h3>
		<?php $c = 1; if(have_rows('by_the_numbers')) : ?>
		<ul>
			<?php while(have_rows('by_the_numbers')) : the_row(); ?>
			<li class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay="<?php echo $c/3; ?>s">
				<div><?php the_sub_field('number'); ?><?php if($sm = get_sub_field('small_text')) { ?><small><?php echo $sm; ?></small><?php } ?></div>
				<p><?php the_sub_field('descriptions'); ?></p>
			</li>
		<?php $c++; endwhile; ?>

	</ul>
<?php endif; ?>
<!-- 		<ul>
			<li>
				<div>1985</div>
				<p>Founded by Earl and Mark Winthrop</p>
			</li>
			<li>
				<div>$1.3<small>BILLION</small></div>
				<p>In client assets under managment</p>
			</li>
			<li>
				<div>99%</div>
				<p>Client retnention over th last 25+ years</p>
			</li>
			<li>
				<div>25<small>years</small></div>
				<p>Assoicate with LPL Financial the nations leading broker to independent advisors</p>
			</li>
		</ul> -->
	</div>
</section>
<?php get_footer(); ?>