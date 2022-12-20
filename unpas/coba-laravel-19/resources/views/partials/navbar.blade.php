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
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{auth()->user()->name}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-sidebar-inset"></i>My Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button class="dropdown-item"><i class="bi bi-box-arrow-right">Logout</i></button>
                                </form>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right">Logout</i></a></li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'login' ? 'active' : '' }}" href="/login">
                            <i class="bi bi-box-arrow-in-right"></i>Login
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
