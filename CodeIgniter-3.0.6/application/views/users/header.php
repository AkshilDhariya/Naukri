<html>
<head>
  <title>company list</title>
  <link rel="stylesheet" href="<?=base_url("Assets/css/bootstrap.min.css") ?>">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Naukri+</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url("Home/index")?>">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url("login/index")?>">Profile<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url("/index")?>">Intenship</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url("login/index")?>">Part-Time</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" id="myInput">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search Job</button>
    </form>
    <?php
          if($this->session->userdata('username')){?>
            <li><a href="<?= base_url('profile/logout'); ?> " class="btn btn-danger">Logout</a></li>

<?php }
          ?>
  </div>
</nav>
