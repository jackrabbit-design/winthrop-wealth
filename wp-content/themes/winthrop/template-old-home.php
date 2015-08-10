<?php get_header(); ?>

<div id="slider">
    	<div class="top-shadow shadow"></div>
        <?php if(have_rows('home_page_banners')) : ?>
    	<ul class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-pager=".banner-pager" data-cycle-prev="#prev" data-cycle-next="#next" data-cycle-swipe=true data-cycle-swipe-fx=scrollHorz data-cycle-slides=">li">
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
                    	<div class="banner-inner clearfix">
                        	
                            	<h2><?php echo $title; ?></h2>
							<?php if($link == 'interior') { ?> 
                             	<a href="<?php echo $innerLink; ?>" class=" banner-link">LEARN MORE</a>
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
        <div class="banner-controls">
            <div class="inner">
                <span id="prev" class="theme-circle-arrow-prev pull-left hidden-s arrow"></span> 
                <div class="banner-pager"></div>
                <span id="next" class="theme-circle-arrow-next pull-right hidden-s arrow"></span> 
            </div>
        </div>
    </div>
    
    
    <section id="home-row-one">
    	<div class="container">
        	<ul>
            	<li class="clearfix">
                	<div class="pull-left content">
                    	<h3>Personal</h3>
                    </div>
                	<div class="pull-right hm-carousel">
                	<?php if(have_rows('personal_fields')) : ?>
                    	<ul>
                    	<?php while(have_rows('personal_fields')) : the_row(); 
	                    	$title = get_sub_field('personal_service_title'); 
	                    	$link = get_sub_field('personal_icon_link'); 
	                    	$imgSrc = get_sub_field('personal_icons'); 
	                    	$img = wp_get_attachment_image_src($imgSrc, 'full');
                    	?>
                        	<li>
                            	<a href="<?php echo $link; ?>" class="links">
                                	<span class="icon" style="background-image:url(<?php echo $img[0]; ?>)"></span>
                                    <span class="text"><?php echo $title; ?></span>
                                </a>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                    <div class="pull-left content">
                        <p><?php the_field('personal_overview'); ?></p>
                        <a href="<?php the_field('personal_landing_link'); ?>" class="more">learn more</a>
                    </div>
                </li>
                
                <li class="clearfix">
                	<div class="pull-left content">
                    	<h3>Business</h3>
                    </div>
                    
                	<div class="pull-right hm-carousel">
                		<?php if(have_rows('business_fields')) : ?>
                    	<ul>
                    	<?php while(have_rows('business_fields')) : the_row(); 
	                    	$title = get_sub_field('business_service_title'); 
	                    	$link = get_sub_field('business_icon_link'); 
	                    	$imgSrc = get_sub_field('business_icon'); 
	                    	$img = wp_get_attachment_image_src($imgSrc, 'full');
                    	?>
                        	<li>
                            	<a href="<?php echo $link; ?>" class="links">
                                	<span class="icon" style="background-image:url(<?php echo $img[0]; ?>)"></span>
                                    <span class="text"><?php echo $title; ?></span>
                                </a>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>                    
                       </div>
                    <div class="pull-left content">
                        <p><?php the_field('business_overview'); ?></p>
                        <a href="<?php the_field('business_landing_link'); ?>" class="more">learn more</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <?php if($missionTitle = get_field('our_mission_title')) { 
	    $mission = get_field('our_mission_content');
	    $missionLink = get_field('our_mission_link'); 
	    $missionLinkText = get_field('our_mission_link_text');
    ?>
    <section id="our-mission" style="background-image:url(ui/images/our-mission-bg.jpg)">
    	<div class="container">
        	<div class="container-inner">
            	<h2><?php echo $missionTitle; ?></h2>
                <p><?php echo $mission; ?></p>
                <a href="<?php echo $missionLink; ?>" class="btn hover-fill"><?php echo $missionLinkText ?></a>
            </div>
        </div>
    </section>
    <?php } ?>
    
    <section id="hm-blog">
    	<div class="container">
        	<div class="container-inner">
            	<div class="rw-one">
                	<h2>From the Blog</h2> <a href="<?php echo get_permalink('59'); ?>" class="link brwn">view all</a>
                </div>
                
                <div class="blog-sum">
                <?php query_posts(array('post_type'=> 'post', 'posts_per_page' => 2)); $pcount = 1; if(have_posts()) : ?>
                	<ul class="clearfix">
                	<?php while(have_posts()) : the_post(); ?>
                    	<li class="<?php if($pcount % 2) { echo 'pull-right hidden-s'; } else { echo 'pull-left'; } ?>">
                        	<div class="clearfix">
                                <div class="img pull-right" style="background-image:url(ui/images/hm-blog-1.jpg)"></div>
                                
                                <h3 class="pull-left"><?php the_title(); ?></h3>
                                <span class="date pull-left"><?php echo get_the_date('F j');  echo'th, '; echo get_the_date('Y'); ?> </span>
                                <p class="pull-left"><?php $ec = get_the_excerpt(); $trimEx = wp_trim_words($ec, 17); echo $trimEx; ?></p>
                                <div class="clear"></div>
                                <a href="<?php the_permalink(); ?>" class="link green pull-left">READ MORE</a>
                            </div>
                        </li>
                        <?php $pcount++; endwhile; ?>
                     </ul>
                    <?php endif; wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </section>
    

<?php get_footer(); ?>