<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        <?= $title; ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


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

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/bootstrap/bootstrap.css" type="text/css">





</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="slide-2" style="background-image: url('assets/img/img_4.jpg');">

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
                        <img src="<?= base_url('assets/'); ?>img/logo/privatin2.png" width="35" class="logo-navbar" ;>
                        <div class="site-logo mr-auto w-25" style="font-family: mogra">
                            <a href="<?= base_url('student'); ?>">Privat.in</a>
                        </div>

                        <div class="mx-auto text-center">
                            <nav class="site-navigation position-relative text-right" role="navigation">
                                <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                                    <li><a href="<?= base_url('student'); ?>" class="nav-link">Home</a></li>
                                </ul>
                            </nav>
                        </div>
                        <section class="dropdown-login" style="opacity: 0%">
                            <div class="mr-auto w-25">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LOGIN
                                </button>
                            </div>
                        </section>

                    </div>
            </header>

        </div>
    </div>
    <div class="intro-section" id="home-section">

        <div class="intro-section" id="home-section">


            <div class="container">

                <div class="row align-items-center">





                    <div class="col-12">
                        <div class="row align-items-center">

                            <div class="col-lg-6 mx-auto" data-aos="fade-up" data-aos-delay="500">
                                <form class="guru-box" method="post" action="<?= base_url('student/form_student'); ?>">
                                    <div class="text-center mb-4"><strong> Formulir Pendaftaran Pengajar Privat.in <br> </strong> </div>

                                    <h3 class="h4 text-black mb-4 text-center" id="daftar-section"> Isi Data Diri </h3>

                                    <div class="form-group mt-3">
                                        <select class="form-control" id="jenisKelamin" name="jenisKelamin" placeholder="Jenis Kelamin">
                                            <option selected>Jenis Kelamin</option>
                                            <option>Laki-Laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                        <div class="input-group date" data-provide="datepicker">
                                            <input type="text" class="form-control" id="tanggalLahir" name="tanggalLahir" placeholder="Tanggal Lahir">
                                            <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="alamatRumah" name="alamatRumah" placeholder="Alamat Rumah">
                                        <select class="form-control" id="jenjPendidikan" name="jenjPendidikan" placeholder="Kelas">
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
                                        <input type="text" class="form-control" id="noTelp" name="noTelp" placeholder="Nomor Handphone/Whatsapp">
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block">
                                        SIMPAN
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
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


    <script src="<?= base_url('assets/'); ?>js/main.js "></script>

</body>

</html>