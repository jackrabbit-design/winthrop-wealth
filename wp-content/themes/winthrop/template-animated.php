<?php 
	/* Template Name: Animated */ 
	get_header(); the_post(); ?>
<?php echo get_template_part('inc/inc', 'banner'); ?>
    <section class="main clearfix">
	<article>
	<?php the_content(); ?>
	</article>
	<aside>
	<div class="extra-content">
	<?php the_field('side_text'); ?>
	</div>
	</aside>
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
<!--
       		<div class="block">
       			<div class="top-animation">
       				<img src="<?php bloginfo('url'); ?>/ui/images/animated/magnify.png" class="icon"  width="75" width="75"/>
       				<div class="gray-arrow">
	       				<span>Discovery Meeting</span>
       				</div>
       			</div>
       			<div class="animated-text">
       				<h4>Right Fit</h4>
	       				<p>How can we help you achieve a high level of fulfillment and happiness?</p>
	       				<p>What are your personal and financial goals and objectives?</p>
	       				<p>What does your present financial picture look like?</p>
	       				<p>How can we empower you to be a better steward of your financial resources?</p>
       			</div>
       		</div>
       		<div class="block">
       			<div class="top-animation">
       				<img src="<?php bloginfo('url'); ?>/ui/images/animated/board.png" class="icon"  width="75" width="75"/>
       				<div class="gray-arrow">
	       				<span>Financial Planning</span>
       				</div>
       			</div>
	   			<div class="animated-text">
       				<h4>Designing Your Personalized Financial Strategy</h4>
	       				<p>What are your income needs going forward? </p>
	       				<p>What is the risk-reward tradeoff you are comfortable with, over what period of time? </p>
	       				<p>Custom designing your plan and course of action </p>
       			</div>
       		</div>

       	



       		<div class="block">
       			<div class="top-animation">
       				<img src="<?php bloginfo('url'); ?>/ui/images/animated/breifcase.png" class="icon"  width="75" width="75"/>
       				<div class="gray-arrow">
	       				<span>Investment Management</span>
       				</div>
       			</div>
       			<div class="animated-text">
       				<h4>Developing Your Long-term Investment Strategy</h4>
	       				<p>Create Investment Policy Statement that outlines investment objectives.</p>
	       				<p>Design asset allocation consistent with financial planning parameters and investment objectives</p>
	       				<p>Determine security selection consistent with risk and return profile </p>
       			</div>
       		</div>
       		<div class="block">
       			<div class="top-animation">
       				<img src="<?php bloginfo('url'); ?>/ui/images/animated/computer.png" class="icon"  width="75" width="75"/>
       				<div class="gray-arrow">
	       				<span>Implement, Monitor & Manage</span>
       				</div>
       			</div>	
       			<div class="animated-text">
       		
	       				<p>Implement  Wealth Plan and investment strategies</p>
	       				<p>Manage financial road map and investments</p>
	       				<p>Continuously monitor and adjust portfolio(s)</p>
	       				<p>Maintain on-going dialogue to monitor changes in life circumstances affecting financial objectives </p>
       			</div>
       		</div>
       		<div class="block">
        		<div class="top-animation">
       				<img src="<?php bloginfo('url'); ?>/ui/images/animated/done.png" class="icon"  width="75" width="75"/>
       				<div class="gray-arrow">
	       				<span>Review</span>
       				</div>
       			</div>
       			<div class="animated-text">

	       				<p>Regularly scheduled reviews and updates</p>
	       				<p>Complete review of plan progress and investment performance </p>

       			</div>
       		</div>
-->

 
       	 </div>	
       	 <?php endif; ?>
       </section>	
   
    </section>
<?php get_footer(); ?>  