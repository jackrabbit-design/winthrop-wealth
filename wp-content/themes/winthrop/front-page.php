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

<?php get_footer(); ?>