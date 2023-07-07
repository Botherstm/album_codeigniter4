<?= $this->extend('admin/layouts/main'); ?>

<?= $this->section('content'); ?>
<style>
.table-container {
    animation: fadeInUp 1s ease;
}

.table>tbody>tr>* {
    vertical-align: middle;
}

@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(50px);
    }

    100% {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>



<div class="table-container">
    <!-- Alert success message -->
    <?php 
        if(session()->getFlashdata('message')) :?>
    <div class="alert alert-success" role="alert">
        <?php session()->getFlashdata('message') ?>
    </div>
    <?php endif;?>
    <div class="py-2 px-2">
        <a href="/admin/pages/album/add">
            <div class="btn btn-dark">Tambah Data</div>
        </a>
    </div>
    <?php if(!empty($albums)): ?>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Gambar</th>
                <th class="text-center">Alamat</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php foreach ($albums as $album) : ?>
            <tr class="text-center">
                <td><?= $i++; ?></td>
                <td><?= $album['name'] ?></td>
                <td><img src="<?= base_url('assets/image/'.$album['image']) ?>" width="200px" alt=""></td>
                <td><?= $album['description'] ?></td>
                <td>
                    <div class="btn-group">
                        <a href="/admin/pages/album/detail/<?= $album['name']; ?>"> <button type="button"
                                class="btn btn-outline-success">
                                <i class="bi bi-eye"></i>
                            </button></a>
                        <a href="/admin/pages/album/edit/<?= $album['name']; ?>"> <button type="button"
                                class="btn btn-outline-primary">
                                <i class="bi bi-pencil"></i>
                            </button></a>
                        <form id="deleteForm<?= $album['id']; ?>"
                            action="/admin/pages/album/delete/<?= $album['id']; ?>" method="post">
                            <?= csrf_field(); ?>
                            <button type="button" class="btn btn-outline-danger"
                                onclick="confirmDelete(<?= $album['id']; ?>)">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else : ?>
    <h3>belum ada data</h3>
    <?php endif ?>
</div>
<script>
function confirmDelete(albumId) {
    Swal.fire({
        title: 'Apa Kamu yakin?',
        text: 'Jika dihapus data tidak bisa di kembalikan.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc3545',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Delete',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('deleteForm' + albumId).submit();
        }
    });
}
</script>

<?= $this->endSection('content'); ?>