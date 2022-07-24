<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#000000 ">
    <div class="container">
        <a class="navbar-brand" href="/home">Studio Karya</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto  ">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('home*') ? 'active' : '' }}  " href="/home">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ Request::is('karyas*') ? 'active' : '' }} " href="/karyas">Karya</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ Request::is('categories*') ? 'active' : '' }}" href="/categories">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('users*') ? 'active' : '' }}" href="/users">Seniman</a>
                </li>
            </ul>

            {{-- autentikasi --}}
            <ul class="navbar-nav ml-auto">
                @auth

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome {{ auth()->user()->nama }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-columns"></i> Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>

                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="bi bi-box-arrow-right"></i>Logout</button>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link  "><i class="bi bi-box-arrow-in-right">Login</i></a>
                    </li>

                @endauth
            </ul>


        </div>
    </div>
</nav>
