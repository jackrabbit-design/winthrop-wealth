<?php get_header(); ?>
	<div id="slider">
		<div class="top-shadow shadow"></div>
		<?php $c = 1; if(have_rows('home_page_banners')) : ?>
			<ul id="homeSlider">
			<?php while(have_rows('home_page_banners')) : the_row(); 
			    // Fields
			    $title = get_sub_field('banner_title');
			    $content = get_sub_field('banner_content');  
			    $link = get_sub_field('banner_link'); 
			    $innerLink = get_sub_field('banner_interior_link'); 
			    $outLink = get_sub_field('banner_outside_link');
			    //Images
			    $imgSrc = get_sub_field('image');
			    $img = wp_get_attachment_image_src($imgSrc,'hero');

			    $imgM = wp_get_attachment_image_src($imgSrc,'hero-mobile');
			?>
			<li <?php if($c == 1) { echo 'class="active"'; } ?>>
				<div class="banner-img" style="background-image:url(<?php echo $img[0]; ?>)">
					<img src="<?php echo $imgM[0]; ?>"/>
				</div>
			
			    <div class="banner-content">
			    	<div class="container">
			    	
			        	<div class="banner-inner clearfix">
			               	<h2><?php echo $title; ?></h2>
			                <?php if($link == 'interior') { ?> 
			                <a href="<?php echo $innerLink; ?>" class="banner-link">LEARN MORE</a>
			                <?php } elseif($link = 'outside') { ?>
			                <a href="<?php echo $outLink; ?>" target="_blank" class="banner-link">LEARN MORE</a>
			                <?php } ?>  
			            </div>
			            <div class="banner-pager"></div>
			        </div>
			    </div>
			
			</li>
			<?php $c++; endwhile; ?>
			</ul>
		<?php endif; ?>
		
	</div>
	
	<section class="what-we-do">
		<div class="container">
		
			<div class="what-header">
				<?php the_content(); ?>
			</div>
			<div class="clearfix what-content">
				<div class="personal column">
					<h3>Personal</h3>
					<p><?php the_field('personal_overview'); ?></p>
					<?php if(have_rows('personal_fields')) : ?>
					<ul>
						<?php while(have_rows('personal_fields')) : the_row() ; ?>
						<li class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s"  data-wow-offset="20">
						<a href="<?php the_sub_field('personal_icon_link'); ?>">
							<?php $icon = get_sub_field('personal_icon'); ?>
							
							<div class="icon <?php echo $icon; ?>"></div>

							<div class="icon-content">
								<h5><?php the_sub_field('personal_service_title'); ?></h5>
								<span>READ MORE</span>
							</div>
						</a>
						</li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
				</div>
				<div class="business column">
					<h3>Business</h3>
					<p><?php the_field('business_overview'); ?></p>
				<?php if(have_rows('business_fields')) : ?>
					<ul>
						<?php while(have_rows('business_fields')) : the_row() ; ?>
						<li class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".75s"  data-wow-offset="20">
						<a href="<?php the_sub_field('business_icon_link'); ?>">
							<?php $icon = get_sub_field('business_icon'); ?>
							
							<div class="icon <?php echo $icon; ?>"></div>

							<div class="icon-content">
								<h5><?php the_sub_field('business_service_title'); ?></h5>
								<span>READ MORE</span>
							</div>
						</a>
						</li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
				</div>
				
				
			</div>
			<a href="<?php echo get_permalink(76); ?>" class="btn green">Work with us</a>
		</div>
	</section>
	
	<section class="wealth-management">
		<div class="wealth-container">
			<div class="container">
				<small>What is the Story behind</small>
				<h2>Winthrop Wealth Managment</h2>
				
				<a href="/our-story/" class="btn green">Our Story</a>
				</div>
			<div class="wrapper">
			
					<div class="animated-hero">
						<img src="<?php bloginfo('url'); ?>/ui/images/people-row-2.png" class="people people-row-2"/>
						<img src="<?php bloginfo('url'); ?>/ui/images/people-row-1.png" class="people people-row-1"/>
						<img src="<?php bloginfo('url'); ?>/ui/images/heart.png" class="heart animated"/>
						<img src="<?php bloginfo('url'); ?>/ui/images/pie.png" class="pie animated"/>
						<img src="<?php bloginfo('url'); ?>/ui/images/bar.png" class="bar animated"/>
						<img src="<?php bloginfo('url'); ?>/ui/images/money.png" class="money animated"/>
						<img src="<?php bloginfo('url'); ?>/ui/images/pie-2.png" class="pie-2 animated"/>
						<img src="<?php bloginfo('url'); ?>/ui/images/line.png" class="heart-2 animated"/>
					</div>
			</div>

		
	</section>
	
	<?php query_posts(array('posts_type' => 'posts', 'posts_per_page' => 3 )); if(have_posts()) : ?>

	<section class="from-the-blog">

		<div id="blog-slider">
			<?php while(have_posts()) : the_post(); ?>
			<div>
				<?php 
						$img_id = get_post_thumbnail_id($post->ID); 
						$image = wp_get_attachment_image_src($img_id, 'home-blog-large');
						$imageMob = wp_get_attachment_image_src($img_id, 'home-blog-mobile');
						$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true); ?>
				<div class="blog-photo" style="background: url('<?php echo $image[0]; ?>'); ">
					<img src='<?php echo $imageMob[0]; ?>' alt="<?php echo $alt_text; ?>"/>
				</div>
				<div class="blog-text">
				        <div class="wrap clearfix">
				            <div class="blog-head clearfix">
				                <h2>Insights</h2>
				                <div class="cycle-pager"></div>
				            </div>
				            <h4><?php the_title(); ?></h4>
				            <div class="meta">
				                <a href="#economics">Economics</a> <time><?php the_time('F'); ?> <?php the_time('j'); ?>th, <?php the_time('Y'); ?></time>
				            </div>
				            <p><?php echo wp_trim_words( get_the_excerpt(), 40, '...' ); ?></p>
				            <a href="" class="read-more">Read More</a>
				        </div>
				    </div>
			</div>
		<?php endwhile; ?>
		</div>
	<?php endif; ?>
	</section>

<?php get_footer(); ?>