<div class="clearfix">
	<?= get_avatar($post->post_author); ?>
	<div class="BlogsAuthorSection">
		<p class="BlogAuthorAbout">About the Author</p>
		<h3><?= get_the_author_meta( 'display_name', $post->post_author) ?></h3>
		<p class="BlogAuthorDescription"><?= get_the_author_meta( 'description', $post->post_author); ?></p>
	</div>
</div>