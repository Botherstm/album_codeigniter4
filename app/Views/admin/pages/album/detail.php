<?= $this->extend('admin/layouts/main'); ?>

<?= $this->section('content'); ?>
<style>
.album-container {
    animation: fadeInUp 1s ease;
}

.album-image {
    width: 100%;
    max-width: 500px;
    height: auto;
    margin-bottom: 20px;
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
<div class="album-container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
            <h2 class="text-center">Album Detail</h2>
            <div class="text-center">
                <img class="album-image" src="<?= base_url('assets/image/'.$album['image']) ?>" alt="">
            </div>
            <h4>Name: <?= $album['name'] ?></h4>
            <p>Description: <?= $album['description'] ?></p>
            <div class="text-center">
                <a href="#" class="btn btn-success">
                    <i class="bi bi-eye"></i> View
                </a>
                <a href="<?= base_url('admin/pages/albums/edit/'.$album['id']) ?>" class="btn btn-outline-primary">
                    <i class="bi bi-pencil"></i> Edit
                </a>
                <a href="<?= base_url('admin/pages/albums/delete/'.$album['id']) ?>" class="btn btn-danger">
                    <i class="bi bi-trash"></i> Delete
                </a>
                <a href="/admin/pages/album" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>