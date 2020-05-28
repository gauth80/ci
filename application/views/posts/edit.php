<h3><?= $title;?></h3>
<?php echo validation_errors();?>
<?php echo form_open('posts/update');?>
    <input type="hidden" name="id" value="<?php echo $post['id'];?>">
  <div class="form-group">
    <label name="title">Titre</label>
    <input name="title" type="text" class="form-control w-50" aria-describedby="title" placeholder="entrez un titre" value="<?php echo $post['title'];?>">
  </div>

  <div class="form-group">
    <label for="body">le post</label>
    <textarea id="editor1" name="body" class="form-control w-50" placeholder="le post">
    <?php echo $post['body'];?>
    </textarea>
  </div>
  <div class="form-group">
  <label for="">catégories</label>
    <select name="category_id" class="form-control">
    <?php foreach($categories as $cat):?>
      <option value="<?php echo $cat['id'];?>"><?php echo $cat['name'];?></option>
    <?php endforeach;?>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>