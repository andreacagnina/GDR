<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-0">
                <nav class="navbar navbar-expand-md navbar-dark bg-dark px-5" id="ftco-navbar">
                    <a class="navbar-brand d-flex align-items-center" href="{{ route('homepage') }}">
                        <h3>GDR</h3>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#ftco-nav"
                        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse bg-dark" id="ftco-nav">
                        <ul class="navbar-nav d-flex align-items-center ms-md-auto">
                            <li class="nav-item active">
                                <a href="{{ route('homepage') }}"
                                    class="{{ Route::currentRouteName() === 'homepage' ? 'active' : '' }} nav-link">
                                    <h4>Home</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('characters.index') }}"
                                    class="{{ Route::currentRouteName() === 'characters.index' ? 'active' : '' }} nav-link">
                                    <h4>Characters</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('items') }}"
                                    class="{{ Route::currentRouteName() === 'items' ? 'active' : '' }} nav-link">
                                    <h4>Items</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('about-us') }}"
                                    class="{{ Route::currentRouteName() === 'about-us' ? 'active' : '' }} nav-link">
                                    <h4>AboutUs</h4>
                                </a>
                            </li>
                        </ul>
                    </div>

                </nav>
            </div>
        </div>
    </div>
</header>
