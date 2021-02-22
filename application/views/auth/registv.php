<div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

</div>
</div>
</header><br><br><br><br>
<footer class="site-footer" style="background-color: #FAEBD7;">
    <div class="container">
        &emsp;<div class="card" style="width: 60%; margin-left: 20%;">
            <div class="card-body">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">&emsp;
                        <form action="<?= base_url('auth/registvendor'); ?>" method="POST">
                            <div align="center" style="padding-bottom:50px;">
                                <img src="<?= base_url('assets/images/vendor.png'); ?>" height="110px" width="150px">
                            </div>
                            <?= $this->session->flashdata('message'); ?>
                            <div style="padding-bottom:10px;" class="form-group">
                                <input type="text" class="form-control" id="nama_vendor" name="nama_vendor" placeholder="Vendor's Name" required>
                            </div>
                            <div class="form-group" style="padding-bottom:10px;">
                                <input type="email" class="form-control" id="email_vendor" name="email_vendor" aria-describedby="emailHelp" placeholder="Email" required>
                            </div>
                            <div class="form-group" style="padding-bottom:10px;">
                                <input type="text" class="form-control" id="telp_vendor" name="telp_vendor" placeholder="No. Telephone" required>
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="lokasi" name="lokasi" required>
                                    <option selected>Lokasi...</option>
                                    <option value="Medan">Medan</option>
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Yogya">Yogya</option>
                                    <option value="Bandung">Bandung</option>
                                    <option value="Surabaya">Surabaya</option>
                                    <option value="Bali">Bali</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="category" name="category" required>
                                    <option selected>Category...</option>
                                    <option value="Accessoris">Accessoris</option>
                                    <option value="Cathering">Cathering</option>
                                    <option value="Dress">Dress</option>
                                    <option value="Event Organizer">Event Organizer</option>
                                    <option value="Fotografi">Fotografi</option>
                                    <option value="Venue">Venue</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="price" name="price" required>
                                    <option selected>Price...</option>
                                    <option value="1">3.000.000 - 5.000.000</option>
                                    <option value="2">5.000.000 - 8.000.000</option>
                                    <option value="3">8.000.000 - 12.000.000</option>
                                    <option value="3">12.000.000 - 15.000.000</option>
                                    <option value="4">15.000.000 - 25.000.000</option>
                                    <option value="5">25.000.000 or more</option>
                                </select>
                            </div>
                            
                            <div class="form-group" style="padding-bottom:10px; width=400px;">
                                <input type="password" class="form-control" id="password1" name="password1" placeholder="Password" required>
                            </div>

                            <div class="form-group" style="padding-bottom:10px;">
                                <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm Password" required>
                            </div>

                            <div class="form-group" style="padding-bottom:10px;">
                            <textarea rows="7" cols="68" class="form-control" id="deskripsi" name="deskripsi" placeholder="Description (Max. 100 words)" maxlength="100" required></textarea>
                            </div>

                            <center>
                                <button type="submit" class="btn btn-primary">Register Vendor</button>
                            </center>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </center>
    </div>
    </div>
    </div>
    </div>
</footer>