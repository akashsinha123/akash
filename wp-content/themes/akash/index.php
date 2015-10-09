<?php get_header(); ?>


<div class="container BlogListingContainer">
    <h3 class="BlogsListingRecentPosts">Recent posts</h3>
        <div id="content" class="row" role="main">
            <?php $post_num = 1; ?>
            <div class="row">
            <?php if(have_posts()) : while(have_posts()) : the_post() ?>
                <div class="col-md-4 BlogListingImgCols">
                    <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                    <a href="<?php the_permalink(); ?>"><img src="<?= $feat_image ?>" alt="BlogListing" class="BlogListingImg"></a>
                    <h4><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h4>
                    <?php 
                        $tags = wp_get_post_tags($post->ID); 
                        $tags_num = count(wp_get_post_tags($post->ID));
                    ?>
                    <?php if($tags_num >= 1) : ?>
                        <a href="<?= get_tag_link($tags[0]->term_id); ?>" class="btn btn-default BlogListingImgTags pull-left"><?= $tags[0]->name; ?></a>
                    <?php endif;?>
                    <?php if($tags_num >= 2) : ?>
                        <div class="dropdown">
                        <button class="btn btn-default BlogListingImgTags tags-open-link dropdown-toggle pull-right dropdown-toggle" data-toggle="collapse" data-target="#<?= $post->post_name; ?>">+<?= $tags_num - 1 ?> more</button>
                        <!-- <a href="javascript:void()" class="btn btn-default BlogListingImgTags tags-open-link dropdown-toggle pull-right">+ more</a> -->
                        <ul id="<?= $post->post_name; ?>" class="collapse more-tags clearfix">
                            <?php $tag_num = 1; foreach( $tags as $tag) : 
                                if ($tag_num == 1) {
                                    
                                } else { ?>
                                    <li><a class="btn btn-default BlogListingImgTags tags-open <?php if($tag_num % 2 == 1){echo "pull-right";} else {echo "pull-left"; } ?>" href="<?= get_tag_link($tag->term_id); ?>"><?= $tag->name; ?></a></li>
                                <?php }
                                $tag_num++;
                            ?>
                            <?php endforeach; ?>
                        </ul>
                        </div>
                    <?php endif;?>
                </div>
                <?php if ($post_num % 3 == 0) {
                    echo '</div>';
                    echo '<div class="clearfix">';
                } ?>
            <?php $post_num++; endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>