<div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

</div>
</div>

</header>
<br />
<br />
<br />
<br />

<div class="site-section" id="products-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-6 text-center">
                <h3 class="section-sub-title">Populer</h3>
                <h2 class="section-title mb-3">Rekomendasi</h2>
                <p>Rekomendasi untuk kamu yang ingin menikah dengan tampilan yang indah dan menawan</p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($vendor as $vendor) : ?>
                <div class="col-lg-4 ">
                    <div class="product-item">
                        <figure>
                            <img src="<?= base_url('assets/images/'. $vendor['profil_vendor']); ?>" width="800" height="800" alt="Image" class="img-fluid">
                        </figure>
                        <div class="px-4">
                            <h3><a href="#"><?= $vendor['nama_vendor']; ?></a></h3>
                            <div class="mb-3">
                                <span class="meta-icons mr-3"><a href="#" class="mr-2"><span class="icon-star text-warning"></span></a>0</span>
                                <span class="meta-icons wishlist"><a href="#" class="mr-2"><span class="icon-heart"></span></a>0</span>
                            </div>
                            <p class="mb-6" style="overflow:hidden; text-overflow:ellipsis;"><?= $vendor['deskripsi_vendor']; ?></p>
                            <div>
                                <a href="#" class="btn btn-black btn-outline-black ml-1 rounded-0">View Vendor</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?= $this->pagination->create_links(); ?>