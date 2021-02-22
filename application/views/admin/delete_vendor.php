<div class="container-fluid">
    <div class="card">
    <div class="card-header">
        Hapus Vendor
    </div>
    <div class="card-body">
        <h5 class="card-title">Apakah anda yakin?</h5>
        <p class="card-text">Tindakan ini akan menghapus Vendor dengan Nama Vendor "<?= $vendor['nama_vendor']; ?>" ?</p>
        <a href="<?= base_url('admin/vendor'); ?>" class="btn btn-dark">Batal</a>
        <a href="<?= base_url('admin/delete_vendor/'.$vendor['id_vendor']); ?>" class="btn btn-warning">Hapus</a>
    </div>
    </div>
</div>