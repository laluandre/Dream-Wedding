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
                        <h5 class="card-title" style="text-align: center;"><small><?= $this->session->flashdata('message'); ?></small><small><?= $this->session->flashdata('message_berhasil'); ?></small><?= $user['nama_user']; ?></h5><br>
                        <img src="<?= base_url('assets/images/profile/'. $user['profile']); ?>" height="150px" width="110px" style="padding-bottom:10%;">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <br><a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true">Profile</a>
                            <a class="nav-link" id="v-pills-lastseenvendor-tab" data-toggle="pill" href="#v-pills-lastseenvendor" role="tab" aria-controls="v-pills-lastseenvendor" aria-selected="false">Last Seen</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Edit Profile</a>
                            <a class="nav-link" id="v-pills-change-tab" data-toggle="pill" href="#v-pills-change-password" role="tab" aria-controls="v-pills-settings" aria-selected="false">Change Password</a>
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
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" id="name" value="<?= $user['nama_user']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $user['email_user']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Telephone</label>
                                        <input type="text" class="form-control" name="telephone" id="telephone" value="<?= $user['phone_user']; ?>">
                                    </div>
                                </fieldset>
                            </form>
                        </div>

                        &emsp;<div class="tab-pane fade" id="v-pills-lastseenvendor" role="tabpanel" aria-labelledby="v-pills-lastseenvendor-tab">
                            <div style="margin-top: -30px; margin-bottom:15px;">Terakhir Dilihat</div>
                            <div class="alert alert-light" role="alert">
                            <a href="<?= base_url('auth/vendorpage/'.$id_vendor);?>" 
                            class="alert-link"><?= $nama_vendor;?>
                            </a><br><?= date('d-m-Y h:i A', $date);?>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <?= form_open_multipart('profile/cek_update_profile'); ?>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama_user']; ?>">
                                </div>
                                <div class="form-group">
                                <fieldset disabled>
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?= $user['email_user']; ?>">
                                </fieldset disabled>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Telephone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="<?= $user['phone_user']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="image">Ubah Foto Profil</label>
                                    <div class="input-group">
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto" name="foto" aria-describedby="inputGroupFileAddon04">
                                    <label class="custom-file-label" for="inputGroupFile04">Pilih Foto</label>
                                </div> <br> 
                                <center>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </center>
                            </form>
                        </div> 
                    </div>

                        <div class="tab-pane fade" id="v-pills-change-password" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <form method="post" action="<?= base_url('profile/cek_change_password'); ?>">
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

                        <div class="tab-pane fade" id="v-logout-settings" role="tabpanel" aria-labelledby="v-pills-logout-tab"  data-target="sign-out">...</div>

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