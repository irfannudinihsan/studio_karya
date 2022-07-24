<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">


    <div class="container-fluid ">

        <a class="navbar-brand " href=""></a>
        <a class="navbar-brand " href="/karyas">Studio Karya</a>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="nav-link px-3 bg-dark border-0">
                        Logout <span data-feather="log-out" class="align-text-bottom"></span></button>
                </form>
            </div>
        </div>
        <button class="navbar-toggler  d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    </div>


</header>
