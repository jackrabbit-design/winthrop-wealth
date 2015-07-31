<?php get_header(); the_post(); ?>

<?php if(get_the_post_thumbnail()) { $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'inner-banner'); ?>
    <div class="inner-header" style="background: url(<?php echo $image[0]; ?>;) no-repeat center center;">
        <?php } else { $di = get_field('default_interior_banner','option'); ?>

        <div class="inner-header" style="background: url(<?php echo $di['sizes']['inner-banner']; ?>) no-repeat center center;">
            <?php } ?>

            <div class="inner-header-wrap">
                <div class="title-wrap">
                    <h2 class="page-title">Our Team</h2>
                </div>
            </div>
        </div>
<main class="team">
        <section class="full-bio open">
        <div id="info">
            <button class="close-bio">Close Bio</button>
	            <article class="biography">
	           
	                <?php if(get_field('linkedin')) { ?><a href="<?php the_field('linkedin'); ?>" class="social"><i class="social-linkedin"></i></a> <?php } ?>
	                <h3><?php the_title(); ?></h3>
	               <?php if(get_field('job_title')){ ?> <h4><?php the_field('job_title'); ?></h4> <?php } if(get_the_content()) { ?> <?php the_content(); ?><a href="mailto:<?php the_field('email'); ?>" class="btn green">Email <?php the_title(); ?></a>
	                <?php } ?>
	            </article>
	            <?php $img = get_field('full_bio'); ?>
	            <img src="<?php echo $img['sizes']['team-full']; ?>" alt="<?php $img['alt']; ?>">
        </div>
        </section>
</main>
    </div>

<?php get_footer(); ?>