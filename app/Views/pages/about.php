<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>


<div class="jumbotron2 animate__animated animate__fadeIn">
    <h1 class="display-4 heading2">Tentang Kami</h1>
    <p class="lead">Kami adalah tim yang berdedikasi untuk menyediakan informasi terpercaya kepada pengguna kami.</p>
    <div class="social-icons">
        <a href="#" class="btn btn-primary btn-lg mr-2 animate__animated animate__bounceIn"><i
                class="bi bi-facebook"></i></a>
        <a href="#" class="btn btn-primary btn-lg mr-2 animate__animated animate__bounceIn"><i
                class="bi bi-instagram"></i></a>
        <a href="#" class="btn btn-primary btn-lg animate__animated animate__bounceIn"><i class="bi bi-twitter"></i></a>
    </div>
</div>


<?= $this->endSection('content'); ?>