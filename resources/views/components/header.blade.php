<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">

            <a href="{{ route('home') }}"><img src="{{ asset('assets') }}/img/logo0.png" alt=""
                    class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="{{ route('home') }}">Home</a></li>
                <li><a class="nav-link scrollto" href="{{ route('about') }}">About</a></li>
                <li><a class="nav-link scrollto" href="{{ route('skills') }}">skills</a></li>
                <li><a class="nav-link scrollto" href="{{ route('project') }}">project</a></li>
                <li><a class="nav-link scrollto" href="{{ route('pricing') }}">Pricing</a></li>
                <li><a class="nav-link scrollto" href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
