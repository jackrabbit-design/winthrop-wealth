 <?php global $cat, $keyword; ?>
<section class="blog-filter">
	    	<form action="<?php echo home_url('/'); ?>blog-search/" method="get">
		    <div class="search">
		    	<input type="text" placeholder="Search" name="search_keyword" value="<?php the_search_query(); ?>"/>
		    </div>
		    <div class="cats">
		    <?php $terms = get_terms('category', 'orderby=name'); ?>
		    	<select name="cat" id="cat">
		    		 <option value="All">All Categories</option>
                               <?php foreach($terms as $term) { ?>
                               		<option value="<?php echo $term->slug; ?>" <?php if($term->slug == $cat) { echo 'selected="selected"'; }?>><?php echo $term->name; ?></option>
                               <?php } ?>
		    	</select>
			</div>
	    </form>
</section>