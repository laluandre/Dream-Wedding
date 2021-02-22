
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Vendor</h1>
          </div>

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

<h2>Halaman Daftar Vendor</h2>
<h3><small><?= $this->session->flashdata('message'); ?></small></h3>

<table>
  <tr>
    <th>Email</th>
    <th>Nama Vendor</th>
    <th>Phone</th>
    <th>Lokasi</th>
    <th>Kategori</th>
    <th>Edit</th>
  </tr>
  <?php foreach ($vendor as $vendor) : ?>
  <tr>
    <td><?= $vendor['email']; ?></td>
    <td><?= $vendor['nama_vendor']; ?></td>
    <td><?= $vendor['telpon_vendor']; ?></td>
    <td><?= $vendor['lokasi_vendor']; ?></td>
    <td><?= $vendor['kategori_vendor']; ?></td>
    <td>
      <a class="badge badge-dark" href="<?= base_url('admin/edit_vendor/'.$vendor['id_vendor']); ?>">Edit</a>
      <a class="badge badge-warning" href="<?= base_url('admin/del_vendor/'.$vendor['id_vendor']); ?>">Hapus</a>
    </td>
  </tr>
  <?php endforeach; ?>
  
</table>
<br>
<?= $this->pagination->create_links(); ?>
</body>

                     
    </div>
      
      
