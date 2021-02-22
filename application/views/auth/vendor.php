<div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

</div>
</div>
</header>
<br>
<br>
<br>
<div class="site-section" id="products-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-6 text-center">
                <h3 class="section-sub-title">Vendor Populer</h3>
                <h2 class="section-title mb-3">Vendor Kami</h2>
                <p>Dengan kualitas vendor yang sudah baik, jangan ragu untuk menggunakan vendor dibawah ini</p>
            </div>
        </div>

        <div class="col-md-15 mb-3">
            <form action="<?= base_url('auth/vendor'); ?>" method="POST">
                <div class="product-item">
                    <p>Jika bingung melihat satu-satu, kamu bisa mencari vendor sesuai yang kamu inginkan</p>
                    <div class="btn-group">

                        <select class="form-control" id="kategori" name="kategori">
                            <option selected value="">Kategori...</option>
                            <option value="Venue">Veneu</option>
                            <option value="Accessoris">Accessories</option>
                            <option value="Event Organizer">Event Organizer</option>
                            <option value="Cathering">Cathering</option>
                            <option value="Dress">Dress</option>
                            <option value="Fotografi">Fotografi</option>
                        </select>
                    </div>

                    <div class="btn-group">
                        <select class="form-control" id="lokasi" name="lokasi">
                            <option selected value="">Lokasi...</option>
                            <option value="Medan">Medan</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Bandung">Bandung</option>
                            <option value="Yogya">Yogyakarta</option>
                            <option value="Surabaya">Surabaya</option>
                            <option value="Bali">Bali</option>
                        </select>
                    </div>

                    <div class="btn-group">
                        <select class="form-control" id="harga" name="harga">
                            <option selected value="">Harga...</option>
                            <option value="1">Termurah</option>
                            <option value="2">Termahal</option>
                        </select>
                    </div>
                    <div class="btn-group">
                        <input type="submit" name="cari" class="btn btn-primary"></button>
                    </div>
                </div>

            </form>

            <br><br><br><br><br>

            <form>
                <div class="row">
                    <?php foreach ($vendor as $vendor) : ?>

                        <div class="col-lg-4 ">
                            <div class="product-item">
                                <figure>
                                    <img src="<?= base_url('assets/images/profile/' . $vendor['profil_vendor']); ?>" width="800" height="800" alt="Image" class="img-fluid">
                                </figure>
                                <div class="px-4">
                                    <h3><a href="<?= base_url('auth/vendorpage/' . $vendor['id_vendor']); ?>"><?= $vendor['nama_vendor']; ?></a></h3>
                                    <div class="mb-3">
                                        <span class="meta-icons mr-3"><a href="<?= base_url('auth/klik_rating/' . $vendor['id_vendor']); ?>" class="mr-2"><span class="icon-star text-warning"></span></a>
                                            <?php if ($this->db->get_where('rating', ['id_vendor' => $vendor['id_vendor']])->result_array()) { ?>
                                                <?php $this->db->select('SUM(nilai) as total'); ?>
                                                <?php $rate = $this->db->get_where('rating', ['id_vendor' => $vendor['id_vendor']])->row()->total /
                                                    $this->db->get_where('rating', ['id_vendor' => $vendor['id_vendor']])->num_rows();
                                                $rate = number_format($rate, 2);
                                                echo $rate; ?>
                                            <?php } else {
                                                echo 0;
                                            } ?></span>


                                        <span class="meta-icons wishlist"><a href="<?= base_url('auth/klik_wish/' . $vendor['id_vendor']); ?>" class="mr-2"><span class="icon-heart"></span></a>
                                            <?= $this->db->get_where('wishlist', ['id_vendor' => $vendor['id_vendor']])->num_rows(); ?></span>
                                    </div>
                                    <p class="mb-6" style="overflow:hidden; text-overflow:ellipsis;">Lokasi : <?= $vendor['lokasi_vendor']; ?></p>
                                    <p class="mb-6" style="overflow:hidden; text-overflow:ellipsis;">Kategori: <?= $vendor['kategori_vendor']; ?></p>
                                    <p class="mb-6" style="overflow:hidden; text-overflow:ellipsis;"><?= $vendor['deskripsi_vendor']; ?></p>
                                    <div>
                                        <a href="<?= base_url('auth/vendorpage'); ?><?= "/" . $vendor['id_vendor']; ?>" class="btn btn-black btn-outline-black ml-1 rounded-0">Lihat Vendor</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>
            </form>
        </div>
    </div>
    <?= $this->pagination->create_links(); ?>