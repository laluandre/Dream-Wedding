        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Vendor</h1>
          </div>
              <!-- Collapsable Card Example -->
              
          <!DOCTYPE html>
          <html>
          <head>
          <style>
          table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
          }
          
          td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
          }
          
          tr:nth-child(even) {
            background-color: #dddddd;
          }
          </style>
          </head>
          <body>

<form method="POST" action="<?= base_url('admin/update_vendor/'.$id); ?>">
<?= $this->session->flashdata('message_berhasil'); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $email;?>" disabled>
  </div>
  <div class="form-group">
    <label for="nama">Nama Vendor</label>
    <input type="text" class="form-control" id="nama" name="nama" value="<?= $nama;?>">
  </div>
  <div class="form-group">
    <label for="phone">Phone Vendor</label>
    <input type="Phone" class="form-control" id="phone" name="phone" value="<?= $phone;?>">
  </div>
  <div class="form-group">
    <label for="password1">Change Password</label>
    <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
    <small id="emailHelp" class="form-text text-muted">* Opsional</small>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Perbarui</button>
</form>

</body>
</html>
</div>