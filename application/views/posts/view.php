<!--vue du poste-->
<div class="row post">
	<div class="col-md-3">
		<img class="post-thumb thumbnail"src="<?php echo base_url();?>/assets/img/posts/<?php echo $post['post_img'];?>">
	</div>
	<div class="post-body col-md-9">
		<h4><?php echo $post['title'];?></h4>
		<small class="post-date">Postée le : <?php echo $post['apparu_le'];?></small>
		<?php echo $post['body'];?>
	</div>
</div>
<hr>
<?php echo form_open('/posts/delete/'.$post['id']);?>
	<a class="btn btn-secondary p-r-2" href="<?php echo site_url();?>/posts/edit/<?php echo $post['slug'];?>">Modifier</a>
	<input type="submit" value="supprimer" class="btn btn-danger">
</form>
<hr>
