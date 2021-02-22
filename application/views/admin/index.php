           <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-download fa-sm text-dark-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body"> <a href="<?= base_url('admin/user');?>">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Users</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->db->get('user')->num_rows(); ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-3x"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body"> <a href="<?= base_url('admin/vendor');?>">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Vendors</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->db->get('vendor')->num_rows();?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-handshake fa-3x"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
               
                <!-- Card Body -->
               
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
          

              <!-- Project Card Example -->
              
                </div>
              </div>

              <!-- Color System -->
              

            </div>

            <div class="col-lg-6 mb-4">

              <!-- Illustrations -->
              
                </div>
              </div>

              <!-- Approach -->
              
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
