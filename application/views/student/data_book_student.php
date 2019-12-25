<!DOCTYPE html>
<html lang="en">

<head>
    <title> Isi Data Belajar Murid
        <?= $title; ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap-datepicker.css" type="text/css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/aos.css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/customstyle.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>jquery.simple-dtpicker.css">






</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="slide-2" style="background-image: url('assets/img/bg-1.png');">

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

        </div>

        <div class="intro-section" id="home-section">

            <div class="intro-section" id="home-section">
                <div class="slide-2" style="background-image: url('assets/img/bg-1.png');">


                    <div class="container">

                        <div class="row align-items-center">



                            <div class="col-12">
                                <div class="row align-items-center">

                                    <div class="col-lg-6 mx-auto" data-aos="fade-up" data-aos-delay="500">

                                        <form class="guru-box" method="post" action="<?php echo base_url() ?>data_book_student/form_belajar?teacher=<?php echo $infoTeacher[0]['id']; ?>">

                                            <h3 class="h4 text-black mb-4 text-center" id="daftar-section"> Isi Data Belajar </h3>
                                            <p class="text-center"> Isi data belajar kamu dengan benar agar guru dapat mengetahui informasi kamu dengan jelas

                                                <div class="form-group mt-3">
                                                    <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" placeholder="Nama Lengkap">
                                                    <select class="form-control form-control-user" id="jenjangAjar" name="jenjangAjar" placeholder="Jenjang">
                                                        <option selected>Kelas</option>
                                                        <option>1 SD</option>
                                                        <option>2 SD</option>
                                                        <option>3 SD</option>
                                                        <option>4 SD</option>
                                                        <option>5 SD</option>
                                                        <option>6 SD</option>
                                                        <option>1 SMP</option>
                                                        <option>2 SMP</option>
                                                        <option>3 SMP</option>
                                                        <option>1 SMA</option>
                                                        <option>2 SMA</option>
                                                        <option>3 SMA</option>
                                                    </select>
                                                    <select class="form-control form-control-user" id="mataPelajaran" name="mataPelajaran" placeholder="Mata Pelajaran">
                                                        <option selected>Mata Pelajaran</option>
                                                        <option>Matematika</option>
                                                        <option>Bahasa Inggris</option>
                                                        <option>IPA</option>
                                                    </select>
                                                    <input type="text" class="form-control" id="alamatBelajar" name="alamatBelajar" placeholder="Alamat Lokasi Belajar">

                                                    <div class="input-group date" data-provide="datepicker">
                                                        <input type="text" class="form-control" id="tanggalBelajar" name="tanggalBelajar" placeholder="Tanggal Belajar">
                                                        <div class="input-group-addon">
                                                            <span class="glyphicon glyphicon-th"></span>
                                                        </div>
                                                    </div>
                                                    <h8>Mulai Jam Belajar</h8>
                                                    <div class="input-group time" data-provide="timepicker">
                                                        <input type="time" class="form-control" id="jamBelajar" name="jamBelajar" aceholder="Jam Belajar" name="jamBelajar">
                                                    </div>
                                                    <select class="form-control form-control-user" id="lamaBelajar" name="lamaBelajar" placeholder="Lama Belajar">
                                                        <option selected>Jumlah Sesi (60menit/sesi)</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                    <h8>Informasi Tambahan untuk Guru :</h8>
                                                    <input type="text" class="form-control" id="info" name="info">
                                                </div>

                                                <button type="submit" class="btn btn-primary btn-block">
                                                    KIRIM
                                                </button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <section class="pop-up-guru">

                        <button class="open-button" onclick="openForm()">Lihat Guru Privatmu</button>

                        <div class="form-popup" id="myForm">
                            <form action="" class="form-container">
                                <h1><?php echo $infoTeacher[0]['name'] ?></h1>
                                <label for=""><b>Jenis Kelamin : <?php echo $infoTeacher[0]['jenis_kelamin'] ?></b></label><br>
                                <label for=""><b>Jenjang Ajar : <?php echo $infoTeacher[0]['jenjang_ajar'] ?></b></label><br>
                                <label for=""><b>Mata Pelajaran : <?php echo $infoTeacher[0]['mapel'] ?></b></label><br>
                                <label for=""><b>Fee/sesi : Rp<?php echo $infoTeacher[0]['fee'] ?></b></label><br>
                                <button type="button" class="btn cancel" onclick="closeForm()">Tutup</button>
                            </form>
                        </div>
                        <script>
                            function openForm() {
                                document.getElementById("myForm").style.display = "block";
                            }

                            function closeForm() {
                                document.getElementById("myForm").style.display = "none";
                            }
                        </script>
                    </section>


                </div>
            </div>
        </div>




        <!-- .site-wrap -->

        <script src="<?= base_url('assets/'); ?>js/jquery-3.3.1.min.js "></script>
        <script src="<?= base_url('assets/'); ?>js/jquery-migrate-3.0.1.min.js "></script>
        <script src="<?= base_url('assets/'); ?>js/jquery-ui.js "></script>
        <script src="<?= base_url('assets/'); ?>js/popper.min.js "></script>
        <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js "></script>
        <script src="<?= base_url('assets/'); ?>js/owl.carousel.min.js "></script>
        <script src="<?= base_url('assets/'); ?>js/jquery.stellar.min.js "></script>
        <script src="<?= base_url('assets/'); ?>js/jquery.countdown.min.js "></script>
        <script src="<?= base_url('assets/'); ?>js/bootstrap-datepicker.min.js "></script>
        <script src="<?= base_url('assets/'); ?>js/jquery.easing.1.3.js "></script>
        <script src="<?= base_url('assets/'); ?>js/aos.js "></script>
        <script src="<?= base_url('assets/'); ?>js/jquery.fancybox.min.js "></script>
        <script src="<?= base_url('assets/'); ?>js/jquery.sticky.js "></script>
        <script type="text/javascript" src="<?= base_url('assets/'); ?>jquery.simple-dtpicker.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script src="<?= base_url('assets/'); ?>js/main.js "></script>

</body>

</html>