<div class="container-fluid">
    <div class="card">
    <div class="card-header">
        Hapus User
    </div>
    <div class="card-body">
        <h5 class="card-title">Apakah anda yakin?</h5>
        <p class="card-text">Tindakan ini akan menghapus user dengan Username "<?= $user['nama_user']; ?>" ?</p>
        <a href="<?= base_url('admin/user'); ?>" class="btn btn-dark">Batal</a>
        <a href="<?= base_url('admin/delete_user/'.$user['id_user']); ?>" class="btn btn-warning">Hapus</a>
    </div>
    </div>
</div>