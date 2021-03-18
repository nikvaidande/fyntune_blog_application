<h2><?= $title ?></h2><br><br>

<?php foreach($posts as $post) : ?>
	<div style="padding-top: 2%;">
		<h3><?php echo $post['title']; ?></h3>
		<div class="row">
			<div class="col-md-4">
				<img style="width: 100%;" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
			</div>
			<div class="col-md-8">
				<small class="post-date">Posted on: <?php echo $post['created_at']; ?> in <strong><?php echo $post['name']; ?></strong> </small><br>
				<?php echo word_limiter($post['body'], 50); ?><br><br>
				<p><a class="btn btn-secondary" href="<?php echo site_url('/posts/'.$post['slug'])?>">Read More</a></p>
			</div>
		</div>
	</div>

<?php endforeach; ?>

<div class="pagination-links">
	<?php echo $this->pagination->create_links(); ?>
</div>
