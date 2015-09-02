<div class="side-wrapper clearfix">
        <aside>
<?php if(!get_field('hide_sub_nav')) { ?>
        <nav class="side">
        
        <h3><?php if($anc = get_ancestors(get_the_ID(),'page')){ $count = count($anc); if($count > 0){ $anc_pg = get_post($anc[($count - 1)]); echo $anc_pg->post_title; } } else { echo get_the_title(); } ?></h3>
        <?php if($post->post_parent)
		  	$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
		  else
		  	$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
		  if ($children) { ?>
		 	 <ul>
		  		<?php echo $children; ?>
		  	</ul>
	<?php } ?> 

 </nav>
 <?php } ?>
	        <?php query_posts(array('post_type'=> 'post', 'posts_per_page' => 1)); $pcount = 1; if(have_posts()) : while(have_posts()) : the_post(); 
					$terms = get_the_terms( $post->ID, 'category' );
					if ( $terms && ! is_wp_error( $terms ) ) : 
					$draught_links = array();
					foreach ( $terms as $term ) {
					$draught_links[] = $term->name;
					}
					$on_draught = join( ", ", $draught_links ); ?>
		        <div class="side-blog">

		        <h3>Recent <?php echo $on_draught; ?></h3>
		    <?php endif; ?>
		        <div class="blog-post">
		        <?php if(has_post_thumbnail()) { ?> 
			        <?php echo get_the_post_thumbnail($post->ID, 'side-blog')?>
			        <?php } ?>
			        <h4><?php the_title(); ?></h4>
			        <?php the_category(', '); ?> <?php if(get_the_category()){ echo '|'; } ?> <time><?php echo get_the_date('F j');  echo'th, '; echo get_the_date('Y'); ?> </time>
			        <p><?php $ec = get_the_excerpt(); $trimEx = wp_trim_words($ec, 17); echo $trimEx; ?></p>
			        <a href="<?php the_permalink(); ?>" class="readmore">READ MORE</a>
		        </div>
	        </div>
	        <?php endwhile; endif; wp_reset_query(); ?>
	        
        </aside>
</div>