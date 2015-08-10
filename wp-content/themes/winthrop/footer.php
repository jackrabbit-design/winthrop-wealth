<?php global $o; ?>
    <footer id="footer">
    	<section id="contact-detail">
        	<div class="container">
            	<div class="container-inner clearfix">
                    <div class="contact">
                        <h5>Contact Us</h5>
                        <p class="address"><?php the_field('address', $o); ?></p>
                        <p class="tel"><b>Phone:</b><a href="tel:<?php the_field('phone', $o); ?>"><?php the_field('phone', $o); ?></a></p>
                        <p class="fax"> <b>Fax:</b> <a href="tel:<?php the_field('fax', $o); ?>"><?php the_field('fax', $o); ?></a></p>
                    </div>
                    	<?php $FooterMenu = array('menu' => 'footer', 'container' => 'nav', 'container_class' => 'hidden-s', 'container_id' => 'footer-nav', 'menu_class' => 'menu', 'menu_id' => '', 'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 'depth' => 2, 'walker'  => ''); wp_nav_menu($FooterMenu); ?>
                 </div>
            </div>
        </section>
        
        <section id="copyright">
        	<div class="container">
            	<div class="container-inner int">
                	<?php the_field('copyright_securities', $o); ?>
                    <div class="dev">
                    	<a href="http://www.jumpingjackrabbit.com" title="Website Design by Jackrabbit" target="_blank">Website Design</a> by <a href="http://www.jumpingjackrabbit.com" title="Website Design by Jackrabbit" target="_blank">Jackrabbit</a>
                    </div>
                </div>
            </div>
        </section>
    </footer>
        
   <?php wp_footer(); ?>
    
</body>
</html>