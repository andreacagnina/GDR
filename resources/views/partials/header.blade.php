<header>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark px-5" id="ftco-navbar">
                    <a class="navbar-brand d-flex align-items-center" href="{{ route('homepage') }}">
                        <h3>GCDR</h3>
                    </a>
                    <div class="collapse navbar-collapse d-flex justify-content-end align-items-center" id="ftco-nav">
                        <ul class="navbar-nav">
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
