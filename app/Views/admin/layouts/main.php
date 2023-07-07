<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard | <?= $title; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel=" stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.min.css">


    <style>
    .admin-dashboard {
        display: flex;
        min-height: 100vh;
    }

    .admin-sidebar {
        width: 250px;
        background-color: #343a40;
        color: #fff;
        padding: 20px;
    }

    .admin-sidebar h3 {
        color: #fff;
        font-size: 24px;
        margin-bottom: 20px;
    }

    .admin-sidebar .nav-link {
        color: #fff;
        font-size: 18px;
        padding: 10px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .admin-sidebar .nav-link:hover {
        background-color: #5a5e64;
    }

    .admin-sidebar .nav-link.active {
        background-color: #5a5e64;
        font-weight: bold;
    }

    .admin-main {
        flex-grow: 1;
        padding: 20px;
    }

    .admin-navbar {
        background-color: #6c757d;
        padding: 10px;
    }

    .admin-navbar .navbar-brand {
        font-weight: bold;
        color: #fff;
    }

    .admin-navbar .navbar-nav {
        margin-left: auto;
    }

    .admin-navbar .navbar-nav .nav-item {
        position: relative;
    }

    .admin-navbar .navbar-nav .nav-item .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        min-width: 10rem;
        padding: 0.5rem 0;
        margin: 0.125rem 0 0;
        font-size: 1rem;
        color: #212529;
        text-align: left;
        background-color: #fff;
        border: 1px solid rgba(0, 0, 0, 0.15);
        border-radius: 0.25rem;
    }

    .admin-navbar .navbar-nav .nav-item:hover .dropdown-menu {
        display: block;
    }

    .admin-navbar .navbar-nav .nav-item .dropdown-menu a {
        display: block;
        padding: 0.5rem 1rem;
        clear: both;
        font-weight: 400;
        color: #212529;
        text-align: inherit;
        white-space: nowrap;
        background-color: transparent;
        border: 0;
    }

    @media (max-width: 767px) {
        .admin-dashboard {
            flex-direction: column;
        }

        .admin-sidebar {
            width: 100%;
            order: 2;
            padding: 20px 0;
            text-align: center;
        }

        .admin-main {
            order: 1;
            padding: 0;
        }
    }
    </style>
</head>

<body>

    <div class="admin-dashboard">
        <?= $this->include('admin/layouts/sidebar'); ?>
        <div class="admin-main">
            <?= $this->include('admin/layouts/navbar'); ?>
            <div class="admin-content animate__animated animate__fadeInUp mx-4 my-4">

                <!-- Tambahkan konten admin -->
                <?= $this->renderSection('content'); ?>
            </div>
        </div>
    </div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <!-- Tautan JavaScript Swal -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.all.min.js"></script>

    <script>
    new WOW().init();
    </script>
</body>

</html>