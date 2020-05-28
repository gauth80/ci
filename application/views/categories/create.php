<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('categories/create'); ?>
    <div class="form-group">
        <label for="name"><i>Inserez un nom : </i></label>
        <input name="name" type="text" class="form-control" placeholder="Entrez le nom de la catégories ici">
    </div>
    <button type="submit" class="btn btn-success">Crée une catégories</button>
</form>