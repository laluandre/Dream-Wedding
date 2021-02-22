<div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

</div>
</div>
</header><br><br><br><br>
<div class="site-section bg-light">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-6 text-center">
                <h3 class="section-sub-title">Vendor</h3>
                <h2 class="section-title mb-3">Profile</h2>
                <p>Baca seputar cerita pernikahan dan beberapa tips untuk meriahkan pernikahanmu disini</p>
            </div>
        </div>
        <br>

        <br>
        <profile class="site-footer bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-5">
                                <ul class="list-unstyled">
                                    <div class="card" style="width: 18rem;">
                                        <img src="<?= base_url('assets/images/profile/'.$profil);?>" class="card-img-top" alt="Image">
                                        <div class="card-body">
                                            <center>
                                                <h5 class="card-title"><?= $nama; ?></h5>
                                                <p class="card-text">Kategori : <?= $kategori; ?></p>
                                                <p class="card-text fa fa-map-marker">Lokasi : <?= $lokasi; ?></p>
                                                <p class="card-text icon-heart" style="color: red">
                                                <?= $this->db->get_where('wishlist', ['id_vendor' => $vendor['id_vendor']])->num_rows(); ?></p>
                                                <a href="#" class="fa fa-phone"></a>&ensp;
                                                <a href="#" class="fa fa-instagram"></a>&ensp;
                                                <a href="#" class="fa fa-twitter"> </a>&ensp;
                                                <a href="#" class="fa fa-call"> </a>
                                                <a href="#" class="fa fa-facebook"></a>
                                            </center>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" width="700">
                                <a class="nav-link " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Collection</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Package</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">About</a>
                            </li>
                        </ul>
                        <br>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade " id="home" role="tabpanel" aria-labelledby="home-tab"> <img src="images/Nesnumotophotography.jpg" alt="Image" width="300">&ensp;<img src="images/Nesnumotophotography2.jpg" alt="Image" width="350"></div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </profile>
    <br><br><br><br><br><br><br><br><br><br><br><br>