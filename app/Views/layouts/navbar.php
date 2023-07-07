<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">My Album</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php echo ($active == 'home') ? 'active' : ''; ?>">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item <?php echo ($active == 'about') ? 'active' : ''; ?>">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item <?php echo ($active == 'album') ? 'active' : ''; ?>">
                    <a class="nav-link" href="/album">Album</a>
                </li>
                </li>
                <li class="nav-item <?php echo ($active == 'contact') ? 'active' : ''; ?>">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                <li class="nav-item <?php echo ($active == 'admin') ? 'active' : ''; ?>">
                    <a class="nav-link" href="/admin">Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>