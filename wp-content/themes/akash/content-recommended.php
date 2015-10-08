<div class="Activityfooter activityContainer clearfix" id="BlogFooter">
    <div class="text-center">
        <h3 class="BlogRecomandedAct">Recommended Activities</h3>
    </div>
    <?php 
        global $wp_query;

        $currentID = get_the_ID();

        $args = array(
        'tag__in' => $tag_ids, //must use tag id for this field
        'showposts' => 3,
        'post__not_in' => array($currentID));

        $posts = get_posts($args); 
    ?>
        <ul class="BlogFooterRelated">
            <?php foreach ($posts as $post) : ?>
                <li class="col-md-4">
                    <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                    <a href="<?php the_permalink(); ?>"><img src="<?= $feat_image ?>" alt="BlogListing" class="BlogListingImg"></a>
                    <h4><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h4>
                </li>
            <?php endforeach; ?>
        </ul>

    <!-- <ul class="BlogFooterRelated">
        <li class="rec-img_1">

        </li>
        <li class="rec-img_2">

        </li>
        <li class="rec-img_3">

        </li>
    </ul>
    <ul class="BlogFooterRelatedCaptions">
        <li class="BlogFooterImgDesc">
        Why you should be doing Paragliding?
        </li>
        <li class="BlogFooterImgDesc">
        25 Reasons not to miss your road trip wit friends
        </li>
        <li class="BlogFooterImgDesc">
        You won't believe what this guy experienced in Scuba
        </li>
    </ul> -->
</div>