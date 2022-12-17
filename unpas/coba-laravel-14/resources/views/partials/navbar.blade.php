<nav class="navbar navbar-expand-lg navbar-dark bg-danger">

    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'Home' ? 'active' : '' }}" href="/">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'About' ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'Blog Posts' ? 'active' : '' }}" href="/posts">Blog Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'Categories' ? 'active' : '' }}" href="/categories">Categories</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="/login" class="nav-link">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
