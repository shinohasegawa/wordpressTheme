<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> sheeepices</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" >
  <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css">
</head>
<body>
  <header class="navbar navbar-expand-md navbar-light">
  <h1><a class="navbar-brand" href="#">
    <img src="images/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-middle" alt="">
    sheeepices
  </a></h1>
 <!-- ナビゲーション -->
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <nav>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="page.html">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="page.html">Study</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="single.html">Workout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="single.html">Contact</a>
        </li>
      </ul>
    </nav>
  </div>
<!-- ナビゲーション終了 -->
</header>
<!-- header終了 -->
<div class="carousel-item active">
    <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/images/top2.jpg" alt="topimage">
  </div>

  <footer></footer>

</body>
</html>
