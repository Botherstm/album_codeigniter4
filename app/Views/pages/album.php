<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<section id="album">
    <div class="container">
        <h2 class="text-center mb-5 animate__animated animate__fadeInUp">Album Foto</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card animate__animated animate__fadeInLeft">
                    <img src="<?= base_url('assets/image/bersama.jpg') ?>" class="card-img-top" alt="Image 1">
                    <div class="card-body">
                        <h5 class="card-title">Foto 1</h5>
                        <p class="card-text">Deskripsi foto 1.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card animate__animated animate__fadeInUp">
                    <img src="<?= base_url('assets/image/jp.jpg') ?>" class="card-img-top" alt="Image 2">
                    <div class="card-body">
                        <h5 class="card-title">Foto 2</h5>
                        <p class="card-text">Deskripsi foto 2.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card animate__animated animate__fadeInRight">
                    <img src="<?= base_url('assets/image/ya.jpg') ?>" class="card-img-top" alt="Image 3">
                    <div class="card-body">
                        <h5 class="card-title">Foto 3</h5>
                        <p class="card-text">Deskripsi foto 3.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card animate__animated animate__fadeInRight">
                    <img src="<?= base_url('assets/image/ib.jpeg') ?>" class="card-img-top" alt="Image 3">
                    <div class="card-body">
                        <h5 class="card-title">Foto 3</h5>
                        <p class="card-text">Deskripsi foto 3.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card animate__animated animate__fadeInRight">
                    <img src="<?= base_url('assets/image/anak2.jpg') ?>" class="card-img-top" alt="Image 3">
                    <div class="card-body">
                        <h5 class="card-title">Foto 3</h5>
                        <p class="card-text">Deskripsi foto 3.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card animate__animated animate__fadeInRight">
                    <img src="<?= base_url('assets/image/anak.jpg') ?>" class="card-img-top" alt="Image 3">
                    <div class="card-body">
                        <h5 class="card-title">Foto 3</h5>
                        <p class="card-text">Deskripsi foto 3.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection('content'); ?>