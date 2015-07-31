<!DOCTYPE html>
<?php global $o; ?>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/><meta name="MSSmartTagsPreventParsing" content="true" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no target-densitydpi=device-dpi" />
    <title><?php wp_title(); ?></title>
<!-- 	<link type="text/css" rel="stylesheet" media="all" href="<?php bloginfo('url'); ?>/ui/css/style.css" /> -->
	<?php if(is_page_template('template-cal.php')) { ?>
	<link type="text/css" rel="stylesheet" media="all" href="<?php bloginfo('url'); ?>/ui/css/calculator.css" />
	<?php } ?>
<!--
	<?php if(is_page_template('template-animated.php')) { ?>
	<link type="text/css" rel="stylesheet" media="all" href="<?php bloginfo('url'); ?>/ui/css/animated.css" />
	<?php } ?>
-->
	
    <link type="text/plain" rel="author" href="<?php bloginfo('url'); ?>/authors.txt" />
    <?php echo get_template_part('icons'); ?>
	<?php wp_head(); ?>
	<script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "cd2bc686-4dc4-4476-ac6c-41222b964bc7", doNotHash: true, doNotCopy: true, hashAddressBar: false});</script>
</head>
<body <?php body_class(); ?>>
    <!--[if lte IE 7]><iframe src="unsupported.html" frameborder="0" scrolling="no" id="no_ie6"></iframe><![endif]-->
	<header id="header">
    	<div class="container">
        	<div class="header-inner clearfix">
        	<div class="top-header">
        		
				
				 <div class="search-input-wrap">
				        <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
				            <input type="text"  name="s" />
				            <i class="theme-search-icon search-icon"></i>
				        </form>
				    </div>
			    <div class="login">
					<a href="<?php the_field('client_login', $o); ?>">client login</a>
				</div>
				
        	</div>
                <h1 id="logo" class="pull-left">
                    <a href="<?php bloginfo('url'); ?>">
                        <img src="<?php bloginfo('url'); ?>/ui/images/logo.png" alt="" title="" />
                    </a>
                </h1>
            	
                <div id="toggle_menu_btn" class="visible-s pull-right"></div>
                
            	<div class="header-col-two pull-right">
                	<div class="clearfix">
					<?php $mainMenu = array('menu' => 'main-menu', 'container' => 'nav', 'container_class' => 'pull-left', 'container_id' => 'main-nav', 'menu_class' => 'menu', 'menu_id' => '', 'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 'depth' => 2, 'walker'  => ''); wp_nav_menu($mainMenu); ?>
					
					<div id="header-search">
                            <span class="theme-search-icon search-icon hidden-s" id="search-icon"></span>
                            <div class="search-input-wrap">
                                <form>
                                    <ul>
                                        <li>
                                            <input type="text" placeholder="Search" name="s" />
                                            <span class="theme-search-icon search-icon visible-s"></span>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div><!--search-wrap-->
              
                        <!--<div class="pull-left" id="header-search">
                            
                            
                                <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                                            <input type="text" placeholder="Search" name="s" />
                                            <span class="theme-search-icon search-icon visible-s"></span>
                                </form>
                         
                        </div>search-wrap-->
                        
                       <!-- <div class="login">
                        	<a href="<?php the_field('client_login', $o); ?>">client login</a>
                             <div class="pull-left" id="header-search">
                                 <div class="search-input-wrap">
                                <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                                            <input type="text" placeholder="Search" name="s" />
                                            <span class="theme-search-icon search-icon visible-s"></span>
                                </form>
                            </div>
                        </div>search-wrap-->
                        </div>
                    </div>
                </div> <!--header-col-two-->
            </div><!--header-inner-->
        </div>
    </header>