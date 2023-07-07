<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<div class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="contact-form animate__animated animate__fadeIn">
                    <h3 class="text-center">Contact Us</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class=" btn-contact btn-primary btn-block">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>