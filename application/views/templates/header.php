<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/spacelab/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
    <script src="http://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <title>blog | CodeIgniter</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <div class="navbar-header">
                <h1 style="color:#9ac3ef;text-shadow:-1.5px 1px 1px #2d2d2d;" class="Heading 1">Blog CodeIgniter</h1>
            </div>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class=" navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url();?>">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url();?>/autres">Autre</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url();?>/posts">Blog</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url();?>/categories">Catégories</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-left">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url();?>/posts/create">Crée un post</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url();?>/categories/create">Crée une catégories</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">