<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dream Wedding</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="<?= base_url('https://fonts.googleapis.com/css?family=Muli:300,400,700,900'); ?>" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?= base_url('assets/images/vendor.png'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fonts/icomoon/style.css'); ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/jquery-ui.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.theme.default.min.css'); ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/jquery.fancybox.min.css'); ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-datepicker.css'); ?>">

    <link rel="stylesheet" href="<?= base_url('assets/fonts/flaticon/font/flaticon.css'); ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/aos.css'); ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div id="sign" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                    <form method="post" action="<?= base_url('auth/cek_login'); ?>">
                        <div class="form-group">
                            <h1 align="center">Halaman Login</h1>
                            <label for="exampleInputEmail1"><small><?= $this->session->flashdata('message'); ?></small></label>
                            <input type="email" class="form-control" id="Email" name="email" aria-describedby="emailHelp" placeholder="Masukan email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">login</button>
                    </form>
                </div>
                <!-- footer modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#signup">Daftar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#signv">Masuk sebagai vendor</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="already_like" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Kamu sudah menambahkan vendor ini ke dalam wishlist mu</p>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="signv" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                    <form method="post" action="<?= base_url('auth/cek_loginv'); ?>">
                        <div class="form-group">
                            <h1 align="center">Login Vendor</h1>
                            <label for="Email"><small><?= $this->session->flashdata('message'); ?></small></label>
                            <input type="email" class="form-control" id="vemail" name="vemail" aria-describedby="emailHelp" placeholder="Masukan email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="vpassword" name="vpassword" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Login Vendor</button>
                    </form>
                </div>
                <!-- footer modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#sign">Login</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#signup">Daftar</button>
                </div>
            </div>
        </div>
    </div>
    <div id="signup" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                    <form action="<?= base_url('auth/registration'); ?>" method="post">
                        <div class="form-group">
                            <h1 align="center">Daftar</h1>
                            <label for="name"></label>
                            <input type="text" class="form-control" id="rname" name="rname" placeholder="Masukan Nama" required>
                            
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="remail" name="remail" aria-describedby="emaiHelp" placeholder="Masukan Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="rtelp" name="rtelp" placeholder="Masukan Telephone" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="rpassword1" name="rpassword1" placeholder="Masukan Password" required>
                            
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="rpassword2" name="rpassword2" placeholder="Konfirmasi Password" required>
                            
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Daftar</button>
                    </form>
                </div>

                <!-- footer modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-dismiss="modal" data-target="#sign">Login</button>
                </div>
            </div>
        </div>
    </div>
    <!-- and of pop up-->
    </div>
    </div>
    </div>
    </div>


    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <div class="col-6">
            <p class="mb-0 float-right">
                <span class="mr-3"><a href="tel://#"> <span class="icon-phone mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">(+62) 234 5678 9101</span></a></span>
                <span><a href="#"><span class="icon-envelope mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">dreamwedding@gmail.com</span></a></span>
            </p>

        </div>
    </div>
    </div>
    </div>

    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-xl-2">
                    <h1 class="mb-0 site-logo"><a href="<?= base_url(''); ?>" class="text-black mb-0">DREAM WEDDING<span class="text-primary">.</span> </a></h1>
                </div>
                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="<?= base_url(''); ?>" class="nav-link">Depan</a></li>
                            <li><a href="<?= base_url('auth/recommendation'); ?>" class="nav-link">Rekomendasi</a></li>
                            <li><a href="<?= base_url('auth/promo'); ?>" class="nav-link">Promo</a></li>
                            <li><a href="<?= base_url('auth/info'); ?>" class="nav-link">Info</a></li>
                            <li><a href="<?= base_url('auth/help'); ?>" class="nav-link">Bantuan</a></li>&emsp;
                            <li><span><a href="<?= base_url($link); ?>" data-toggle="<?= $toggle ?>" data-target="#sign"><span class=" <?= $class; ?>" style="position: relative; top: 2px;"> </span><span class="d-none d-lg-inline-block text-black"><?= $title; ?></span></a></span></li>
                        </ul>
                    </nav>
                </div>