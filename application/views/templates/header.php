<!DOCTYPE html>
<html lang="en">

<head>
  <title>Privat.in &mdash; Cari Guru Privat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <!-- <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet"> -->
  <link rel="stylesheet" href="assets/fonts/icomoon/style.css">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/jquery-ui.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="assets/css/aos.css">

  <link rel="stylesheet" href="assets/css/style.css">

  <link rel="stylesheet" type="text/css" href="assets/css/customstyle.css">

  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/bootstrap.css">





</head>
<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

  <div class="container-fluid">
    <div class="d-flex align-items-center">
      <img src="assets/img/LOGO/privatin2.png" width="35" class="logo-navbar" ;>
      <div class="site-logo mr-auto w-25" style="font-family: mogra">
        <a href="<?= base_url('auth'); ?>">Privat.in</a>
      </div>

      <div class="mx-auto text-center">
        <nav class="site-navigation position-relative text-right" role="navigation">
          <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
            <li><a href="#home-section" class="nav-link">Home</a></li>
            <li><a href="#daftar-section" class="nav-link">Daftar</a></li>
            <li><a href="#about-section" class="nav-link">About</a></li>
          </ul>
        </nav>
      </div>

      <section class="dropdown-login">
        <div class="mr-auto w-25">
          <nav class="site-navigation position-relative text-right" role="navigation">

            <button class="btn btn-secondary dropdown-toggle" type="login-button" 
            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LOGIN
            </button>
            <form class="dropdown-menu p-4" method="post" action="<?= base_url('auth/login'); ?>">
              <div class="form-group-login">
                <label for="exampleDropdownFormEmail2">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group-login">
                <label for="exampleDropdownFormPassword2">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="sign-in"> <button type="submit" class="btn btn-primary">Sign in</button></div>
              <hr>
            </form>
          </nav>
        </div>
    </div>
    </section>
</header>