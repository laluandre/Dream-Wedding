<div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

</div>
</div>
</header><br><br><br><br>

<footer class="site-footer" style="background-color: #FAEBD7;">
<div class="modal fade" id="sign-out" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Sign Out</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are You Sure? </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form method="post" action="<?= base_url('auth/logout'); ?>">
        <button type="submit" class="btn btn-primary">Sign Out</button>
        </form>
      </div>
    </div>
  </div>
</div>

    <div class="container">
        <div class="row">
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<div class="card" style="width: 18rem;">
                <div class="card-body">
                    <center>
                    <?= $this->session->flashdata('message');?>
                        <h5 class="card-title" style="text-align: center;"><?= $user['nama_vendor']; ?></h5><br>
                        <img src="<?= base_url('assets/images/profile/'.$user['profil_vendor']); ?>" height="150px" width="110" style="padding-bottom:12%;">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <br><a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true">Profile</a>
                            <a class="nav-link" id="v-pills-edit-tab" data-toggle="pill" href="#v-pills-edit" role="tab" aria-controls="v-pills-settings" aria-selected="false">Edit Profile</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-change-password" role="tab" aria-controls="v-pills-settings" aria-selected="false">Change Password</a>
                            <a class="nav-link" id="v-pills-logout-tab" href="" role="tab" aria-controls="v-pills-logout" aria-selected="false" data-toggle="modal" data-target="#sign-out">Sign out</a>
                        </div>
                    </center>
                </div>
            </div>

            &emsp;<div class="card" style="width: 20rem;">
                <div class="card-body">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">&emsp;
                            <form>
                                <fieldset disabled>
                                    <div class="form-group">
                                        <label for="nama">Nama Vendor</label>
                                        <input type="text" class="form-control" id="nama" value="<?= $user['nama_vendor']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" value="<?= $user['email']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="location">Lokasi</label>
                                        <input type="text" class="form-control" id="location" value="<?= $user['lokasi_vendor']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Telephone</label>
                                        <input type="text" class="form-control" id="phone" value="<?= $user['telpon_vendor']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Kategori</label>
                                        <input type="text" class="form-control" id="category" value="<?= $user['kategori_vendor']; ?>">
                                    </div>
                                </fieldset>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="v-pills-change-password" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <form method="post" action="<?= base_url('profilev/cek_change_password'); ?>">
                                <div class="form-group">
                                    <label for="password0"><small><?= $this->session->flashdata('message'); ?></small>Old Password</label>
                                    <input type="password" class="form-control" id="password0" name="password0" placeholder="Password Sekarang" required>
                                </div>
                                <div class="form-group">
                                    <label for="password1">New Password</label>
                                    <input type="password" class="form-control" id="password1" name="password1" placeholder="Password Baru" required>
                                </div>
                                <div class="form-group">
                                    <label for="password2">Confirm Password</label>
                                    <input type="password" class="form-control" id="password2" name="password2" placeholder="Konfirmasi Password" required>
                                </div>
                                <center>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </center>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="v-pills-edit" role="tabpanel" aria-labelledby="v-pills-edit-tab">
                            <?= form_open_multipart('profilev/cek_update_profile'); ?>
                                <div class="form-group">
                                    <label for="nama">Nama Vendor</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama_vendor']; ?>">
                                </div>
                                <div class="form-group">
                                    <fieldset disabled>
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?= $user['email']; ?>">
                                    </fieldset>
                                </div>

                                <div class="form-group">
                                    <label for="phone">Telephone</label>
                                    <input type="text" class="form-control" name="phone" id="phone" value="<?= $user['telpon_vendor']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="location">Lokasi</label>
                                    <select class="form-control" id="location" name="lokasi" required>
                                    <option selected value="<?= $user['lokasi_vendor']; ?>"><?= $user['lokasi_vendor']; ?></option>
                                    <option value="Medan">Medan</option>
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Yogya">Yogya</option>
                                    <option value="Bandung">Bandung</option>
                                    <option value="Surabaya">Surabaya</option>
                                    <option value="Bali">Bali</option>
                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="category">Kategori</label>
                                    <select class="form-control" id="category" name="category" required>
                                    <option selected value="<?= $user['kategori_vendor']; ?>"><?= $user['kategori_vendor'];?></option>
                                    <option value="Accessoris">Accessoris</option>
                                    <option value="Cathering">Cathering</option>
                                    <option value="Dress">Dress</option>
                                    <option value="Event Organizer">Event Organizer</option>
                                    <option value="Fotografi">Fotografi</option>
                                    <option value="Venue">Venue</option>
                                </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="foto">Foto Profil</label>
                                    <input type="file" class="form-control" name="foto" id="foto">
                                </div>
                                
                                <br>
                                <center>
                                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                </center>
                            <?= form_close(); ?>
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