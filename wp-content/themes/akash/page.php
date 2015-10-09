<?php get_header(); ?>

	<div class="container BlogListingContainer">
    <h3 class="BlogsListingRecentPosts">Tag Archives</h3>
        <div id="content" class="row" role="main">
            <?php if(have_posts()) : while(have_posts()) : the_post() ?>
                <div class="col-md-4 BlogListingImgCols">
                    <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                    <a href="<?php the_permalink(); ?>"><img src="<?= $feat_image ?>" alt="BlogListing" class="BlogListingImg"></a>
                    <h4><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h4>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

<?php get_footer(); ?>