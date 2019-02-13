<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <?php wp_head(); ?>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav">
        <?php $pages = get_pages(); ?>

            <?php foreach($pages as $page) : ?>
      <li class="nav-item active">
       <a class="nav-link" href="<?= get_page_link($page->ID) ?>"><?= ($page->post_title) ?><span class="sr-only">(current)</span></a>
      </li>
<?php endforeach; ?>
    </ul>
  </div>
</nav>

    <div class="container">
