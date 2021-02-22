        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Users</h1>
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
          
          <h2>Halaman Daftar User</h2>
          <h3><small><?= $this->session->flashdata('message'); ?></small></h3>
          <table>
            <tr>
              <th>Email</th>
              <th>Username</th>
              <th>Phone</th>
              <th>Edit</th>
            </tr>
            <?php foreach ($user as $user) : ?>
            <tr>
              <td><?= $user['email_user']; ?></td>
              <td><?= $user['nama_user']; ?></td>
              <td><?= $user['phone_user']; ?></td>
              <td>
              <a class="badge badge-dark" href="<?= base_url('admin/edit_user/'. $user['id_user']); ?>">Edit</a>
              <a class="badge badge-warning" href="<?= base_url('admin/del_user/'. $user['id_user']);?>">Hapus</a>
              </td>
            </tr>
            
            <?php endforeach; ?>
          </table> <br>

          <?= $this->pagination->create_links(); ?>

          </body>
          </html>

      </div>
      <!-- End of Main Content -->
