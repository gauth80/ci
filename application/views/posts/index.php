<!--lire plus-->
<h3 class="post-title"><?=$title;?></h3>
<?php foreach($posts as $post) : ?>
	<div class="row post">
		<div class="col-md-3">
			<img class="post-thumb thumbnail"src="<?php echo base_url();?>/assets/img/posts/<?php echo $post['post_img'];?>">
		</div>
		<div class="col-md-9">
			<h4><?php echo $post['title']; ?></h4> 
			<small class="post-date">Postée le : <?php echo $post['apparu_le'];?> | dans la catégorie&nbsp;<strong><?php echo $post['name'];?></strong></small>
			<?php echo word_limiter($post['body'], 50); ?>
			<p><a class="btn btn-primary" href="<?php echo site_url('/posts/'.$post['slug']);?>">Lire plus</a></p>
		</div>
	</div>
<?php endforeach;?>

