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
                    <img src="assets/img/LOGO/privatin2.png" width="35" class="logo-navbar" ;>
                    <div class="site-logo mr-auto w-25" style="font-family: mogra">
                        <a href="index.html">Privat.in</a>
                    </div>

                    <div class="mx-auto text-center">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                                <li><a href="#" class="nav-link">Home</a></li>
                                <li><a href="<?= base_url('student/form_student'); ?>" class="nav-link">Data Diri</a></li>

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
        </header>

    </div>
    <div class="intro-section" id="home-section">


        <div class="slide-2" style="background-image: url('assets/img/bg-1.png');">



            <div class="container">

                <div class="row align-items-center">

                    <div class="col-12">
                        <div class="s010" style="background: transparent;">
                            <form>
                                <div class="inner-form" style="margin-top: 100px">

                                    <div class=" basic-search ">

                                        <div class=" input-field ">

                                            <div class=" icon-wrap ">
                                                <svg xmlns=" http://www.w3.org/2000/svg " width=" 30 " height=" 30 " viewBox=" 0 0 24 24 ">
                                                    <path d=" M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z "></path>
                                                </svg>
                                            </div>

                                            <input id=" search " type=" text " placeholder=" Cari guru kamu disini! " />

                                        </div>
                                    </div>
                                    <div class=" advance-search " style=" border-radius: 30px; ">

                                        <div class=" row ">
                                            <div class=" input-field ">
                                                <div class=" input-select ">
                                                    <select data-trigger=" " name=" choices-single-defaul ">
                                                        <option placeholder=" " value=" ">Jenjang</option>
                                                        <option>SD</option>
                                                        <option>SMP</option>
                                                        <option>SMA</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=" input-field ">
                                                <div class=" input-select ">
                                                    <select data-trigger=" " name=" choices-single-defaul ">
                                                        <option placeholder=" " value=" ">Mata Pelajaran</option>
                                                        <option>Matematika</option>
                                                        <option>IPA</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=" input-field ">
                                                <div class=" input-select ">
                                                    <select data-trigger=" " name=" choices-single-defaul ">
                                                        <option placeholder=" " value=" ">Lokasi</option>
                                                        <option>Jakarta</option>
                                                        <option>Bekasi</option>
                                                    </select>
                                                </div>
                                            </div>


                                        </div>

                                        <div class=" row third ">
                                            <div class=" input-field ">

                                                <div class=" group-btn ">

                                                    <button class=" btn-search ">SEARCH</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div class=" row fourth">
                                <br>
                                <?php
                                foreach ($teacher as $tc) : ?>
                                    <div class="card text-white bg-info mb-3" style="border-radius: 30px; max-width: 540px;">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo $tc->name ?></h5>
                                                    <p class="card-text">Jenjang Mengajar : <?php echo $tc->jenjang_ajar ?></p>
                                                    <p class="card-text">Mata Pelajaran : <?php echo $tc->mapel ?></p>
                                                    <p class="card-text">Fee : Rp<?php echo $tc->fee ?></p>
                                                </div>
                                                <div class="d-flex border-top stats">
                                                    <div class="py-3 px-4"><span class="icon-users"></span><a class="small" href="<?php echo base_url() ?>detail_info?teacher=<?php echo $tc->id; ?>"> Detail Info</a></div>
                                                    <div class="py-3 px-4"><span class="icon-users"></span><a class="small" href="<?php echo base_url() ?>data_book_student?teacher=<?php echo $tc->id; ?>"> Book Now!</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                        </div>
                        </form>
                    </div>
                    <script src="<?= base_url('assets/'); ?>js/extention/choices.js "></script>
                    <script>
                        const customSelects = document.querySelectorAll("select ");
                        const deleteBtn = document.getElementById('delete')
                        const choices = new Choices('select', {
                            searchEnabled: false,
                            itemSelectText: '',
                            removeItemButton: true,
                        });
                        for (let i = 0; i < customSelects.length; i++) {
                            customSelects[i].addEventListener('addItem', function(event) {
                                if (event.detail.value) {
                                    let parent = this.parentNode.parentNode
                                    parent.classList.add('valid')
                                    parent.classList.remove('invalid')
                                } else {
                                    let parent = this.parentNode.parentNode
                                    parent.classList.add('invalid')
                                    parent.classList.remove('valid')
                                }
                            }, false);
                        }
                        deleteBtn.addEventListener("click ", function(e) {
                            e.preventDefault()
                            const deleteAll = document.querySelectorAll('.choices__button')
                            for (let i = 0; i < deleteAll.length; i++) {
                                deleteAll[i].click();
                            }
                        });
                    </script>

                    <div class="row align-items-center ">

                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('auth'); ?>">Logout</a>
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