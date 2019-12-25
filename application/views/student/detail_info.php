<!DOCTYPE html>
<html lang="en">

<head>
    <title>Privat.in &mdash; Cari Guru Privat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/aos.css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/customstyle.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/bootstrap/bootstrap.css">


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700" rel="stylesheet" />
    <link href="<?= base_url('assets/'); ?>css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?= base_url('assets/'); ?>css/main.css" rel="stylesheet" />






</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

            <div class="container-fluid">
                <div class="d-flex align-items-center">
                    <img src="assets/img/logo/privatin2.png" width="35" class="logo-navbar" ;>
                    <div class="site-logo mr-auto w-25" style="font-family: mogra">
                        <a href="<?= base_url('student') ?>">Privat.in</a>
                    </div>

                    <div class="mx-auto text-center">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                                <li><a href="#" class="nav-link">Home</a></li>

                                <li class="nav-item dropdown no-arrow">
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" style="height: 2rem; width: 2rem">
                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="<?= base_url('student/profil_student'); ?>">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            My Profile
                                        </a>
                                        <a class="dropdown-item" href="<?= base_url('auth'); ?>" data-toggle="modal" data-target="#logoutModal">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Logout
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>

        </header>
        <section>
            <div class="intro-section" id="home-section">
                <div class="slide-1" style="background-image: url('assets/img/slider_1.jpg');" data-stellar-background-ratio="0.5">

                    <div class="container">

                        <div class="row align-items-center">

                            <div class="col-12">
                                <div class="s010" style="background: transparent;">
                                    <form>
                                        <div class="inner-form" ">
                                            
                                        <div class=" card mb-3" style="max-width: 540px; left:15%">
                                            <div class="row no-gutters">

                                            </div>
                                            <div class="col-md-12">
                                                <div class="card-body">
                                                    <br>
                                                    <div style="text-align:center">
                                                        <h3 class="card-title"> <b> Data Diri Guru Privat.in </b></h3>
                                                    </div>

                                                    <hr>
                                                    <p class="card-text">Nama Lengkap : <?php echo $infoTeacher[0]['name'] ?></p>

                                                    <hr class="pt-8">
                                                    <p class="card-text">Jenis Kelamin : <?php echo $infoTeacher[0]['jenis_kelamin'] ?></p>
                                                    <hr>

                                                    <p class="card-text">Tanggal Lahir : <?php echo $infoTeacher[0]['tgl_lahir'] ?></p>
                                                    <hr>

                                                    <p class="card-text">Nomor Handphone : <?php echo $infoTeacher[0]['no_telp'] ?></p>
                                                    <hr>

                                                    <br>
                                                    <h5 class="card-title"><b> Alamat Domisili</b></h5>
                                                    <hr>

                                                    <p class="card-text">Kelurahan : <?php echo $infoTeacher[0]['kel_tinggal'] ?></p>
                                                    <hr>
                                                    <p class="card-text">Kecamatan : <?php echo $infoTeacher[0]['kec_tinggal'] ?></p>
                                                    <hr>
                                                    <p class="card-text">Kota : <?php echo $infoTeacher[0]['kota_tinggal'] ?></p>
                                                    <hr>
                                                    <p class="card-text"> Kode Pos : <?php echo $infoTeacher[0]['kodepos'] ?></p>
                                                    <hr>

                                                    <br>
                                                    <h5 class="card-title"><b> Riwayat Pendidikan</b></h5>
                                                    <hr>
                                                    <p class="card-text">SD : <?php echo $infoTeacher[0]['rwyt_sd'] ?></p>
                                                    <hr>
                                                    <p class="card-text">SMP : <?php echo $infoTeacher[0]['rwyt_smp'] ?></p>
                                                    <hr>
                                                    <p class="card-text">SMA : <?php echo $infoTeacher[0]['rwyt_sma'] ?></p>
                                                    <hr>

                                                    <br>
                                                    <h5 class="card-title"> <b>Riwayat Mengajar</b></h5>
                                                    <hr>
                                                    <p class="card-text">Mata Pelajaran yang diajar : <?php echo $infoTeacher[0]['mapel'] ?></p>
                                                    <hr>
                                                    <p class="card-text">Fee mengajar/90 menit/sesi : Rp<?php echo $infoTeacher[0]['fee'] ?>,-</p>
                                                    <hr>

                                                    <br>
                                                    <h5 class="card-title"> <b>Tentang Anda</b></h5>
                                                    <hr>
                                                    <p class="card-text">Aktivitas saat ini : <?php echo $infoTeacher[0]['aktivitas'] ?></p>
                                                    <hr>
                                                    <p class="card-text">Pengalaman mengajar : <?php echo $infoTeacher[0]['pglmn_ajar'] ?></p>
                                                    <hr>


                                                </div>
                                            </div>
                                        </div>

                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    </div>

</body>







<!-- .site-wrap -->

<script src="assets/js/jquery-3.3.1.min.js "></script>
<script src="assets/js/jquery-migrate-3.0.1.min.js "></script>
<script src="assets/js/jquery-ui.js "></script>
<script src="assets/js/popper.min.js "></script>
<script src="assets/js/bootstrap.min.js "></script>
<script src="assets/js/owl.carousel.min.js "></script>
<script src="assets/js/jquery.stellar.min.js "></script>
<script src="assets/js/jquery.countdown.min.js "></script>
<script src="assets/js/bootstrap-datepicker.min.js "></script>
<script src="assets/js/jquery.easing.1.3.js "></script>
<script src="assets/js/aos.js "></script>
<script src="assets/js/jquery.fancybox.min.js "></script>
<script src="assets/js/jquery.sticky.js "></script>


<script src="assets/js/main.js "></script>

</body>

</html>

</html>