<?php get_header(); ?>

<div class="container BlogsBody_Container">
  	<div class="row">
    	<div class="col-md-12">
			<?php if(have_posts()) : while(have_posts()) : the_post() ?>
				<?php the_content(); ?>
				<?php get_template_part( 'content', 'subscribe' ); ?>
				<?php get_template_part( 'author' ); ?>
				<?php 
					$tags = wp_get_post_tags($post->ID);
					$tag_ids = array();
					foreach ($tags as $tag_details) {
						$tag_id = $tag_details->term_id;
						array_push($tag_ids, $tag_id);
					}
				?>
				<?php include(locate_template('content-recommended.php')); ?>
			<?php endwhile; endif; ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>