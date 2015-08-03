<?php get_header(); ?>
	<div id="slider">
		<div class="top-shadow shadow"></div>
		<?php if(have_rows('home_page_banners')) : ?>
			<ul class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-pager=".banner-pager" data-cycle-swipe=true data-cycle-swipe-fx=scrollHorz data-cycle-slides=">li" data-cycle-timeout="0" data-cycle-pager-template="<span></span>">
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
			?>
			<li>
				<div class="banner-img" style="background-image:url(<?php echo $img[0]; ?>)"></div>
			
			    <div class="banner-content">
			    	<div class="container">
			    	<div class="banner-pager"></div>
			        	<div class="banner-inner clearfix">
			               	<h2><?php echo $title; ?></h2>
			                <?php if($link == 'interior') { ?> 
			                <a href="<?php echo $innerLink; ?>" class="banner-link">LEARN MORE</a>
			                <?php } elseif($link = 'outside') { ?>
			                <a href="<?php echo $outLink; ?>" target="_blank" class="banner-link">LEARN MORE</a>
			                <?php } ?>  
			            </div>
			            
			        </div>
			    </div>
			
			</li>
			<?php endwhile; ?>
			</ul>
		<?php endif; ?>
		
	</div>
	
	<section class="what-we-do">
		<div class="container">
		
			<div class="what-header">
				<h2>What we do</h2>
				<p>Our mission is to help clients discover and achieve their success. Our nationally recognized advisors bring a fresh, multi-genertational perspective to ensure your unique needs are continually managed and our trust-centered relationship is productive and long lasting.</p>
			</div>
			<div class="clearfix what-content">
				<div class="personal column">
					<h3>Personal</h3>
					<p>Winthrop thrives at helping individuals discover and achieve their life goals by creating a sound investment plan that aligns financial needs with retirement goals.</p>
					<ul>
						<li>
						<a href="#">
							<div class="icon w-clipboard"></div>
							<div class="icon-content">
								<h5>Wealth Planning</h5>
								<span>READ MORE</span>
							</div>
						</a>
						</li>
						<li>
						<a href="#">
							<div class="icon w-briefcase"></div>
							<div class="icon-content">
								<h5>Investment Management</h5>
								<span>READ MORE</span>
							</div>
						</a>
						</li>
						<li>
						<a href="#">
							<div class="icon w-pig"></div>
							<div class="icon-content">
								<h5>Tax & Estate Planning</h5>
								<span>READ MORE</span>
							</div>
						</a>
						</li>
					</ul>
				</div>
				<div class="business column">
					<h3>Business</h3>
					<p>Winthrop serves a broad spectrum of business clients—business owners, institutions, and endowments—applying the same formula of personal attention and sound investment advice.</p>
					<ul>
						<li>
						<a href="#">
							<div class="icon w-paper"></div>
							<div class="icon-content">
								<h5>Retirement Plans</h5>
								<span>READ MORE</span>
							</div>
						</a>
						</li>
						<li>
						<a href="#">
							<div class="icon w-building"></div>
							<div class="icon-content">
								<h5>Institutions and endowments</h5>
								<span>READ MORE</span>
							</div>
						</a>
						</li>
						<li>
						<a href="#">
							<div class="icon w-hand"></div>
							<div class="icon-content">
								<h5>Sucession Planning</h5>
								<span>READ MORE</span>
							</div>
						</a>
						</li>
					</ul>
				</div>
				
				
			</div>
			<a href="#" class="btn green">Work with us</a>
		</div>
	</section>
	
	<section class="wealth-management">
		<div class="wealth-container">
			<div class="container">
				<small>What is the Story behind</small>
				<h2>Winthrop Wealth Managment</h2>
				
				<a href="" class="btn green">Our Story</a>
		
			
			<img src="ui/images/our-story-home.png"/>
				</div>
		</div>
	</section>
	
	<section class="from-the-blog">
		<div class="blog-text">
			<div class="blog">
				<h2>From the Blog</h2>
				<h4>When is the Best Time to Invest?</h4>
				<div class="meta">
					<a href="#economics">Economics</a>
					<time>July 4th, 2015</time>
				</div>
				<p>Quisque non dapibus nisi. Fusce facilisis maximus eros id porttitor. Vestibulum ante ipsum primis in faucibus orci luctus.Quisque non dapibus nisi. Fusce facilisis maximus eros id porttitor. </p>
			</div>
		</div>
		<div class="blog-photo">
			<img src=""/>
		</div>
	</section>

<?php get_footer(); ?>