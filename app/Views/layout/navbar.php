<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?= $active == 'home' ? 'text-primary' : ''; ?>" href="/">Home</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link <?= $active == 'about' ? 'text-primary' : ''; ?>" href="/pages/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $active == 'contact' ? 'text-primary' : ''; ?>" href="/pages/contact">Contact</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link <?= $active == 'komik' ? 'text-primary' : ''; ?>" href="/komik">Komik</a>
            </li>

        </ul>
    </div>
</nav>