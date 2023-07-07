<?= $this->extend('admin/layouts/main'); ?>

<?= $this->section('content'); ?>
<style>
.album-container {
    animation: fadeInUp 1s ease;
}

.album-form {
    max-width: 500px;
    margin: 0 auto;
}

.album-image-preview {
    max-width: 300px;
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
            <h2 class="text-center">Update Album</h2>
            <form class="album-form" method="POST" action="/admin/pages/album/update/<?= $album['id']; ?>"
                enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control <?= ($validation->hasError('name'))?'is-invalid':''; ?>"
                        id="name" name="name" value="<?= $album['name'] ?>">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="hidden" name="oldImage" value="<?php $album['image'] ?>">
                    <input type="file" class="form-control <?= ($validation->hasError('image'))?'is-invalid':''; ?>"
                        id="image" name="image" onchange="previewImage(event)">
                    <?php if (!empty($album['image'])): ?>
                    <img id="imagePreview" class="album-image-preview"
                        src="<?= base_url('assets/image/'.$album['image']) ?>" alt="Image Preview">
                    <?php else: ?>
                    <img id="imagePreview" class="album-image-preview" style="display: none;"
                        src="<?= base_url('assets/images/placeholder.jpg') ?>" alt="Image Preview">
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control <?= ($validation->hasError('description'))?'is-invalid':''; ?>"
                        id="description" name="description"><?= $album['description'] ?></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function() {
        var output = document.getElementById('imagePreview');
        output.style.display = 'block';
        output.src = reader.result;
    };
    if (event.target.files && event.target.files[0]) {
        reader.readAsDataURL(event.target.files[0]);
    } else {
        var output = document.getElementById('imagePreview');
        output.style.display = 'none';
    }
}
</script>

<?= $this->endSection('content'); ?>