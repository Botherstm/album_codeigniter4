<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Album <?= $title; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
    /* Menambahkan sedikit CSS khusus untuk tampilan home */
    .jumbotron {
        background-image: url('<?= base_url('assets/image/bersama2.jpeg') ?>');
        background-size: cover;
        color: #fff;
        text-align: center;
        padding: 200px 0;
        margin-bottom: 0;
    }

    .heading {
        font-size: 48px;
        margin-bottom: 40px;
    }

    .btn {
        padding: 10px 20px;
        font-size: 24px;
        margin-top: 20px;
    }

    .album {
        padding: 40px 0;
    }

    .album .card {
        width: 300px;
        margin-bottom: 20px;
    }

    .navbar {
        background-color: #f8f9fa;
    }

    .navbar-brand {
        font-size: 24px;
        font-weight: bold;
    }

    .navbar-nav .nav-link {
        font-size: 18px;
    }

    .jumbotron2 {
        background-color: #f8f9fa;
        color: #343a40;
        text-align: center;
        padding: 200px 0;
        margin-bottom: 0;
    }

    .heading2 {
        font-size: 48px;
        margin-bottom: 40px;
    }

    .social-icons {
        font-size: 30px;
        margin: 10px;
    }

    /* contact css */

    .contact-section {
        padding: 100px 0;
        background-color: #f8f9fa;
    }

    .contact-form {
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-control {
        border-radius: 0;
    }

    .btn-contact {
        border-radius: 0;
        padding: 10px 20px;
        font-size: 18px;
    }
    </style>
</head>

<body>

    <?= $this->include('layouts/navbar'); ?>

    <?= $this->renderSection('content'); ?>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
    <script>
    new WOW().init();
    </script>
</body>

</html>