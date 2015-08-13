<?php /*Template Name: Financial Cal */ get_header(); the_post(); ?>
<?php echo get_template_part('inc/inc', 'banner'); ?>
    <section class="main clearfix">
        <article id="info">
		<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js' type='text/javascript'></script><script type='text/javascript' src='http://www.calcxml.com/scripts/tipped/comboTipped.js' type='text/javascript'></script><script type='text/javascript' src='http://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.2/jquery.xdomainrequest.min.js'></script><script type='text/javascript' src='http://www.calcxml.com/scripts/loadCalc.js?headerBackgroundColor=%23ffffff&headerFontColor=%23566C0F&submitButtonColor=%23ffffff&submitButtonFontColor=%23566C0F&editButtonColor=%23897966&editButtonFontColor=%230c0c0c&calcTarget=bud01&skn=62'></script><div id='calc' style='padding-top: 10px;'></div>
		
		   </article>
		<?php get_sidebar(); ?>
    </section>
<?php get_footer(); ?>
<?php get_footer(); ?>